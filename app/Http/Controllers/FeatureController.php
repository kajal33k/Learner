<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Feature;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::latest()->get();
        return view('backend.feature.index', compact('features'));
    }

    public function create()
    {
        return view('backend.feature.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $feature = new Feature($validated);

        if ($request->hasFile('image')) {
            $feature->image = $request->file('image')->store('feature', 'public');
        }

        $feature->save();

        return redirect()->route('backend.feature.index')->with('success', 'feature created successfully.');
    }

    public function show(Feature $feature)
    {
        return view('backend.feature.show', compact('feature'));
    }

    public function edit(Feature $feature)
    {
        return view('backend.feature.edit', compact('feature'));
    }

    public function update(Request $request, Feature $feature)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Update fields
        $feature->fill($validated);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if (!empty($feature->image) && Storage::disk('public')->exists($feature->image)) {
                Storage::disk('public')->delete($feature->image);
            }

            // Store new image
            $feature->image = $request->file('image')->store('feature', 'public');
        }

        $feature->save();

        return redirect()->route('backend.feature.index')->with('success', 'feature updated successfully.');
    }

    public function destroy(Feature $feature)
    {
        // Delete image if exists
        if (!empty($feature->image) && Storage::disk('public')->exists($feature->image)) {
            Storage::disk('public')->delete($feature->image);
        }

        $feature->delete();

        return redirect()->route('backend.feature.index')->with('success', 'feature deleted successfully.');
    }
}
