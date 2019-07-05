    <!-- <div class="container"> -->
        <?php if($this->session->flashdata('msg')): ?>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo $this->session->flashdata('msg'); ?>
                    </div>
                </div>
            </div>
        <?php endif;?>
        <div id="demo" class="carousel slide" data-ride="carousel" style="overflow:hidden; height:1000px;">

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

        <br><br>
    <div class="container">
        <div id="wrapper" class="animate">
        <div class="container-fluid">
                <h3 class="display-4 text-center"><strong>FACILITIES</strong></h3>
                <br><br>
            <div class="row">
                <div class="col">
                <div class="card">
                    <div class="card-body">
                    <img class="card-img-top" src="<?php echo base_url()?>assets/img/gym.jpg" alt="Card image cap">
                    <hr>
                    <h5 class="card-title text-center">GYM</h5>
                    <p class="card-text">Iconic Aprtments Gym is fully equiped with state of the art equipment and well trained gym instructors to maintain fitness for all Iconic Apartments residents.</p>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card">
                    <div class="card-body">
                    <img class="card-img-top" src="<?php echo base_url()?>assets/img/spa.jpg" alt="Card image cap">
                    <hr>
                    <h5 class="card-title text-center">SPA</h5>
                    <p class="card-text">Iconic Apartments Spa offers residents a truly relaxing experience delivered by professional Masseurs with utmost care using certified products.</p>
                    </div>
                </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                <div class="card">
                    <div class="card-body">
                    <img class="card-img-top" src="<?php echo base_url()?>assets/img/tennis.jpg" alt="Card image cap">
                    <hr>
                    <h5 class="card-title text-center">TENNIS COURT</h5>
                    <p class="card-text">Iconic Apartments Tennis Court is well maintained for the residents to play tennis to spend free time or practice with experienced coaches.</p>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card">
                    <div class="card-body">
                    <img class="card-img-top" src="<?php echo base_url()?>assets/img/pool.jpg" alt="Card image cap">
                    <hr>
                    <h5 class="card-title text-center">POOL</h5>
                    <p class="card-text">Iconic Apertments Swimming Pool is well maintained for the residents to spend relaxing weekends and afternoons with friends and family.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>


        <br><hr><br>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <!-- <img class="card-img-top" src="https://dummyimage.com/350x250/c7c7c7/000.png" alt="Card image cap"> -->
                    <div class="card-block p-3">
                        <h4 class="card-title text-center">Be A Part Of ICONIC Family!</h4>
                        <p class="card-text lead text-center">Are you a skilled Gym Instructor, Tennis Coach or Masseur</p>
                        <p class="text-center">Register now as an Iconic Aprtments Employee</p>
                        <hr><br>
                        <div class="row justify-content-center">
                            <h3><a class ="btn btn-dark btn-lg" href="<?php echo site_url('main/registerEmployee')?>">Register as Employee</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <!-- <img class="card-img-top" src="https://dummyimage.com/350x250/c7c7c7/000.png" alt="Card image cap"> -->
                    <div class="card-block p-3">
                        <h4 class="card-title text-center">Register As A Resident!</h4>
                        <p class="card-text lead text-center">Are you a resident at Iconic Aprtments?</p>
                        <p class="text-center">Register now as an Iconic Aprtments Resident</p>
                        <br><hr>
                        <div class="row justify-content-center">
                            <h3><a class ="btn btn-dark btn-lg" href="<?php echo site_url('main/registerRecident')?>">Register as Resident</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><hr><br>

    </div>
    <br><br><br>
    <div style="height:220px; background-color:rgb(148, 77, 255);">
        <br><br><br><br>
        <h3 class="text-center">ICONIC APPARTMENTS For quality Living!</h3>
    </div>

    
   
