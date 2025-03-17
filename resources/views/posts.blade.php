<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md rounded-lg border-b border-gray-300 shadow-2xl drop-shadow-xl">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="">
                By
                <a href="/authors/{{ $post->author->username }}"
                    class="text-base text-gray-500 hover:underline">{{ $post->author->name }}</a>
                in
                <a href="/categories/{{ $post->category->slug }}"
                    class="hover:underline text-base text-gray-500">{{ $post->category->name }}</a>
                |
                {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="my-4 font-light">
                {{ Str::limit($post['body'], 100) }}
            </p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach
    {{-- <article>
        <div class="container my-10 py-5 bg-gray-100">
            <h2 class="text-center font-bold text-xl">Hello World</h2>
            <p class="text-justify font-medium">
                Lorem ipsum dolor sit amet consectetur adipisicing elit
            </p>
        </div>
    </article>
    <article>~
        <div class="container my-10 py-5 bg-gray-100">
            <h2 class="text-center font-bold text-xl">Hello World</h2>
            <p class="text-justify font-medium">
                Lorem ipsum dolor sit amet consectetur adipisicing elit
            </p>
        </div>
    </article> --}}
</x-layout>
