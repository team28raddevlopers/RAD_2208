<div class="container">
    <br><br>
    <h1 class="text-center">Your Pending Bookings</h1>
    <p>view pending Bookings table</p>
    <br><br>
    <?php if($result): ?>
        <table class="table table-hover text-center">
            <tr>
                <th>ID</th>
                <th>RESIDENT</th>
                <th>DATE</th>
                <th>TIME FROM</th>
                <th>TIME TO</th>
            </tr>
            <?php foreach($result as $row): ?>
                <tr>
                    <td><?php echo $row['booking_id']; ?></td>
                    <td><?php echo $row['resident_name']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['time_from']; ?></td>
                    <td><?php echo $row['time_to']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <hr>
        <br><br>
        <div class="row">
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
        </div>
    <?php else :?>
        <h5 class="text-center">You Currently Have No Pending Bookings</h5>
    <?php endif; ?>
</div>
