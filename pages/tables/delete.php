<?php

include('../../connect.php');
if (isset($_GET['id']) ) {
  //ambil dari query string
  $id  = $_GET['id'];

  //query hapus

  $sql  = "DELETE FROM rekap WHERE id=$id";
  $query= mysqli_query($connect, $sql);
  //komen berhasil or not
if ($query) {
  header('location:data_perjadin.php?Berhasil delete data');
}
else {
  die("gagal menghapus......");

}

}

else {
  die("forbidden access");
}

?>
