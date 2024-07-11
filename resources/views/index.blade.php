<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title') | Gestha Laudya</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon-2.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="{{ asset('assets/img/profile-image.jpg') }}" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="index.html">Gestha Laudya Putri</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="https://www.facebook.com/profile.php?id=100074879332287" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/laudya_putri18?igsh=bXd6NHg5bHc0cm1w" class="instagram"><i
                            class="bx bxl-instagram"></i></a>
                    <a href="https://wa.me/6281264299269" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                    <a href="https://youtube.com/@gesthalaudya?si=X1pErNvDDzu-8g9Z" class="youtube"><i
                            class="bx bxl-youtube"></i></a>
                    
                </div>
            </div>


            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="{{ route('home') }}"
                            class="nav-link {{ request()->is('home') ? 'active' : '' }}"><i class="bx bx-home"></i>
                            <span>Home</span></a></li>
                    <li><a href="{{ route('about') }}"
                            class="nav-link {{ request()->is('about') ? 'active' : '' }}"><i class="bx bx-user"></i>
                            <span>About</span></a></li>
                    {{-- <li><a href="#resume" class="nav-link"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li> --}}
                    <li><a href="{{ route('portfolio') }}"
                            class="nav-link {{ request()->is('portfolio') ? 'active' : '' }}"><i
                                class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
                    {{-- <li><a href="#services" class="nav-link"><i class="bx bx-server"></i> <span>Services</span></a></li> --}}
                    <li><a href="{{ route('blog') }}"
                            class="nav-link {{ request()->is('blog') ? 'active' : '' }}"><i class="bx bx-pen"></i>
                            <span>Blog</span></a></li>
                    <li><a href="{{ route('contact') }}"
                            class="nav-link {{ request()->is('contact') ? 'active' : '' }}"><i
                                class="bx bx-envelope"></i> <span>Contact</span></a></li>
                    {{-- <li><a href="{{ route('administrator') }}" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> <span>Log in</span></a></li> --}}
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <main id="main">
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Gestha Laudya</span></strong>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
