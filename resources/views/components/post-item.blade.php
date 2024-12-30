
<div class="blog-item">
    <div class="blog-image">
        <img src="storage/{{ $post->thumbnail }}" alt="image">
    </div>

    <div class="blog-content">
        <div class="bmeta">
            <span>
                <i class="bx bx-time-five"></i>{{$post->getFormattedDate()}}
            </span>

            <span class="bcat">
                {{-- <a href="#">Posted by {{ Auth::user()->name }} </a> --}}
            </span>
        </div>

        <h3><a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a></h3>
        <p>
            {{ $post->shortBody() }}
        </p>
        <a href="{{ route('blog.show', $post) }}" class="bbtn">Explore More</a>
    </div>
</div>
