

{{ $post->thumbnail }}


{{$post->getFormattedDate()}}
{{ route('blog.show', $post)}}
​{{$post->title}}
{{ $post->shortBody()}}
{{ route('blog.show', $post)}}
     
