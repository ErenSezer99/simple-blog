<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Posts</h2>
            <a href="{{ route('posts.create') }}" 
               class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                New Post
            </a>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Arama Formu -->
            <form method="GET" action="{{ route('posts.index') }}" class="mb-6">
                <div class="flex">
                    <input type="text" name="search" placeholder="Search..." value="{{ $search ?? '' }}"
                        class="flex-1 block w-full rounded-l-md border-gray-300 shadow-sm pl-3 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-r-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                        Ara
                    </button>
                </div>
            </form>

            @if($posts->count())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($posts as $post)
                        <a href="{{ route('posts.show', $post->id) }}"
                           class="block p-5 bg-white border border-gray-200 rounded-lg shadow hover:shadow-lg transition transform hover:-translate-y-1">
                            <h5 class="text-lg font-semibold text-gray-800 mb-2">{{ $post->title }}</h5>
                            <p class="text-gray-600">{{ Str::limit($post->content, 100) }}</p>
                        </a>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-6 flex justify-center">
                    {{ $posts->withQueryString()->links('vendor.pagination.tailwind') }}
                </div>
            @else
                <p class="text-gray-600 text-center">There are no posts yet or no posts matching the search criteria were found.</p>
            @endif

        </div>
    </div>
</x-app-layout>
