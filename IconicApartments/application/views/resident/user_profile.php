<br><br>
<div class="container">
        <!-- <div class="" id="registerform">
            <h2 class="text-center">Register</h2>

            <?php if($this->session->flashdata()): ?>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $this->session->flashdata('updatefail'); ?>
                        </div>
                    </div>
                </div>
            <?php endif;?>

        </div> -->
        <?php echo validation_errors(); ?>
       <div class="row justify-content-center">
        <div class="col-6">
        <?php if($this->session->flashdata('updatefail')): ?>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $this->session->flashdata('updatefail'); ?>
                            <?php echo validation_errors(); ?>
                        </div>
                    </div>
                </div>
            <?php endif;?>
        </div>
       </div>

        <div class="row justify-content-center">
            <ul class="list-group-flush">
                <li class="list-group-item">
                    <h5>First Name</h5>
                    <p><?php echo $user['resident_name'];?></p>
                </li>
                <li class="list-group-item">
                    <h5>Last Name</h5>
                    <p> <?php echo $user['last_name'];?></p>
                </li>
                <li class="list-group-item">
                    <h5>Username</h5>
                    <p> <?php echo $user['username'];?></p>
                </li>
                <li class="list-group-item">
                    <h5>Email</h5>
                    <p> <?php echo $user['email'];?></p>
                </li>
                <li class="list-group-item">
                    <h5>Apparment Number</h5>
                    <p> <?php echo $user['appartment_no'];?></p>
                </li>
                <li class="list-group-item">
                    <h5>Contact No</h5>
                    <p> <?php echo $user['tele_num'];?></p>
                </li>
                <li class="list-group-item">
                    <button type="button" class="delete btn btn-dark" data-toggle="modal" data-target="#edit">Edit</button>
                </li>
            </ul>
        </div>
    </div>

    <br><br><br>

    <div class="modal" id="edit">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-body">
          <?php echo validation_errors(); ?>
          <form action="<?php echo site_url('Profile/update')?>" id="edit-form" method="post" accept-charset="utf-8">
          <input type="hidden" id="form-main-action" value="<?=base_url().'admin/update_customer/'?>">

          <div class="form-group">
            <label>First Name</label>
            <input type="text" id="fname" class="form-control" name="fname" placeholder="First Name" value="<?php echo $user['resident_name'];?>" required>
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" id="lname" class="form-control" name="lname" placeholder="Last Name" value="<?php echo $user['last_name'];?>" required>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" id="username" class="form-control" name="username" placeholder="Username" value="<?php echo $user['username'];?>" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" id="email" class="form-control" name="email" placeholder="Email" value="<?php echo $user['email'];?>" required>
          </div>
          <div class="form-group">
            <label>Appartment Number</label>
            <input type="text" id="apptno" class="form-control" name="apptno" placeholder="Appartment Number" value="<?php echo $user['appartment_no'];?>" required>
          </div>
          <div class="form-group">
            <label>Contact Number</label>
            <input type="text" id="tpnum" class="form-control" name="tpnum" placeholder="Contact Number" value="<?php echo $user['tele_num'];?>" required>
          </div>
          <button type="submit" class="btn btn-primary btn-sm">Save</button>
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
</div>