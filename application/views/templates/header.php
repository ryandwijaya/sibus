<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass">
<!-- /meta tags -->
<title>Sistem Informasi Pemesanan Bus</title>

<!-- Site favicon -->
<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico" type="image/x-icon">
<!-- /site favicon -->

<!-- Font Icon Styles -->
<!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/gaxon-icon/styles.css"> -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<!-- /font icon Styles -->

<!-- Perfect Scrollbar stylesheet -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- /perfect scrollbar stylesheet -->

<!-- Load Styles -->    
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/light-style-1.min.css">
<link href="<?= base_url() ?>assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<link href="<?= base_url() ?>assets/css/animated.css" rel="stylesheet">
    <!-- /load styles -->


</head>
<body class="dt-sidebar--fixed dt-header--fixed" style="overflow: scroll;">


<!-- Root -->
<div class="dt-root">
    <div class="dt-root__inner">
        <!-- Header -->
<header class="dt-header">

  <!-- Header container -->
  <div class="dt-header__container">

    <!-- Brand -->
    <div class="dt-brand">

      <!-- Brand tool -->
      <div class="dt-brand__tool" data-toggle="main-sidebar">
        <div class="hamburger-inner"></div>
      </div>
      <!-- /brand tool -->

      <!-- Brand logo -->
      <span class="dt-brand__logo">
        <a class="dt-brand__logo-link" href="index.html">
          <img class="dt-brand__logo-img d-none d-sm-inline-block" src="<?= base_url() ?>assets/images/logo.png" alt="">
          <img class="dt-brand__logo-symbol d-sm-none" src="<?= base_url() ?>assets/images/logo-symbol.png" alt="">
        </a>
      </span>
      <!-- /brand logo -->

    </div>
    <!-- /brand -->

    <!-- Header toolbar-->
    <div class="dt-header__toolbar">

      

      <!-- Header Menu Wrapper -->
      <div class="dt-nav-wrapper">
        <!-- Header Menu -->
        <ul class="dt-nav d-lg-none">
          <li class="dt-nav__item dt-notification-search dropdown">

            <!-- Dropdown Link -->
            <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"> <i class="icon icon-search icon-fw icon-lg"></i> </a>
            <!-- /dropdown link -->

            <!-- Dropdown Option -->
            <div class="dropdown-menu">

              <!-- Search Box -->
              <form class="search-box right-side-icon">
                <input class="form-control form-control-lg" type="search" placeholder="Search in app...">
                <button type="submit" class="search-icon"><i class="icon icon-search icon-lg"></i></button>
              </form>
              <!-- /search box -->

            </div>
            <!-- /dropdown option -->

          </li>
        </ul>
        
        <ul class="dt-nav">
          <li class="dt-nav__item dt-notification dropdown">

            <!-- Dropdown Link -->
            <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"> <i class="icon icon-notification2 icon-fw dt-icon-alert"></i>
            </a>
            <!-- /dropdown link -->

            <!-- Dropdown Option -->
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
              <!-- Dropdown Menu Header -->
              <div class="dropdown-menu-header">
                <h4 class="title">Notifications (9)</h4>

                <div class="ml-auto action-area">
                  <a href="javascript:void(0)">Mark All Read</a> <a class="ml-2" href="javascript:void(0)">
                    <i class="icon icon-settings icon-lg text-light-gray"></i> </a>
                </div>
              </div>
              <!-- /dropdown menu header -->

              <!-- Dropdown Menu Body -->
              <div class="dropdown-menu-body ps-custom-scrollbar">

                <div class="h-auto">
                  <!-- Media -->
                  <a href="javascript:void(0)" class="media">

                    <!-- Avatar -->
                    <img class="dt-avatar mr-3" src="<?= base_url() ?>assets/images/user-avatar/stella-johnson.jpg" alt="User">
                    <!-- avatar -->

                    <!-- Media Body -->
                    <span class="media-body">
                    <span class="message">
                      <span class="user-name">Stella Johnson</span> and <span class="user-name">Chris Harris</span>
                      have birthdays today. Help them celebrate!
                    </span>
                    <span class="meta-date">8 hours ago</span>
                  </span>
                    <!-- /media body -->

                  </a>
                  <!-- /media -->

                  
                </div>

              </div>
              <!-- /dropdown menu body -->

              <!-- Dropdown Menu Footer -->
              <div class="dropdown-menu-footer">
                <a href="javascript:void(0)" class="card-link"> See All <i class="icon icon-arrow-right icon-fw"></i>
                </a>
              </div>
              <!-- /dropdown menu footer -->
            </div>
            <!-- /dropdown option -->

          </li>

          
        </ul>
        <!-- /header menu -->

        

        <!-- Header Menu -->
        <ul class="dt-nav">
          <li class="dt-nav__item dropdown">

            <!-- Dropdown Link -->
            <a href="#" class="dt-nav__link dropdown-toggle no-arrow dt-avatar-wrapper"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="dt-avatar size-30" src="<?= base_url() ?>assets/images/profile_av.png" alt="Domnic Harris">
              <span class="dt-avatar-info d-none d-sm-block">
                <span class="dt-avatar-name"><?= $this->session->userdata('session_nama') ?></span>
              </span> </a>
            <!-- /dropdown link -->

            <!-- Dropdown Option -->
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dt-avatar-wrapper flex-nowrap p-6 mt--5 bg-gradient-purple text-white rounded-top">
                <img class="dt-avatar" src="<?= base_url() ?>assets/images/profile_av.png" alt="Domnic Harris">
                <span class="dt-avatar-info">
                  <span class="dt-avatar-name"><?= $this->session->userdata('session_nama') ?></span>
                  <span class="f-12"><?= $this->session->userdata('session_level') ?></span>
                </span>
              </div>
              <a class="dropdown-item" href="javascript:void(0)"> <i class="icon icon-user icon-fw mr-2 mr-sm-1"></i>Account
              <!-- </a> <a class="dropdown-item" href="javascript:void(0)">
                <i class="icon icon-settings icon-fw mr-2 mr-sm-1"></i>Setting </a> -->
              <a class="dropdown-item" onclick="return confirm('yakin ingin keluar dari sistem ?')"  href="<?= base_url() ?>logout"> <i class="icon icon-power-off icon-fw mr-2 mr-sm-1"></i>Logout
              </a>
            </div>
            <!-- /dropdown option -->

          </li>
        </ul>
        <!-- /header menu -->
      </div>
      <!-- Header Menu Wrapper -->

    </div>
    <!-- /header toolbar -->

  </div>
  <!-- /header container -->

