@extends('site10.master')
@section('content')
@section('title' , 'Download | Resume')
        <!-- App badge section-->
        <section class="cta">
            <div class="cta-content">
                <div class="container px-5">
                    <h2 class="text-white display-1 lh-1 mb-4">
                        Stop waiting.
                        <br />
                        Start building.
                    </h2>
                    <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="https://startbootstrap.com/theme/new-age" target="_blank">Download for free</a>
                </div>
            </div>
        </section>
<section class="bg-gradient-primary-to-secondary" id="download">
    <div class="container px-5">
        <h2 class="text-center text-white font-alt mb-4">Get the app now!</h2>
        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
            <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="{{ asset('site10ass/assets/img/google-play-badge.svg') }}" alt="..." /></a>
            <a href="#!"><img class="app-badge" src="{{ asset('site10ass/assets/img/app-store-badge.svg') }}" alt="..." /></a>
        </div>
    </div>
</section>

 @stop



