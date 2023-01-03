<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codescandy.com/coach/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Dec 2022 17:34:51 GMT -->
<head>
    <title>Coach - Fatima Zekhnini</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/libs/tiny-slider/dist/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/libs/ion-rangeslider/css/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/libs/litepicker/dist/css/litepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/theme.min.css') }}">
</head>

<body>

    <!-- header -->
    <div class="header fixed-top border-top-3 border-top border-primary">
      <!-- navigation start -->
      <div class="container-lg">
        <nav class="navbar navbar-expand-lg navbar-default">
          <a class="navbar-brand" href="index-2.html"><img src="{{ asset('/assets/images/logo.svg') }}" alt="" /></a>
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-default"
            aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar top-bar mt-0"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar-default">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-default"
              aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-times"></i>
            </button>
            <ul class="navbar-nav ml-auto mr-lg-3 ">
              <li class="nav-item dropdown disabled">
                <a class="nav-link d-lg-none" href="#!">
                  Menu
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">
                  Accueil
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/#help') }}">
                  How can i help you?
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/#Cert') }}">
                  Certifications
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}">
                  À propos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}">
                  Contact
                </a>
              </li>
            </ul>
            <div class="header-btn ">
              <a href="{{ url('/') }}" class="btn btn-primary btn-sm ">Lab’Oratoire</a>
            </div>
          </div>
        </nav>
      </div>
      <!-- navigation close -->
    </div>

    @yield('content')
    <!-- footer -->

    <div class="footer pt-11 pb-3 bg-dark text-base">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="mb-4">
                        <h4 class="mb-4 text-white">Links</h4>
                        <ul class="list-unstyled list-group">
                            <li class="list-group-item"><a href="{{ url('/') }}" class="list-group-item-link">Acceuil</a></li>
                            <li class="list-group-item"><a href="{{ url('/#help') }}" class="list-group-item-link">How can i help you?</a></li>
                            <li class="list-group-item"><a href="{{ url('/#Cert') }}" class="list-group-item-link">Certifications</a></li>
                            <li class="list-group-item"><a href="{{ url('/about') }}" class="list-group-item-link"> À propos</a></li>
                            <li class="list-group-item"><a href="{{ url('/contact') }}" class="list-group-item-link">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="mb-4">
                        <h4 class="mb-4 text-white ">Blog</h4>
                        <ul class="list-unstyled list-group ">
                            <li class="list-group-item"><a href="#!" class="list-group-item-link">Business Coaching</a></li>
                            <li class="list-group-item"><a href="#!" class="list-group-item-link">Relationship</a></li>
                            <li class="list-group-item"><a href="#!" class="list-group-item-link">Leadership</a></li>
                            <li class="list-group-item"><a href="#!" class="list-group-item-link">Life Coaching</a></li>
                            <li class="list-group-item"><a href="#!" class="list-group-item-link">Time Management</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-12">
                    <div class="mb-4">
                        <h4 class="mb-4 text-white">Subscribe to our newsletter</h4>
                        <div class="">
                            <p>Subscribe to get notified daily new motivational & inspiration tips.</p>
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control border-white" placeholder="Email Address" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mt-8">
                        <ul class="list-inline">
                            <li class="list-inline-item">© <script>document.write(new Date().getFullYear())</script> Coach, Inc.</li>
                            <li class="list-inline-item"><a href="#!" class="text-reset"> Privacy Policy </a></li>
                            <li class="list-inline-item"><a href="#!" class="text-reset"> Terms</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->


    <!-- Libs JS -->
    <script src="{{ asset('/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/prismjs/prism.js') }}"></script>
    <script src="{{ asset('/assets/libs/leaflet/dist/leaflet.js') }}"></script>
    <script src="{{ asset('/assets/libs/litepicker/dist/litepicker.js') }}"></script>
    <script src="{{ asset('/assets/libs/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/inputmask/dist/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/tiny-slider/dist/min/tiny-slider.js') }}"></script>


    <!-- clipboard -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.min.js" integrity="sha512-iJh0F10blr9SC3d0Ow1ZKHi9kt12NYa+ISlmCdlCdNZzFwjH1JppRTeAnypvUez01HroZhAmP4ro4AvZ/rG0UQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <!-- Theme JS -->
    <script src="{{ asset('/assets/js/theme.min.js') }}"></script>
  </body>

<!-- Mirrored from codescandy.com/coach/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Dec 2022 17:35:34 GMT -->
</html>