
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <link rel="manifest" href="manifest.json" crossorigin>
    <meta name="msapplication-config" content="browserconfig.xml">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" img src="{{ asset('agon/imgs/template/ava_1.png') }}">
    <link href="{{ asset('agon/css/style.css') }}" rel="stylesheet">
    <title>Sentra KI Politeknik Negeri Bali</title>
  </head>
  <body>
    <!-- Preloader Start-->
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center">
            <div class="loader"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 d-none d-md-block"><span>Kampus Politeknik Negeri Bali, Bukit Jimbaran, Kuta Selatan, Badung - Bali 80361</span></div>
          <div class="col-lg-6 col-md-6 text-end"><a class="text-body-text line-right" href="#">(+01) - 456 789</a><a class="text-body-text" href="/cdn-cgi/l/email-protection#5d3e3233293c3e291d3c3a3233733e3230"><span class="__cf_email__" data-cfemail="365559584257554276575159581855595b">[email&#160;protected]</span></a></div>
        </div>
      </div>
    </div>
    <header class="header sticky-bar">
      <div class="container">
        <div class="main-header">
          <div class="header-left">
            <div class="header-logo"><a class="d-flex" href="#"><img alt="Agon" src="{{ asset('agon/imgs/template/logo_PNB.png') }}" height="100" width="150"></a></div>
            <div class="header-nav">
              <nav class="nav-main-menu d-none d-xl-block">
                <ul class="main-menu">
                  <li><a class="active" href="#">Home</a></li>
                  <li class="has-children"><a href="#">Profile</a>
                    <ul class="sub-menu">
                      <li><a href="#"><i class="fi fi-rr-star"></i>Latar Belakang</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Sejarah</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Lingkup Kegiatan</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Tujuan Kegiatan</a></li>
                      <li><a href="{{ route('profile.strukturOrg') }}"><i class="fi fi-rr-star"></i>Struktur Organisasi</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Pengelola</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Pelayanan Internal</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="#">Produk KI</a>
                    <ul class="sub-menu">
                      <li><a href="{{ route('produk.paten') }}"><i class="fi fi-rr-star"></i>Paten</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Paten Sederhana</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Hak Cipta</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="#">Pendaftaran</a>
                    <ul class="sub-menu">
                      <li><a href="{{ route('paten.index') }}"><i class="fi fi-rr-star"></i>Permohonan Paten</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Pendaftaran Hak Cipta</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Pendaftaran Merek</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Pendaftaran Desain Industri</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="#">Pengenalan</a>
                    <ul class="sub-menu">
                      <li><a href="{{ route('pengenalan.paten') }}"><i class="fi fi-rr-star"></i>Pengenalan Paten</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Pengenalan Hak Cipta</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Pengenalan Merek</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Pengenalan Desain Industri</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('contact.contactUs') }}">Contact Us</a></li>
                </ul>
              </nav>
              <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
            </div>
          </div>
          <div class="header-right">
            {{-- <div class="block-signin"><a class="btn btn-default hover-up icon-arrow-right" href="page-signup.html">Get Started</a></div> --}}
          </div>
        </div>
      </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
      <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
          <div class="user-account"><img src="{{ asset('agon/imgs/template/ava_1.png') }}" alt="Agon">
            <div class="content">
              <h6 class="user-name">Hi <span class="text-brand">Steven !</span></h6>
              <p class="font-xs text-muted">You have 5 new messages</p>
            </div>
          </div>
        </div>
        <div class="mobile-header-content-area">
          <div class="perfect-scroll">       
            <div class="mobile-menu-wrap mobile-header-border">
              <!-- mobile menu start-->
              <nav>
                <ul class="mobile-menu font-heading">
                  <li><a class="active" href="#">Home</a></li>
                  <li class="has-children"><a href="#">Profile</a>
                    <ul class="sub-menu">
                      <li><a href="#"><i class="fi fi-rr-star"></i>Latar Belakang</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Sejarah</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Lingkup Kegiatan</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Tujuan Kegiatan</a></li>
                      <li><a href="{{ route('profile.strukturOrg') }}"><i class="fi fi-rr-star"></i>Struktur Organisasi</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Pengelola</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Pelayanan Internal</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="#">Produk KI</a>
                    <ul class="sub-menu">
                      <li><a href="{{ route('produk.paten') }}"><i class="fi fi-rr-star"></i>Paten</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Paten Sederhana</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Hak Cipta</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="#">Pendaftaran</a>
                    <ul class="sub-menu">
                      <li><a href="{{ route('paten.index') }}"><i class="fi fi-rr-star"></i>Permohonan Paten</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Pendaftaran Hak Cipta</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Pendaftaran Merek</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Pendaftaran Desain Industri</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="#">Pengenalan</a>
                    <ul class="sub-menu">
                      <li><a href="{{ route('pengenalan.paten') }}"><i class="fi fi-rr-star"></i>Pengenalan Paten</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Pengenalan Hak Cipta</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Pengenalan Merek</a></li>
                      <li><a href="#"><i class="fi fi-rr-star"></i>Pengenalan Desain Industri</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('contact.contactUs') }}">Contact Us</a></li>
                </ul>
              </nav>
              <!-- mobile menu end-->
            </div>
            
            {{-- <div class="site-copyright color-gray-400">Copyright 2022 &copy; Agon - Agency Template. <br>Designed by<a href="http://alithemes.com">&nbsp; AliThemes</a></div> --}}
          </div>
        </div>
      </div>
    </div>

    @yield('content')
    
    <!-- Footer-->
    <footer class="footer mt-50">
      <div class="container">
        
        
        <div class="footer-bottom mt-20">
          <div class="row">
            <div class="col-md-6"><span class="color-gray-400 text-body-lead">&copy; Sentra KI Politeknik Negeri Bali 2024</span></div>
            <div class="col-md-6 text-center text-lg-end text-md-end">
              <div class="footer-social"><a class="icon-socials icon-facebook" href="https://facebook.com" target="_blank"></a><a class="icon-socials icon-twitter" href="https://twitter.com" target="_blank"></a><a class="icon-socials icon-instagram" href="https://www.instagram.com" target="_blank"></a><a class="icon-socials icon-linkedin" href="https://www.linkedin.com" target="_blank"></a></div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset('agon/js/vendors/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('agon/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('agon/js/vendors/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('agon/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('agon/js/vendors/waypoints.js') }}"></script>
    <script src="{{ asset('agon/js/vendors/wow.js') }}"></script>
    <script src="{{ asset('agon/js/vendors/magnific-popup.js') }}"></script>
    <script src="{{ asset('agon/js/vendors/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('agon/js/vendors/select2.min.js') }}"></script>
    <script src="{{ asset('agon/js/vendors/isotope.js') }}"></script>
    <script src="{{ asset('agon/js/vendors/scrollup.js') }}"></script>
    <script src="{{ asset('agon/js/vendors/counterup.js') }}"></script>
    <script src="{{ asset('agon/js/vendors/slick.js') }}"></script>
    <script src="{{ asset('agon/js/vendors/jquery.elevatezoom.js') }}"></script>
    <script src="{{ asset('agon/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('agon/js/vendors/noUISlider.js') }}"></script>
    <script src="{{ asset('agon/js/vendors/slider.js') }}"></script>
    <script src="{{ asset('agon/js/main.js?v=1.0') }}"></script>
  </body>
</html>