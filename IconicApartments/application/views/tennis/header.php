<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/Style.css" >
     
    <title>Iconic Apartments - Tennis Court</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark justify-content-center sticky-top">
                <!-- Brand -->
                <a class="navbar-brand" href="<?php echo site_url('Tennis')?>">Tennis</a>              
                <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
              
                <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item <?=($this->uri->segment(2)==='tennisCourt')?'active':''?>">
                        <a class="nav-link" href="<?php echo site_url('Tennis/tennisCourt')?>">Book Tennis Court</a>
                    </li>
                    <li class="nav-item <?=($this->uri->segment(2)==='booking')?'active':''?>">
                        <a class="nav-link" href="<?php echo site_url('Tennis/booking')?>">Book Coach</a>                    
                    </li>
                    <li class="nav-item <?=($this->uri->segment(2)==='viewCourt')?'active':''?>">
                        <a class="nav-link" href="<?php echo site_url('Tennis/viewCourt')?>">View Tennis Court Bookings</a>                   
                    </li> 
                    <li class="nav-item <?=($this->uri->segment(2)==='view')?'active':''?>">
                        <a class="nav-link" href="<?php echo site_url('Tennis/view')?>">View Coach Bookings</a>                   
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark <?=($this->uri->segment(2)==='notifications')?'active':''?>" href="<?php echo site_url('Main/notifications') ?>">Notifications <span class="badge badge-light"><?php echo $this->session->userdata('notifications'); ?></span></a>
                    </li>
                    <li class="nav-item mr-3 ml-3">
                        <a class="nav-link btn btn-dark" href="<?php echo site_url('Main/index') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" href="<?php echo site_url('Main/logout') ?>">Logout</a>
                    </li>
                </ul>
            </div> 
    </nav>
  </body>