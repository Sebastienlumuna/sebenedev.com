<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PageController extends Controller
{
    public function index(): View
    {
        $projects = Project::with('commentaires')
        ->withcount('commentaires')
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        return view('pages.home',[
            'projects' => $projects
        ]);
    }

    public function commentaire(Project $project, Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'content' => 'required|min:5|string',
        ]);

        $project->commentaires()->create([
            'name' => $validated['name'],
            'content' => $validated['content'],
            'project_id' => $project->id,
        ]);

        return redirect()->route('show', $project)->with('success', 'Commentaire ajouté avec succès');
    }

    public function show(Project $project): View
    {
        $project->load( ['commentaires' => function($query){
            $query->orderBy('created_at', 'desc');
        }] );	
        $project->loadCount('commentaires');
        return view('pages.show',[

            'project' => $project
        ]);
    }

    public function about(): View
    {
        return view('pages.about');
    }
}
