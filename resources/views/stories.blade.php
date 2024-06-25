@extends('layouts.app')
<br><br><br><br>

@section('content')
    <h2>Stories</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('stories.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="body">Content</label>
            <textarea id="body" name="body" rows="5" required></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>

    <h3>Submitted Stories</h3>
    @foreach($stories as $story)
        <article>
            <h4>{{ $story->title }}</h4>
            <p>{{ $story->body }}</p>
            <hr>
        </article>
    @endforeach
@endsection
