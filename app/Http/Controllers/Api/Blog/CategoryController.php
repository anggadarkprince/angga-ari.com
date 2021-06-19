<?php

namespace App\Http\Controllers\Api\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaxonomy;
use App\Models\Post;
use App\Models\Taxonomy;
use App\Services\Slugger;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CategoryController extends Controller
{
    /**
     * CategoryController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Taxonomy::class);
    }

    /**
     * Display a listing of the category.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        $categories = $request->user()->taxonomies()->category(Post::class)->get();

        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $categories
        ]);
    }

    /**
     * Store a newly created category in storage.
     *
     * @param StoreTaxonomy $request
     * @return JsonResponse
     * @throws Exception
     */
    public function store(StoreTaxonomy $request)
    {
        $slug = (new Slugger())
            ->setUserId($request->user()->id)
            ->createSafeSlug(Taxonomy::class, $request->get('term'));

        $request->merge([
            'slug' => $slug,
            'type' => Taxonomy::TYPE_CATEGORY,
            'category' => Post::class,
        ]);

        $category = $request->user()->taxonomies()->create($request->all());

        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $category
        ]);
    }

    /**
     * Display the specified category.
     *
     * @param Taxonomy $taxonomy
     * @return JsonResponse
     */
    public function show(Taxonomy $taxonomy)
    {
        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $taxonomy
        ]);
    }

    /**
     * Update the specified category in storage.
     *
     * @param StoreTaxonomy $request
     * @param Taxonomy $taxonomy
     * @return JsonResponse
     */
    public function update(StoreTaxonomy $request, Taxonomy $taxonomy)
    {
        $taxonomy->fill($request->validated())->save();

        return Response::json([
            'status' => 'OK',
            'code' => 200,
            'data' => $taxonomy
        ]);
    }

    /**
     * Remove the specified category from storage.
     *
     * @param Taxonomy $taxonomy
     * @return JsonResponse
     */
    public function destroy(Taxonomy $taxonomy)
    {
        $taxonomy->delete();

        return Response::json([
            'status' => 'OK',
            'code' => 200,
            'data' => $taxonomy
        ]);
    }
}
