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

    /**
     * Display login page.
     * @return View
     */
    public function login(): View
    {
        return view('auth.login');
    }

    /**
     * Display register page.
     * @return View
     */
    public function register(): View
    {
        return view('auth.register');
    }
}
