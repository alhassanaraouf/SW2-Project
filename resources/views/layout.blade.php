<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <link rel="icon" href="/pics/logo.png" type="image/png" sizes="16x16">
  <title>@yield('title','FCIH')</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/css/header.css" rel="stylesheet" type="text/css">
 <link href="/css/nav.css" rel="stylesheet" type="text/css">
</head>
    <body>
<script src="/js/top.js"></script>
    <div class="w3-bar w3-dark-grey">
    <img src="/pics/logo.png" width="37" height="37" class="w3-bar-item ">
    <a href="/" class="w3-bar-item w3-button">Home</a>
    <div class="w3-dropdown-hover">
      <button class="w3-button">Main Menu</button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#about" class="w3-bar-item w3-button">About Us</a>
        <a href="#team" class="w3-bar-item w3-button">Team Members</a>
        <a href="#manual" class="w3-bar-item w3-button">Manual</a>
      </div>
    </div>
  <a href="/login" class="w3-bar-item w3-button w3-blue w3-right" id="login">Login</a>
  </div>
    <div class="header-image">
  <div class="header-text">
    <h1>Faculty of Computers and Infromation</h1>
    <p>We're an Eductional Website, to facilitate the communication between students,instructors and the management.</p>
    <a href="register"><button>Register Now</button></a>
  </div>
</div>
@yield('content')

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
