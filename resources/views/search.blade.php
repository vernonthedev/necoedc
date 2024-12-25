<x-app-layout  meta-title="Search | NeCo EDC" meta-description="">
    
    @if(isset($query))
    <h2>Search Results for "{{ $query }}"</h2>
    @if($courses->isEmpty())
        <p>No courses found.</p>
    @else
        @foreach ($courses as $course)
            <div>
                <h3>{{ $course->title }}</h3>
                <p>{{ $course->description }}</p>
                <p>Category: {{ $course->category->title ?? 'No Category' }}</p>
            </div>
        @endforeach
    @endif
@else
    <h2>All Courses</h2>
    @foreach ($courses as $course)
        <div>
            <h3>{{ $course->title }}</h3>
            <p>{{ $course->description }}</p>
            <p>Category: {{ $course->category->title ?? 'No Category' }}</p>
        </div>
    @endforeach
@endif

</x-app-layout>

