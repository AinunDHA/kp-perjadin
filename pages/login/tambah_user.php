<!--Kode PHP Mulai dari sini-->
<?php
      include('../../connect.php');

      $username       = $_POST['username'];
      $password       = $_POST['password'];
      $nama           = $_POST['nama_user'];


      //masukkan data ke tabel
      $in = "INSERT INTO user VALUES(null, '$username', '$password', '$nama')";
      $query = mysqli_query($connect,$in);
      if ($query) {
        //jika berhasil
        ?>
            <script language="JavaScript">
              alert('Input User berhasil');
              document.location='tambah.php';
            </script>

        <?php
      }
      else {
        //JIka Gagal
        ?>
            <script language="JavaScript">
            alert('Input User Gagal');
              document.location='tambah.php';
            </script>

        <?php
      }

?>

  <!--Kode PHP SELESAI dari sini-->
