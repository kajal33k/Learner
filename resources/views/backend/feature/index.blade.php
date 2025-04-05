<x-layouts.app :title="__('feature')">
    <div class="relative w-full h-44 flex items-center justify-center">
        <!-- Background Image -->
        <img src="https://cdn.pixabay.com/photo/2022/04/18/16/00/art-7140878_1280.png" 
             alt="Background Image" class="absolute inset-0 w-full h-full object-cover">
        
        <!-- Overlay -->
        <div class="absolute inset-0"></div> 
        
        <!-- Text -->
        <h1 class="relative text-white text-5xl font-extrabold drop-shadow-xl">features</h1>
    </div>
    


    
    <div class="container mx-auto p-4">
        <h1 class="text-xl font-bold mb-4">feature List</h1>
    
        <a href="{{ route('backend.feature.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">
            + Add New feature
        </a>
    
        <div class="mt-4 feature feature-cols-1 sm:feature-cols-2 md:feature-cols-3 lg:feature-cols-4 gap-4">
            @foreach ($features as $feature)
                <div class="border rounded-lg overflow-hidden shadow-md">
                    @if($feature->image)
                        <img src="{{ asset('storage/'.$feature->image) }}" class="w-full h-40 object-cover">
                    @endif
                    <div class="p-4">
                        <h2 class="text-lg font-semibold">{{ $feature->title }}</h2>
                        <p class="text-gray-600">{{ Str::limit($feature->description, 100) }}</p>
                        <div class="mt-2 flex justify-between">
                            <a href="{{ route('backend.feature.edit', $feature->id) }}" class="text-blue-500">Edit</a>
                            <a href="{{ route('backend.feature.destroy', $feature->id) }}" class="text-red-500">Delete</a>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
 
    

    <div class="bg-black p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">features List</h1>
       
        <table class="min-w-full bg-black border border-gray-200 mt-4">
            <thead>
                <tr class="bg-black">
                    <th class="border px-4 py-2">#</th>
                    <th class="border px-4 py-2">Title</th>
                    <th class="border px-4 py-2">Description</th>
                    <th class="border px-4 py-2">Image</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($features as $feature)
                    <tr>
                        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border px-4 py-2">{{ $feature->title }}</td>
                        <td class="border px-4 py-2">{{ $feature->description }}</td>
                        <td class="border px-4 py-2">
                            @if($feature->image)
                                <img src="{{ asset('storage/' . $feature->image) }}" class="h-16 w-16 object-cover">
                            @endif
                        </td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('backend.feature.edit', $feature) }}" class="text-blue-500">Edit</a>
                            <a href="{{ route('backend.feature.destroy', $feature) }}" class="text-red-500">Edit</a>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>




</x-layouts.app>