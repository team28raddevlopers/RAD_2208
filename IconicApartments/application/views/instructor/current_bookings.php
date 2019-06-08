<div class="container">
    <br><br>
    <h1 class="text-center">Your Current Bookings</h1>
    <p>view current Bookings table</p>
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
        <hr><hr>
        <br><br>
        <h3>Cancel Bookings</h3>
        <hr>
        <form action="cancel_booking" method="post">
            <div class="form-group">
                <label for="bid">Booking ID:</label>
                <input type="text" class="form-control ml-sm-2" id="bid" placeholder="Enter booking ID" name="bid" required>
                <!-- <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div> -->
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    <?php else :?>
        <h5 class="text-center">You Currently Have No Accepted Bookings</h5>
    <?php endif; ?>
</div>
