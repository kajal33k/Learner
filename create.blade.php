<x-layouts.app :title="__('Banner')">
    <div class="p-6 max-w-xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Create About Entry</h1>
        <form action="{{ route('backend.about.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-4">
                <div>
                    <label class="block font-medium">Title</label>
                    <input type="text" name="title" value="{{ old('title', $about->title) }}"
                           class="w-full p-2 border border-gray-300 rounded">
                    @error('title') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
            
                <div>
                    <label class="block font-medium">Description</label>
                    <textarea name="description" rows="4"
                              class="w-full p-2 border border-gray-300 rounded">{{ old('description', $about->description) }}</textarea>
                    @error('description') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
            
                <div>
                    <label class="block font-medium">Image</label>
                    <input type="file" name="image" class="w-full border border-gray-300 rounded p-2">
                    @error('image') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            
                    @if($about->image)
                        <img src="{{ asset('storage/' . $about->image) }}" class="h-20 mt-2 rounded">
                    @endif
                </div>
            
                <div>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                        Save
                    </button>
                </div>
            </div>
            
        </form>
    </div>
</x-layouts.app>
