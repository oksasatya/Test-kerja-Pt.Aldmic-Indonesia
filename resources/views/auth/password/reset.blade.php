@extends('layouts.global')

@section('content')
    <section class="auth ff-inter min-vh-100">
        <div class="container">
            <div class="row justify-content-center py-0 py-md-4 py-xxl-5 mt-md-5">
                <div class="col-md-6 col-lg-5">
                    <div class="card border-0 radius-default shadow py-2 px-2 px-md-4">
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success mt-4" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <h4 class="fw-semibold mt-4 mb-0">Ubah Password</h4>
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="email" value="{{ $email }}">
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="mt-3">
                                    <label for="password" class="form-label fw-semibold">Password Baru</label>
                                    <input type="password"
                                        class="form-control {{ $errors->first('password') ? 'is-invalid' : '' }}"
                                        id="password" name="password" placeholder="Masukkan password baru Anda" required />
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <label for="password-confirm" class="form-label fw-semibold">Konfirmasi Password
                                        Baru</label>
                                    <input type="password"
                                        class="form-control  {{ $errors->first('password') ? 'is-invalid' : '' }} "
                                        id="password-confirm" name="password_confirmation"
                                        placeholder="Konfirmasi password baru Anda" required />
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary radius-default w-100 text-white mt-4">Ubah
                                    Password</button>
                            </form>
                            <div class="text-center mt-3">
                                <a href="{{ route('login') }}" class="link-warning text-decoration-none fs-14px">Kembali
                                    ke
                                    halaman Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
