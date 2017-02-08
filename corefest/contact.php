<?php
  include_once("koneksi.php");
	$hasil = "";
	if (isset($_POST['submit'])) {
		$nama = stripslashes($_POST['nama']);
		$email = stripslashes($_POST['email']);
		$pesan 	 = stripslashes($_POST['pesan']);
		$id = rand(1, 50);

		if (empty($nama) || empty($email) || empty($pesan)) {
			$hasil = "Gagal !, Masih Ada Yang Kosong.";
		} else {

							$simpan = mysqli_query($connect, "INSERT INTO `pesan` VALUES ('$id','$nama','$email','$pesan')");
							if ($simpan) {
								$hasil = "Berhasil ! Pesan Telah Terkirim. Terimakasih";
							} else {
								$hasil = "gagal";
							}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Corefest Team">
    <title> Contact | Corefest</title>
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
          <h1 class="center2">COREFest<br>Hubungi Kami & Lebih Dekat Dengan Kami</h1>
        </div>
      </div>
      </div>
        <div class="section">
          <div class="col span_12_of_12">
            <br>
            <h2>Contact Person</h2>
            <hr>
          </div>
        </div>
      <div class="section">
      	<div class="col span_8_of_12">
        <h3> More Closer </h3>
        <span class="text"> Isilah form dibawah untuk lebih dekat dengan kami. </span>

        <form class="form-panel" action="" method="post">
          <ul class="kontak">
            <li>
              <input type="text" name="nama" value="" class="input-with-text" placeholder="Name">
            </li>
            <li>
              <input type="text" name="email" value="" class="input-with-text" placeholder="Your Email Address">
            </li>
            <li>
              <textarea name="pesan" rows="8" cols="40" class="input-with-text" placeholder="Message"></textarea>
            </li>
            <li>
              <input type="submit" name="submit" value="Submit" class="btn">
            </li>
            <li>
              <?php echo $hasil; ?>
            </li>
            <br>
            <br>
          </ul>
        </form>

        </div>
        <div class="col span_4_of_12">
          <h4>
          Terhubung Dengan Kami :
          </h4>
          <p class="text">
            Untuk segala dukungan dan pertanyaan :<br>
            Emai kami di <a href="#">Corefestteam@gmail.com</a>
          </p>
          <br>
          <br>

          <h4>
          Corefest Malang
          </h4>
          <p class="text">
            Jl. Danau Poso 1, G2E 15<br>
            Sawojajar, Malang.<br>
            Jawa Timur, Indonesia.
          </p>
          <br>
          <br>
          <h4>
          Social Media Kami
          </h4>
          <p class="text">
            Fanspage : Corefest 2.0<br>
            Twitter : @corefest2016<br>
            Instagram : Corefest 2.0<br>
            OA Line : @bla5640p<br>

          </p>

        </div>
      </div>
      <div class="pengatur">
      </div>
      <!----------------------------------------------------------------------------->
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
                <br>
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
