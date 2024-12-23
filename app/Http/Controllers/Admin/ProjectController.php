<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function index()
    {
        $projects = Project::all();
        // return view('components.project', compact('projects'));
        return view('pages.index', compact('projects'));
    }
    function store(Request $request)
    {
        try
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'video' => 'nullable|url',
                'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'skill' => 'required',
            ]);
            $skillsProject = json_decode($request->input('skill'), true);
            // foreach ($skills as $skillId) {
            //     var_dump($skillId);
            // }
          
            $project = new Project();
    
            $project->name = $request["name"];
            $project->description = $request["description"];
            $project->video = $request["video"];
            $project->thumbnail = $request["thumbnail"];
            $project->save();

            $skills = $skillsProject;
            $project->skills()->attach($skills);    
            return redirect()->back();
        }
        catch (\Exception $e)
        {
            return response()->json(['message' => $e->getMessage()]);
        }
       
    }
}
