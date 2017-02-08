<?php
	session_start();
	include_once("koneksi.php");
	if (!isset($_SESSION['username'])) {
		header("location: login.php");
	}
	if (empty($_GET['id'])) {
		header("location: informasi.php");
	}
	$id = $_GET['id'];
  $query = mysqli_query($connect, "SELECT * FROM info WHERE id='$id'");
  $jumlah = mysqli_num_rows($query);
  if ($jumlah == 0) {
    header("location: informasi.php");
  }
	$data = mysqli_fetch_array($query);
	$hasil = "";
	if (isset($_POST['submit'])) {
		$judul = stripslashes($_POST['nama_thread']);
		$categ = stripslashes($_POST['label_thread']);
		$isi 	 = stripslashes($_POST['isi_thread']);
		$tanggal = date('Y/m/d');
		$penulis = $_SESSION['username'];

		$namafile = $_FILES['gambar']['name'];
    $type = $_FILES['gambar']['type'];
    $size = $_FILES['gambar']['size'];
    $tmp = $_FILES['gambar']['tmp_name'];

		if (empty($judul) || empty($isi)) {
			$hasil = "Gagal !, Masih Ada Yang Kosong.";
		} else {

      if ($size > 40000 ) {
							$hasil = "Gagal !, File Gambar Terlalu Besar.";
      }

            if ($type == 'image/jpeg' || $type == 'image/png' || $type == 'image/jpg') {
							$simpan = mysqli_query($connect, "UPDATE `info` SET `judul`='$judul', `tanggal`='$tanggal', `isi`='$isi', `label`='$categ', `gambar`='$namafile' WHERE `id`='$id'");
							if ($simpan) {
								move_uploaded_file($tmp, "../img/posting/".$namafile);
								$hasil = "Berhasil !, Thread Telah Diperbarui. <a href='../newsdetail.php?id=".$id."' target='_blank'>Cek Disini</a>";
							} else {
								$hasil = "gagal";
							}
						}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Info - Client Area</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
		<div id="header">
			<span id="title"><center><img src="img/team.png" width="300" alt="LOGO NODESECTOR" ></center></span>
		</div>
		<div id="layout">
			<div id="left">
				<span><a href="index.php" class="menu">HOME</a></span>
				<span><a href="buatinfo.php" class="menu">BUAT INFO</a></span>
				<span><a href="informasi.php" class="menu">LIST INFO</a></span>
				<span><a href="pesan.php" class="menu">LIST PESAN</a></span>
				<span><a href="../" class="menu">FRONTEND</a></span>
				<span><a href="logout.php" class="menu">LOGOUT</a></span>
			</div>

			<div id="right">
				<div class="alert">
					Untuk menambahkan informasi, silahkan isi form dengan benar. Jika tidak ada gambar maka akan di set default.
					<br>
					<?php echo $hasil; ?>
				</div>
				<hr>
			<form class="form-panel" action="" method="post" enctype="multipart/form-data">
			  <ul class="kontak">
			    <li>
			      <input type="text" name="nama_thread" value="<?php echo $data['judul']; ?>" class="input-with-text" placeholder="Nama Informasi">
			    </li>
			    <li>
			      <input type="text" name="label_thread" value="<?php echo $data['label']; ?>" class="input-with-text" placeholder="Label, Ex : Achievment - Pisahkan Dengan Koma">
			    </li>
			    <li>
			      <textarea name="isi_thread" rows="8" cols="40" class="input-with-text" placeholder="Isi informasi">
							<?php echo $data['isi']; ?>
			      </textarea>
			    </li>
					<li>
						<input type="file" name="gambar" class="input-with-text">
					</li>
			    <li>
			      <input type="submit" name="submit" class="input-with-text" value="Submit" class="">
			    </li>
			  </ul>
			</form>
			</div>
		</div>
		<div class="footer">
			Copyright (c) 2016 Copyright Holder All Rights Reserved. <a href="#" id="back">Back To Top</a>
		</div>
</body>
<script type='text/javascript' src='jquery.min.js'></script>
<script type="text/javascript">
$(function(){
$(window).scroll(function(){

if($(this).scrollTop() > 100){
}
else{

}
});
$("#back").click(function(){
$("html,body").animate({scrollTop:1},500); // melakukan efek scroll dengan kecepatan 0.6 detik
});
});
</script>
</html>
