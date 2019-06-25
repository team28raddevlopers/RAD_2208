<div class="container">
    <div class="row">
    <div class="col-lg-12">
        <h3>Instructor</h3>

    </div>

    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th></th>
            </thead>
            <tbody id="table">
            <?php
                if($fetch_data->num_rows()>0){
                    foreach($fetch_data->result() as $row){
                        ?>
                        <tr>
                        <?php echo form_open('FirstLogin/First_login')?>
                                
                                    
                                    <td><input style="border:none;" class="form-control" type="hidden" id="user_id" name="user_id" value="<?php echo $row->user_id; ?>"
                                    required></td>
                                
                          
                                <td><?php echo $row->instructor_name; ?></td>
                                <td><?php echo $row->last_name; ?></td>
                                
                                <td><?php echo $row->email; ?></td>
                                <td><input  class="form-control btn-success" type='submit' value='Login'></td>
                                
                        <?php echo form_close();?>
                        </tr>
                        <?php
                    }
                }else{
                    ?>
                <tr>
                    <td colspan="3">No Instructors register</td>
                </tr>
                    <?php
                }
            ?>
        </tbody>
        </table>
    </div>
    </div>
</div>