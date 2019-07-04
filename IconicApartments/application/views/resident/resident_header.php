<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/Style.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <title>Iconic Appartments</title>
  </head>
  <body class="d-flex flex-column">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark justify-content-center sticky-top">
                <!-- Brand -->
            <a class="navbar-brand" href="<?php echo site_url('Main')?>">Iconic Apartments</a>
              
                <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
              
                <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Gym')?>">Gym</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link  <?=($this->uri->segment(1)==='Gym')?'active':''?>" href="#" id="navbardrop" data-toggle="dropdown">
                            Gym
                        </a>
                        <div class="dropdown-menu" style="background: rgba(179,179,179,0.7)">
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a class="dropdown-item" href="<?php echo site_url('Gym/attendance')?>"><strong>Mark Attendance</strong></a></li>
                            <li class="list-group-item"><a class="dropdown-item" href="<?php echo site_url('Gym/attendance_view')?>"><strong>View Attendance</strong></a></li>
                            <li class="list-group-item"><a class="dropdown-item" href="<?php echo site_url('Gym/booking')?>"><strong>Book Instructor</strong></a></li>
                            <li class="list-group-item"><a class="dropdown-item" href="<?php echo site_url('Gym/view')?>"><strong>Instructor Bookings</strong></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Tennis')?>">Tennis Court</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link  <?=($this->uri->segment(1)==='Tennis')?'active':''?>" href="#" id="navbardrop" data-toggle="dropdown">
                            Tennis Court
                        </a>
                        <div class="dropdown-menu" style="background: rgba(179,179,179,0.7)">
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a class="dropdown-item" href="<?php echo site_url('Tennis/tennisCourt')?>"><strong>Book Tennis Court</strong></a></li>
                            <li class="list-group-item"><a class="dropdown-item" href="<?php echo site_url('Tennis/viewCourt')?>"><strong>View Tennis Court Bookings</strong></a></li>
                            <li class="list-group-item"><a class="dropdown-item" href="<?php echo site_url('Tennis/booking')?>"><strong>Book Coach</strong></a></li>
                            <li class="list-group-item"><a class="dropdown-item" href="<?php echo site_url('Tennis/view')?>"><strong>View Coach Bookings</strong></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Spa')?>">Spa Room</a>
                    </li>  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link  <?=($this->uri->segment(1)==='Spa')?'active':''?>" href="#" id="navbardrop" data-toggle="dropdown">
                            Spa Room
                        </a>
                        <div class="dropdown-menu" style="background: rgba(179,179,179,0.7)">
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a class="dropdown-item" href="<?php echo site_url('Spa/spaRoom')?>"><strong>Book Spa Room</strong></a></li>
                            <li class="list-group-item"><a class="dropdown-item" href="<?php echo site_url('Spa/viewRoom')?>"><strong>View Spa Room Bookings</strong></a></li>
                            <li class="list-group-item"><a class="dropdown-item" href="<?php echo site_url('Spa/booking')?>"><strong>Book Masseur</strong></a></li>
                            <li class="list-group-item"><a class="dropdown-item" href="<?php echo site_url('Spa/view')?>"><strong>View Masseur Bookings</strong></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Pool')?>">Pool</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link  <?=($this->uri->segment(1)==='Pool')?'active':''?>" href="#" id="navbardrop" data-toggle="dropdown">
                            Pool
                        </a>
                        <div class="dropdown-menu" style="background: rgba(179,179,179,0.7)">
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a class="dropdown-item" href="<?php echo site_url('Pool/attendance')?>"><strong>Mark Attendance</strong></a></li>
                            <li class="list-group-item"><a class="dropdown-item" href="<?php echo site_url('Pool/view')?>"><strong>View Attendance</strong></a></li>
                            </ul>
                        </div>
                    </li> 
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark <?=($this->uri->segment(2)==='notifications')?'active':''?>" href="<?php echo site_url('Main/notifications') ?>">Notifications  <i class="fa fa-bell fa-fw"></i> <span class="badge badge-light"><?php echo $this->session->userdata('notifications'); ?></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark <?=($this->uri->segment(1)==='Profile')?'active':''?>" href="<?php echo site_url('Profile') ?>">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" href="<?php echo site_url('Main/logout') ?>">Logout</a>
                    </li>
                    <!-- <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link btn btn-dark dropdown-toggle" data-toggle="dropdown">Notifications</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <?php foreach ($notifications as $notification):?>
                                    <?php if($notification['type'] = 'gym_booking'):?>
                                    <a class="dropdown-item" href="<?php echo site_url('Gym/view')?>">
                                        <span><button type="button" class="close" data-dismiss="alert">&times;</button></span>
                                        <p class="text-center"><?php echo $notification['title']." ".$notification['booking_id']; ?></p>
                                        <p class="text-center"><?php echo $notification['message']; ?></p>
                                        <p class="small"><?php echo $notification['time']; ?></p>
                                        <div class="row justify-content-center">
                                            <a href="<?php echo site_url('Main/delete_notification/').$notification['notification_id']?>" class="btn btn-danger btn-sm text-center">Delete</a>
                                        </div>
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
                </ul>
            </div>
        </nav>
        <br><br>
    </body>


    