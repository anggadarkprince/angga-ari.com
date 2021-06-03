<?php

namespace App\Http\Controllers;

use App\Models\Taxonomy;
use Illuminate\Http\Request;

class TaxonomyController extends Controller
{
    public function search(Request $request)
    {
        return Taxonomy::where('term', 'like', '%' . $request->get('q') . '%')->limit(10)->get();
    }
}
