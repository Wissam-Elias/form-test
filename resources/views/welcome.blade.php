@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-4 mt-5">Welcome Sequenced Form Test Site</h1>
            <p class="lead">This site is done by Wissam Elias!</p>
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg mt-3">Login</a>
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg mt-3">Register</a>
        </div>
    </div>
</div>
@endsection
