<?php

namespace App\Http\Controllers\Api\Showcase;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEducation;
use App\Models\Education;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * EducationController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Education::class);
    }

    /**
     * Display a listing of the education.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $request->user()->educations
        ]);
    }

    /**
     * Store a newly created education in storage.
     *
     * @param StoreEducation $request
     * @return JsonResponse
     */
    public function store(StoreEducation $request)
    {
        $education = $request->user()->educations()->create($request->validated());

        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $education
        ]);
    }

    /**
     * Display the specified education.
     *
     * @param Education $education
     * @return JsonResponse
     */
    public function show(Education $education)
    {
        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $education
        ]);
    }

    /**
     * Update the specified education in storage.
     *
     * @param StoreEducation $request
     * @param Education $education
     * @return JsonResponse
     */
    public function update(StoreEducation $request, Education $education)
    {
        $education->fill($request->validated())->save();

        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $education
        ]);
    }

    /**
     * Remove the specified education from storage.
     *
     * @param Education $education
     * @return JsonResponse
     */
    public function destroy(Education $education)
    {
        $education->delete();

        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $education
        ]);
    }
}
