<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="img/KamarKosong logo pintu aja.png" rel="icon">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/login.css">

    <title>Register</title>
  </head>
  <body>
  

  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('img/intro-carousel/gd-st.jpeg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3>Login to <span>KamarKosong</span></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              @if($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                  </ul>

                </div>
                @endif
              <form action="/register" method="post">
                @csrf
                <div class="form-group first">
                  <label for="username">Nama</label>
                  <input type="text" class="form-control" placeholder="Nama" id="username"  name="name">
                </div>
                <div class="form-group last mb-3">
                  <label for="username">Email</label>
                  <input type="text" class="form-control" placeholder="email@gmail.com"  id="username" name="email">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Password"  id="password" name="password">
                </div>
                <div class="form-group">
                <label class="form-label" for="role">Daftar sebagai:</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="" disabled selected>--Select--</option>
                    <option value="user">User</option>
                    <option value="pemilikkost">Pemilik Kost</option>
                </select>
            </div>
                <br>
                <button type="submit" value="Login" class="btn btn-block btn-primary">Register</button>


              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>