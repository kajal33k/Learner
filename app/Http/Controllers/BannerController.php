<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
class BannerController extends Controller
{
    
        public function index()
        {
            $banners = Banner::all();
            return view('backend.banner.index', compact('banners'));
        }
    
        public function create()
        {
            return view('backend.banner.create');
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            ]);
    
            $banner = new Banner($request->only(['title', 'description']));
    
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('banner', 'public');
                $banner->image = $path;
            }
    
            $banner->save();
    
            return redirect()->route('backend.banner.index')->with('success', 'Banner created successfully.');
        }
    
        public function show(Banner $banner)
        {
            return view('backend.banner.show', compact('banner'));
        }
    
        public function edit(Banner $banner)
        {
            return view('backend.banner.edit', compact('banner'));
        }
    
        public function update(Request $request, Banner $banner)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            ]);
    
            $banner->fill($request->only(['title', 'description']));
    
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('banners', 'public');
                $banner->image = $path;
            }
    
            $banner->save();
    
            return redirect()->route('backend.banner.index')->with('success', 'Banner updated successfully.');
        }
    
        public function destroy(Banner $banner)
        {
            $banner->delete();
            return redirect()->route('backend.banner.index')->with('success', 'Banner deleted successfully.');
        }
    }
    
