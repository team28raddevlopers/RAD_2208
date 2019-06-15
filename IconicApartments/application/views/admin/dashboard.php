<?php include 'header_main.php' ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="jumbotron col-sm-12" id="registerform">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                    <a class="nav-link button1" href="<?php echo site_url('AdminDashboard/RegisterRequests') ?>" class="formbutton">
                        Register Requests
                    </a>        
                    </div>

                
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <a class="nav-link button1" href="<?php echo site_url('AdminDashboard/Registered') ?>" class="formbutton">
                            Registered
                        </a>        
                    </div>
                </div>
                
        </div>
     </div>
</div>

<?php include 'fotter.php'?>