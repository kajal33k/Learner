<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Grid;

class GridController extends Controller
{
    public function index()
    {
        $grids = Grid::latest()->get();
        return view('backend.grid.index', compact('grids'));
    }

    public function create()
    {
        return view('backend.grid.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $grid = new Grid($validated);

        if ($request->hasFile('image')) {
            $grid->image = $request->file('image')->store('grid', 'public');
        }

        $grid->save();

        return redirect()->route('backend.grid.index')->with('success', 'Grid created successfully.');
    }

    public function show(Grid $grid)
    {
        return view('backend.grid.show', compact('grid'));
    }

    public function edit(Grid $grid)
    {
        return view('backend.grid.edit', compact('grid'));
    }

    public function update(Request $request, Grid $grid)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Update fields
        $grid->fill($validated);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if (!empty($grid->image) && Storage::disk('public')->exists($grid->image)) {
                Storage::disk('public')->delete($grid->image);
            }

            // Store new image
            $grid->image = $request->file('image')->store('grid', 'public');
        }

        $grid->save();

        return redirect()->route('backend.grid.index')->with('success', 'Grid updated successfully.');
    }

    public function destroy(Grid $grid)
    {
        // Delete image if exists
        if (!empty($grid->image) && Storage::disk('public')->exists($grid->image)) {
            Storage::disk('public')->delete($grid->image);
        }

        $grid->delete();

        return redirect()->route('backend.grid.index')->with('success', 'Grid deleted successfully.');
    }
}
