<div class="container">
    <br><br>
    <h1 class="text-center">Mark your appointment</h1>
    <?php echo form_open('pool/attendance'); ?>
    <br><hr><br>
    <div class="row justify-content-center">
        <!-- <div class="col-sm-3"></div> -->
        <div class="jumbotron col-sm-6">
            <form action="attendance" method="post">
            <!--<div class="form-group">
                <label for="uid">Userid:</label>
                <input id ="uid" name="user_id" value="<?php echo $user_id; ?>">
            </div>-->
              
            <input  id ="uid" name="uid" value="<?php echo $user_id; ?>">
              
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" class="form-control" id="date" placeholder="Enter date" name="date" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="entime">Entrance Time:</label>
                        <input type="time" class="form-control" id="timefrom" placeholder="Enter entrance time" name="timefrom" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="extime">Exit Time:</label>
                        <input type="time" class="form-control" id="timeto" placeholder="Enter exit time" name="timeto" required>
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-dark ">SUBMIT</button>
                </div>
            </form>
        </div>
        <!-- <div class="col-sm-3"></div> -->
    </div>
    <?php echo form_close(''); ?>
</div>
