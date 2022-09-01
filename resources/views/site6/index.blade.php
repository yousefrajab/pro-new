@extends('site6.master')
@section('content')
@section('title', 'Home | Resume')
<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h1 class="mx-auto my-0 text-uppercase">Grayscale</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">A free, responsive, one page Bootstrap theme created by Start
                    Bootstrap.</h2>
                <a class="btn btn-primary" href="{{ route('site6.about') }}">Get Started</a>
            </div>
        </div>
    </div>
</header>
@stop
