<x-app-layout meta-title="" meta-description="">

    @foreach ($posts as $post)
        <x-post-item :post="$post"></x-post-item>
    @endforeach 
    {{-- Paginate the blog posts --}}
    {{ $posts->onEachSide(1)->links()}}
</x-app-layout>
