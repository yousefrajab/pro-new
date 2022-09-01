<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title' , env('APP_NAME'))</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('site7ass/css/styles.css') }}" rel="stylesheet" />
    </head>
    {{-- <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            {{-- <a class="navbar-brand" href="{{ route('site7.index') }}">Start Bootstrap</a> --}}
            {{-- <a class="btn btn-primary" href="{{ route('site7.call') }}">Sign Up</a> --}}
            {{-- <div class="collapse navbar-collapse" id="navbarResponsive">
                 <a class="btn btn-primary" href="{{ route('site7.call') }}">Sign Up</a> --}}

            {{-- </div> --}}

        {{-- </div>
    </nav>  --}}
    <nav class="navbar navbar-expand-lg bg-light navbar-toggler fixed-top" id="mainNav">
        {{-- navbar navbar-light bg-light static-top --}}

    <div class="container-fluid navbar-light  ">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        {{-- <a class="btn btn-primary" href="{{ route('site7.call') }}">Sign Up</a> --}}

        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ">
                <li class="nav-item"><a class="nav-link js-scroll-trigger {{ request()->url() == route('site7.index') ? 'active' : ''  }}" href="{{ route('site7.index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger {{ request()->url() == route('site7.icons') ? 'active' : ''  }}" href="{{ route('site7.icons') }}">Icons</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger {{ request()->url() == route('site7.image') ? 'active' : ''  }}" href="{{ route('site7.image') }}">Image</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger {{ request()->url() == route('site7.testimonials') ? 'active' : ''  }}" href="{{ route('site7.testimonials') }}">Testimonials</a></li>
                {{-- <li class="nav-item"><a class="nav-link js-scroll-trigger {{ request()->url() == route('site7.call') ? 'active' : ''  }}" href="{{ route('site7.call') }}">Call</a></li> --}}

            </ul>
        </div>
           <a class="btn btn-primary" href="{{ route('site7.call') }}">Sign Up</a>

    </div>
    </nav>
    {{-- <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link js-scroll-trigger " href="{{ route('site7.icons') }}">Icons</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger " href="{{ route('site7.image') }}">Image</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger " href="{{ route('site7.testimonials') }}">Testimonials</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger " href="{{ route('site7.call') }}">Call</a></li>

        </ul>
    </div> --}}
    <body>
    @yield('content')
        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="#!">About</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Contact</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2022. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('site7ass/js/scripts.js') }}"></script>
        {{-- <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> --}}
    </body>
</html>
