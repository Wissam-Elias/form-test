@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1 class="display-4 mt-5">Welcome Sequenced Form Test Site</h1>
                <p class="lead">This site is done by Wissam Elias!</p>
                @guest
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg mt-3">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg mt-3">Register</a>
                @elseif (!Auth::user()->information)
                    <h3>hello {{ Auth::user()->name }}</h3>
                    <a href="{{ route('form.step1') }}" class="btn btn-primary btn-lg mt-3">Get Started</a>
                @else
                    <h3>Congrates you completed the form, you can see the results here</h3>
                    <a href="{{ route('form.result') }}" class="btn btn-primary btn-lg mt-3">Show Results</a>
                @endguest

            </div>
        </div>
    </div>
@endsection
