<div class="container" id="coachTable">
    <div class="row">
    <div class="col-lg-12">
        <h1 class="text-center">Coach Requests</h1>
        <br><hr><br>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <th>User Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Contact number</th>
                <th>Email</th>
                <th></th>
                <th></th>
            </thead>
            <tbody id="tble">
            <?php
                if($fetch_data){
                    foreach($fetch_data as $row){
                        ?>
                        <tr>
                        <?php echo form_open('Register/AdminRegisterUsers/registerRequestsCoaches')?>
                                
                                <td><input  style="border:none;" class="form-control" type="text" id="user_id" name="user_id" value="<?php echo $row['user_id']; ?>"
                                    required></td>
                                <!-- <td><?php echo $row['user_id']; ?></td> -->
                                <td><?php echo $row['coach_name']; ?></td>
                                <td><?php echo $row['last_name']; ?></td>
                                <td><?php echo $row['tele_num']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><input  class="btn-success btn-sm" type='submit' value='Register'></td>
                                <td><input class="btn-danger btn-sm" type='submit' value='remove' name="remove"></td>
                        <?php echo form_close();?>
                        </tr>
                        <?php
                    }
                }else{
                    ?>
                <tr>
                    <td colspan="3">No coaches to register</td>
                </tr>
                    <?php
                }
            ?>
            </tbody>
        </table>
    </div>
    </div>
</div>