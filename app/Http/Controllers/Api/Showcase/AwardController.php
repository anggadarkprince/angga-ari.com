<?php

namespace App\Http\Controllers\Api\Showcase;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAward;
use App\Models\Award;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    /**
     * Display a listing of the award.
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
     * Store a newly created award in storage.
     *
     * @param StoreAward $request
     * @return JsonResponse
     */
    public function store(StoreAward $request)
    {
        $award = $request->user()->awards()->create($request->validated());

        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $award
        ]);
    }

    /**
     * Display the specified award.
     *
     * @param Award $award
     * @return JsonResponse
     */
    public function show(Award $award)
    {
        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $award
        ]);
    }

    /**
     * Update the specified award in storage.
     *
     * @param StoreAward $request
     * @param Award $award
     * @return JsonResponse
     */
    public function update(StoreAward $request, Award $award)
    {
        $award->fill($request->validated())->save();

        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $award
        ]);
    }

    /**
     * Remove the specified award from storage.
     *
     * @param Award $award
     * @return JsonResponse
     */
    public function destroy(Award $award)
    {
        $award->delete();

        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $award
        ]);
    }
}
