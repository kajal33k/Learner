<x-layouts.app :title="__('Services')">
    <x-slot name="header">
        <h1 class="text-2xl font-bold text-gray-900">Service Management</h1>
    </x-slot>

    <div class="py-6 space-y-6">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="text-right">
            <a href="{{ route('backend.service.create') }}"
               class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded shadow">
                + Add New Service
            </a>
        </div>

        <div class="bg-white rounded shadow-sm divide-y divide-gray-200">
            @forelse ($services as $service)
                <div class="flex items-start justify-between p-4 hover:bg-gray-50">
                    <div class="space-y-1 max-w-xl">
                        <h2 class="text-lg font-semibold text-gray-800">{{ $service->title }}</h2>
                        <p class="text-gray-600 text-sm">{{ Str::limit($service->description, 150) }}</p>
                        @if ($service->image)
                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="h-20 mt-2 rounded shadow">
                        @endif
                    </div>
                    <div class="flex items-center gap-3 text-sm">
                        <a href="{{ route('backend.service.edit', $service) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('backend.service.destroy', $service) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this service?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="p-4 text-center text-gray-500">
                    No services found.
                </div>
            @endforelse
        </div>

        <div class="mt-4">
            {{ $services->links() }}
        </div>
    </div>
</x-layouts.app>
