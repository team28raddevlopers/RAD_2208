<?php include 'register_header.php' ?>
        <br><br>

        <div class="row justify-content-center">
            <div class="jumbotron col-sm-4" id="registerform">
                <h2 class="text-center">Register</h2>
               
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
                        <label for="email">Email (Optional):</label>
                        <input type="text" class="form-control" id="email" placeholder="If you have" name="email" required>
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
                    
                    <div class="form-group" style="color: red;">
                        <?php echo validation_errors(); ?>
                    </div>

                    <button type="reset" class="btn btn-primary">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                <?php echo form_close();?>
            </div>
        </div>
        
    </div>
<?php include 'fotter.php' ?>