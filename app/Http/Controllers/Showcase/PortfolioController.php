<?php

namespace App\Http\Controllers\Showcase;

use App\Http\Requests\StorePortfolio;
use App\Portfolio;
use App\Uploader;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        return view('showcase.portfolio');
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
     */
    public function store(StorePortfolio $request)
    {
        $upload = new Uploader();

        $destination = get_period_path('portfolios');

        // upload cover
        $original = get_unique_name('cover', 'original', 'jpg');
        $small = get_unique_name('cover', 'small', 'jpg');
        $upload->uploadImage($request->get('cover_base64'), $destination, [
            ['filename' => $original, 'width' => 1200, 'height' => 720],
            ['filename' => $small, 'width' => 400, 'height' => 240]
        ]);

        // upload screenshots
        foreach ($request->get('screenshots_base64', []) as $screenshot) {
            if (!empty($screenshot)) {
                $original = get_unique_name('screenshot', 'original', 'jpg');
                $small = get_unique_name('screenshot', 'small', 'jpg');
                $upload->moveImageFromTemp($screenshot, $destination, [
                    ['filename' => $original, 'width' => 800, 'height' => 500],
                    ['filename' => $small, 'width' => 400, 'height' => 250]
                ]);
            }
        }

        // modify input value
        $request->request->add([
            'slug' => str_slug($request->get('title')),
            'cover' => $destination . $original,
            'date' => $request->get('year') . '-' . $request->get('month') . '-01'
        ]);

        $portfolio = new Portfolio($request->except(['keywords', 'year', 'month']));

        if (Auth::user()->portfolios()->save($portfolio)) {
            return redirect()->route('showcase.portfolio')->with([
                'status' => 'success',
                'message' => __('Data :label successfully created', ['label' => 'portfolio'])
            ]);
        }

        return redirect()->back()->withErrors([
            'message' => __('Update :label failed, try again later', ['label' => 'portfolio'])
        ]);
    }

    /**
     * Upload data to storage.
     *
     * @param Request $request
     * @return array|void
     */
    public function upload(Request $request)
    {
        if ($request->ajax()) {
            $imageBase64 = $request->get('image_base64');
            $upload = new Uploader();
            return $upload->uploadImage($imageBase64, '_temp/', ['storage' => 'local']);
        }
        return abort(400, 'Ajax request only');
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
     * @throws \Illuminate\Auth\Access\AuthorizationException
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
