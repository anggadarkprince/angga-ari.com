<?php

namespace App\Http\Controllers\Api\Showcase;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePortfolio;
use App\Models\Portfolio;
use App\Models\Taxonomy;
use App\Services\Slugger;
use App\Services\Tagger;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * PortfolioController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Portfolio::class);
    }

    /**
     * Display a listing of the portfolio.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $request->user()->portfolios
        ]);
    }

    /**
     * Store a newly created portfolio in storage.
     *
     * @param StorePortfolio $request
     * @param Slugger $slugger
     * @return JsonResponse
     * @throws Exception
     */
    public function store(StorePortfolio $request, Slugger $slugger)
    {
        $portfolio = DB::transaction(function() use ($request, $slugger) {
            $data = $request->validated();

            $data['date'] = $data['year'] . '-' . $data['month'] . '-1';
            $data['slug'] = $slugger->createSafeSlug(Portfolio::class, $data['title']);
            $data['cover'] = $request->file('cover')->store(get_period_path('portfolios/cover'), ['disk' => 'public']);

            $portfolio = $request->user()->portfolios()->create($data);

            $tags = Collection::make(explode(",", $data['tags']));
            $tagIds = $tags->map(function($tag) use ($request, $slugger) {
                $taxonomy = Taxonomy::firstOrCreate([
                    'slug' => Str::slug($tag),
                    'term' => $tag,
                    'type' => Tagger::TAXONOMY_TAG,
                ]);
                return $taxonomy->id;
            });

            $portfolio->tags()->attach($tagIds);

            return $portfolio;
        });

        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $portfolio
        ]);
    }

    /**
     * Display the specified portfolio.
     *
     * @param Portfolio $portfolio
     * @return JsonResponse
     */
    public function show(Portfolio $portfolio)
    {
        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $portfolio
        ]);
    }

    /**
     * Update the specified portfolio in storage.
     *
     * @param StorePortfolio $request
     * @param Portfolio $portfolio
     * @param Tagger $tagger
     * @return JsonResponse
     */
    public function update(StorePortfolio $request, Portfolio $portfolio, Tagger $tagger)
    {
        $oldCover = $portfolio->cover;

        DB::transaction(function() use ($request, $portfolio, $tagger) {
            $data = $request->validated();

            $data['date'] = $data['year'] . '-' . $data['month'] . '-1';

            $fileCover = $request->file('cover');
            if ($fileCover->isValid()) {
                $data['cover'] = $fileCover->store(get_period_path('portfolios/cover'), ['disk' => 'public']);
            }

            $portfolio->fill($data)->save();

            $tagger->tagging($portfolio, $request->get('tags', []));
        });

        if (Storage::disk('public')->exists($oldCover)) {
            Storage::delete($oldCover);
        }

        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $portfolio
        ]);
    }

    /**
     * Remove the specified portfolio from storage.
     *
     * @param Portfolio $portfolio
     * @return JsonResponse
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->forceDelete();

        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $portfolio
        ]);
    }
}
