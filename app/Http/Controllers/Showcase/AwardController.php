<?php

namespace App\Http\Controllers\Showcase;

use App\Models\Award;
use App\Http\Requests\StoreAward;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AwardController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAward $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAward $request)
    {
        $award = new Award($request->validated());

        if (Auth::user()->awards()->save($award)) {
            return redirect()->back()->with([
                'status' => 'success',
                'message' => __('Data :label successfully created', ['label' => 'award'])
            ]);
        }

        return redirect()->back()->withErrors([
            'message' => __('Update :label failed, try again later', ['label' => 'award'])
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param Award $award
     * @return Award
     */
    public function show(Request $request, Award $award)
    {
        if ($request->ajax()) {
            return $award;
        }

        return abort(400, 'Ajax request only');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreAward $request
     * @param Award $award
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StoreAward $request, Award $award)
    {
        if ($award->update($request->validated())) {
            return redirect()->back()->with([
                'status' => 'success',
                'message' => __('Data :label successfully updated', ['label' => 'award'])
            ]);
        }

        return redirect()->back()->withErrors([
            'message' => __('Update :label failed, try again later', ['label' => 'award'])
        ]);
    }

    /**
     * Remove the specified award from storage.
     *
     * @param Award $award
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Award $award)
    {
        $this->authorize('destroy', $award);

        if ($award->delete()) {
            return redirect()->back()->with([
                'status' => 'warning',
                'message' => __('Data :label successfully deleted', ['label' => 'award'])
            ]);
        }

        return redirect()->back()->withErrors([
            'message' => __('Delete :label failed, try again later', ['label' => 'award'])
        ]);
    }
}
