<?php

namespace App\Http\Controllers\Showcase;

use App\Http\Requests\StorePortfolio;
use App\Portfolio;
use App\Slugger;
use App\Tagger;
use App\Uploader;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Auth::user()->portfolios()->latest()->paginate(12);

        return view('showcase.portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('showcase.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePortfolio $request
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function store(StorePortfolio $request)
    {
        $upload = new Uploader();

        $destination = get_period_path('portfolios');

        // upload cover
        $largePath = $destination . get_unique_name('cover');
        $smallPath = get_small_version($largePath);
        $upload->upload($request->get('cover_base64'), [
            ['destination' => $largePath, 'width' => 1200, 'height' => 720, 'storage' => 'public'],
            ['destination' => $smallPath, 'width' => 400, 'height' => 240, 'storage' => 'public']
        ]);

        // modify input value
        $slugger = new Slugger();
        $request->request->add([
            'slug' => $slugger->createSafeSlug(Portfolio::class, $request->get('title')),
            'cover' => $largePath,
            'date' => $request->get('year') . '-' . $request->get('month') . '-01'
        ]);

        // upload screenshots
        $screenshots = [];
        foreach ($request->get('screenshots_base64', []) as $screenshot) {
            if (!empty($screenshot)) {
                $largePath = $destination . get_unique_name('screenshot');
                $smallPath = get_small_version($largePath);
                $results = $upload->moveFromTemp($screenshot, [
                    ['destination' => $largePath, 'width' => 800, 'height' => 500],
                    ['destination' => $smallPath, 'width' => 400, 'height' => 250]
                ]);

                if (!empty($results)) {
                    $screenshots[] = $largePath;
                }
            }
        }

        try {
            DB::transaction(function () use ($request, $screenshots) {
                $user = User::find($request->user()->id);

                $portfolio = new Portfolio($request->except(['keywords', 'year', 'month']));
                $user->portfolios()->save($portfolio);

                $tagger = new Tagger();
                $tagger->tagging($portfolio, $request->get('keywords', []));

                foreach ($screenshots as $path) {
                    $absolutePath = storage_path('app/public/' . $path);
                    if (File::exists($absolutePath)) {
                        $portfolio->screenshots()->create([
                            'user_id' => $user->id,
                            'path' => $path,
                            'file_name' => File::name($absolutePath) . '.' . File::extension($absolutePath),
                            'size' => File::size($absolutePath),
                            'mime' => File::mimeType($absolutePath),
                        ]);
                    }
                }
            }, 5);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors([
                'message' => __('Create :label failed, try again later ', ['label' => 'portfolio'])
            ])->withInput();
        }

        return redirect()->route('showcase.portfolio')->with([
            'status' => 'success',
            'message' => __('Data :label successfully created', ['label' => 'portfolio'])
        ]);
    }

    /**
     * Upload data to storage.
     *
     * @param Request $request
     * @param Uploader $uploader
     * @return array|void
     */
    public function upload(Request $request, Uploader $uploader)
    {
        if ($request->ajax()) {
            $imageBase64 = $request->get('image_base64');
            return $uploader->upload($imageBase64);
        }
        abort(400, 'Ajax request only');
    }

    /**
     * Delete temp upload.
     *
     * @param Request $request
     * @return array
     */
    public function deleteUpload(Request $request)
    {
        if ($request->ajax()) {
            $tempFile = $request->get('temp_name');
            if (Storage::disk('local')->exists($tempFile)) {
                return [
                    'status' => Storage::delete($tempFile)
                ];
            }
            return ['status' => 'false', 'message' => __('File does not exist')];
        }
        return abort(400, 'Ajax request only');
    }

    /**
     * Display the specified resource.
     *
     * @param Portfolio $portfolio
     * @return void
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Portfolio $portfolio
     * @return void
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Portfolio $portfolio
     * @return void
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Portfolio $portfolio
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException|\Exception
     */
    public function destroy(Portfolio $portfolio)
    {
        $this->authorize('destroy', $portfolio);

        if ($portfolio->delete()) {
            return redirect()->back()->with([
                'status' => 'warning',
                'message' => __('Data :label successfully deleted', ['label' => 'portfolio'])
            ]);
        }

        return redirect()->back()->withErrors([
            'message' => __('Delete :label failed, try again later', ['label' => 'portfolio'])
        ]);
    }
}
