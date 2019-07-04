<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
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
        <div class="container-fluid">
        <div class="row" style="padding-bottom:10px">
        <nav class="col-lg-2 d-none d-lg-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
      
                <a href="<?php echo site_url('admin/index');?>" class="list-group-item list-group-item-light" style="color:black" ><h5><i class="fa fa-home fa-fw"></i>  DASHBOARD</h5></a>

                <a href="#requests" class="list-group-item list-group-item-light" data-toggle="collapse" style="color:black" ><h5><i class="fa fa-address-card fa-fw"></i></i>  REQUESTS</h5></a>
                <div class="collapse" id="requests">
                  <!-- <a href="<?php echo site_url('AdminDashboard/RegisterRequests') ?>" class="list-group-item">View All</a>
                  <a href="<?php echo site_url('admin/register_customer');?>" class="list-group-item">Add customer</a> -->
                </div>
            
                <a href="#users" class="list-group-item list-group-item-light" data-toggle="collapse" style="color:black"><h5><i class="fa fa-users fa-fw fa-fw" aria-hidden="true"></i>  USERS</h5></a>
                <div class="collapse" id="users">
                  <a href="" class="list-group-item">Residents</a>
                  <a href="" class="list-group-item">Coaches</a>
                  <a href="" class="list-group-item">Instructor</a>
                  <a href="" class="list-group-item">Instructor</a>
                </div>

                <a href="#bookings" class="list-group-item list-group-item-light" data-toggle="collapse" style="color:black" ><h5><i class="fa fa-address-card fa-fw"></i>  BOOKINGS</h5></a>
                <div class="collapse" id="bookings">
                  <a href="<?php echo site_url('AdminDashboard/spa_current_bookings') ?>" class="list-group-item">Spa Current Bookings</a>
                  <a href="<?php echo site_url('AdminDashboard/tennis_pending_bookings') ?>" class="list-group-item">Spa Pending Bookings</a>
                  <a href="<?php echo site_url('AdminDashboard/tennis_current_bookings') ?>" class="list-group-item">Tennis Court Current Bookings</a>
                  <a href="<?php echo site_url('AdminDashboard/tennis_pending_bookings') ?>" class="list-group-item">Tennis Court Pending Bookings</a>
                </div>

                <a href="#reports" class="list-group-item list-group-item-light" data-toggle="collapse" style="color:black" ><h5><i class="fa fa-file fa-fw"></i>  REPORTS</h5></a>
                <div class="collapse" id="reports">
                  <a href="<?php echo site_url('AdminDashboard/Reports/req');?>" class="list-group-item">Registration Requests</a>
                  <a href="<?php echo site_url('AdminDashboard/Reports/reg');?>" class="list-group-item">Registered Users</a>
                  <a href="<?php echo site_url('AdminDashboard/Reports/rem');?>" class="list-group-item">Removed Users</a>
                </div>

            </ul>
           
        </nav>
        </div>
</div>


    