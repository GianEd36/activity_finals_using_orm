@extends('layouts.app')

@section('content')
    <h1>☁️ Welcome to Cinnamoroll's Library ☁️</h1>

    <div style="text-align: center; margin-bottom: 30px;">
        <a href="{{ route('books.create') }}" class="btn btn-primary">+ Add New Book</a>
    </div>

    @foreach ($books as $book)
        <div style="background: white; border-radius: 20px; padding: 15px; margin-bottom: 15px; border-left: 8px solid var(--cinna-blue); display: flex; justify-content: space-between; align-items: center;">
            <div>
                <strong style="font-size: 1.2rem;">{{ $book->title }}</strong><br>
                <span style="font-size: 0.9rem; opacity: 0.8;">{{ $book->author }} • {{ $book->published_date }}</span>
            </div>
            <div>
                <a href="{{ route('books.edit', $book->id) }}" style="color: var(--cinna-dark-blue); font-weight: bold; text-decoration: none;">Edit</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="btn-delete" 
                            onclick="return confirm('☁️ Oh no! Are you sure you want to remove this book from Cinnamoroll\'s library? ☁️')"
                            style="background: #F9C8D9; border: none; padding: 8px 20px; border-radius: 20px; color: white; cursor: pointer; font-weight: bold;">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    @endforeach
@endsection