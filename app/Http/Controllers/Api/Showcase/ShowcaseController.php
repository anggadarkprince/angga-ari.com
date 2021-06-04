<?php

namespace App\Http\Controllers\Api\Showcase;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowcaseController extends Controller
{
    public function __invoke(Request $request)
    {
        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => User::with(['awards', 'educations', 'experiences', 'portfolios', 'skills'])->find(Auth::id())
        ]);
    }
}
