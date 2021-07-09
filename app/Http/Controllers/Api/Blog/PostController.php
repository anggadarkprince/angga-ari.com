<?php

namespace App\Http\Controllers\Api\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\PostRequest;
use App\Http\Resources\Posts\PostCollection;
use App\Http\Resources\Posts\PostResource;
use App\Models\Post;
use App\Services\Tagger;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * PostController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Post::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return PostCollection
     */
    public function index(Request $request)
    {
        $posts = $request->user()->posts()->latest()->paginate(10);

        return new PostCollection($posts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PostRequest $request
     * @param Tagger $tagger
     * @return JsonResponse|PostResource
     * @throws Exception
     */
    public function store(PostRequest $request, Tagger $tagger)
    {
        try {
            return DB::transaction(function () use ($request, $tagger) {
                $data = $request->validated();
                $data['published_at'] = $request->post('status', 'draft') == 'published' ? now() : null;

                $post = $request->user()->posts()->create($data);
                $tagger->tagging($post, $data['tags'], Tagger::TAXONOMY_TAG);
                $tagger->tagging($post, $data['category'], Tagger::TAXONOMY_CATEGORY, $request->user()->id, true);

                return new PostResource($post);
            });
        } catch (Exception $e) {
            return response()->json([
                'status' => 'Error',
                'code' => 500,
                'message' => $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return PostResource
     */
    public function show(Post $post)
    {
        return new PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PostRequest $request
     * @param Post $post
     * @param Tagger $tagger
     * @return PostResource|JsonResponse
     */
    public function update(PostRequest $request, Post $post, Tagger $tagger)
    {
        try {
            DB::transaction(function () use ($request, $post, $tagger) {
                $data = $request->validated();
                $data['published_at'] = $request->post('status', 'draft') == 'published' ? now() : null;

                $post->fill($data)->save();
                $tagger->tagging($post, $data['tags'], Tagger::TAXONOMY_TAG);
                $tagger->tagging($post, $data['category'], Tagger::TAXONOMY_CATEGORY, $request->user()->id, true);
            });
        } catch (Exception $e) {
            return response()->json([
                'status' => 'Error',
                'code' => 500,
                'message' => $e->getMessage()
            ]);
        }
        return new PostResource($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return PostResource
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return new PostResource($post);
    }
}
