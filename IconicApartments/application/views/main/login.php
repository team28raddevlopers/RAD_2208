<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=100%, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/Style.css" >
    <title>Iconic Apartments</title>
  </head>
  <body id="login">
  <div id="wrapper">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
     
        <a class="navbar-brand" href="<?php echo site_url('main')?>">Iconic Apartments</a>
            

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-dark" href="<?php echo site_url('main/login') ?>">Login</a>
            </li>
        </ul>
    </nav>

<div class="container">
    <br>
    <?php if($this->session->flashdata('login_error')): ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo $this->session->flashdata('login_error'); ?>
                </div>
            </div>
        </div>
    <?php endif;?>

    <br>

    <div class="row">
        <div class="col-md-6"></div>
        <div class="jumbotron col-md-6"  style="background: rgba(102,102,102,0)">
            <h2 class="display-4 text-center">Login</h2>
            <br><hr><br>
            <form action="login" method="post">
                <div class="form-group">
                    <label for="username" class="lead font-weight-bold">Username:</label>
                    <input type="text" class="form-control form-control-lg" id="username" placeholder="Enter username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password" class="lead font-weight-bold">Password:</label>
                    <input type="password" class="form-control form-control-lg" id="password" placeholder="Enter password" name="password" required>
                </div>
                <br>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-dark btn-lg">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="fixed-bottom" id="footer">
    <footer  class="bg-dark text-white mt-auto">
        <div class="container-fluid py-3">
            <div class="text-center small">©2019 IconicApartments</div>
        </div>
    </footer>
</div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    
</html>
