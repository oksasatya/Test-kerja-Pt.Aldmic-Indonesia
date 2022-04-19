@extends('layouts.global')

@section('content')
    <form action="" method="POST">
        @csrf
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form2Example1" class="form-control" />
                        <label class="form-label" for="form2Example1">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="form2Example2" class="form-control" />
                        <label class="form-label" for="form2Example2">Password</label>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-primary">Sign in</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Submit button -->

        </div>
    </form>
@endsection