</header>
<!-- /header -->
        <!-- Site Main -->
        <main class="dt-main">
            <!-- Sidebar -->
<aside id="main-sidebar" class="dt-sidebar">
  <div class="dt-sidebar__container">

    <!-- Sidebar Navigation -->
    <ul class="dt-side-nav">

      <!-- Menu Header -->
      <li class="dt-side-nav__item dt-side-nav__header">
        <span class="dt-side-nav__text">main</span>
      </li>
      <!-- /menu header -->

      <!-- Menu Item -->
    
      <li class="dt-side-nav__item">
        <a href="<?= base_url() ?>dashboard" class="dt-side-nav__link" title="Dashboard">  <i class="icon icon-home icon-fw icon-lg"></i> <span class="dt-side-nav__text">Dashboard</span> </a>
      </li>


      <li class="dt-side-nav__item dt-side-nav__header">
        <span class="dt-side-nav__text">Data</span>
      </li>
       
      <li class="dt-side-nav__item">
        <a href="<?= base_url() ?>bus" class="dt-side-nav__link" title="Bus"> <i class="fa fa-bus icon-fw icon-lg"></i>
          <span class="dt-side-nav__text">Bus</span> </a>
      </li>
      <li class="dt-side-nav__item">
        <a href="<?= base_url() ?>tujuan" class="dt-side-nav__link" title="Tujuan"> <i class="fa fa-map-marker icon-fw icon-lg"></i>
          <span class="dt-side-nav__text">Tujuan</span> </a>
      </li>
      <li class="dt-side-nav__item">
        <a href="<?= base_url() ?>jadwal" class="dt-side-nav__link" title="Jadwal"> <i class="fa fa-clock-o icon-fw icon-lg"></i>
          <span class="dt-side-nav__text">Jadwal</span> </a>
      </li>
      <li class="dt-side-nav__item">
        <a href="<?= base_url() ?>jalur" class="dt-side-nav__link" title="Jalur"> <i class="fa fa-arrow-circle-right icon-fw icon-lg"></i>
          <span class="dt-side-nav__text">Jalur</span> </a>
      </li>
      <!-- <li class="dt-side-nav__item">
        <a href="<?= base_url() ?>surat_jalan" class="dt-side-nav__link" title="Surat Jalan"> <i class="fa fa-file-excel-o icon-fw icon-lg"></i>
          <span class="dt-side-nav__text">Surat Jalan</span> </a>
      </li> -->
      
      

      
        
      

      <li class="dt-side-nav__item dt-side-nav__header">
        <span class="dt-side-nav__text">Transaksi</span>
      </li>
      

      
        
      <li class="dt-side-nav__item">
        <a href="<?= base_url() ?>pemesanan" class="dt-side-nav__link" title="Pemesanan"> <i class="icon icon-envelope icon-fw icon-lg"></i>
          <span class="dt-side-nav__text">pemesanan</span>       
        </a>
      </li>
      <li class="dt-side-nav__item">
        <a href="<?= base_url() ?>admin/konfirmasi" class="dt-side-nav__link" title="Konfirmasi"> <i class="fa fa-check icon-fw icon-lg"></i>
          <span class="dt-side-nav__text">Konfirmasi</span>       
        </a>
      </li>
      <li class="dt-side-nav__item">
        <a href="<?= base_url() ?>admin/laporan" class="dt-side-nav__link" title="Laporan"> <i class="fa fa-file icon-fw icon-lg"></i>
          <span class="dt-side-nav__text">Laporan</span>       
        </a>
      </li>
      <li class="dt-side-nav__item">
        <a href="<?= base_url() ?>peminat/tujuan/harian" class="dt-side-nav__link" title="Peminat Tujuan"> <i class="fa fa-file icon-fw icon-lg"></i>
          <span class="dt-side-nav__text">Peminat Tujuan</span>       
        </a>
      </li>
      <li class="dt-side-nav__item">
        <a href="<?= base_url() ?>tiket" class="dt-side-nav__link" title="Rekap Tiket"> <i class="fa fa-file-pdf-o icon-fw icon-lg"></i>
          <span class="dt-side-nav__text">Rekapitulasi Tiket</span>       
        </a>
      </li>
      
      
      

      <li class="dt-side-nav__item dt-side-nav__header">
        <span class="dt-side-nav__text">......</span>
      </li>
      <li class="dt-side-nav__item">
        <a href="<?= base_url() ?>logout" onclick="return confirm('yakin ingin keluar dari sistem ?')" class="dt-side-nav__link" title="Cuti"> <i class="icon icon-power-off icon-fw icon-lg"></i>
          <span class="dt-side-nav__text">Logout</span> </a>
      </li>
      <!-- /menu item -->

      
      <!-- /menu item -->

    </ul>
    <!-- /sidebar navigation -->

  </div>
