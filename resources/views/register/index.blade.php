@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h2 class="card-title text-center">Registration Form</h2>
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter your name" required value="{{ old('name') }}">
                            <label for="name">Name</label>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}  
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Enter your username" required value="{{ old('username') }}">
                            <label for="username">Username</label>
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email" required value="{{ old('email') }}">
                            <label for="email">Email</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter your password">
                            <label for="password">Password</label>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mb-3">Register</button>
                    </form>
                    <p class="text-center">Already have an account? <a href="/login">Login</a></p>
                </div>
@endsection
