<!--Kode PHP Mulai dari sini-->
<?php
      include('../../connect.php');

      $id             = $_POST['id'];
      $no_srt_tgs     = $_POST['no_srt'];
      $tgl_srt_tgs    = $_POST['tgl_srt'];
      $nama           = $_POST['nama'];
      $kgtn_perjadin  = $_POST['description'];
      $tgl_berangkat  = $_POST['tgl_brngkt'];
      $tgl_pulang     = $_POST['tgl_plng'];
      $no_spd         = $_POST['no_spd'];
      $tgl_spd        = $_POST['tgl_spd'];

      //masukkan data ke tabel
      $input = "INSERT INTO rekap VALUES('null', '$no_srt_tgs', '$tgl_srt_tgs', '$nama', '$kgtn_perjadin', '$tgl_berangkat', '$tgl_pulang', '$no_spd', '$tgl_spd')";
      $query_input = mysqli_query($connect,$input);
      if ($query_input) {
        //jika berhasil
        ?>
            <script language="JavaScript">
              alert('input data berhasil');
              document.location='form-validation.php';
            </script>

        <?php
      }
      else {
        //JIka Gagal
        ?>
            <script language="JavaScript">
            alert('Input data gagal');
              document.location='form-validation.php';
            </script>

        <?php
      }

?>

  <!--Kode PHP SELESAI dari sini-->
