<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/Style.css" >
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/print.js"></script>
    <title>Iconic Apartments - Admin</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark justify-content-center sticky-top">
     
            <a class="navbar-brand" href="<?php echo site_url('main')?>">Administrator</a>
              

            <ul class="navbar-nav">
                <li class="nav-item <?=($this->uri->segment(2)==='RegisterRequests')?'active':''?>">
                    <a class="nav-link" href="<?php echo site_url('AdminDashboard/RegisterRequests') ?>">Register requests</a>
                </li>

                <li class="nav-item <?=($this->uri->segment(2)==='Registered')?'active':''?>">
                    <a class="nav-link" href="<?php echo site_url('AdminDashboard/Registered') ?>">Registered</a>
                </li>

                <li class="nav-item <?=($this->uri->segment(2)==='Reports')?'active':''?>">
                    <a class="nav-link" href="<?php echo site_url('AdminDashboard/Reports') ?>">Reports</a>
                </li>

                <li class="nav-item <?=($this->uri->segment(2)==='spa_pending_bookings')?'active':''?>">
                    <a class="nav-link" href="<?php echo site_url('AdminDashboard/spa_pending_bookings') ?>">Spa Pending</a>
                </li>

                <li class="nav-item <?=($this->uri->segment(2)==='spa_current_bookings')?'active':''?>">
                    <a class="nav-link" href="<?php echo site_url('AdminDashboard/spa_current_bookings') ?>">Spa Current</a>
                </li>

                <li class="nav-item <?=($this->uri->segment(2)==='tennis_pending_bookings')?'active':''?>">
                    <a class="nav-link" href="<?php echo site_url('AdminDashboard/tennis_pending_bookings') ?>">Tennis Pending</a>
                </li>

                <li class="nav-item <?=($this->uri->segment(2)==='tennis_current_bookings')?'active':''?>">
                    <a class="nav-link" href="<?php echo site_url('AdminDashboard/tennis_current_bookings') ?>">Tennis Current</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item <?=($this->uri->segment(2)==='notifications')?'active':''?>">
                    <a class="nav-link btn btn-dark <?=($this->uri->segment(2)==='notifications')?'active':''?>" href="<?php echo site_url('Main/notifications') ?>">Notifications  <span class="badge badge-light"><?php echo $this->session->userdata('notifications'); ?></span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn btn-dark" href="<?php echo site_url('Main/logout') ?>">Logout</a>
                </li>

            </ul>
        </nav>
        <br><br>


    