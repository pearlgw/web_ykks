<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\User;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $user = auth()->user();

        $contents = Content::with('user')
            ->when($search, function ($query, $search) {
                $query->where('title', 'like', "%{$search}%");
            })
            ->when($user->role === 'staff', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(9)
            ->withQueryString();


        return view('content.index', compact('contents'));
    }

    public function show($id)
    {
        $content = Content::with('user')->findOrFail($id);
        $user = auth()->user();

        if ($user->role === 'staff' && $content->user_id !== $user->id) {
            abort(403, 'tidak memiliki akses.');
        }

        return view('content.show', compact('content'));
    }

    public function create()
    {
        $users = User::where('role', 'staff')->latest()->get();
        return view('content.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'user_id' => 'required|exists:users,id',
        ]);

        Content::create($validated);

        return redirect()->route('content.index')->with('success', 'Content created successfully.');
    }

    public function edit($id)
    {
        $content = Content::findOrFail($id);
        $user = auth()->user();

        if ($user->role === 'staff' && $content->user_id !== $user->id) {
            abort(403, 'tidak memiliki akses.');
        }
        $users = User::where('role', 'staff')->latest()->get();
        return view('content.edit', compact('content', 'users'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'user_id' => 'required|exists:users,id',
        ]);

        $content = Content::findOrFail($id);
        $content->update($validated);

        return redirect()->route('content.index')->with('success', 'Content updated successfully.');
    }

    public function destroy($id)
    {
        $content = Content::findOrFail($id);
        $user = auth()->user();

        if ($user->role === 'staff' && $content->user_id !== $user->id) {
            abort(403, 'tidak memiliki akses.');
        }

        $content->delete();

        return redirect()->route('content.index')->with('success', 'Content deleted successfully.');
    }
}
