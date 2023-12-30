<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>KamarKosong</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('img/KamarKosong logo pintu aja.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
  .mySlides {display:none}
  .w3-left, .w3-right, .w3-badge {cursor:pointer}
  .w3-badge {height:13px;width:13px;padding:0}
  </style>

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

  <!--==========================
    Header
  ============================-->
  <header id="header" style="height: 115px">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><img src="{{ asset('img/KamarKosong logo pintu aja.png') }}" width="50" height="50" style="margin-right: 10px;">Kamar<span>Kosong</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="{{ asset('img/logo.png') }}" alt="" title="" /></a>-->
        <br>
        <h1 style="font-size: 16px; margin-top: -10px;">
          <a href="{{url('')}}">Beranda </a>
          <i class="fa fa-angle-double-right"></i>
          <a style="color: #50d8af;" href="#">Detail Kos</a>
        </h1>
        <br>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class=""><a href="{{url('')}}" style="font-size: 16px ">Beranda</a></li>
          <li><a style="font-size: 16px ">Masuk</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="" style="width:100%; height: 320px; background-color: #f4f4f4">
    <div class="w3-content w3-display-container">
      <img class="mySlides" src="{{ Storage::url($data->image) }}" style="width:100%; height: 300px">
      <img class="mySlides" src="{{ asset('img/intro-carousel/kost jimbaran bali-16.jpg') }}" style="width:100%; height: 300px">
      <img class="mySlides" src="{{ asset('img/intro-carousel/bisnis-kos-kosan.jpg') }}" style="width:100%; height: 300px">

      <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
        <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
        <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      </div>
    </div>

    <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function currentDiv(n) {
      showDivs(slideIndex = n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      x[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " w3-white";
    }
    </script>

  </section>

  <section id="team" class="wow fadeInUp">
      <div class="container">
      <div class="section-header" style="font-size: 25px; text-align: center;">
              <h2>{{ $data->nama_kos }}</h2>
              <hr>
            </div>
        <div class="row" style="padding-right: 120px; padding-left: 120px">
          <div class="col-lg-9 content">


            <div class="padding-0 box-v4-alert">
              <p style="font-size: 16px; "><b>Fasilitas : </b><br>
                @php
                    $fasilitas = explode(',', $data->fasilitas);
                @endphp
                @foreach ($fasilitas as $f)
                <i style="padding-left: 100px">{{ $f }}</i><br>
                @endforeach
              </p>

              <p style="font-size: 16px; "><b>Luas Kamar : </b>{{ $data->luas_kamar }}</p>
              <p style="font-size: 16px; "><b>Keterangan Biaya Lain : </b> {{ $data->ket_biaya_lain }} </p>

            </div>
          </div>

          <div class="col-lg-3 col-md-6" style="background-color: #b5ffd6; padding: 15px; height: 330px;">
            <div class="member"  >
              <div class="details">
                <h4 style="font-size: 35px">Tersedia<br>{{ $data->jumlah }} Kamar</h4>
                <hr>
                <span style="font-size: 15px"><b>Rp. {{ number_format($data->harga,0,",",".") }} / bulan</b></span>
                <span>{{ $data->alamat }}</span>
              </div>
            </div>

            <!-- <div class="col-md-12">
            <div class="member">
              <div class="details">
                <a href="ulasan.html" style="color: #fff">
                <b>Ulasan dan Komentar<b>
                </a>
              </div>
            </div>
            </div> -->

            <!-- <a href="ulasan.html" class="btn-get-started scrollto" style="color: #ffffff">
            <div class="" style="background-color: #2e4ca5; height: 35px; border-radius: 3px; text-align: center; font-size: 16px; padding-top: 5px">
              Ulasan dan Komentar
            </div>
            </a> -->



            <a href="" class="btn-get-started scrollto" style="color: #ffffff">
            <div class="" style="background-color: #2e4ca5; height: 35px; border-radius: 3px; text-align: center; font-size: 16px; padding-top: 5px; margin-top: 10px">
              Chat
            </div>
            </a>



          </div>
        </div>

      </div>
    </section>

    <hr>

    <section id="portfolio" class="wow fadeInUp" style="background-color: #f4f4f4">

    <div class="col-md-12">

      <div class="container">
        <div class="section-header">
          <h2 style="text-align: center;">Rekomendasi Kos Lain : </h2>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{url('detailkos')}}" class="" >
                <img src="{{ asset('img/kost/batununggal.jpg') }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Sisa 2 Kamar</h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 160px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Batununggal</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{url('detailkos')}}" class="" >
                <img src="{{ asset('img/kost/sukapura.jpg') }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Sisa 4 Kamar</h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 160px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Sukabirus</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{url('detailkos')}}" class="" >
                <img src="{{ asset('img/kost/cikoneng.jpg') }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Sisa 6 Kamar</h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 160px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Cikoneng</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{url('detailkos')}}" class="" >
                <img src="{{ asset('img/kost/ciganitri.jpg') }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Sisa 1 Kamar</h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 160px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Ciganitri</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>

    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>KamarKosong</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->

      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lib/magnific-popup/magnific-popup.min.js') }}"></script>
  <script src="{{ asset('lib/sticky/sticky.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
