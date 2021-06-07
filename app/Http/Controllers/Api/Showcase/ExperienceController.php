<?php

namespace App\Http\Controllers\Api\Showcase;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExperience;
use App\Models\Experience;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * ExperienceController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Experience::class);
    }

    /**
     * Display a listing of the experience.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $request->user()->experiences
        ]);
    }

    /**
     * Store a newly created experience in storage.
     *
     * @param StoreExperience $request
     * @return JsonResponse
     */
    public function store(StoreExperience $request)
    {
        $experience = $request->user()->experiences()->create($request->validated());

        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $experience
        ]);
    }

    /**
     * Display the specified experience.
     *
     * @param Experience $experience
     * @return JsonResponse
     */
    public function show(Experience $experience)
    {
        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $experience
        ]);
    }

    /**
     * Update the specified experience in storage.
     *
     * @param StoreExperience $request
     * @param Experience $experience
     * @return JsonResponse
     */
    public function update(StoreExperience $request, Experience $experience)
    {
        $experience->fill($request->validated())->save();

        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $experience
        ]);
    }

    /**
     * Remove the specified experience from storage.
     *
     * @param Experience $experience
     * @return JsonResponse
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();

        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $experience
        ]);
    }
}
