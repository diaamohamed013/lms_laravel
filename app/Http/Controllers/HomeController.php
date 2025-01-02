<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display home page.
     * @return View
     */
    public function index(): View
    {
        return view('home.index');
    }
}
