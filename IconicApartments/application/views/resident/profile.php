<br><br>
<div class="container">
    <div class="row">
        <div class="" id="registerform">
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


            <table class="table table-striped">
                <?php
                if($fetch_data->num_rows()>0){
                    foreach($fetch_data->result() as $row){
                        echo form_open('Profile/update')?>                               
                            <tr>
                                <th>
                                    <label for="fname">First name</label>
                                </th>                                                    
                                <th>
                                    <input type="text" class="form-control-plaintext" id="fname" name="fname" value="<?php echo $row->resident_name; ?>">
                                    
                                </th>
                            </tr> 
                            <tr>
                                <th>
                                    <label for="fname">Last name</label>
                                </th>                                                    
                                <th>
                                    <input type="text" class="form-control-plaintext" id="lname" name="lname" value="<?php echo $row->last_name; ?>">
                                    
                                </th>
                                
                            </tr> 

                            <tr>
                                <th>
                                    <label for="fname">Contact number</label>
                                </th>                                                    
                                <th>
                                    <input type="text" class="form-control-plaintext" id="tpnum" name="tpnum" value="<?php echo $row->tele_num; ?>">
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <input type="hidden" class="form-control-plaintext"  name="user_id" value="<?php echo $row->user_id; ?>">
                                    <button type="submit" class="btn btn-primary mb-2">Update</button>
                                </th>
                            </tr>                                             
                        <?php echo form_close();?>
                   
                    <?php    }
                    }else{

                    }
                    ?>
            </table>
        </div>
    </div>

    <br><br><br>

</div>
</div>

