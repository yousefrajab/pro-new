
@extends('site8.master')
@section('content')
@section('title' , 'Home | Resume')
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1">Stylish Portfolio</h1>
                <h3 class="mb-5"><em>A Free Bootstrap Theme by Start Bootstrap</em></h3>
                <a class="btn btn-primary btn-xl" href="{{ route('site8.about') }}">Find Out More</a>
            </div>
        </header>
@stop
