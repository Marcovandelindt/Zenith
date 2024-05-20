<?php

namespace App\Http\Controllers;

use \Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Index action
     *
     * @returns \Illuminate\View\View
     */
    public function index(): View
    {
        return view('home.index');
    }
}
