@extends('layouts.global')
@extends('layouts.footer')
@extends('layouts.navbar')
@section('content')
    <h1>Hallo {{ Auth::user()->name }}</h1>
@endsection
