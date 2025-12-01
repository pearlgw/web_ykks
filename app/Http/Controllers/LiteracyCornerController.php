<?php

namespace App\Http\Controllers;

use App\Models\LiteracyCorner;
use Illuminate\Http\Request;

class LiteracyCornerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $items = LiteracyCorner::query()
            ->when($search, function ($query, $search) {
                $query->where('title', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(9)
            ->withQueryString();


        return view('literacy_corner.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items = LiteracyCorner::latest()->get();
        return view('literacy_corner.create', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file_pdf' => 'required|file|mimes:pdf|max:10240',
            'image_backdrop' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        if ($request->hasFile('file_pdf')) {
            $pdfPath = $request->file('file_pdf')->store('literacy_corner_pdfs', 'public');
            $validated['file_pdf'] = $pdfPath;
        }

        if ($request->hasFile('image_backdrop')) {
            $path = $request->file('image_backdrop')->store('literacy_corner_images', 'public');
            $validated['image_backdrop'] = $path;
        }

        LiteracyCorner::create($validated);

        return redirect()->route('literacy-corner.index')->with('success', 'Literacy corner created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item = LiteracyCorner::findOrFail($id);

        return view('literacy_corner.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = LiteracyCorner::findOrFail($id);
        return view('literacy_corner.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $item = LiteracyCorner::findOrFail($id);
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file_pdf' => 'file|mimes:pdf|max:10240',
            'image_backdrop' => 'image|max:2048',
        ]);

        if ($request->hasFile('file_pdf')) {
            $pdfPath = $request->file('file_pdf')->store('literacy_corner_pdfs', 'public');
            $validated['file_pdf'] = $pdfPath;
        }

        if ($request->hasFile('image_backdrop')) {
            $path = $request->file('image_backdrop')->store('literacy_corner_images', 'public');
            $validated['image_backdrop'] = $path;
        }

        $item->update($validated);

        return redirect()->route('literacy-corner.index')->with('success', 'Literacy corner updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = LiteracyCorner::findOrFail($id);
        $item->delete();

        return redirect()->route('literacy-corner.index')->with('success', 'Literacy corner deleted successfully.');
    }
}
