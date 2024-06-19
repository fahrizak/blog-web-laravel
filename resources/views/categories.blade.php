@extends('layouts.main')
        
@section('container')
   <h1>Halaman {{ $title }}</h1>
    <br>


    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4 mb-4">
                <a href="/posts?category={{ $category->slug }}">
                    <div class="card bg-dark text-white">
                        <img src="https://picsum.photos/600/500?{{ $category->slug }}" class="card-img-top" style="filter: brightness(50%);" alt="{{ $category->name }}" class="card-img">
                        <div class="card-img-overlay" style="display: grid; place-items: center;">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>



@endsection