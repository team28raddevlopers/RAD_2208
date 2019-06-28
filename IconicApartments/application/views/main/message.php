<?php include 'register_header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
                <?php 
                    if($this->session->flashdata('msg')):
                        ?>
                        <h3 class="text-center"> <?php 
                            echo $this->session->flashdata('msg');?>
                        </h3>
                    <?php endif;?>
        </div>
    </div>
</div>

<?php include 'footer.php'?>
