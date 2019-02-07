<?php
session_start();
/**
 * Jika Tidak login atau sudah login tapi bukan sebagai admin
 * maka akan dibawa kembali kehalaman login atau menuju halaman yang seharusnya.
 */
if ( !isset($_SESSION['user_login']) || 
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'member' ) ) {
	header('location:./../login.php');
	exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="albertus ricky">

    <title>GEES Prod. | Abadikan Kenangan Anda bersama Kami</title>

    <!-- Bootstrap core CSS -->
    <link href="./../../asset/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="./../../product.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#" style="margin-left : 25px">GEES PRODUCTION</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#" style="margin-left : 50px">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left : 50px">Produk
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="gambar/katalog.php" target="blank">Notebook Glossy</a>
              <a class="dropdown-item" href="gambar/katalog.php" target="blank">Notebook Doff</a>
              <a class="dropdown-item" href="gambar/katalog.php" target="blank">Vector Art</a>
              <a class="dropdown-item" href="gambar/katalog.php" target="blank">Garskin Laptop dan HP</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./../../promo/promo.php" target="blank" style="margin-left : 50px">Promo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="margin-left : 50px" target="blank">Keranjang Saya</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./..//logout.php" style="margin-left: 100px">Logout<br><?=$_SESSION['nama'];?></a>
          </li>
          </li>
        </ul>
      </div>
    </nav>

    <div class="w3-content w3-section">
      <center><a href="gambar/katalog.php" target="blank"><img class="mySlides w3-animate-right" src="gambar/headerr.jpeg" style="max-width:100%"></a>
      <a href="gambar/katalog.php" target="blank"><img class="mySlides w3-animate-right" src="gambar/header.jpeg" style="max-width:100%"></a></center>
    </div>
    <script>
      var myIndex = 0;
      carousel();

      function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 2500);    
      }
    </script>

    <div id="katalog">
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">VECTOR ART</h2>
          <p class="lead">Sebuah design muka yang kekinian</p>
          <a class="btn btn-outline-secondary" href="gambar/katalog.php" target="blank">More ...</a>
        </div>
        <div class="bg-light box-shadow mx-auto" style="width: 325px; height: 325px; border-radius: 15px 15px 15px 15px;"></div>
         <img src="./../../gambar/vector/1.png" style="height: 300px;width: 297px; margin-top: -350px;">
      </div>
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">Notebook Glossy</h2>
          <p class="lead">Sebuah buku catatan dengan design menarik dan tampilan yang glossy</p>
           <a class="btn btn-outline-secondary" href="gambar/katalog.php" target="blank">More ...</a>
        </div>
        <div class="bg-dark box-shadow mx-auto" style="width: 325px; height: 325px; border-radius: 15px 15px 15px 15px;"></div>
         <img src="./../../gambar/notebook/31.png" style="height: 297px;width: 297px; margin-top: -350px;">
      </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">Notebook Doff</h2>
          <p class="lead">Sebuah buku catatan dengan design menarik dan tampilan doff</p>
           <a class="btn btn-outline-secondary" href="gambar/katalog.php" target="blank">More ...</a>
        </div>
        <div class="bg-dark box-shadow mx-auto" style="width: 330px; height: 330px; border-radius: 15px 15px 15px 15px;"></div>
         <img src="./../../gambar/notebook/40.png" style="height: 300px;width: 300px; margin-top: -350px;">
      </div>
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Garskin Laptop dan HP</h2>
          <p class="lead">Mau tampilan gadget Anda kece? Pasang Garskin GEES Production aja</p>
          <a class="btn btn-outline-secondary" href="gambar/katalog.php" target="blank">More ...</a>
        </div>
        <div class="bg-light box-shadow mx-auto" style="width: 330px; height: 230px; border-radius: 15px 15px 15px 15px;"></div>
         <img src="./../../gambar/garskin/b.png" style="height: 200px;width: 300px; margin-top: -250px;">
      </div>
    </div>
  </div>

    <footer class="container py-5">
       <div class="bg-dark mr-md-6 pt-6 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden " style="width: 100%; height: 300px; width: 1318px; border-radius: 21px 21px 21px 21px; margin-left: -195px">
      <div class="row">
        <div class="col-12 col-md">
          <small class="d-block mb-3 text-muted">GEES Developer Team<br>&copy; 2017-2018<br><br><br>
            GEES PRODUCTION SURAKARTA<br>
            Jasa Desain Digital, Party Planner, and Many More
            <br>Surakarta,Jawa Tengan, Indonesia</small>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="about/tentangKami.php" target="blank">Team</a></li>
            <li><a class="text-muted" href="#">Locations</a></li>
            <li><a class="text-muted" href="#">Syarat dan Ketentuan</a></li>
            <li><a class="text-muted" href="#">Hubungi Kami</a></li>
          </ul>
        </div>
      </div>
    </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
