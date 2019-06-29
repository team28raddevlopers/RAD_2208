<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/Style.css" >

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
                    <!-- <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link btn btn-dark dropdown-toggle" data-toggle="dropdown">Notifications</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <?php foreach ($notifications as $notification):?>
                                    <?php if($notification['type'] = 'accept_booking'):?>
                                    <a class="dropdown-item" href="<?php echo site_url('Instructor/pending_bookings')?>">
                                        <span><button type="button" class="close" data-dismiss="alert">&times;</button></span>
                                        <p class="lead"><?php echo $notification['title']; ?></p>
                                        <p><?php echo $notification['message']; ?></p>
                                        <p class="small"><?php echo $notification['time']; ?></p>
                                        <div class="row justify-content-center">
                                            <a href="<?php echo site_url('Main/delete_notification/').$notification['notification_id']?>" class="btn btn-danger btn-sm text-center">Delete</a>
                                        </div>
                                        <br>
                                    </a>
                                    <?php elseif($notification['type'] = 'cancelled_booking'):?>
                                    <a class="dropdown-item" href="<?php echo site_url('Instructor/pending_bookings')?>">
                                        <span><button type="button" class="close" data-dismiss="alert">&times;</button></span>
                                        <p class="lead"><?php echo $notification['title']." ".$notification['booking_id']; ?></p>
                                        <p><?php echo $notification['message']; ?></p>
                                        <p class="small"><?php echo $notification['time']; ?></p>
                                        <div class="row justify-content-center">
                                            <a href="<?php echo site_url('Main/delete_notification/').$notification['notification_id']?>" class="btn btn-danger btn-sm text-center">Delete</a>
                                        </div>
                                        <br>
                                    </a>
                                    <?php endif;?>
                                <?php endforeach;?>

                            <a class="dropdown-item" href="<?php echo site_url('Gym/view')?>">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item-text" href="#">Text Link</a>
                            <span class="dropdown-item-text">Just Text</span> 
                            </div>
                        </div>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark <?=($this->uri->segment(2)==='notifications')?'active':''?>" href="<?php echo site_url('Main/notifications') ?>">Notifications  <span class="badge badge-light"><?php echo $this->session->userdata('notifications'); ?></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" href="<?php echo site_url('Main/logout') ?>">Logout</a>
                    </li>
                </ul>
            </div> 
        </nav>