</aside>
<!-- /sidebar -->
            <div class="dt-content-wrapper">

                <!-- Site Content -->
                <div class="dt-content">

                    <!-- Page Header -->
                    <div class="dt-page__header">
                        <h1 class="dt-page__title"><?= $judul ?></h1>
                    </div>
                    <!-- /page header -->

                    <!-- Entry Header -->
                    <div class="dt-entry__header">

                        <!-- Entry Heading -->
                        <div class="dt-entry__heading">
                            <h3 class="dt-entry__title">List Data</h3>
                        </div>
                        <!-- /entry heading -->

                    </div>
                    <!-- /entry header -->


        <?php if ($this->session->flashdata('alert') == 'success_post') { ?>
            <div class="alert alert-success animated shake hide-it">
                <strong>SUKSES!!!</strong> Data berhasil ditambahkan.
            </div>
        <?php } ?>
        <?php if ($this->session->flashdata('alert') == 'success_delete') { ?>
            <div class="alert alert-warning animated shake hide-it">
                <strong>SUKSES!!!</strong> Data berhasil dihapus.
            </div>
        <?php } ?>
        <?php if ($this->session->flashdata('alert') == 'success_change') { ?>
            <div class="alert alert-info animated shake hide-it">
                <strong>SUKSES!!!</strong> Data berhasil diubah.
            </div>
        <?php } ?>
        <?php if ($this->session->flashdata('alert') == 'fail_edit') { ?>
            <div class="alert alert-danger animated shake hide-it">
                <strong>GAGAL!!!</strong> Terjadi kesalahan saat menyimpan.
            </div>
        <?php } ?>
                    
                