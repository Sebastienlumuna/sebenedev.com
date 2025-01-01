<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function index(): View
    {
        $projects = Project::orderBy('created_at', 'desc')
        ->paginate(3);

        return view('pages.home',[
            'projects' => $projects
        ]);
    }

    public function about(): View
    {
        return view('pages.about');
    }
}
