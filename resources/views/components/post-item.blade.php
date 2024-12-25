
<div class="blog-item">
    <div class="blog-image">
        <img src="storage/{{ $post->thumbnail }}" alt="image">
    </div>

    <div class="blog-content">
        <div class="bmeta">
            <span>
                <i class="bx bx-time-five"></i> 27 Jan , 2024
            </span>

            <span class="bcat">
                <a href="#">Education</a>
            </span>
        </div>

        <h3><a href="blog-details.html">{{ $post->title }}</a></h3>
        <p>
            {{ $post->shortBody() }}
        </p>
        <a href="{{ route('blog.show', $post) }}" class="bbtn">Explore More</a>
    </div>
</div>

{{ $post->thumbnail }}


{{$post->getFormattedDate()}}
{{ route('blog.show', $post)}}
​{{$post->title}}
{{ $post->shortBody()}}
{{ route('blog.show', $post)}}

