<div class="container">
    <br><br>
    <h1 class="text-center">Your Pending Bookings</h1>
    <br><br>
    <?php if($result): ?>
        <table class="table table-hover text-center">
            <tr>
                <th>ID</th>
                <th>RESIDENT</th>
                <th>DATE</th>
                <th>TIME FROM</th>
                <th>TIME TO</th>
                <th>ACCEPT</th>
                <th>REJECT</th>
            </tr>
            <?php foreach($result as $row): ?>
                <tr>
                    <td><?php echo $row['booking_id']; ?></td>
                    <td><?php echo $row['resident_name']." ".$row['last_name']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['time_from']; ?></td>
                    <td><?php echo $row['time_to']; ?></td>
                    <td><a href="<?php echo site_url('Instructor/accept_booking/'.$row['booking_id'])?>" class="btn btn-success btn-sm">Accept </a></td>
                    <td><a href="<?php echo site_url('Instructor/cancel_booking/'.$row['booking_id'])?>" class="btn btn-danger btn-sm">Reject </a></td>
                    <!-- <td><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#confirmAccept">Accept</button></td> -->
                    <!-- <td><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmReject">Reject</button></td> -->
                </tr>
            <?php endforeach; ?>
        </table>

        <!-- <div class="modal" id="confirmAccept">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                    <h5 class="modal-title">Accept Booking</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                    Are you sure you want to accept booking <?php echo $row['booking_id']?> ?
                    </div>

                    <div class="modal-footer">
                    <a href="<?php echo site_url('Instructor/accept_booking/'.$row['booking_id'])?>" class="btn btn-success btn-sm">Accept Booking</a>
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div> -->

        <!-- <div class="modal" id="confirmReject">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                    <h5 class="modal-title">Reject Booking</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                    Are you sure you want to reject booking <?php echo $row['booking_id']?> ?
                    </div>

                    <div class="modal-footer">
                    <a href="<?php echo site_url('Instructor/cancel_booking/'.$row['booking_id'])?>" class="btn btn-danger btn-sm">Reject Booking</a>
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div> -->

        <br><br>
        <!-- <div class="row">
            <div class="col-sm-6">
                <h3>Accept Bookings</h3>
                <hr>
                <form action="accept_booking" method="post">
                    <div class="form-group">
                        <label for="bid">Booking ID:</label>
                        <input type="text" class="form-control ml-sm-2" id="bidaccept" placeholder="Enter booking ID" name="bidaccept" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-sm-6">
                <h3>Reject Bookings</h3>
                <hr>
                <form action="cancel_booking" method="post">
                    <div class="form-group">
                        <label for="bid">Booking ID:</label>
                        <input type="text" class="form-control ml-sm-2" id="bid" placeholder="Enter booking ID" name="bid" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div> -->
    <?php else :?>
        <h5 class="text-center">You Currently Have No Pending Bookings</h5>
    <?php endif; ?>
</div>
