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
                <?php echo anchor('Gym/index', 'Gym','class="navbar-brand"') ?>                    </li>
              
                <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
              
                <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item <?=($this->uri->segment(2)==='attendance')?'active':''?>">
                        <?php echo anchor('Gym/attendance', 'Mark Attendance','class="nav-link"') ?>                    
                    </li>
                    </li>
                    <li class="nav-item <?=($this->uri->segment(2)==='book')?'active':''?>">
                        <?php echo anchor('Gym/book', 'Book Instructor','class="nav-link"') ?>                    
                    </li>
                    <li class="nav-item <?=($this->uri->segment(2)==='view')?'active':''?>">
                        <?php echo anchor('Gym/view', 'View Bookings','class="nav-link"') ?>                    
                    </li>
                    </li> 
                </ul>
            </div> 
    </nav>
  </body>