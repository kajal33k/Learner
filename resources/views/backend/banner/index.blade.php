<x-layouts.app :title="__('Banner')">
    <div class="relative w-full h-44 flex items-center justify-center">
        <!-- Background Image -->
        <img src="https://cdn.pixabay.com/photo/2022/04/18/16/00/art-7140878_1280.png" 
             alt="Background Image" class="absolute inset-0 w-full h-full object-cover">
        
        <!-- Overlay -->
        <div class="absolute inset-0"></div> 
        
        <!-- Text -->
        <h1 class="relative text-white text-5xl font-extrabold drop-shadow-xl">BANNER</h1>
    </div>
    
    
    <div class="flex justify-end py-4">
        <a href="{{ route('backend.banner.create') }}" 
           class="px-6 py-3 bg-gradient-to-r from-[#273256] to-[#FF2A2A] text-white text-lg font-semibold rounded-lg shadow-lg hover:from-[#FF2A2A] hover:to-[#273256] transition-all duration-300 transform hover:scale-105">
            ➕ Create Banner
        </a>
    </div>
    

    <div class="bg-black p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Banners List</h1>
       
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
                @foreach($banners as $banner)
                    <tr>
                        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border px-4 py-2">{{ $banner->title }}</td>
                        <td class="border px-4 py-2">{{ $banner->description }}</td>
                        <td class="border px-4 py-2">
                            @if($banner->image)
                                <img src="{{ asset('storage/' . $banner->image) }}" class="h-16 w-16 object-cover">
                            @endif
                        </td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('backend.banner.edit', $banner) }}" class="text-blue-500">Edit</a>
                            <a href="{{ route('backend.banner.destroy', $banner) }}" class="text-red-500">Edit</a>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</x-layouts.app>    