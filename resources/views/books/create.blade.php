@extends('layouts.app')

@section('content')
    <h1>☁️ Add to the Library ☁️</h1>
    @if(session('success'))
        <div style="background: #FFFFFF; border: 2px solid #AEE1F9; color: #5BA6D0; padding: 10px; border-radius: 20px; text-align: center; margin-bottom: 20px; font-weight: bold;">
            ✨ {{ session('success') }} ✨
        </div>
    @endif
    
    <div style="max-width: 500px; margin: 0 auto;">
        <form action="{{ route('books.store') }}" method="POST">
            @csrf

            <label for="title">Book Title</label>
            <input type="text" id="title" name="title" placeholder="Enter book name..." >

            <label for="author">Author</label>
            <input type="text" id="author" name="author" placeholder="Who wrote it?" >

            <label for="published_date">Published Date</label>
            <input type="date" id="published_date" name="published_date" >

            <div style="text-align: center; margin-top: 20px;">
                <button type="submit" class="btn btn-primary">✨ Add New Book</button>
                <br>
                <a href="{{ route('books.index') }}" style="display:inline-block; margin-top:15px; color: var(--cinna-dark-blue); text-decoration: none; font-size: 0.9rem;">
                    Go back to the bookshelf
                </a>
            </div>
        </form>
    </div>
@endsection