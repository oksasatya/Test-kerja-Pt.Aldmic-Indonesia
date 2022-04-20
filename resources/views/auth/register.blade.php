@extends('layouts.global')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
    <form action="{{ route('send.register') }}" method="POST">
        @csrf
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Register</h4>
                        </div>
                        <div class="card-body">
                            {{-- name --}}
                            <div class="form-group">
                                <label for="name" class="mt-3">Full Name</label>
                                <input type="name"
                                    class="form-control mt-2  {{ $errors->first('name') ? 'is-invalid' : '' }}" id="name"
                                    name="name" placeholder="Nama Anda" value="{{ old('name') }}" required>
                            </div>
                            @error('name')
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror
                            {{-- email --}}
                            <div class="form-group">
                                <label for="email" class="mt-3">Email</label>
                                <input type="email"
                                    class="form-control mt-2  {{ $errors->first('email') ? 'is-invalid' : '' }}"
                                    id="email" name="email" placeholder="email Anda" value="{{ old('email') }}" required>
                            </div>
                            @error('email')
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror
                            {{-- password --}}
                            <div class="form-group" class="">
                                <label for="password" class="mt-4">Password</label>
                                <input type="password"
                                    class="form-control mt-2  {{ $errors->first('password') ? 'is-invalid' : '' }}"
                                    id="password" name="password" placeholder="password Anda" required>
                            </div>
                            @error('password')
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror
                            {{-- password confirmation --}}
                            <div class="form-group" class="">
                                <label for="password_confirmation" class="mt-4">Password Confirmation</label>
                                <input type="password"
                                    class="form-control mt-2  {{ $errors->first('password') ? 'is-invalid' : '' }}"
                                    id="password_confirmation" name="password_confirmation"
                                    placeholder="Konfirmasi Password" required>
                            </div>
                            @error('password')
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror
                            {{-- register --}}
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-block mt-3">Register</button>
                            </div>
                            <hr>
                            {{-- Login account --}}
                            <div class="d-flex justify-content-center">
                                <span class="mt-1 me-2">Have an account? </span><a href="{{ route('login') }}"
                                    class="btn btn-success btn-sm">Log
                                    in</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
@endsection
