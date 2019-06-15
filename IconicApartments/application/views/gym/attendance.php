<div class="container">
    <br><br>
    <h1 class="text-center">Mark Your Attendance At The Gym</h1>
    <br><hr><br>
    <div class="row justify-content-center">
        <!-- <div class="col-sm-3"></div> -->
        <div class="jumbotron col-sm-6">
            <form action="attendance" method="post">
                <input type="hidden" id ="uid" name="uid" value="<?php echo $user_id; ?>">
                <!-- <input type="hidden" id ="iid" name="iid" value="I004"> remove this field for new db -->
                <!-- <div class="form-group">
                    <label for="uname">Username:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" value="<?php echo $username; ?>" required>
                </div> -->
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
                    <button type="submit" class="btn btn-primary ">SUBMIT</button>
                </div>
            </form>
        </div>
        <!-- <div class="col-sm-3"></div> -->
    </div>
</div>
