@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
       <div class="col-lg-8">
         <h1 class="mb-3">{{ $post->title }}</h1>

         <a href="/dashboard/posts" class="btn btn-success"
         style="display: inline-flex; justify-content: center; align-items: center; gap: 5px">
         <span data-feather="arrow-left"></span> Back to My Posts</a>

         <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"
         style="display: inline-flex; justify-content: center; align-items: center; gap: 5px">
         <span data-feather="edit"></span> Edit</a>

         <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger"
            style="display: inline-flex; justify-content: center; align-items: center; gap: 5px"
            onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Delete</button>
         </form>

         @if ($post->image)
         <div style="max-height: 420px; overflow:hidden;">
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
         </div>
         @else
         <img src="https://source.unsplash.com/700x400?{{ $post->category->slug }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
         @endif


          <article class="fs-5 my-3">
             {!! $post->body !!}
          </article>
       </div>
    </div>
 </div>

@endsection