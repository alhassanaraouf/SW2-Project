<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="icon" href="/pics/logo.png" type="image/png" sizes="16x16">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="/css/header.css" rel="stylesheet" type="text/css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FCIH</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <script src="/js/top.js"></script>
    <div class="w3-bar w3-dark-grey">
    <img src="/pics/logo.png" width="37" height="37" class="w3-bar-item ">
    <a href="/" class="w3-bar-item w3-button">Home</a>
  <a href="/login" class="w3-bar-item w3-button w3-blue w3-right">Login</a>
  </div>
    <div class="header-image">
  <div class="header-text">
    <h1>Faculty of Computers and Infromation</h1>
    <p>We're an Eductional Website, to facilitate the communication between students,instructors and the management.</p>
    <a href="register"><button>Register Now</button></a>
  </div>
</div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                        <!-- Authentication Links -->
                        @guest

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
        <section class="footer" id="contact" style="background-color: #008080 ;color: white;">
    <div >
        <div class="row">
            <div >
                <h2 class="section-heading"><img src="/pics/int.png" width="50" height="45">Let's Get In Touch!</h2>
                <hr class="my-4">
                <p class="mb-5">If You Face Any Problem With Oursite, Please Send Us A Message Or Call us.<br> We'll Always Be In Your Services.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center">
                <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
                <p><img src="/pics/phone.png" width="25" height="20">&nbsp 123-456-6789</p>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
                <p>
                    <a style="color: #ffffff;" href="mailto:your-email@your-domain.com"><img src="/pics/feedback.png" width="25" height="25">&nbsp feedback@FCIH.edu</a>
                </p>
            </div>
            <p><img src="/pics/c.png" width="30" height="30">Copyrights FCIH</p>
        </div>
    </div>
</section>
        <a id="back2Top" title="Back to top" href="#">&#10148;</a>
</body>
</html>
