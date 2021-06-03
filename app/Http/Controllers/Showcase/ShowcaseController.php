<?php

namespace App\Http\Controllers\Showcase;

use App\Models\User;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ShowcaseController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $portfolios = $user->portfolios()->popular()->take(3)->get();

        return view('showcase.index', compact('user', 'portfolios'));
    }

    public function generate(User $user)
    {
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('showcase.cv', compact('user')));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        return $dompdf->stream($user->username . '_cv.pdf', array("Attachment" => false));
    }
}
