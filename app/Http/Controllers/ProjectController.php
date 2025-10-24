<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $user = auth()->user();

        $projects = Project::with('user', 'program')
            ->when($search, function ($query, $search) {
                $query->where('title', 'like', "%{$search}%");
            })
            ->when($user->role === 'staff', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(9)
            ->withQueryString();


        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('role', 'staff')->latest()->get();
        $programs = Program::latest()->get();
        return view('project.create', compact('users', 'programs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'datetime_project' => 'required|date',
            'participant_count' => 'required|integer|min:1',
            'image_backdrop' => 'nullable|image|max:2048',
            'user_id' => 'required|exists:users,id',
            'program_id' => 'required|exists:programs,id',
        ]);

        if ($request->hasFile('image_backdrop')) {
            $path = $request->file('image_backdrop')->store('project_images', 'public');
            $validated['image_backdrop'] = $path;
        }

        Project::create($validated);

        return redirect()->route('project.index')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $project = Project::with('user', 'program')->findOrFail($id);
        $user = auth()->user();

        if ($user->role === 'staff' && $project->user_id !== $user->id) {
            abort(403, 'tidak memiliki akses.');
        }

        return view('project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $user = auth()->user();

        if ($user->role === 'staff' && $project->user_id !== $user->id) {
            abort(403, 'tidak memiliki akses.');
        }
        $users = User::where('role', 'staff')->latest()->get();
        $programs = Program::latest()->get();
        return view('project.edit', compact('project', 'users', 'programs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $user = auth()->user();

        if ($user->role === 'staff' && $project->user_id !== $user->id) {
            abort(403, 'tidak memiliki akses.');
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'datetime_project' => 'required|date',
            'participant_count' => 'required|integer|min:1',
            'image_backdrop' => 'nullable|image|max:2048',
            'user_id' => 'required|exists:users,id',
            'program_id' => 'required|exists:programs,id',
        ]);

        if ($request->hasFile('image_backdrop')) {
            $path = $request->file('image_backdrop')->store('project_images', 'public');
            $validated['image_backdrop'] = $path;
        }

        $project->update($validated);

        return redirect()->route('project.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $user = auth()->user();

        if ($user->role === 'staff' && $project->user_id !== $user->id) {
            abort(403, 'tidak memiliki akses.');
        }

        $project->delete();

        return redirect()->route('project.index')->with('success', 'Project deleted successfully.');
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/ckeditor', $filename, 'public');

            $url = asset('storage/' . $path);

            return response()->json([
                'uploaded' => true,
                'url' => $url
            ]);
        }

        return response()->json([
            'uploaded' => false,
            'error' => [
                'message' => 'Upload failed'
            ]
        ]);
    }
}
