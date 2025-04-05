<x-layouts.app :title="__('About')">
    <div class="p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold">About Entries</h1>
            <a href="{{ route('backend.about.create') }}"
               class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded">
                + Create New
            </a>
        </div>

        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="p-3 text-left">Title</th>
                        <th class="p-3 text-left">Image</th>
                        <th class="p-3 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($abouts as $about)
                        <tr class="border-t hover:bg-gray-50">
                            <td class="p-3">{{ $about->title }}</td>
                            <td class="p-3">
                                @if($about->image)
                                    <img src="{{ asset('storage/' . $about->image) }}" class="h-12 rounded">
                                @else
                                    <span class="text-sm text-gray-400 italic">No image</span>
                                @endif
                            </td>
                            <td class="p-3 flex space-x-2">
                                <a href="{{ route('backend.about.show', $about) }}" class="text-blue-600 hover:underline">View</a>
                                <a href="{{ route('backend.about.edit', $about) }}" class="text-yellow-600 hover:underline">Edit</a>
                                <form action="{{ route('backend.about.destroy', $about) }}" method="POST"
                                      onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="p-3 text-center text-gray-500">No about entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
