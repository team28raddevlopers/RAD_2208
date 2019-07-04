        <br><br>

        <div class="row justify-content-center">
            <div class="jumbotron col-sm-4" id="registerform">
                <h2 class="text-center">Register</h2>

                <?php
                        if(validation_errors()==true){
                            ?><div class="form-group" style="color: red;">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <?php echo validation_errors(); ?>    
                            </div>
                        </div>
                <?php }?>
               
                <?php echo form_open('Register/RegisterUser')?>

                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
                    </div>

                    <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required>
                    </div>

                    <div class="form-group">
                        <label for="teleNumber">Contact number:</label>
                        <input type="text" class="form-control" id="teleNumber" placeholder="Your contact number" name="teleNumber" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="apartmentNumber">Your Appartment number:</label>
                        <input type="text" class="form-control" id="apartmentNumber" placeholder="Your Appartment number" name="apartmentNumber" required>
                    </div>
                    

                    
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="password2">Confirm Password:</label>
                        <input type="password" class="form-control" id="Password2" placeholder="Re-enter password" name="password2" required>
                    </div>

                    <input type="hidden" id ="type" name="type" value="resident">
                    <input type="hidden" id ="register" name="register" value="0">
                    <input type="hidden" id ="uid" name="uid" value="0">    
                    
                    <!-- input fields for notifications -->
                            <!-- admin userid is 58 -->
                    <input type="hidden" id="toid" name="toid" value="58"> 
                    <input type="hidden" id="ntitle" name="ntitle" value="New Resident Register Request:">
                    <input type="hidden" id="ntype" name="ntype" value="resident_request">

                    <button type="submit" class="btn btn-primary">Register</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                <?php echo form_close();?>
            </div>
        </div>
        
    </div>
