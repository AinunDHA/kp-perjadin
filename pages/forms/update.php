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
      $update = "UPDATE rekap SET no_srt='$no_srt_tgs', tgl_srt='$tgl_srt_tgs', nama='$nama', description='$kgtn_perjadin', tgl_brngkt='$tgl_berangkat', tgl_plng='$tgl_pulang', no_spd='$no_spd', tgl_spd='$tgl_spd' WHERE id='$id' ";
      $query_update = mysqli_query($connect,$update);
      if ($query_update) {
        //jika berhasil
        ?>
            <script language="JavaScript">
              alert('Update data berhasil');
              document.location='../tables/normal-tables.php';
            </script>

        <?php
      }
      else {
        //JIka Gagal
        ?>
            <script language="JavaScript">
            alert('Update data gagal');
              document.location='../tables/normal-tables.php';
            </script>

        <?php
      }

?>

  <!--Kode PHP SELESAI dari sini-->
