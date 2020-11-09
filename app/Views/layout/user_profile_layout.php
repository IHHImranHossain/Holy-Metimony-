<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BDShaadi User</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/admin_profile/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="public/admin_profile/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="public/admin_profile/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="public/admin_profile/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/admin_profile/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="public/admin_profile/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="public/admin_profile/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="public/admin_profile/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="public/assets/css/after_login_style.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->


      <!-- SEARCH FORM -->
     
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar elevation-4 sidebar-light-success">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link navbar-gray">
        <img src="public/admin_profile/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light" style="font-size: 1.0rem;"><strong>Welcome To
            BDShaadi</strong></span>
      </a>

      <!-- Sidebar -->
      <?php $session = session(); ?>
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3">
          <div class="image">
            <img src="public/assets/upload/<?php echo $session->get('upload_image');?>" class="img-circle elevation-2"
              alt="User Image" style="height: 18.1rem;
          width: 13.1rem;">
            <div class="edit_icon" style="display:block;">
              <a href="<?= base_url('user_image') ?>"><i class="fa fa-edit" id="edit-icon"></a></i>
            </div>
          </div>
          <br><br>
          <div class="info">
            <a href="#" class="d-block">
              <?php $session = session(); ?>
              <h3 style="font-size: 1.5rem;"><?php echo $session->get('first_name');?>
                <?php echo $session->get('last_name');  ?></h3>
            </a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="<?= base_url('user_home') ?>" class="nav-link active">
                <i class="fa fa-home" aria-hidden="true"></i>
                <p>
                  HOME 
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview menu-open">
              <a href="<?= base_url('profile') ?>" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Profile
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Edit Profile
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('edit_user_information') ?>" class="nav-link">
                    <i class="fa fa-outdent" aria-hidden="true"></i>
                    <p>Profile Information</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('update_personal_information') ?>" class="nav-link">
                    <i class="fa fa-outdent" aria-hidden="true"></i>
                    <p>Personal Information</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('your_interest_form') ?>" class="nav-link">
                    <i class="fa fa-outdent" aria-hidden="true"></i>
                    <p>Your Interest</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('partner_preference_form') ?>" class="nav-link">
                    <i class="fa fa-outdent" aria-hidden="true"></i>
                    <p>Partner Preference</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('user_password') ?>" class="nav-link">
                    <i class="fa fa-outdent" aria-hidden="true"></i>
                    <p>Change Password</p>
                  </a>
                </li>

              </ul>
            </li>

            <li class="nav-item has-treeview menu-open">
              <a href="<?= base_url('logout') ?>" class="nav-link">
                <i class="fa fa-sign-in" aria-hidden="true"></i>
                <p>
                  Log Out
                </p>
              </a>
            </li>


          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>




    <div>
      <?= $this->renderSection('content')?>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="#">BDShaadi.com</a>.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="public/admin_profile/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="public/admin_profile/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="public/admin_profile/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="public/admin_profile/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="public/admin_profile/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="public/admin_profile/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="public/admin_profile/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="public/admin_profile/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="public/admin_profile/plugins/moment/moment.min.js"></script>
  <script src="public/admin_profile/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="public/admin_profile/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="public/admin_profile/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="public/admin_profile/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="public/admin_profile/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="public/admin_profile/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="public/admin_profile/dist/js/demo.js"></script>
</body>

</html>