<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Post Details</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 bg-white shadow rounded-lg p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">{{ $post->title }}</h1>
            <p class="text-gray-700 mb-4">{{ $post->content }}</p>
            <p class="text-sm text-gray-500 mb-6">Author: {{ $post->user->name ?? 'Anonymous' }}</p>

            <div class="flex space-x-3">
                <a href="{{ route('posts.edit', $post->id) }}" class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition">Edit</a>

                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition">Delete</button>
                </form>

                <a href="{{ route('posts.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">&larr; Back</a>
            </div>
        </div>
    </div>
</x-app-layout>
