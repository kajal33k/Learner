<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
class serviceController extends Controller
{
    
        public function index()
        {
            $services = Service::all();
            return view('backend.service.index', compact('services'));
        }
    
        public function create()
        {
            return view('backend.service.create');
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            ]);
    
            $service = new Service($request->only(['title', 'description']));
    
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('service', 'public');
                $service->image = $path;
            }
    
            $service->save();
    
            return redirect()->route('backend.service.index')->with('success', 'service created successfully.');
        }
    
        public function show(Service $service)
        {
            return view('backend.service.show', compact('service'));
        }
    
        public function edit(Service $service)
        {
            return view('backend.service.edit', compact('service'));
        }
    
        public function update(Request $request, Service $service)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            ]);
    
            $service->fill($request->only(['title', 'description']));
    
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('services', 'public');
                $service->image = $path;
            }
    
            $service->save();
    
            return redirect()->route('backend.service.index')->with('success', 'service updated successfully.');
        }
    
        public function destroy(Service $service)
        {
            $service->delete();
            return redirect()->route('backend.service.index')->with('success', 'service deleted successfully.');
        }
    }
    
