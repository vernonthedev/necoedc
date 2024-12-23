<x-app-layout :meta-title="$post->meta_title ?: $post->title" :meta-description="$post->meta_description ?: ''">
    
{{$post->thumbnail}}
{{$post->title}}
{{$post->thumbnail}}
{{$post->title}}
{!! $post->body !!} 

</x-app-layout>