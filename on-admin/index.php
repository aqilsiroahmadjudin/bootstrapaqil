<?php
session_start();
/**
 * Jika Tidak login atau sudah login tapi bukan sebagai admin
 * maka akan dibawa kembali kehalaman login atau menuju halaman yang seharusnya.
 */
if ( !isset($_SESSION['user_login']) || 
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'admin' ) ) {
	header('location:./../login.php');
	exit();
}
?>

<!doctype html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Portofolio</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#home" class="navbar-brand page-scroll">AHMAD SIROJUDIN AQIL</a>
      </div>

     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
        <li><a href="./../logout.php">Logout</a></li>
      </ul>
    </div>
    </div>
  </nav>
  <!-- akhir navbar -->
    
    <!-- jumbotron -->
    <div class="jumbotron text-center">
       <img src="gambar/foto.jpg" class="img-circle">
    <h1 class="display-2">AHMAD SIROJUDIN AQIL</h1>
    <p class="lead">SISWA | SMKN 8 JEMBER | XI RPL 1</p>
  </div>
<div class="page-scroll">

    <!-- akhir jumbotron -->


<!-- about -->
<section class="about" id="about">
  <div class="=container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="text-center">About</h2>
        <hr>
      </div>
    </div>


    <div class="row">
      <div class="col-sm-5 col-sm-offset-1">
        <p class="pkiri">Speaker V8 Sound Merdeka dibuat tahun lalu, sebagai edisi spesial HUT RI. Speaker mantab ini dipasang pada upacara kenegaraan. Penempatannya juga pake filosofi angka sesuai Hari Kemerdekaan. Harry menempatkan speaker ini sebanyak 17 titik di halaman tengah istana, 8 titik di aubade, dan 45 titik di lapangan. Desainnya yang warna merah putih, cocok banget untuk acara sakral begini.</p>
      </div>
      <div class="col-sm-5">
        <p class="pkanan">Filosofi dasar yang tadi sudah diterapkan. Karena itu, dalam waktu singkat udah jadi perusahaan rental audio terkemuka di Indonesia. Sehari bisa menangani 18 acara besar. Speaker V8 Sound Merdeka ini udah dipake di hampir semua acara besar nasional. Contohnya: anniversary banyak stasiun TV, Hari Kebangkitan Nasional ke-100, upacara sakral Hari Kemerdekaan di istana, dan masih banyak lagi.</p>
      </div>
    </div>
  </div>
</section>
<!-- akhir about -->


<!-- portfolio -->
<section class="portfolio" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2>Portfolio</h2>
        <hr>
      </div>
    </div>

    
      <div class="col-sm-4">
        <a href="" class="thumbnail">
          <img src="gambar/valia23.jpg">
        </a>
      </div>   
          
<div class="col-sm-4">
        <a href="" class="thumbnail">
          <img src="gambar/s4.jpg">
        </a>
      </div>   

      <div class="col-sm-4">
        <a href="" class="thumbnail">
          <img src="gambar/negara.jpg">
        </a>
      </div>   
          
      
    </div>
  </div>
</section>
<!-- akhir portfolio -->

<!-- contact -->
<section class="contact" id="contact">
  <div class="container">
  <div class="row">
    <div class="col-sm-12  text-center">
      <h2>Contact</h2>
      <hr>
    </div>
  </div>
</div>


  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <form>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" id="nama" class="form-control" placeholder="Masukkan Nama">
        </div>
         <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" class="form-control" placeholder="Masukkan Email">
        </div>
          <div class="form-group">
          <label for="telp">No Telepon</label>
          <input type="tel" id="telp" class="form-control" placeholder="Masukkan No Telepon">
        </div>
        <select class="form-control">
          <option>-- Choose Category --</option>
          <option>Web Design</option>
          <option>Web Development</option>
        </select>
        <div class="form-group">
          <label for="pesan">Pesan</label>
          <textarea class="form-control" rows="10" placeholder="Masukkan Pesan"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
      </form>
    </div>
    </div>
  </div>
</section>
<!-- akhir contact -->



<!-- footer -->
<footer>
  <div class="container text-center">
    <div class="row">
      <div class="col-sm-12">
        <p>&copy; copyright 2019 | built with <i class="glyphicon glyphicon-heart"></i> by. <a href="http://instagram.com/ekas.adi">AHMAD SIROJUDIN AQIL</a>.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <a href="http://youtube.com/webprograming" class="
        btn btn-danger"><i class="glyphicon glyphicon-play"></i> Subscribe to Youtube</a>
      </div>
    </div>
  </div>
</footer>

<!-- akhir footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
  </body>
</html>
