<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home - Client Area</title>
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
					Selamat datang guest ! silahkan lakukan pengaturan informasi di tab informasi.
				</div>
				<hr>
				<center><img src="img\Logo-01-e1471977128142.png" alt="" /></center>

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
