<br><br>
<div class="row justify-content-center">
        <div class="col-sm-4">
            <?php echo validation_errors(); ?>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="jumbotron col-sm-4">
            <h2 class="text-center">Register</h2>
            <!-- this form has to be completed by adding relevant input fields (appt_no) -->
            <form action="register" method="post">
                <input type="hidden" id ="uid" name="uid" value="A123">
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
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    
</div>
