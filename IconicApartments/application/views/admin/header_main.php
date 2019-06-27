<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/Style.css" >
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/print.js"></script>
    <title>User Registrations</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark justify-content-center sticky-top">
     
            <a class="navbar-brand" href="<?php echo site_url('main')?>">Iconic Apartments</a>
              

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-dark" href="<?php echo site_url('AdminDashboard/RegisterRequests') ?>">Register requests</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn btn-dark" href="<?php echo site_url('AdminDashboard/Registered') ?>">Registered</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn btn-dark" href="<?php echo site_url('AdminDashboard/Reports') ?>">Reports</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link btn btn-dark <?=($this->uri->segment(2)==='notifications')?'active':''?>" href="<?php echo site_url('Main/notifications') ?>">Notifications  <span class="badge badge-light"><?php echo $num; ?></span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn btn-dark" href="<?php echo site_url('Logout/loggingout') ?>">Logout</a>
                </li>

            </ul>
        </nav>
        <br><br>


    