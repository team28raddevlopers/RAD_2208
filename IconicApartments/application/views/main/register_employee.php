<div id="login" >
<br>
<div class="container" id="back">


        <div class="row">
        <div class="col-md-6"></div>
            <div class="jumbotron col-sm-6 " style="background: rgba(102,102,102,0.2)" id="registerform">
                <h2 class="display-4 text-center">Register</h2>
               <br>
                
                <?php echo form_open('Register/RegisterEmployee')?>

                    <?php
                        if(validation_errors()==true){
                            ?><div class="form-group" style="color: red;">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <?php echo validation_errors(); ?>    
                            </div>
                        </div>
                       <?php }?>
                    

                    

                    <div class="form-group">
                        <label for="fname" class="lead font-weight-bold">First Name:</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
                    </div>

                    <div class="form-group">
                        <label for="lname" class="lead font-weight-bold">Last Name:</label>
                        <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required>
                    </div>

                    <div class="form-group">
                        <label for="teleNumber" class="lead font-weight-bold">Contact number:</label>
                        <input type="text" class="form-control" id="teleNumber" placeholder="Your contact number" name="teleNumber" required>
                    </div>

                    <div class="form-group">
                        <label for="birthday" class="lead font-weight-bold">Date of birth</label>
                        <input type="date" class="form-control" id="birthday" placeholder="Your birthday" name="birthday" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="type" class="lead font-weight-bold">Are you ?</label>
                        <select name="type" class="form-control" id="type">
                            <option value="instructor">Gym instructor</option>
                            <option value="masseur">Messeur</option>
                            <option value="coach">Coach</option>
                            <!-- <option value="admin">Admin</option> -->
                        </select>
                    </div>
                    

                    
                    <div class="form-group">
                        <label for="email" class="lead font-weight-bold">Email:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    </div>

                    

                    <div class="form-group">
                        <label for="username" class="lead font-weight-bold">Username:</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="password" class="lead font-weight-bold">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="password2" class="lead font-weight-bold">Confirm Password:</label>
                        <input type="password" class="form-control" id="Password2" placeholder="Re-enter password" name="password2" required>
                    </div>

                    <input type="hidden" id ="register" name="register" value="0">
                    <input type="hidden" id ="uid" name="uid" value="0">

                    <!-- input fields for notifications -->
                            <!-- admin userid is 15 -->
                    <input type="hidden" id="toid" name="toid" value="15"> 
                    <input type="hidden" id="ntitle" name="ntitle" value="New Employee Register Request:">
                    <input type="hidden" id="ntype" name="ntype" value="employee_request">
  
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary mr-2">Register</button>
                        <button type="reset" class="btn btn-primary ml-2">Reset</button>
                    </div>
                    
                <?php echo form_close();?>
            </div>
        </div>
        
    </div>
</div>
</div>

