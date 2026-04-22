@extends('layouts.app')

@section('content')
    <h1>☁️ Edit Book Details ☁️</h1>
    
    <div style="max-width: 500px; margin: 0 auto;">
        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="title">Book Title</label>
            <input type="text" id="title" name="title" value="{{ $book->title }}" required>

            <label for="author">Author</label>
            <input type="text" id="author" name="author" value="{{ $book->author }}" required>

            <label for="published_date">Published Date</label>
            <input type="date" id="published_date" name="published_date" value="{{ $book->published_date }}" required>

            <div style="text-align: center;">
                <button type="submit" class="btn btn-primary">✨ Save Changes</button>
                <a href="{{ route('books.index') }}" style="display:block; margin-top:15px; color: var(--cinna-dark-blue);">Back to Library</a>
            </div>
        </form>
    </div>
@endsection