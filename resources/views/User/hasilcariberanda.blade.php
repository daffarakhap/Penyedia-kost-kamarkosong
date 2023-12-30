<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>KamarKosong</title>
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

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/fullcalendar.min.css"/>
    <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

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
        <h1><a href="#body" class="scrollto"><img src="img/KamarKosong logo pintu aja.png" width="50" height="50" style="margin-right: 10px;">Kamar<span>Kosong</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>


      <nav id="nav-menu-container">
        <ul class="nav-menu" >
          <li class=""><a href="{{url('beranda')}}" style="font-size: 16px ">Beranda</a></li>
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
  <section id="intro" style="height: 4  00px">
    
    <div class="container" >
      <div class="intro-content">
        <!-- <h2>Kamu membutuhkan <span>kos?</span><br><span>Temukan</span> sekarang!</h2> -->
        <div class="container" >
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-10" style="padding-left: 185px">
                <input style="text-align: center; height: 50px; font-size: 20px"  type="text" name="name" class="form-control" id="name" value="Sukabirus" data-rule="minlen:1" data-msg="Please enter the address" list="wilayah" />
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
            </div>
            
            <div>
            <!-- <a href="#" class="btn-projects scrollto">Get Started</a> -->
              <!-- <a href="#" class="btn-get-started scrollto">Search</a> -->
              <a class="btn-get-started scrollto">Cari</a>
            </div>
            <!-- <div class="text-center"><button type="submit">Send Message</button></div> -->
          </form>
        </div>
      </div>
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="result">
      <div style="margin-top: 20px">
        <div class="col-md-12 ">

          <!-- <div class="col-md-3 scrollable">
            <div class="panel box-v4" >
                <div class="panel-heading " style="background-color: #e2e2e2">
                  <div class="section-header" style="height: 20px; ">
                    <h3 style="text-align: center; margin-top: 5px">Atur Pencarian</h3>
                  </div>
                </div>

                <div class="panel-body padding-0 col-md-12 border-none">
                  <div class="row-md-12">
                      <div class="col-md-12  padding-0 box-v4-alert">
                        <p style="font-size: 16px; "><b>Tipe Kos : </b>
                        <select style="font-size: 16px; width: 230px; text-align: center;" >
                          <option value="volvo">Semua Tipe</option>
                          <option value="volvo">Campuran</option>
                          <option value="saab">Laki-laki</option>
                          <option value="opel">Perempuan</option>
                        </select>
                        </p>

                        <div style="padding-top: 25px"></div>

                        <p style="font-size: 16px; "><b>Ketersediaan Kamar : </b>
                        <select style="font-size: 16px; width: 230px; text-align: center;" >
                          <option value="volvo">Semua Ketersediaan Kamar</option>
                          <option value="volvo"> 4 kamar</option>
                          <option value="saab">4 kamar - 8 kamar</option>
                          <option value="opel">> 8 kamar</option>
                        </select>
                        </p>

                        <div style="padding-top: 25px"></div>

                        <p style="font-size: 16px; "><b>Jangka Waktu : </b>
                        <select style="font-size: 16px; width: 230px; text-align: center;" >
                          <option value="volvo">Semua Jangka Waktu</option>
                          <option value="volvo">Harian</option>
                          <option value="saab">Bulanan</option>
                          <option value="opel">Tahunan</option>
                        </select>
                        </p>

                        <div style="padding-top: 25px"></div>

                        <p style="font-size: 16px; "><b>Urutkan Berdasar Harga : </b>
                        <select style="font-size: 16px; width: 230px; text-align: center;" >
                          <option value="volvo">Terendah-Tertinggi</option>
                          <option value="saab">Tertinggi-Terendah</option>
                        </select>
                        </p>

                        <div style="padding-top: 25px"></div>

                        <p style="font-size: 16px; "><b>Rentang Harga : </b>
                        <select style="font-size: 16px; width: 230px; text-align: center;" >
                          <option value="volvo">Semua Harga</option>
                          <option value="volvo"> Rp 500.000</option>
                          <option value="volvo">Rp 500.000 - Rp 1000.000</option>
                          <option value="volvo">Rp 1000.000 - Rp 1500.000</option>
                          <option value="volvo">> Rp 1500.000</option>
                        </select>
                        </p>

                        <div style="padding-top: 25px"></div>

                        <p style="font-size: 16px; "><b>Fasilitas : </b>
                        <div style="font-size: 16px; width: 230px;" >
                          <input type="checkbox" name="vehicle" value="Car"> Laundri<br>
                          <input type="checkbox" name="vehicle" value="Car"> Listrik<br>
                          <input type="checkbox" name="vehicle" value="Car"> Keamanan 24 Jam<br>
                          <input type="checkbox" name="vehicle" value="Car"> Kebersihan<br>
                          <input type="checkbox" name="vehicle" value="Car"> Kamar Mandi Dalam<br>
                          <input type="checkbox" name="vehicle" value="Car"> Kamar Mandi Luar<br>
                          <input type="checkbox" name="vehicle" value="Car"> PDAM<br>
                          <input type="checkbox" name="vehicle" value="Car"> Penjaga Kos 24 Jam<br>
                          <input type="checkbox" name="vehicle" value="Bike"> WiFi<br>
                        </div>
                        </p>
                       
                        <hr>
                        <div style="text-align: right;">
                          <a href="{{url('hasilfilter')}}"><button class="btn-get-started" type="submit" style="font-size: 16px; background-color: #e2e2e2; color: #000000"><b>Cari</b></button></a>
                        </div>
                      
                      </div>
                  </div>   -->
                        

                  
                </div>
            </div> 
          </div>

          <div class="col-md-12 scrollable">
            <div class="panel box-v4">
                <div class="panel-heading " style="background-color: #e2e2e2" >
                  <div class="section-header" style="height: 20px">
                    <h2 style="text-align: center; margin-top: 5px">Hasil Pencarian</h2>
                  </div>
                </div>

                <div class="panel-body padding-0 col-md-12 border-none">
                    <div class="col-md-12 box-v4-alert">
                        <section id="portfolio" class="wow fadeInUp" >
                          <div class="row">
                            <!-- <div class="row"> -->
                            @foreach($kosans as $Kosan)
                              <div class="col-lg-4 col-md-3" style="padding-bottom: 25px">
                                <div class="portfolio-item wow fadeInUp">
                                  <a href="{{url('detailkos')}}" class="" >
                                    <img src="{{ asset('storage/' . $Kosan->image ) }}" alt="">
                                    <div class="portfolio-overlay">
                                      <div class="portfolio-info"><h2 class="wow fadeInUp">Sisa {{ $Kosan->jumlah }} Kamar</h2></div>
                                      
                                      <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 150px; opacity: 0.8;">
                                        <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">{{ $Kosan->alamat }}</span></h2>
                                      </div>

                                    </div>
                                  </a>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </section>
                    </div>
                </div>
                              <!-- <div class="col-lg-4 col-md-3">
                                <div class="portfolio-item wow fadeInUp">
                                  <a href="{{url('detailkos')}}" class="" >
                                    <img src="img/kost/sukabirus.jpg" alt="" style="opacity: 0.3">
                                    <div class="portfolio-overlay" >
                                      <div class="portfolio-info"><h2 class="wow fadeInUp" style="color: #b70707">Penuh</h2></div>
                                      
                                      <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 150px; opacity: 0.8;">
                                        <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Sukapura</span></h2>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-3">
                                <div class="portfolio-item wow fadeInUp">
                                  <a href="{{url('detailkos')}}" class="" >
                                    <img src="img/kost/ciganitri.jpg" alt="">
                                    <div class="portfolio-overlay">
                                      <div class="portfolio-info"><h2 class="wow fadeInUp" >Sisa 1 Kamar</h2></div>
                                      
                                      <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 150px; opacity: 0.8;">
                                        <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Baleendah</span></h2>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-3">
                                <div class="portfolio-item wow fadeInUp">
                                  <a href="{{url('detailkos')}}" class="" >
                                    <img src="img/kost/cikoneng.jpg" alt="">
                                    <div class="portfolio-overlay">
                                      <div class="portfolio-info"><h2 class="wow fadeInUp" >Sisa 4 Kamar</h2></div>
                                      
                                      <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 150px; opacity: 0.8;">
                                        <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Ciganitri</span></h2>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </div>
                        
                              <div class="col-lg-4 col-md-3">
                                <div class="portfolio-item wow fadeInUp">
                                  <a href="{{url('detailkos')}}" class="" >
                                    <img src="img/kost/kopo.jpg" alt="">
                                    <div class="portfolio-overlay">
                                      <div class="portfolio-info"><h2 class="wow fadeInUp" >Sisa 2 Kamar</h2></div>
                                      
                                      <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 150px; opacity: 0.8;">
                                        <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Batununggal</span></h2>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-3">
                                <div class="portfolio-item wow fadeInUp">
                                  <a href="{{url('detailkos')}}" class="" >
                                    <img src="img/kost/dayeuhkolot.jpg" alt="" style="opacity: 0.3">
                                    <div class="portfolio-overlay">
                                      <div class="portfolio-info"><h2 class="wow fadeInUp" style="color: #b70707">Penuh</h2></div>
                                      
                                      <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 150px; opacity: 0.8;">
                                        <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Dayeuhkolot</span></h2>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </div> -->

                              
                            <!-- </div>  -->

                          </div>
                        </section><!-- #portfolio -->
                    </div>
                </div>
            </div> 
          </div>
        </div>
      </div>
    </section>

  </main>

    <!--==========================
      Clients Section
    ============================-->
    
  <!--==========================
    Footer
  ============================-->
  <div class="col-md-12">
    <footer id="footer">
      <div class="container">
        <div class="copyright">
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
    </footer>
  </div>
  <!-- #footer -->

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
