
<div class="container">
    <br><br>
    <h1 class="text-center">Book the Tennis Court To Play Tennis</h1>
    <br><hr><br>
    <div class="row justify-content-center">
        <!-- <div class="jumbotron col-sm-6"> -->
        <div class="col-6">
            <!-- <h2 class="text-center">Book</h2> -->
            <form action="tennisCourt" method="post">
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

                 <!-- input fields for notifications -->
                        <!-- admin userid is 58 -->
                <input type="hidden" id="toid" name="toid" value="58">
                <input type="hidden" id="title" name="title" value="New Tennis Courts Booking:">
                <input type="hidden" id="type" name="type" value="tennis_booking">

                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-dark ">BOOK</button>
                </div>
            </form>
        </div>
    </div>

    <br><br><br>

</div>
