<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a post summary and report analytic.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [
            'views' => $request->user()->posts()->sum('views'),
            'comments' => $request->user()->posts()->sum('comments'),
        ];
        return view('blog.analytic.index', $data);
    }
}
