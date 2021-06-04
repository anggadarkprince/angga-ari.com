<?php

namespace App\Http\Controllers\Api\Showcase;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkill;
use App\Models\Skill;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the skill.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $request->user()->skills
        ]);
    }

    /**
     * Store a newly created skill in storage.
     *
     * @param StoreSkill $request
     * @return JsonResponse
     */
    public function store(StoreSkill $request)
    {
        $skill = $request->user()->skills()->create($request->validated());

        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $skill
        ]);
    }

    /**
     * Display the specified skill.
     *
     * @param Skill $skill
     * @return JsonResponse
     */
    public function show(Skill $skill)
    {
        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $skill
        ]);
    }

    /**
     * Update the specified skill in storage.
     *
     * @param StoreSkill $request
     * @param Skill $skill
     * @return JsonResponse
     */
    public function update(StoreSkill $request, Skill $skill)
    {
        $skill->fill($request->validated())->save();

        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $skill
        ]);
    }

    /**
     * Remove the specified skill from storage.
     *
     * @param Skill $skill
     * @return JsonResponse
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();

        return response()->json([
            'status' => 'OK',
            'code' => 200,
            'data' => $skill
        ]);
    }
}
