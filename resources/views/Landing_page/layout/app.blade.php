<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AmaTrip - Edu Platorm</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Alex+Brush"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../assets/css_lp/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css_lp/animate.css" />

    <link rel="stylesheet" href="../assets/css_lp/owl.carousel.min.css" />
    <link rel="stylesheet" href="../assets/css_lp/owl.theme.default.min.css" />
    <link rel="stylesheet" href="../assets/css_lp/magnific-popup.css" />

    <link rel="stylesheet" href="../assets/css_lp/aos.css" />

    <link rel="stylesheet" href="../assets/css_lp/ionicons.min.css" />

    <link rel="stylesheet" href="../assets/css_lp/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="../assets/css_lp/jquery.timepicker.css" />

    <link rel="stylesheet" href="../assets/css_lp/flaticon.css" />
    <link rel="stylesheet" href="../assets/css_lp/icomoon.css" />
    <link rel="stylesheet" href="../assets/css_lp/style.css" />
    @yield('style')
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
      id="ftco-navbar"
    >
      <div class="container">
        <a class="navbar-brand" href="index.html">AmaTrip</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#ftco-nav"
          aria-controls="ftco-nav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="{{route('lp')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="{{route('about')}}" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="{{route('tour')}}" class="nav-link">Tour</a>
            </li>
            <li class="nav-item">
              <a href="{{route('blog')}}" class="nav-link">Blog</a>
            </li>
            <li class="nav-item cta">
              <a href="{{route('login')}}" class="nav-link"
                ><span>Login</span></a
              >
            </li>
            <li class="nav-item cta" style="margin-left: 5px;">
              <a href="#" class="nav-link"
                ><span>Join as a partner</span></a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @yield('content')
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">AmaTrip</h2>
              <p>Journey With Heart And Herritage.</p>
              <ul
                class="ftco-footer-social list-unstyled float-md-left float-lft mt-5"
              >
                <li class="ftco-animate">
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Service</a></li>
                <li>
                  <a href="#" class="py-2 d-block">Terms and Conditions</a>
                </li>
                <li><a href="#" class="py-2 d-block">Become a partner</a></li>
                <li>
                  <a href="#" class="py-2 d-block">Best Price Guarantee</a>
                </li>
                <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li>
                    <span class="icon icon-map-marker"></span
                    ><span class="text"
                      >203 Fake St. Mountain View, San Francisco, California,
                      USA</span
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><span class="icon icon-phone"></span
                      ><span class="text">+2 392 3929 210</span></a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><span class="icon icon-envelope"></span
                      ><span class="text">info@yourdomain.com</span></a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              All rights reserved | This template is made with
              <i class="icon-heart" aria-hidden="true"></i> by
              <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle
          class="path-bg"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke="#eeeeee"
        />
        <circle
          class="path"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke-miterlimit="10"
          stroke="#F96D00"
        />
      </svg>
    </div>

    <script src="../assets/js_lp/jquery.min.js"></script>
    <script src="../assets/js_lp/jquery-migrate-3.0.1.min.js"></script>
    <script src="../assets/js_lp/popper.min.js"></script>
    <script src="../assets/js_lp/bootstrap.min.js"></script>
    <script src="../assets/js_lp/jquery.easing.1.3.js"></script>
    <script src="../assets/js_lp/jquery.waypoints.min.js"></script>
    <script src="../assets/js_lp/jquery.stellar.min.js"></script>
    <script src="../assets/js_lp/owl.carousel.min.js"></script>
    <script src="../assets/js_lp/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js_lp/aos.js"></script>
    <script src="../assets/js_lp/jquery.animateNumber.min.js"></script>
    <script src="../assets/js_lp/bootstrap-datepicker.js"></script>
    <script src="../assets/js_lp/jquery.timepicker.min.js"></script>
    <script src="../assets/js_lp/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="../assets/js_lp/google-map.js"></script>
    <script src="../assets/js_lp/main.js"></script>
  </body>
</html>
