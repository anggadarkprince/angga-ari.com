<?php

namespace App\Http\Controllers\Showcase;

use App\Models\Experience;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param StoreExperience $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExperience $request)
    {
        $experience = new Experience($request->validated());

        if (Auth::user()->experiences()->save($experience)) {
            return redirect()->back()->with([
                'status' => 'success',
                'message' => __('Data :label successfully created', ['label' => 'experience'])
            ]);
        }

        return redirect()->back()->withErrors([
            'message' => __('Update :label failed, try again later', ['label' => 'experience'])
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param Experience $experience
     * @return Experience
     */
    public function show(Request $request, Experience $experience)
    {
        if ($request->ajax()) {
            return $experience;
        }

        return abort(400, 'Ajax request only');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreExperience $request
     * @param Experience $experience
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StoreExperience $request, Experience $experience)
    {
        if ($experience->update($request->validated())) {
            return redirect()->back()->with([
                'status' => 'success',
                'message' => __('Data :label successfully updated', ['label' => 'experience'])
            ]);
        }

        return redirect()->back()->withErrors([
            'message' => __('Update :label failed, try again later', ['label' => 'experience'])
        ]);
    }

    /**
     * Remove the specified experience from storage.
     *
     * @param Experience $experience
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Experience $experience)
    {
        $this->authorize('destroy', $experience);

        if ($experience->delete()) {
            return redirect()->back()->with([
                'status' => 'warning',
                'message' => __('Data :label successfully deleted', ['label' => 'experience'])
            ]);
        }

        return redirect()->back()->withErrors([
            'message' => __('Delete :label failed, try again later', ['label' => 'experience'])
        ]);
    }
}
