<?php
session_start();
include_once("koneksi.php");
if (!isset($_SESSION['username'])) {
  header("location: login.php");
}
$id = $_GET['id'];
if (empty($id)) {
  header("location: informasi.php");
}

$query = mysqli_query($connect, "DELETE FROM `info` WHERE `id`='$id'");
if ($query) {
  echo "<script>alert('Berhasil Menghapus Posting Dengan ID ".$id."'); window.location = 'informasi.php';</script>";
} else {
  echo "<script>alert('Gagal Menghapus Posting Dengan ID ".$id."'); window.location = 'informasi.php';</script>";
}
?>
