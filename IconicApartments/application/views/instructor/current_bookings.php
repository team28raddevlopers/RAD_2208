<div class="container">
    <br><br>
    <h1 class="text-center">Your Current Bookings</h1>
    <br><br>
    <?php if($result): ?>
        <table class="table table-hover text-center">
            <tr>
                <th>ID</th>
                <th>RESIDENT</th>
                <th>DATE</th>
                <th>TIME FROM</th>
                <th>TIME TO</th>
                <th>CANCEL</th>
            </tr>
            <?php foreach($result as $row): ?>
                    <tr>
                        <td><?php echo $row['booking_id']; ?></td>
                        <td><?php echo $row['resident_name']." ".$row['last_name']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['time_from']; ?></td>
                        <td><?php echo $row['time_to']; ?></td>
                        <!-- <td><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmCancel">Cancel</button></td> -->
                        <td><a href="<?php echo site_url('Instructor/cancel_booking/'.$row['booking_id'])?>" class="btn btn-danger btn-sm">Cancel Booking</a></td>
                    </tr>
            <?php endforeach; ?>
        </table>
        <!-- <div class="modal" id="confirmCancel">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                    <h5 class="modal-title">Cancel Booking</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                    Are you sure you want to cancel booking <?php echo $row['booking_id']?> ?
                    </div>

                    <div class="modal-footer">
                    <a href="<?php echo site_url('Instructor/cancel_booking/'.$row['booking_id'])?>" class="btn btn-danger btn-sm">Cancel Booking</a>
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div> -->
        <br><br>
        <!-- <h3>Cancel Bookings</h3>
        <hr>
        <form action="cancel_booking" method="post">
            <div class="form-group">
                <label for="bid">Booking ID:</label>
                <input type="text" class="form-control ml-sm-2" id="bid" placeholder="Enter booking ID" name="bid" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form> -->
    <?php else :?>
        <h5 class="text-center">You Currently Have No Accepted Bookings</h5>
    <?php endif; ?>
</div>
