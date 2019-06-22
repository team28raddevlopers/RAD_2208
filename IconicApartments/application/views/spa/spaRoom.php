
<div class="container">
        <br><br>
        <h1 class="text-center">Book the Spa Room To Conduct Your Spa Session</h1>
        <br><hr><br>
        <div class="row justify-content-center">
            <div class="jumbotron col-sm-6">
                <!-- <h2 class="text-center">Book</h2> -->
                <form action="spaRoom" method="post">
                    <input type="hidden" id ="uid" name="uid" value="<?php echo $this->session->userdata('user_id'); ?>">
                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" class="form-control" id="date" placeholder="Enter date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="entime">Time From:</label>
                        <input type="time" class="form-control" id="timefrom" placeholder="Enter entrance time" name="timefrom" required>
                    </div>
                    <div class="form-group">
                        <label for="extime">Time To:</label>
                        <input type="time" class="form-control" id="timeto" placeholder="Enter exit time" name="timeto" required>
                    </div>
                    <input type="hidden" id ="status" name="status" value="pending">
                    <br>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-dark ">BOOK</button>
                    </div> 
                </form>
            </div>
        </div>
        
    </div>
 