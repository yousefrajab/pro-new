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
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('site8ass/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand  {{ request()->url() == route('site8.index') ? 'active' : ''  }}"><a href="{{ route('site8.index') }}">Home</a></li>
                {{-- <li class="sidebar-nav-item"><a href="#page-top">Home</a></li> --}}
                <li class="sidebar-nav-item {{ request()->url() == route('site8.about') ? 'active' : ''  }}"><a href="{{ route('site8.about') }}">About</a></li>
                <li class="sidebar-nav-item {{ request()->url() == route('site8.services') ? 'active' : ''  }}"><a href="{{ route('site8.services') }}">Services</a></li>
                <li class="sidebar-nav-item {{ request()->url() == route('site8.callout') ? 'active' : ''  }}"><a href="{{ route('site8.callout') }}">Callout</a></li>
                <li class="sidebar-nav-item {{ request()->url() == route('site8.portfolio') ? 'active' : ''  }}"><a href="{{ route('site8.portfolio') }}">Portfolio</a></li>
                <li class="sidebar-nav-item {{ request()->url() == route('site8.contact') ? 'active' : ''  }}"><a href="{{ route('site8.contact') }}">Contact</a></li>
            </ul>
        </nav>

        @yield('content')
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container px-4 px-lg-5">
                <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="#!"><i class="icon-social-github"></i></a>
                    </li>
                </ul>
                <p class="text-muted small mb-0">Copyright &copy; Your Website 2022</p>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('site8ass/js/scripts.js') }}"></script>
    </body>
</html>
