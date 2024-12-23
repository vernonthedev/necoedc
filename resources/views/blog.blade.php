<x-app-layout meta-title="" meta-description="">
    {{-- Blog Categories --}}
    @foreach ($categories as $category)
                {{ $category->title }}
    @endforeach

    @foreach ($posts as $post)
        <x-post-item :post="$post"></x-post-item>
    @endforeach 
    {{-- Paginate the blog posts --}}
    {{ $posts->onEachSide(1)->links()}}
</x-app-layout>
