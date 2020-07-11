<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaraHUB</title>
        <link rel="icon" href="{{ asset('img/favicon.png')}}" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('theme/css/bootstrap.min.css')}}" />
        <!-- animate CSS -->
        <link rel="stylesheet" href="{{ asset('theme/css/animate.css')}}" />
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{ asset('theme/css/owl.carousel.min.css')}}" />
        <!-- themify CSS -->
        <link rel="stylesheet" href="{{ asset('theme/css/themify-icons.css')}}" />
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="{{ asset('theme/css/flaticon.css')}}" />
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="{{ asset('theme/css/magnific-popup.css')}}" />
        <!-- swiper CSS -->
        <link rel="stylesheet" href="{{ asset('theme/css/slick.css')}}" />
        <!-- style CSS -->
        <link rel="stylesheet" href="{{ asset('theme/css/style.css')}}" />

    </head>
    <body>
        <header class="main_menu home_menu">
            <div class="container">
              <div class="row align-items-right">
                <div class="col-lg-12">
                  <nav class="navbar navbar-expand-lg navbar-light float-right">
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-toggle="collapse"
                      data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="ti-menu"></span>
                    </button>

                    <div
                      class="collapse navbar-collapse main-menu-item justify-content-center"
                      id="navbarSupportedContent"
                    >
                        <ul class="navbar-nav align-items-center">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/home') }}">Home</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                        @endauth
                        </ul>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </header>
        <section class="banner_part">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-1">
                  <div class="banner_text">
                    <div class="banner_text_iner">
                      <h5>Tanya Jawab Segala Hal tentang Pemrograman.</h5>
                      <h1>Digital and innovative idea</h1>
                      <a href="/question" class="btn_1">Explore Questions</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <footer class="sticky-footer" style="background-color: #00d089">
            <div class="container py-4">
              <div class="copyright text-center my-auto">
                <span>Copyright &copy; Final Project SanberCode Kelompok 71</span>
              </div>
            </div>
        </footer>
          <!-- footer part end-->

          <!-- jquery plugins here-->
          <script src="{{ asset('theme/js/jquery-1.12.1.min.js')}}"></script>
          <!-- popper js -->
          <script src="{{ asset('theme/js/popper.min.js')}}"></script>
          <!-- bootstrap js -->
          <script src="{{ asset('theme/js/bootstrap.min.js')}}"></script>
          <!-- easing js -->
          <script src="{{ asset('theme/js/jquery.magnific-popup.js')}}"></script>
          <!-- isotope js -->
          <script src="{{ asset('theme/js/isotope.pkgd.min.js')}}"></script>
          <!-- particles js -->
          <script src="{{ asset('theme/js/owl.carousel.min.js')}}"></script>
          <script src="{{ asset('theme/js/jquery.nice-select.min.js')}}"></script>
          <!-- custom js -->
          <script src="{{ asset('theme/js/custom.js')}}"></script>
    </body>
</html>
