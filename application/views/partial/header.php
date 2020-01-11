<!DOCTYPE html>
<html data-ng-app="accountingApp">
<head>
    <title>Accounts Managment</title>
    <script src="<?= base_url() ?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/typeahead.js"></script>
    <script src="<?php echo base_url() ?>plugins/jqvalidation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/chart.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/bootstrap/css/custom.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/fontawesome45/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/iCheck/all.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/colorpicker/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/timepicker/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/daterangepicker-bs3.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/datepicker/datepicker.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>/dist/css/skins/_all-skins.min.css">
    <!--<script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>-->
    <script src="<?php echo site_url('assets/js/jquery-migrate-1.0.0.js'); ?>"></script>

    <script src="<?php echo site_url('assets/js/jquery.printElement.min.js'); ?>"></script>
</head>
<body class="hold-transition skin-yellow sidebar-mini" style="background:#eeeeee;">
    <header class="main-header head">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>EOBI</b> Managment</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="<?php echo base_url() ?>login/logout"><i class="fa  fa-sign-out"></i>Sign Out</a>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="<?php echo base_url() ?>company_config"><i class="fa fa-gears"></i> Settings</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

<div class="row">
    <div class="container">
    <!-- Content Wrapper. Contains page content -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div ng-view></div>
            <div id="print_header">
                <h2 align="center">IDLBridge</h2>
                <h3 align="center">Lahore (Punjab Pakistan)</h3>
            </div>