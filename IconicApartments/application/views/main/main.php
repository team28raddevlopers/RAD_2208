<!-- <?php include 'header_main.php'?> -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12">
                <h1 class="text-center">Welcome to Iconic Apartments</h1>
                <br>
            </div>
        </div>    
    </div>
    <div class="container">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo base_url()?>assets/img/img2.jpg" alt="1">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url()?>assets/img/img4.png" alt="2">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url()?>assets/img/img3.jpg" alt="3">
                </div>
            </div>

            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
        <br>
        <div class="jumbotron banner" >
            <h2 class="text-center">Be A Part Of ICONIC Family!</h2>
            <br>
            <p class="lead text-center">Are you a skilled Gym Instructor, Tennis Coach or Masseur?</p>
            <p class="text-center">Register now as an Iconic Aprtments Employee</p>
            <hr><br>
            <div class="row justify-content-center">
                <h3><a class ="btn btn-dark btn-lg" href="<?php echo site_url('main/registerEmployee')?>">Register as Employee</a></h3>
            </div>
        </div>
        <div class="jumbotron">
            <h2 class="text-center">Register As A Resident!</h2>
            <br>
            <p class="lead text-center">Are you a resident at Iconic Aprtments?</p>
            <p class="text-center">Register now as an Iconic Aprtments Resident</p>
            <hr><br>
            <div class="row justify-content-center">
                <h3><a class ="btn btn-dark btn-lg" href="<?php echo site_url('main/registerRecident')?>">Register as Resident</a></h3>
            </div>
        </div>
        <br><br>
    </div>
   
