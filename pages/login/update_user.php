<!--Kode PHP Mulai dari sini-->
<?php
      include('../../connect.php');
      $id             =$_POST['id'];
      $username       = $_POST['username'];
      $password       = $_POST['password'];
      $nama            = $_POST['nama'];

      //update data ke tabel formaat nama column_db=value
      $update = "UPDATE user SET username='$username', password='$password', nama='$nama_user' WHERE id='$id'";
      var_dump($update);
      // var_dump($_POST['username']);
      // die();
      $query_update = mysqli_query($connect,$update);
      var_dump($query_update);
      if ($query_update) {
        //jika berhasil
        ?>
            <script language="JavaScript">
              alert('Update data berhasil');
              document.location='data_user.php';
            </script>

        <?php
      }
      else {
        //JIka Gagal
        ?>
            <script language="JavaScript">
            alert('Update data gagal');
              // document.location='../tables/normal-tables.php';
            </script>

        <?php
      }

?>

  <!--Kode PHP SELESAI dari sini-->
