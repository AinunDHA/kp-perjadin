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

      //update data ke tabel
      $update = "UPDATE rekap SET no_srt_tgs='$no_srt_tgs', tgl_srt_tgs='$tgl_srt_tgs', nama='$nama', kgtn_perjadin='$kgtn_perjadin', tgl_berangkat='$tgl_berangkat', tgl_pulang='$tgl_pulang', no_spd='$no_spd', tgl_spd='$tgl_spd' WHERE id=$id ";
      var_dump($update);
      // var_dump($_POST['no_srt']);
      // die();
      $query_update = mysqli_query($connect,$update);
      var_dump($query_update);
      if ($query_update) {
        //jika berhasil
        ?>
            <script language="JavaScript">
              alert('Update data berhasil');
              document.location='../tables/data_perjadin.php';
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
