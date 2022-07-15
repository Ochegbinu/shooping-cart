<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="vendor/css/vertical-layout-light/style.css">

    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Friendly-Ecomm</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- Bootstrap core CSS -->
      <link href="{{ asset('vendor/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('vendor/css/style.css" rel="stylesheet')}}" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <!-- Toastr CSS -->
    <link href="{{ asset('vendor/css/toastr.css') }}" rel="stylesheet">


    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>

<body>
    <!-- header section strats -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                {{-- <a class="navbar-brand" href="index.html"><img width="250" src="images/logo.png"
                        alt="#" /></a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"
                                data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span
                                    class="nav-label">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                        {{-- <li><a href="">Logout</a></li> --}}
                                    </form>
                                </div>
                            </ul>
                        </li>
                        {{-- <form class="form-inline">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form> --}}
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->
    <div id="app">
        <div class="row">
            <div class="col-3">
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{">All Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('category')}}">Create Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('allCategory')}}">All Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('createProduct')}}">Create Product</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col-9">
                @yield('content')
            </div>


        </div>
    </div>











    <!--   Core JS Files   -->
    <script src="{{ asset('vendor/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('vendor/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/js/toastr.js') }}"></script>


    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>

</body>

</html>
