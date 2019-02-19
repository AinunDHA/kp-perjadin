<?php
session_start();
if(empty($_SESSION)){
	header("Location: ../../sign_in.php");
}
?>
﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Form Input Data Perjadin Lapan Parepare| Material Design</title>
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

    <!-- Sweet Alert Css -->
    <link href="../../plugins/sweetalert/sweetalert.css" rel="stylesheet" />

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
    <nav class="navbar" style="background-color: #88d2c1;">
        <div class="container-fluid">
          <div class="navbar-header">
              <img src="../../images/favicon.png" alt="lapan" width="48" height="">
          </div>
            <div class="navbar-header">
                <a class="navbar-brand" href=" ">LAPAN PAREPARE - Stasiun Bumi Penginderaan Jauh</a>
            </div>

        </div>
    </nav>
    <!-- #Top Bar -->
<!--Di sini tempat Left Side-bar-->

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    FORM INPUT DATA PERJALANAN DINAS LAPAN PAREPARE
                    <!--Keterangan dinonaktifkan untuk sementara
                    <small>Taken from <a href="https://jqueryvalidation.org/" target="_blank">jqueryvalidation.org</a></small>
                  -->
                </h2>
            </div>
            <!-- FORM INPUT DATA PERJADIN -->
            <div class="row clearfix">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <div class="card">
                        <div class="header">
                            <h2>FORM INPUT</h2>
                        </div>
                        <div class="body">

                            <form id="form_input" method="POST" action="tambah.php" >
                              <div class="form-group form-float">
                                  <div class="form-line">
                                      <input type="text" class="form-control" name="no_srt" required>
                                      <label class="form-label">No.Surat Tugas </label>
                                  </div>
                              </div>
                              <div class="form-group form-float">
                                  <div class="form-line">
                                      <input type="text" class="form-control" name="tgl_srt" required>
                                      <label class="form-label">Tanggal Surat Tugas </label>
                                  </div>
                                  <div class="help-info">YYYY-MM-DD format</div>
                              </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="description" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Kegiatan Perjadin</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tgl_brngkt" required>
                                        <label class="form-label">Tanggal Berangkat</label>
                                    </div>
                                    <div class="help-info">YYYY-MM-DD format</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tgl_plng" required >
                                        <label class="form-label">Tanggal Pulang</label>
                                    </div>
                                    <div class="help-info">YYYY-MM-DD format</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="no_spd" required>
                                        <label class="form-label">Nomor SPD</label>
                                    </div>
                                    <div class="help-info">Ex:SPD/001/SBPJP/I/2018</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tgl_spd" required>
                                        <label class="form-label">Tanggal SPD</label>
                                    </div>
                                    <div class="help-info">YYYY-MM-DD format</div>
                                </div>
                                    <button class="btn btn-primary waves-effect" type="submit" name="submit" onclick="tambah.php">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# INPUT DATA PERJADIN -->

            <!--Button Kembali ke Tabel-->
            <div class="col-xs-9 col-sm-9 col-md-9 col-md-9" style="padding-left: 0px;  padding-right: 30px;  padding-bottom: 30px;">
                <a href="../../pages/tables/normal-tables.php">
                  <button type="button" class="btn bg-teal btn-block btn-lg waves-effect">LIHAT DATA</button>
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

    <!-- Jquery Validation Plugin Css -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="../../plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="../../plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/form-validation.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>
