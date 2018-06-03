<?php

namespace App\Http\Controllers\Showcase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AchievementController extends Controller
{
    /**
     * Show the achievement event.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = Auth::user();
        $data = [
            'educations' => $user->educations()->orderBy('enter', 'desc')->get(),
            'experiences' => $user->experiences()->orderBy('start')->get(),
            'awards' => $user->awards()->orderBy('awarded_in')->get(),
        ];

        return view('showcase.achievement.index', $data);
    }
}
