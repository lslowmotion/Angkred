<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Angka Kredit Dosen</title>

        <!-- BOOTSTRAP STYLES-->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
        <!-- PAGE LEVEL STYLES -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
        <!--CUSTOM BASIC STYLES-->
        <link href="<?php echo base_url(); ?>assets/css/basic.css" rel="stylesheet" />
        <!--CUSTOM MAIN STYLES-->
        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <script type="text/javascript">
            var base_url = "<?php echo base_url(); ?>";
        </script>
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>DashboardControl/">Angkred</a>
                </div>

                <div class="header-right">

                    <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                    <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                    <a href="<?php echo base_url(); ?>LoginControl/logout" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

                </div>
            </nav>
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li>
                            <div class="user-img-div">
                                <img src="<?php echo base_url(); ?>assets/img/user.png" class="img-thumbnail" />

                                <div class="inner-text">
                                    <?php echo $this->session->userdata('nama'); ?>
                                    <br />
                                    <small>Last Login : 2 Weeks Ago </small>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="" href="<?php echo base_url(); ?>KumBControl/"><i class="fa fa-graduation-cap"></i>Pendidikan</a>
							<a class="" href="<?php echo base_url(); ?>KumCControl/"><i class="fa fa-graduation-cap"></i>Penelitian</a>
							<a class="" href="<?php echo base_url(); ?>KumDControl/"><i class="fa fa-graduation-cap"></i>Pengabdian</a>
							<a class="active-menu" href="<?php echo base_url(); ?>KumEControl/"><i class="fa fa-dashboard "></i>Kegiatan Unsur Penunjang</a>
                        </li>
                    </ul>
                </div>
            </nav>
