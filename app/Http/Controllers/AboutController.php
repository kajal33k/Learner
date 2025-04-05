<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the About entries.
     */
    public function index()
    {
        $abouts = About::all();
        return view('backend.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new About entry.
     */
    public function create()
    {
        return view('backend.about.create');
    }

    /**
     * Store a newly created About entry in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $about = new About($validated);

        if ($request->hasFile('image')) {
            $about->image = $request->file('image')->store('abouts', 'public');
        }

        $about->save();

        return redirect()
            ->route('backend.about.index')
            ->with('success', 'About entry created successfully.');
    }

    /**
     * Display the specified About entry.
     */
    public function show(About $about)
    {
        return view('backend.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified About entry.
     */
    public function edit(About $about)
    {
        return view('backend.about.edit', compact('about'));
    }

    /**
     * Update the specified About entry in storage.
     */
    public function update(Request $request, About $about)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $about->fill($validated);

        if ($request->hasFile('image')) {
            // Optionally delete the old image
            if ($about->image) {
                Storage::disk('public')->delete($about->image);
            }

            $about->image = $request->file('image')->store('abouts', 'public');
        }

        $about->save();

        return redirect()
            ->route('backend.about.index')
            ->with('success', 'About entry updated successfully.');
    }

    /**
     * Remove the specified About entry from storage.
     */
    public function destroy(About $about)
    {
        // Optionally delete the image
        if ($about->image) {
            Storage::disk('public')->delete($about->image);
        }

        $about->delete();

        return redirect()
            ->route('backend.about.index')
            ->with('success', 'About entry deleted successfully.');
    }
}
