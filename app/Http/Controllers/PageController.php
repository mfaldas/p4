<?php

/**
 * PageController.php
 * Shows welcome, about and contact pages.
 * Created by: Marc-Eli Faldas
 * Last Modified: 5/8/2018
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('pages.about');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact')->with([
            'email' => config('app.supportEmail')
        ]);
    }
}
