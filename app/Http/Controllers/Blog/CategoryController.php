<?php

namespace App\Http\Controllers\Blog;

use App\Http\Requests\StoreTaxonomy;
use App\Post;
use App\Slugger;
use App\Taxonomy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Taxonomy::where('user_id', $request->user()->id)
            ->orWhere('slug', 'uncategories')
            ->category(Post::class)
            ->get();

        return view('blog.category.index', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTaxonomy $request
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function store(StoreTaxonomy $request)
    {
        $slugger = new Slugger();
        $slug = $slugger->createSafeSlug(Taxonomy::class, $request->get('term'));

        $request->request->add([
            'slug' => $slug,
            'type' => 'category',
            'category' => Post::class
        ]);
        $taxonomy = new Taxonomy($request->all());

        if ($request->user()->taxonomies()->save($taxonomy)) {
            return redirect()->back()->with([
                'status' => 'success',
                'message' => __('Data :label successfully created', ['label' => __('taxonomy')])
            ]);
        }

        return redirect()->back()->withErrors([
            'message' => __('Update :label failed, try again later', ['label' => __('taxonomy')])
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param Taxonomy $taxonomy
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Taxonomy $taxonomy)
    {
        if ($request->ajax()) {
            return $taxonomy;
        }

        return abort(400, 'Ajax request only');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreTaxonomy $request
     * @param Taxonomy $taxonomy
     * @return void
     */
    public function update(StoreTaxonomy $request, Taxonomy $taxonomy)
    {
        if ($taxonomy->update($request->validated())) {
            return redirect()->back()->with([
                'status' => 'success',
                'message' => __('Data :label successfully updated', ['label' => __('taxonomy')])
            ]);
        }

        return redirect()->back()->withErrors([
            'message' => __('Update :label failed, try again later', ['label' => __('taxonomy')])
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Taxonomy $taxonomy
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Taxonomy $taxonomy)
    {
        $this->authorize('destroy', $taxonomy);

        if ($taxonomy->delete()) {
            return redirect()->back()->with([
                'status' => 'warning',
                'message' => __('Data :label successfully deleted', ['label' => __('taxonomy')])
            ]);
        }

        return redirect()->back()->withErrors([
            'message' => __('Delete :label failed, try again later', ['label' => __('taxonomy')])
        ]);
    }
}
