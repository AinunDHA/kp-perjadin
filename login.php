<?php
//mengaktifkan session php
session_start();

//menghubungkan dengan connect.php
include('connect.php');
//tangkap data dari form Login
$username   = $_POST['username'];
$password   = $_POST['password'];

//seleksi data admin dengan Username dan password
$login  = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
$data   = mysqli_query($connect,$login);

//mengecek jumlah data yang ditemukan

$cek    = mysqli_num_rows($data);

if ($cek>0) {
  $_SESSION['username'] = $username;
  $_SESSION['status']   = "login";
  header("location:pages/tables/normal-tables.php");
}
else {
  header("location:sign_in.php?pesan=gagal");
}
 ?>
