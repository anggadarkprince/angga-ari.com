<?php

namespace App\Http\Controllers\Blog;

use App\Http\Requests\StorePost;
use App\Models\Post;
use App\Models\Slugger;
use App\Models\Tagger;
use App\Models\Taxonomy;
use App\Models\Uploader;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the post.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = $request->user()->posts()->latest()->paginate(10);

        return view('blog.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new post.
     *
     * @param Request $request
     * @param Taxonomy $taxonomy
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Taxonomy $taxonomy)
    {
        $categories = $taxonomy->categories($request->user()->id, Post::class);

        return view('blog.post.create', compact('categories'));
    }

    /**
     * Set upload and modify request data.
     *
     * @param $request
     * @return mixed
     * @throws \Exception
     */
    private function manageRequestUpload($request)
    {
        $data = $request->all();

        if(empty($request->get('cover_temp'))) {
            unset($data['cover']);
        } else {
            $uploader = new Uploader();
            $path = get_period_path('posts', get_unique_name());
            $results = $uploader->moveFromTemp($request->get('cover_temp'), [
                ['destination' => $path, 'width' => 1400],
                ['destination' => get_small_version($path, '_medium'), 'width' => 750],
                ['destination' => get_small_version($path), 'width' => 350]
            ]);

            if(!empty($results)) {
                $data['cover'] = $path;
            }
        }
        unset($data['cover_temp']);

        return $data;
    }

    /**
     * Store a newly created post in storage.
     *
     * @param StorePost $request
     * @param Slugger $slugger
     * @param Tagger $tagger
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function store(StorePost $request, Slugger $slugger, Tagger $tagger)
    {
        $user = $request->user();

        $request->request->add([
            'slug' => $slugger->createSafeSlug(Post::class, $request->get('slug')),
            'published_at' => $request->get('status', 'draft') == 'published' ? now() : null
        ]);

        $data = $this->manageRequestUpload($request);

        try {
            DB::transaction(function () use ($user, $tagger, $data) {
                $post = new Post($data);
                $user->portfolios()->save(new Post($data));
                $tagger->tagging($post, $data['tags'], Tagger::TAXONOMY_TAG);
                $tagger->tagging($post, $data['category'], Tagger::TAXONOMY_CATEGORY, $user->id, true);
            }, 5);
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors([
                'message' => __('Create :label failed, try again later ' . $e->getMessage(), ['label' => 'post'])
            ]);
        }

        return redirect()->route('blog.post')->with([
            'status' => 'success',
            'message' => __('Data :label successfully created', ['label' => 'post'])
        ]);
    }

    /**
     * Display the specified post.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('blog.article', compact('post'));
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param Request $request
     * @param Post $post
     * @param Taxonomy $taxonomy
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request, Post $post, Taxonomy $taxonomy)
    {
        $categories = $taxonomy->categories($request->user()->id, Post::class);

        return view('blog.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified post in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Post $post
     * @param Slugger $slugger
     * @param Tagger $tagger
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function update(Request $request, Post $post, Slugger $slugger, Tagger $tagger)
    {
        $request->request->add([
            'slug' => $slugger->createSafeSlug(Post::class, $request->get('slug'), $post->id)
        ]);

        $data = $this->manageRequestUpload($request);

        try {
            DB::transaction(function () use ($data, $post, $tagger) {
                $post->update($data);
                $tagger->tagging($post, $data['tags'], Tagger::TAXONOMY_TAG);
                $tagger->tagging($post, $data['category'], Tagger::TAXONOMY_CATEGORY, $post->user->id, true);
            }, 5);
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors([
                'message' => __('Update :label failed, try again later ' . $e->getMessage(), ['label' => 'post'])
            ]);
        }

        return redirect()->route('blog.post')->with([
            'status' => 'success',
            'message' => __('Data :label successfully updated', ['label' => 'post'])
        ]);
    }

    /**
     * Remove the specified post from storage.
     *
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * @throws \Exception
     */
    public function destroy(Post $post)
    {
        $this->authorize('destroy', $post);

        if ($post->forceDelete()) {
            return redirect()->back()->with([
                'status' => 'warning',
                'message' => __('Data :label successfully deleted', ['label' => 'post'])
            ]);
        }

        return redirect()->back()->withErrors([
            'message' => __('Delete :label failed, try again later', ['label' => 'post'])
        ]);
    }
}
