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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
  .mySlides {display:none}
  .w3-left, .w3-right, .w3-badge {cursor:pointer}
  .w3-badge {height:13px;width:13px;padding:0}
  </style>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
</head>

<body id="body">

  <!--==========================
    Header
  ============================-->
  <header id="header" style="height: 100px">
    <div class="container">

      <div id="logo" class="pull-left">
      <h1><a href="#body" class="scrollto"><img src="img/KamarKosong logo pintu aja.png" width="50" height="50" style="margin-right: 10px;">Kamar<span>Kosong</span></a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{url('index')}}">Beranda</a></li>
           <li class="menu-has-children"><a href="#">Akun</a>
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
   <section id="intro" >
  <div class="intro-content">
    <div class="container" style=" width: 2000px; padding: 25px">
      <div id="chartContainer" style="height: 300px; width: 100%; "></div>
    </div>
  </div>
  </section>

  <!-- <script>
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
  </script> -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script>

      $(document).ready(function () {

      $("#fasilitas").select2({

      placeholder: "Silahkan Pilih"

      });

     });

    </script> 
  <br>
              </section>

  <hr>

  <section id="team" class="wow fadeInUp">
    <form action="/tambahkos" method="post" enctype="multipart/form-data">
      @csrf
      <div class="container">
      <div class="section-header" style="font-size: 25px; text-align: center;">
              <input  type="text" name="nama_kos" placeholder="Nama Kos" style="text-align: center; border-color: #000" required>

              <hr>
            </div>
        <div class="row" style="padding-right: 100px; padding-left: 100px">          
          <div class="col-lg-9 content">
            

            <div class="padding-0 box-v4-alert">
               <div class="form-group">
                <label><b>Fasilitas : </b></label>
                <p>Tekan tombol Ctrl untuk memilih beberapa pilihan</p>
                <select multiple id="fasilitas" name="fasilitas[]" class="form-control select2" required>
                    <option value="Laundri">Laundri</option>
                    <option value="Listrik">Listrik</option>
                    <option value="Keamanan 24 Jam">Keamanan 24 Jam</option>
                    <option value="Kebersihan">Kebersihan</option>
                    <option value="Kamar Mandi Dalam">Kamar Mandi Dalam</option>
                    <option value="Kamar Mandi Luar">Kamar Mandi Luar</option>
                    <option value="PDAM">PDAM</option>
                    <option value="Penjaga Kos 24 Jam">Penjaga Kos 24 Jam</option>
                    <option value="WiFi">WiFi</option>
                </select>
                </div>
                <p style="font-size: 16px"><b>Luas Kamar : </b>
                <div>
                  <input class="form-control" type="text" placeholder="ukuran x ukuran meter" style="text-align: center; border-color: #000" name="luas_kamar" required>
                </div> 
              </p>
                <p style="font-size: 16px"><b>Keterangan Biaya Lain : </b> 
                <div>
                  <input class="form-control" type="text" placeholder="contoh: sudah termasuk listrik" style="text-align: center; border-color: #000" name="ket_biaya_lain" required>
                </div>
                </p>
                <p style="font-size: 16px"><b>Alamat Kost : </b> 
                <div>
                  <input class="form-control" type="text" placeholder="alamat" style="text-align: center; border-color: #000" name="alamat" required>
                </div>
                </p>
                <p style="font-size: 16px"><b>Nomor Wa : </b> 
                <div>
                  <input class="form-control" type="text" placeholder="08**" style="text-align: center; border-color: #000" name="NoWa" required>
                </div>
                </p>
              <div class="mb-3">
                  <label for="image" class="form-label" style="font-size: 16px" ><b>Upload Gambar : </b></label>
                    <input class="form-control" type="file" id="image" style="border-color: #000" name="image" required>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" style="background-color: #b5ffd6; padding: 20px; height: 350px">
            <div class="member"  >
              <div class="details">
                <h4 style="font-size: 35px">Tersedia<br><input type="text" placeholder="jumlah" style="text-align: center; border-color: #000; width: 50px; font-size: 14px; height: 50px" name="jumlah" required><br>Kamar</h4>
                <hr>
                <span style="font-size: 15px"><b><input type="text" placeholder="harga per kamar" style="text-align: center; border-color: #000; width: 150px" name="harga" required> / bulan</b></span>
                <br>
              </div>
            </div>

          </div>
        </div>

      </div>
      <button type="submit" value="Login" class="btn btn-block btn-primary" style="height: 40px; border-radius: 3px; text-align: center; margin-left: 1050px; font-size: 16px; padding-top: 5px; width: 10%">Submit</button>
  </form>
  </section>
  
  <hr>


    <br>

    

    
    
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
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
