<div class="container">
  <br><br>
  <h1 class="text-center">Your Current Instructor Bookings</h1>
  <!-- <p>view Bookings table</p> -->
  <br><br>
  <?php if($result): ?>
    <table class="table table-hover text-center">
      <tr>
          <th>ID</th>
          <th>INSTRUCTOR</th>
          <th>DATE</th>
          <th>TIME FROM</th>
          <th>TIME TO</th>
          <th>BOOKING STATUS</th>
      </tr>
      <?php foreach($result as $row): ?>
          <tr>
              <td><?php echo $row['booking_id']; ?></td>
              <td><?php echo $row['instructor_name']; ?></td>
              <td><?php echo $row['date']; ?></td>
              <td><?php echo $row['time_from']; ?></td>
              <td><?php echo $row['time_to']; ?></td>
              <td><?php echo $row['booking_status']; ?></td>
          </tr>
      <?php endforeach; ?>
    </table>
    <hr>
    <br><br>
    <h3>Cancel Bookings</h3>
    <hr>
    <div class="jumbotron">
      <form action="cancel_booking" method="post" class="form-inline">
          <div class="form-group">
              <label for="bid">Booking ID:</label>
              <input type="text" class="form-control ml-sm-2 mr-sm-2" id="bid" placeholder="Enter booking ID" name="bid" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  <?php else :?>
    <h5 class="text-center">You Currently Have No Instructor Bookings</h5>
  <?php endif; ?>
</div>
