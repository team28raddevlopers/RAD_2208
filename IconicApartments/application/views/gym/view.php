<div id="content-wrap" class="container flex-fill">
  <br><br>
  <h1 class="text-center">Your Current Instructor Bookings</h1>
  <!-- <p>view Bookings table</p> -->
  <br><br>
  <?php if($result): ?>
    <div class="table-responsive-md">
      <table class="table table-hover text-center">
        <tr>
            <th>ID</th>
            <th>INSTRUCTOR</th>
            <th>DATE</th>
            <th>TIME FROM</th>
            <th>TIME TO</th>
            <th>BOOKING STATUS</th>
            <th>CANCEL</th>
        </tr>
        <?php foreach($result as $row): ?>
            <tr class="<?=($row['booking_status']==='accepted')?'table-success':(($row['booking_status']==='rejected')? 'table-danger': '');?>">
                <td><?php echo $row['booking_id']; ?></td>
                <td><?php echo $row['instructor_name']." ".$row['last_name']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['time_from']; ?></td>
                <td><?php echo $row['time_to']; ?></td>
                <td><?php echo $row['booking_status']; ?></td>
                <td><button type="button" class="btn btn-danger btn-sm" id="cancel" data-toggle="modal" data-target="#confirmCancel" data-id="<?php echo $row['booking_id'];?>">Cancel</button></td>
            </tr>
        <?php endforeach; ?>
      </table>
    </div>
    <div class="modal" id="confirmCancel">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title">Cancel Booking</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <div class="modal-body">
            Are you sure you want to cancel booking <p style="display:inline" id="bid"></p> ?
            <form action="<?php echo site_url('Gym/cancel_booking/')?>" id="cancel-form" method="post" accept-charset="utf-8">
              <input type="text" class="form-control" id="accept-message" name="accept-message" placeholder="Enter a short message for the resident(optional)">
              <input type="hidden" id="form-action" value="<?php echo site_url('Gym/cancel_booking/')?>">
              <input type="hidden" id="id" name="id" value="<?php echo $row['booking_id']; ?>">

              <!-- instructor user_id -->
              <input type="hidden" id="uid" name="uid" value="<?php echo $row['user_id']; ?>">
              <input type="hidden" id="title" name="title" value="Booking Cancelled:">
              <input type="hidden" id="type" name="type" value="cancelled_booking">
              <br>
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-sm">Cancel Booking</button>
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
    <!-- <hr>
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
    </div> -->
  <?php else :?>
    <h5 class="text-center">You Currently Have No Instructor Bookings</h5>
  <?php endif; ?>
  <br><br><br>
</div>

<script language="JavaScript" type="text/javascript">
    var cancel = document.querySelectorAll('#cancel')

    cancel.forEach(element => {
      element.addEventListener('click', function(event) {
        // document.querySelector('.modal-body #name').value = event.target.attributes['data-name'].value;
        document.querySelector('#cancel-form').action = (document.querySelector('.modal-body #form-action').value + event.target.attributes['data-id'].value);
        document.querySelector('.modal-body #id').value = event.target.attributes['data-id'].value;
        document.querySelector('.modal-body #uid').value = event.target.attributes['data-user'].value;
        document.querySelector('#bid').innerHTML =  event.target.attributes['data-id'].value;     
        console.log(document.querySelector('#cancel-form').action);
          
      })
    })
</script>