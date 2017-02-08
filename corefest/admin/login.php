<?php
	include_once("koneksi.php");
	session_start();
	if (isset($_SESSION['username'])) {
		header("location: index.php");
	}
	if (isset($_POST['submit'])) {

		if (empty($_POST['username']) || empty($_POST['password'])) {
			echo "<script>alert('Login Gagal, Ada Yang Kosong !');</script>";
		} else {
			$username = mysqli_real_escape_string($connect, $_POST['username']);
			$password = mysqli_real_escape_string($connect, $_POST['password']);

			$check = mysqli_query($connect, "SELECT * FROM member WHERE username = '$username' AND password='$password'");
			$check = mysqli_num_rows($check);
			if ($check == 0) {
				echo "<script>alert('Login Gagal, Tidak Terdaftar !');</script>";
			} else {
				$_SESSION['username'] = $_POST['username'];
				header("location: index.php");
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login - Client Area</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
		<div id="header">
			<span id="title"><center><img src="img/team.png" width="300" alt="LOGO NODESECTOR" ></center></span>
		</div>
		<div id="layout">
		<div id="left">
			<span><a href="login.php" class="menu">LOGIN</a></span>
			<span><a href="../" class="menu">FRONTEND</a></span>
		</div>

			<div id="right">
				<div class="alert">
					Selamat Datang ! Silahkan Login Untuk Melanjutkan.
					<br>Username : admin<br>Password : admin
				</div>
				<hr>
				<center><img src="img\Logo-01-e1471977128142.png" alt="" /></center>
					<form class="form-panel" action="" method="post">
					  <ul class="kontak">
					    <li>
					      <input type="text" name="username" value="" class="input-with-text" placeholder="Username">
					    </li>
					    <li>
					      <input type="password" name="password" value="" class="input-with-text" placeholder="Password">
					      </textarea>
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
