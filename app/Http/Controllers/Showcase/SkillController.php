<?php

namespace App\Http\Controllers\Showcase;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkill;
use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    /**
     * Show the skill event.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $skills = Auth::user()->skills;

        return view('showcase.skill', compact('skills'));
    }

    /**
     * Store a newly created skill in storage.
     *
     * @param StoreSkill $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSkill $request)
    {
        $skill = new Skill($request->validated());

        if (Auth::user()->skills()->save($skill)) {
            return redirect()->back()->with([
                'status' => 'success',
                'message' => __('Data :label successfully created', ['label' => 'skill'])
            ]);
        }

        return redirect()->back()->withErrors([
            'message' => __('Update :label failed, try again later', ['label' => 'skill'])
        ]);
    }

    /**
     * Show the form for editing the specified skill.
     *
     * @param Request $request
     * @param Skill $skill
     * @return Experience
     */
    public function show(Request $request, Skill $skill)
    {
        if ($request->ajax()) {
            return $skill;
        }

        return abort(400, 'Ajax request only');
    }

    /**
     * Update the specified skill in storage.
     *
     * @param StoreSkill $request
     * @param Skill $skill
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StoreSkill $request, Skill $skill)
    {
        if ($skill->update($request->validated())) {
            return redirect()->back()->with([
                'status' => 'success',
                'message' => __('Data :label successfully updated', ['label' => 'skill'])
            ]);
        }

        return redirect()->back()->withErrors([
            'message' => __('Update :label failed, try again later', ['label' => 'skill'])
        ]);
    }

    /**
     * Remove the specified skill from storage.
     *
     * @param Skill $skill
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Skill $skill)
    {
        $this->authorize('destroy', $skill);

        if ($skill->delete()) {
            return redirect()->back()->with([
                'status' => 'warning',
                'message' => __('Data :label successfully deleted', ['label' => 'skill'])
            ]);
        }

        return redirect()->back()->withErrors([
            'message' => __('Delete :label failed, try again later', ['label' => 'skill'])
        ]);
    }
}
