<?php
  include_once("koneksi.php");
  $id = $_GET['id'];
  if (empty($id)) {
    header("location: news.php");
  }
  $query = mysqli_query($connect, "SELECT * FROM info WHERE id='$id'");
  $jumlah = mysqli_num_rows($query);
  if ($jumlah == 0) {
    header("location: news.php");
  }
  $data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Negative Team">
    <title><?php echo $data['judul']; ?> | Negative</title>
    <link rel="stylesheet" type="text/css" href="css/master.css">
</head>

<body>
      <div class="parallax">
    <header>
      <nav>
        <a href="#"><img src="img/logo.png" alt="LOGO COREFEST" class="logo" /></a>
        <ul class="topnav" id="myTopnav">
          <li><a href="http://corefest.undip.ac.id">ORDER NOW</a></li>
          <li><a href="admin/">LOGIN</a></li>
          <li><a href="about.php">ABOUT</a></li>
          <li><a href="contact.php">CONTACT</a></li>
          <li><a href="news.php">NEWS</a></li>
          <li><a class="active" href="index.php">HOME</a></li>
        </ul>
      </nav>
    </header>
      <div class="section">
        <div class="col span_2_of_4">
          <img src="img/logo.png" alt="LOGO COREFEST" class="center animasi logo-header"/>
        </div>
        <div class="col span_2_of_4">
          <br>
          <br>
          <h1 class="center2">COREFest<br>Informasi Terbaru Website</h1>
        </div>
      </div>
      </div>
        <div class="section-fluid">
      	<div class="col-fluid span_3_of_12 category-header super-break">
          <h3 class="side-bar">&nbsp;</h3>
          <h3 class="side-bar">&nbsp;</h3>
        </div>
        <div class="col-fluid span_9_of_12 super-break">
        </div>
        </div>
        <div class="section-fluid">
          <div class="col-fluid span_3_of_12 side">
          </div>
          <div class="col-fluid span_9_of_12">
            <h2 style="text-align:center;"><?php echo $data['judul'] ?></h2>
            <h5 style="text-align:center;"><?php echo $data['tanggal']." - ".$data['penulis']; ?></h5>
            <p class="posting">
              <img src="img/posting/<?php echo $data['gambar'] ?>" class="detail-pict" alt="" />
              <br>
              <?php echo $data['isi']; ?>
            </p>
          </div>
        </div>

      <div class="section-fluid">
        <div class="footer">
        <div class="section">
        <div class="col span_1_of_3">
          <h2 class="text" style="color: #f2f2f2;">Mengapa harus kami ?</h2>
          <hr class="hr2">
    <p class="text-muted">
      Kami melayani dengan mengedepankan kenyamanan serta kemudahan
      bagi pelanggan serta mempertahankan keamanan baik dalam transaksi
      maupun dalam perjalan.
    </p>
        </div>
            <div class="col span_1_of_3">
                <h2 class="text" style="color: #f2f2f2;">Temukan Kami</h2>
                <hr class="hr2">
                <p class="text-muted">
                  Jl. Danau Poso 1, G2E 15
                  Sawojajar, Malang.<br>
                  Jawa Timur, Indonesia.
                </p>
            </div>
        <div class="col span_1_of_3">
            <h2 class="text" style="color: #f2f2f2;">Berlangganan Dengan Kami</h2>
            <hr class="hr2">
        <form class="form">
                    <input type="text" placeholder="Subscribe Dulu" class="search" required>
                    <input type="button" class="button" value="Subscribe">
        </form>
        </div>
        </div>
        <div class="section-fluid">
          <div class="col-fluid span_12_of_12">
            <hr>
            <p class="text-muted-copy">
              Copyright 2016 @Corefest All Right Reserverd - Design By NV
            </p>
          </div>
        </div>
        </div>
      </div>
        <script src="js/ini_js.js"></script>
        <script src="js/jquery.min.js"></script>
    </body>
</html>
