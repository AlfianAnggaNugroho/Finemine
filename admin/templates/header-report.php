<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: ../auth/login.php");
}
include '../function.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Report Data Pengaduan Kehilangan Barang</title>
  <link rel="icon" href="../assets/dist/img/IconAngkasa.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- jQuery -->
  <link rel="stylesheet" href="../assets/plugins/jquery-ui/jquery-ui.min.css">
</head>

<body class="hold-transition skin-blue sidebar-mini text-sm layout-fixed layout-footer-fixed">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt mr-2"></i>Fullscreen
            </a>
          </li>
        </ul>
    </nav>

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-warning elevation-4"
      style="background: linear-gradient(to left, #642EFE, #000066); color: white;">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link"
        style="padding-right:30px; background: linear-gradient(to left, #642EFE, #000066); color: white;">
        <img src="../assets/dist/img/IconAngkasa.png" alt="Findmine" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <b class="brand-text" style="font-weight: bold;">Angkasa Pura II<strong> (FINDMINE)</strong></b>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <?php
          $id = $_SESSION["login"]["user_id"];
          $data = query("SELECT * FROM user WHERE user_id = '$id'")[0];
          ?>
            <img src="../assets/img/profile/<?= $data['img'];?> " class="img-circle" alt="User Image"
              style="max-height:38px; max-widht: 38px;">
          </div>
          <div class="info">
            <a class="d-block" style="cursor: default;"><?php echo  $_SESSION["login"]["name"] ?></a>
            <a class="d-block" style="cursor: default;"><?php echo  $_SESSION["login"]["username"] ?> <i
                style="font-size: 10px" class="fa fa-circle text-success"></i></a>
          </div>
        </div>