<?php

namespace App\Http\Controllers\Blog;

use App\Taxonomy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaxonomyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ids = [];
        $request->user()->posts->each(function ($post) use (&$ids) {
            $post->tags()->where('type', 'tag')->get()->each(function($tag) use (&$ids) {
                $ids[] = $tag->id;
            });
        });

        $tags = Taxonomy::whereIn('id', array_unique($ids))->get();

        return view('blog.taxonomy.index', compact('tags'));
    }
}
