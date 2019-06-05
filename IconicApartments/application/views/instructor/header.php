<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Iconic Gym</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark justify-content-center sticky-top">
                <!-- Brand -->
            <a class="navbar-brand" href="<?php echo site_url('instructor')?>">Gym</a>
              
                <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
              
                <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?=($this->uri->segment(2)==='current_bookings')?'active':''?>" href="<?php echo site_url('instructor/current_bookings')?>">Current Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=($this->uri->segment(2)==='pending_bookings')?'active':''?>" href="<?php echo site_url('instructor/pending_bookings')?>">Pending Bookings</a>
                    </li> 
                </ul>
                <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item mr-3 ml-3">
                        <a class="nav-link btn btn-dark" href="<?php echo site_url('Main/index') ?>">Home</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" href="<?php echo site_url('Main/logout') ?>">Logout</a>
                    </li>
                </ul>
            </div> 
        </nav>