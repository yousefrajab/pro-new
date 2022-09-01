

@extends('site4.master')
@section('content')
@section('title', 'Home | Resume')
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Studio!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="{{ route('site4.services') }}">Tell Me More</a>
            </div>
        </header>
   @stop
