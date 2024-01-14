@extends('layouts.main')
        
@section('container')

   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }} </a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

            @if ($post->image)
            <div style="max-height: 450px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
            </div>
            @else
            <img src="https://source.unsplash.com/700x400?{{ $post->category->slug }}" class="img-fluid" alt="{{ $post->category->name }}">
            @endif
            <article class="fs-5 my-3">
               {!! $post->body !!}
            </article>

            <a href="/posts">Back to Post</a>
         </div>
      </div>
   </div>


   
@endsection
