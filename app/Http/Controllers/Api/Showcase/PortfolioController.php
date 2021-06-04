<?php

namespace App\Http\Controllers\Api\Showcase;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePortfolio;
use App\Models\Portfolio;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
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
            'data' => $request->user()->awards
        ]);
    }

    /**
     * Store a newly created portfolio in storage.
     *
     * @param StorePortfolio $request
     * @return JsonResponse
     */
    public function store(StorePortfolio $request)
    {
        $portfolio = $request->user()->portfolios()->create($request->validated());

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
     * @return JsonResponse
     */
    public function update(StorePortfolio $request, Portfolio $portfolio)
    {
        $portfolio->fill($request->validated())->save();

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
        $portfolio->delete();

        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $portfolio
        ]);
    }
}
