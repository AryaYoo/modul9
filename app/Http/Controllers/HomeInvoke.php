<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeInvoke extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        $pageTitle = 'Home';

        return view('home_old', ['pageTitle' => $pageTitle]);
    }
}
