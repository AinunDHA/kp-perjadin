<?php
include('../../connect.php');
$sql = 'SELECT * FROM rekap';
$query = mysqli_query($connect, $sql);

 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Rekap Perjadin Lapan Parepare </title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Top Bar -->
    <nav class="navbar"style="background-color: #88d2c1;">
        <div class="container-fluid">
          <div class="navbar-header">
              <img src="../../images/favicon.png" alt="lapan" width="48" height="">
          </div>
            <div class="navbar-header">
                <a class="navbar-brand" href=" ">LAPAN PAREPARE - Stasiun Bumi Penginderaan Jauh</a>
            </div><div class="navbar-header" style="float: right;">
              <a class="btn bg-teal waves-effect m-b-15" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false"
                 aria-controls="collapseExample">
                  DATA PERJADIN
              </a>
            </div>
            <div class="navbar-header" style="float: right;">
              <a class="btn bg-teal waves-effect m-b-15" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false"
                 aria-controls="collapseExample">
                  DATA USER
              </a>
            </div>
            <!-- Logout dropdown -->
            <div class="user-info">
                <div class="info-container">
                    <div class="btn-group user-helper-dropdown" style="padding-top: -; margin-top: 20px;">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="..normal-tables.php"><i class="material-icons">info</i>Data Perjadin</a></li>
                            <li><a href="../login/data_user.php"><i class="material-icons">label</i>Data User</a></li>
                            <li><a href="../login/sign_in.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #Logout dropdown -->

        </div>
    </nav>
    <!-- #Top Bar -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2 style="text-align: center; width: 750px;">DATA REKAP PERJALANAN DINAS LAPAN PAREPARE </h2>
            </div>
            <!--Untuk save as PDF -->
            <br>
            <div id="savepdf" class="col-xs-3 col-sm-3 col-md-3 col-md-3" style="float: right;">
              <a href="javascript:void(0);">
                  <button id="pdf" type="button" class="btn bg-cyan btn-block btn-lg waves-effect">Save as PDF</button>
              </a>
            </div>
              <br>
              <br>
              <br>
              <script type="text/javascript">
                  var doc = new jsPDF();
                  var specialElementHandlers{
                    '#savepdf': function(element, renderer) {       //id div yg di dlmnya ada button save ass pdf
                      return true;
                    }
                  };
                  $('#pdf').click(function()        //id button yg memiliki fungsi save as pdf
                {
                  doc.frompPhp($('#tabel').php(), 15, 15, { // area yang akan diconvert as pdf adalah yg memiliki id="tabel"
                    'width' : 170,
                      'elementHandlers': specialElementHandlers;
                  });
                  doc.save('rekap-perjadin.pdf');
                });
              </script>
                <!--#END#Untuk save as PDF -->
            <!-- Bordered Table -->

            <div id="tabel" class="row clearfix" style=" width: 1270px; height: 400px; padding: 3px; margin-left: -290px;" >
                <div class="col-lg-30 col-md-30 col-sm-30 col-xs-30">
                    <div class="card">
                        <div class="header">
                            <h2>
                                REKAP PERJADIN LAPAN PAREPARE (TRIAL)
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No</th>
                                        <th style="text-align: center;">NOMOR SURAT TUGAS</th>
                                        <th style="text-align: center;">TANGGAL SURAT TUGAS</th>
                                        <th style="text-align: center;">NAMA</th>
                                        <th style="text-align: center;">KEGIATAN PERJADIN</th>
                                        <th style="text-align: center;">TANGGAL BERANGKAT</th>
                                        <th style="text-align: center;">TANGGAL PULANG</th>
                                        <th style="text-align: center;">NOMOR SPD</th>
                                        <th style="text-align: center;">TANGGAL SPD</th>
                                        <th style="text-align: center;">AKSI</th>
                                    </tr>
                                </thead>
                                  <!--Kode PHP untuk menampilkan Database -->
                                <tbody>
                                  <?php
                                  $no       = 1;
                                    while ($row = mysqli_fetch_array($query)) {

                                      $id       = $row['id'];
                                      $no_srt   = $row['no_srt_tgs'];
                                      $tgl_srt  = $row['tgl_srt_tgs'];
                                      $nama     = $row['nama'];
                                      $kegiatan = $row['kgtn_perjadin'];
                                      $tgl_brkt = $row['tgl_berangkat'];
                                      $tgl_plng = $row['tgl_pulang'];
                                      $no_spd   = $row['no_spd'];
                                      $tang_spd  = $row['tgl_spd'];
                                        ?>
                                    <tr>
                                        <td> <?php echo $no; ?></td>
                                        <th scope="row"><?php echo $no_srt; ?>
                                        <td><?php echo  $tgl_srt; ?></td>
                                        <td><?php echo $nama; ?></td>
                                        <td><?php echo $kegiatan; ?></td>
                                        <td><?php echo $tgl_brkt; ?></td>
                                        <td><?php echo $tgl_plng; ?></td>
                                        <td><?php echo $no_spd; ?></td>
                                        <td><?php echo $tang_spd; ?></td>
                                        <td>
                                        </div>
                                        <div class="edit">
                                          <a href="../forms/edit.php?id=<?php echo $id;?>">
                                            <img src="../../images/edit.jpg" alt="" width="15" height="15">
                                          </a>
                                        </div>
                                        <div class="hapus">
                                          <a href="delete.php?id=<?php echo $id;?>" onclick="return confirm("Anda yakin mau menghapus data ini ?");">
                                            <img src="../../images/gbg.jpg" alt="" width="15" height="15">
                                          </a>
                                        </div>
                                        </td>
                                    </tr>

                                    <?php
                                    $no++;
                                  }
                                  ?>
                                  <!--#END#Kode PHP untuk menampilkan Database -->
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
            <!-- #END# Bordered Table -->

                                <!--Button Kembali ke Tabel-->
                                <div class="col-xs-3 col-sm-3 col-md-3 col-md-3" style="padding-bottom: 30px;">
                                    <a href="../../pages/forms/form-validation.php">
                                      <button type="button" class="btn bg-cyan btn-block btn-lg waves-effect">TAMBAH DATA</button>
                                    </a>
                                </div>
                                <!--#END Button Kembali ke Tabel-->

        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>
