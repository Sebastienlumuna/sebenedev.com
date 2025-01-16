<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function index(): View
    {
        $projects = Project::with('commentaires')->orderBy('created_at', 'desc')
        ->paginate(10);

        return view('pages.home',[
            'projects' => $projects
        ]);
    }

    public function show(Project $project): View
    {
        return view('pages.show',[
            
            'project' => $project
        ]);
    }

    public function about(): View
    {
        return view('pages.about');
    }
}
