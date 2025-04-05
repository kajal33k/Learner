@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Create Service</h1>

    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label class="block text-sm font-medium">Title</label>
            <input type="text" name="title" class="w-full border rounded p-2" value="{{ old('title') }}" required>
            @error('title') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Description</label>
            <textarea name="description" class="w-full border rounded p-2" rows="4" required>{{ old('description') }}</textarea>
            @error('description') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Image (optional)</label>
            <input type="file" name="image" class="w-full">
            @error('image') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
            <a href="{{ route('services.index') }}" class="ml-2 text-gray-700 hover:underline">Cancel</a>
        </div>
    </form>
</div>
@endsection
