<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="{{asset('site/bootstrap/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('site/style.css')}}">
  <scrpit src="{{asset('site/bootstrap/js/bootstrap.js')}}"> </script>
  <link rel="stylesheet" href="{{asset('site/fontawesome')}}">
  <script src="https://kit.fontawesome.com/4238f96e7f.js" crossorigin="anonymous"></script>
</head>
<body>
  <section id="topheader">
    <div class="container">
      <div class="row">
        <div class="col-md-6 callus">
        </div>

        <div class="col-md-2 socialmedia facebook">
        <i class="fa-brands fa-facebook"></i>
        <a href="https://www.facebook.com/profile.php?id=100012158839829" target="_blank">Facebook</a>
        </div>

        <div class="col-md-2 socialmedia instagram">
        <i class="fa-brands fa-instagram"></i>
        <a href="https://www.instagram.com/zta.younjan/" target="_blank">Instagram</a>
        </div>

        <div class="col-md-2 socialmedia twitter">
        <i class="fa-brands fa-twitter"></i>
        <a href="https://twitter.com/alishabhj04" target="_blank">Twitter</a>
        </div>
      </div>
   
    </div>
  </section>

  <section id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-3 logo">
          <img src="{{asset('site/image/logo.png')}}" alt="logo" width=200px;>
        </div>

        <div class="col-md-3 contact">
          <small>Hotline</small>
          <i class="fa-solid fa-phone"></i>
          9816649251
        </div>

        <div class="col-md-4 email">
         <small>Email</small>
         <i class="fa-solid fa-envelope"></i>
         jitalama19@gmail.com
        </div>

        <div class="col-md-2 address">
        <small>Address</small>
        <i class="fa-solid fa-house"></i>
        Malepatan
        </div>
      </div>
    </div>
  </section>

  <section id="mainmenu">
    <div class="container">
      <div class="row">
        <ul>
          <li>
            <a href="{{route('getHome')}}">Home</a>
          </li>

          <li>
            <a href="{{route('getAbout')}}">About Us</a>
          </li>

          <li>
            <a href="{{route('getContact')}}">Contact us </a>
          </li>

          <li>
            <a href="{{route('getLoginSignup')}}">Login/Signup </a>
          </li>
        </ul>
      </div>
    </div>
  </section>
<!-- page ko content -->
@yield('meropage')


<footer class="footer">
<div class="container2">
    <div class="row">
        <div class="footer-col">
            <h4>
                <ul>
                    <li><a href="#"></a></li>
                </ul>
            </h4>
        </div>
        <div class="footer-col">
            <h4>Contact Detail</h4>
                <ul>
                    <li>Pokhara, Nepal</li>
                    <li>Tel: 829302</li>
                    <li>Email: infomaxcollege.edu.np</li>
                </ul>
        </div>
        <div class="footer-col">
            <h4>Opening Hours</h4>
                <ul>
                    <li><h6>Summer:</h6></li>
                    <li>Opening hour: 9:30 AM to 5:30 PM</li>
                    <li><h6>Winter:</h6></li>
                    <li>Opening hour: 9:30 AM to 4:30 PM</li>
                </ul>
        </div>
        <div class="footer-col">
            <h4>Quick Links</h4>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Notice/News</a></li>
                    <li><a href="#">Publications</a></li>
                    <li><a href="#">Services</a></li>
                </ul>
        </div>
    </div>
</div>
</footer>
</body>
</html>
