<?php

?>

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
    <div class="container">
        <br><br>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark justify-content-center sticky-top">
                <!-- Brand -->
                <?php echo anchor('gym/index', 'Gym','class="navbar-brand"') ?>                    </li>
              
                <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
              
                <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <?php echo anchor('gym/attendance', 'Mark Attendance','class="nav-link"') ?>                    </li>
                    </li>
                    <li class="nav-item">
                        <?php echo anchor('gym/book', 'Book Instructor','class="nav-link"') ?>                    </li>
                    <li class="nav-item">
                        <?php echo anchor('gym/view', 'View Bookings','class="nav-link"') ?>                    </li>
                    </li> 
                </ul>
            </div> 
        </nav>
        <br><br>
        <h1 class="text-center">Welcome to Iconic Apartments Gym</h1>
        <br><hr><br>
        <p>description</p>
    </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>