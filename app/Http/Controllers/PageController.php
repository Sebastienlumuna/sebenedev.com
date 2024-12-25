<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function index(): View
    {
        return view('pages.home');
    }

    public function about(): View
    {
        return view('pages.about');
    }
}
