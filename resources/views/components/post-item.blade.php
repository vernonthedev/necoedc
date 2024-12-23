
@if ($post->youtube_link == "")
    {{ $post->thumbnail }}
@else
    {!! $post->youtube_link !!}
@endif


@foreach($post->categories as $category)
    {{ $category->title }}
@endforeach

{{$post->getFormattedDate()}}
{{ route('blog.show', $post)}}
​{{$post->title}}
{{ $post->shortBody()}}
{{ route('blog.show', $post)}}
     
