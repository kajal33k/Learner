<x-layouts.app :title="__('Create grid')">
    <div class="relative w-full h-44 flex items-center justify-center">
        <!-- Background Image -->
        <img src="https://cdn.pixabay.com/photo/2022/04/18/16/00/art-7140878_1280.png" 
             alt="Background Image" class="absolute inset-0 w-full h-full object-cover">
        
        <!-- Overlay -->
        <div class="absolute inset-0"></div> 
        
        <!-- Title -->
        <h1 class="relative text-white text-4xl font-extrabold drop-shadow-lg">Create grid</h1>
    </div>

    <!-- Form Card -->
    <div class="max-w-3xl mx-auto mt-8 bg-black p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-white mb-4">Add a New grid</h2>

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-600 rounded-lg">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>⚠️ {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- grid Form -->
        <form action="{{ route('backend.grid.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Title -->
            <div class="mb-4">
                <label for="title" class="block text-white font-semibold">Title:</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300" required>
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-white font-semibold">Description:</label>
                <textarea id="description" name="description" rows="4" 
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300" required>{{ old('description') }}</textarea>
            </div>

            <!-- Image Upload -->
            <div class="mb-4">
                <label for="image" class="block text-white font-semibold">Upload Image:</label>
                <input type="file" id="image" name="image" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300">
            </div>

            <!-- Buttons -->
            <div class="flex justify-between mt-6">
                <a href="{{ route('backend.grid.index') }}" 
                   class="px-6 py-3 bg-green-800 text-white text-lg font-semibold rounded-lg shadow-md hover:bg-green-700 transition-all">
                    ⬅️ Back
                </a>
                <button type="submit" 
                        class="px-6 py-3 bg-gradient-to-r from-gray-800 to-red-600 text-white text-lg font-semibold rounded-lg shadow-md hover:from-red-600 hover:to-gray-800 transition-all">
                    ✅ Save grid
                </button>
            </div>
        </form>
    </div>
</x-layouts.app>
