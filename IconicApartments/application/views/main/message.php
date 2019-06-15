<?php include 'register_header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
                <?php 
                    if($this->session->flashdata('msg')){
                        echo "<h3>".$this->session->flashdata('msg')."</h3>";
                        }
                ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <a type="button" class="btn btn-primary" href="<?php echo site_url('Main')?>">Home</a>
        </div>
    </div>
</div>

<?php include 'fotter.php'?>
