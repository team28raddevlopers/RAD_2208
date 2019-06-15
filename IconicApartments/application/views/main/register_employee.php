<?php include 'register_header.php' ?>
        <br><br>
<div class="container" id="back">


        <div class="row justify-content-center">
            <div class="jumbotron col-sm-4" id="registerform">
                <h2 class="text-center">Register</h2>
               
                
                <?php echo form_open('Register/RegisterEmployee')?>

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
                        <label for="birthday">Date of birth</label>
                        <input type="date" class="form-control" id="birthday" placeholder="Your birthday" name="birthday" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="type">Are you ?</label>
                        <select name="type" id="type">
                            <option value="instructor">Gym instructor</option>
                            <option value="masseur">Messeur</option>
                            <option value="coach">Coach</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    

                    
                    <div class="form-group">
                        <label for="email">Email:</label>
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

                    <input type="hidden" id ="register" name="register" value="0">
                    <input type="hidden" id ="uid" name="uid" value="0">

                    <div class="form-group" style="color: red;">

                        <?php echo validation_errors(); ?>
                    </div>
                    <div class="from-group">
                        <button type="submit" class="formbutton">Submit</button>
                        <button type="reset" class="formbutton">Reset</button>
                    </div>
                    
                <?php echo form_close();?>
            </div>
        </div>
        
    </div>
    </div>

<?php include 'fotter.php' ?>