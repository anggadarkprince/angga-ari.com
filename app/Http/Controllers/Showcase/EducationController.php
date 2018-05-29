<?php

namespace App\Http\Controllers\Showcase;

use App\Education;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEducation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param StoreEducation $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEducation $request)
    {
        $education = new Education($request->validated());

        if (Auth::user()->educations()->save($education)) {
            return redirect()->back()->with([
                'status' => 'success',
                'message' => __('Data :label successfully created', ['label' => 'education'])
            ]);
        }

        return redirect()->back()->withErrors([
            'message' => __('Update :label failed, try again later', ['label' => 'education'])
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param Education $education
     * @return Education
     */
    public function show(Request $request, Education $education)
    {
        if ($request->ajax()) {
            return $education;
        }

        return abort(400, 'Ajax request only');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreEducation $request
     * @param Education $education
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StoreEducation $request, Education $education)
    {
        if ($education->update($request->validated())) {
            return redirect()->back()->with([
                'status' => 'success',
                'message' => __('Data :label successfully updated', ['label' => 'education'])
            ]);
        }

        return redirect()->back()->withErrors([
            'message' => __('Update :label failed, try again later', ['label' => 'education'])
        ]);
    }

    /**
     * Remove the specified education from storage.
     *
     * @param Education $education
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Education $education)
    {
        $this->authorize('destroy', $education);

        if ($education->delete()) {
            return redirect()->back()->with([
                'status' => 'warning',
                'message' => __('Data :label successfully deleted', ['label' => 'education'])
            ]);
        }

        return redirect()->back()->withErrors([
            'message' => __('Delete :label failed, try again later', ['label' => 'education'])
        ]);
    }
}
