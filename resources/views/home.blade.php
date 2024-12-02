@extends('layouts.app')

@section('content')
    <div class="container home-container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('Sveiki atvyke !') }}</div>

                    <div class="card-body text-center">
                        @guest
                            <p class="lead">Prisijunkite ar prisiregistruokite prie Paskaituno.</p>
                            <div class="buttons mt-4">
                                <a href="{{ route('login') }}" class="btn btn-primary mx-2">Login</a>
                                <a href="{{ route('register') }}" class="btn btn-secondary mx-2">Register</a>
                            </div>
                        @else
                            <p class="lead">You are logged in!</p>
                            <p>Thank you for being with us, {{ Auth::user()->name }}.</p>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

