<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Project;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->take(4)->get();
        $projects = Project::latest()->take(3)->get();
        return view('halaman_depan.navhero', compact('programs', 'projects'));
    }

    public function programProject()
    {
        $programs = Program::latest()->get();
        $projects = Project::latest()->take(3)->get();
        return view('program_project.index', compact('programs', 'projects'));
    }

    public function detailProgram($id)
    {
        $program = Program::findOrFail($id);
        $projects = $program->projects()->latest()->take(3)->get();
        return view('program_project.detail_program', compact('program', 'projects'));
    }

    public function detailProject($id)
    {
        $project = Project::findOrFail($id);

        $projects = Project::where('program_id', $project->program_id)
            ->where('id', '!=', $project->id)
            ->latest()
            ->take(3)
            ->get();

        return view('program_project.detail_project', compact('project', 'projects'));
    }
}
