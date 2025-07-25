<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('book-user.svg') }}" rel="icon">
    <link href="{{ asset('book-user.svg') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: SnapFolio
  * Template URL: https://bootstrapmade.com/snapfolio-bootstrap-portfolio-template/
  * Updated: Jun 13 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header dark-background d-flex flex-column justify-content-center">
        <i class="header-toggle d-xl-none bi bi-list"></i>

        <div class="header-container d-flex flex-column align-items-start">
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/" class="active"><i class="bi bi-house navicon"></i>Beranda</a></li>
                    <li><a href="#Tentang"><i class="bi bi-person navicon"></i> Tentang</a></li>
                    <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
                    <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
                    <li><a href="#Kontak"><i class="bi bi-envelope navicon"></i> Kontak</a></li>
                </ul>
            </nav>

            <div class="social-links text-center">
                <a href="https://x.com/AzizHadiid1" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="https://www.facebook.com/share/1fUG1GG9U8/" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/alhadiid_aziz?igsh=MWxncnd0bjBuOGt1Mw==" class="instagram"><i
                        class="bi bi-instagram"></i></a>
                <a href="https://github.com/azizhadiid" class="google-plus"><i class="bi bi-github"></i></a>
                <a href="https://www.linkedin.com/in/aziz-alhadiid/" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

        </div>

    </header>

    <main class="main">
        @yield('konten')
    </main>

    <footer id="footer" class="footer position-relative">

        <div class="container">
            <div class="copyright text-center ">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">Aziz.site</strong> <span>All Rights
                        Reserved</span></p>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="/">Aziz Alhadiid</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
