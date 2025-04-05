<x-layouts.app :title="__('Banner')">
    <div class="p-6 max-w-xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Edit About Entry</h1>
        <form action="{{ route('backend.about.update', $about) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('backend.about._form', ['about' => $about])
        </form>
    </div>
</x-layouts.app>