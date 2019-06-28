<div class="container">
    <br>
    <?php if($this->session->flashdata('login_error')): ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo $this->session->flashdata('login_error'); ?>
                </div>
            </div>
        </div>
    <?php endif;?>

    <br>

    <!-- <div class="row justify-content-center">
        <div class="jumbotron col-md-6">
            <a type="button" class="btn btn-success" href="<?php echo site_url('FirstLogin')?>">Registered List</a>
        </div>
    </div> -->

    <div class="row justify-content-center">
        <div class="jumbotron col-md-6">
            <h2 class="text-center">Login</h2>
            <form action="login" method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                </div>
                <br>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-dark">LOGIN</button>
                </div>
            </form>

           

        </div>
    </div>
</div>
