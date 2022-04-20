@extends('layouts.global')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
    <form action="{{ route('send.login') }}" method="POST">
        @csrf
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Login</h4>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="card-body bg-body rounded">
                            <div class="form-group">
                                <label for="email" class="mt-3">Email</label>
                                <input type="email"
                                    class="form-control mt-2 {{ $errors->first('email') ? 'is-invalid' : '' }}" id="email"
                                    name="email" placeholder="Masukkan email" required>
                            </div>
                            @error('email')
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group" class="">
                                <label for="password" class="mt-4">Password</label>
                                <input type="password"
                                    class="form-control mt-2 {{ $errors->first('password') ? 'is-invalid' : '' }}"
                                    id="password" name="password" placeholder="Masukkan password" required>
                            </div>
                            @error('password')
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-block mt-3">Login</button>
                            </div>
                            <hr>
                            {{-- create new account --}}
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('register') }}" class="btn btn-warning btn-block mt-2 ">Create
                                    New
                                    Account</a>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('password.request') }}"
                                    class="d-flex justify-content-end link-orange text-decoration-none fs-14px">forgot
                                    password?</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
