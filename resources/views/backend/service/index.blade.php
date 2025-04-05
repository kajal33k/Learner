<x-app-layout>
    <x-slot name="header">
        Services
    </x-slot>

    <div class="py-6">
        <a href="{{ route('services.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
            + Add Service
        </a>

        <div class="mt-4 bg-white shadow-md rounded p-4">
            @foreach ($services as $service)
                <div class="border-b py-2 flex justify-between">
                    <div>
                        <div class="font-semibold">{{ $service->title }}</div>
                        <div class="text-sm text-gray-600">{{ $service->description }}</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <a href="{{ route('services.edit', $service) }}" class="text-blue-600">Edit</a>
                        <form method="POST" action="{{ route('services.destroy', $service) }}">
                            @csrf @method('DELETE')
                            <button class="text-red-600" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $services->links() }}
    </div>
</x-app-layout>
