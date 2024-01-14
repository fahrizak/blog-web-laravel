@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            {{-- Flash data --}}
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @elseif(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="card-title text-center">Please Login</h2>
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" required value="{{ old('email') }}" autofocus>
                            <label for="email">Email</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required">
                            <label for="password">Password</label>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
                    </form>
                    <p class="text-center">Don't have an account? <a href="/register">Register</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection