<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $newss = News::query()
            ->when($search, function ($query, $search) {
                $query->where('title', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(9)
            ->withQueryString();


        return view('news.index', compact('newss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $newss = News::latest()->get();
        return view('news.create', compact('newss'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'from_news' => 'required|string|max:255',
            'datetime_news' => 'required|date',
            'image_backdrop' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image_backdrop')) {
            $path = $request->file('image_backdrop')->store('news_images', 'public');
            $validated['image_backdrop'] = $path;
        }

        News::create($validated);

        return redirect()->route('news.index')->with('success', 'News created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $news = News::findOrFail($id);

        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'from_news' => 'required|string|max:255',
            'datetime_news' => 'required|date',
            'image_backdrop' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image_backdrop')) {
            $path = $request->file('image_backdrop')->store('news_images', 'public');
            $validated['image_backdrop'] = $path;
        }

        $news->update($validated);

        return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('news.index')->with('success', 'News deleted successfully.');
    }
}
