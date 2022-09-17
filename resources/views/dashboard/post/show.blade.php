@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail My Post</h1>
    </div>

    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success mb-3"><span data-feather="arrow-left"></span> Back to all my post</a>

                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mb-3"><span data-feather="edit"></span> Edit</a>

                <form class="d-inline" action="/dashboard/posts/{{ $post->slug }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger mb-3" onclick="return confirm('are you sure?')"><span data-feather="x-circle"></span> Delete</button>
                </form>

                @if ($post->image)
                    <div style="max-height: 400px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">  
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            
            </div>
        </div>
    </div>
    
@endsection