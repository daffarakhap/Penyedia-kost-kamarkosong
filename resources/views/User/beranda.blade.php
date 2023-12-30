<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kamar Kosong</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/KamarKosong logo pintu aja.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">

</head>

<body id="body">

  <!--==========================
    Header
  ============================-->
  <header id="header" >
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><img src="img/KamarKosong logo pintu aja.png" width="50" height="50" style="margin-right: 10px;">Kamar<span>Kosong</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Beranda</a></li>
          <li class="menu-has-children"><a href="">Akun</a>
            <ul>
              <li><a href="#">Profil</a></li>
              <li><a href="logout">Logout</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>Kamu butuh <span>kos?</span><br><span>Cari</span> sekarang juga!</h2>
      <div class="container" >
          <form action="" method="post" role="form" class="contactForm">
            <!-- <div class="form-row">
              <div class="form-group col-md-10" style="padding-left: 185px">
                <input style="text-align: center; height: 50px; font-size: 20px"  type="text" name="name" class="form-control" id="name" placeholder="Masukkan wilayah yang Anda inginkan" data-rule="minlen:1" data-msg="Please enter the address" list="wilayah" />
                  <datalist id="wilayah">
                    <option>Sukabirus</option>
                    <option>Sukapura</option>
                    <option>Baleendah</option>
                    <option>Ciganitri</option>
                    <option>Batununggal</option>
                    <option>Dayeuhkolot</option>
                    <option>Cikoneng</option>
                  </datalist>
              </div>
            </div> -->
            
            <div>
              <a href="{{url('hasilcariberanda')}}" class="btn-get-started scrollto">Cari</a>           
            </div>           
          </form>
        </div>
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    

    <!--==========================
      Services Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2 style="text-align: center;">Rekomendasi</h2>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row no-gutters">
            <!-- @foreach($kosans as $kosan)
            <div class="row row-cols-1 row-cols-md-2 g-4">
              <div class="col">
                 <div class="card">
                    <img src="{{ asset('storage/' . $kosan->image )}}" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">{{ $kosan->nama_kos }}</h5>
                      <p class="card-text">{{ $kosan->alamat }}</p>
                    </div>
                  </div>
              </div>
            </div>
            @endforeach -->
          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{url('detailkos')}}" class="" >
                <img src="img/kost/sukabirus.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Sisa 2 Kamar</h2></div>
                  
                  <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 180px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Sukabirus</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{url('detailkos')}}" class="" >
                <img src="img/kost/sukapura.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Sisa 4 Kamar</h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 180px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Sukapura</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{url('detailkos')}}" class="" >
                <img src="img/kost/baleendah.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Sisa 5 Kamar</h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 180px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Baleendah</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{url('detailkos')}}" class="" >
                <img src="img/kost/ciganitri.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Sisa 1 Kamar</h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 180px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Ciganitri</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{url('detailkos')}}" class="" >
                <img src="img/kost/batununggal.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Sisa 2 Kamar</h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 180px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Batununggal</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{url('detailkos')}}" class="" >
                <img src="img/kost/dayeuhkolot.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp" style="color: #b70707">Penuh</h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 180px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Dayeuhkolot</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{url('detailkos')}}" class="" >
                <img src="img/kost/cikoneng.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Sisa 7 Kamar</h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 180px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Cikoneng</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{url('detailkos')}}" class="" >
                <img src="img/kost/kopo.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp" style="color: #b70707">Penuh</h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 180px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Kopo</span></h2>
                  </div>

                </div>
              </a>
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
      
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
