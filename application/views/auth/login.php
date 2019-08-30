
<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- /meta tags -->
<title>Login - Sistem Pemesanan Bus</title>

<!-- Site favicon -->
<link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico" type="image/x-icon">
<!-- /site favicon -->

<!-- Font Icon Styles -->
<link rel="stylesheet" href="<?= base_url() ?>assets/node_modules/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/vendors/gaxon-icon/styles.css">
<!-- /font icon Styles -->

<!-- Perfect Scrollbar stylesheet -->
<link rel="stylesheet" href="<?= base_url() ?>assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
<!-- /perfect scrollbar stylesheet -->

<!-- Load Styles -->    <link rel="stylesheet" href="<?= base_url() ?>assets/css/light-style-1.min.css">
    <!-- /load styles -->

</head>
<body class="dt-sidebar--fixed dt-header--fixed">

<!-- Loader -->
<div class="dt-loader-container">
  <div class="dt-loader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
    </svg>
  </div>
</div>
<!-- /loader -->
<!-- Root -->
<div class="dt-root">
    <div class="dt-root__inner">

        <!-- Login Container -->
        <div class="dt-login--container">

            <!-- Login Content -->
            <div class="dt-login__content-wrapper">

                <!-- Login Background Section -->
                <div class="dt-login__bg-section">

                    <div class="dt-login__bg-content">
                        <!-- Login Title -->
                        <h1 class="dt-login__title">Login</h1>
                        <!-- /login title -->

                        <p class="f-16">Silahkan login terlebih dahulu untuk mengakses sistem ini</p>
                    </div>



                </div>
                <!-- /login background section -->

                <!-- Login Content Section -->
                <div class="dt-login__content">

                    <!-- Login Content Inner -->
                    <div class="dt-login__content-inner">

                        <!-- Form -->
                        <form action="<?= base_url() ?>auth/login" method="post">

                            <!-- Form Group -->
                            <div class="form-group">
                                <label class="sr-only" for="email-1">Username / NIK</label>
                                <input type="text" class="form-control" name="username" 
                                       placeholder="Enter Username / NIK">
                            </div>
                            <!-- /form group -->

                            <!-- Form Group -->
                            <div class="form-group">
                                <label class="sr-only">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <!-- /form group -->

                            <!-- Form Group -->
                            <div class="dt-checkbox d-block mb-6">
                                <input type="checkbox" id="checkbox-1">
                                <label class="dt-checkbox-content" for="checkbox-1">
                                    Keep me login on this device
                                </label>
                            </div>
                            <!-- /form group -->

                            <!-- Form Group -->
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary text-uppercase">Login</button>
                               
                            </div>
                            <!-- /form group -->


                        </form>
                        <!-- /form -->

                    </div>
                    <!-- /login content inner -->

                    <!-- Login Content Footer -->
                    <div class="dt-login__content-footer">
                        <a href="<?= base_url() ?>">Kembali ke home</a>
                    </div>
                    <!-- /login content footer -->

                </div>
                <!-- /login content section -->

            </div>
            <!-- /login content -->

        </div>
        <!-- /login container -->

    </div>
</div>
<!-- /root -->

<!-- Optional JavaScript -->
<script src="<?= base_url() ?>assets/node_modules/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/node_modules/moment/moment.js"></script>
<script src="<?= base_url() ?>assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- Perfect Scrollbar jQuery -->
<script src="<?= base_url() ?>assets/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<!-- /perfect scrollbar jQuery -->

<!-- masonry script -->
<script src="<?= base_url() ?>assets/node_modules/masonry-layout/dist/masonry.pkgd.min.js"></script>
<script src="<?= base_url() ?>assets/node_modules/sweetalert2/dist/sweetalert2.js"></script>
<script src="<?= base_url() ?>assets/js/functions.js"></script>
<script src="<?= base_url() ?>assets/js/customizer.js"></script><!-- Custom JavaScript -->
<script src="<?= base_url() ?>assets/js/script.js"></script>

</body>


</html>