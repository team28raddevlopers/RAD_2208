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
                </tr>
                <?php foreach($result as $row): ?>
                      <tr>
                          <td><?php echo $row['booking_id']; ?></td>
                          <td><?php echo $row['resident_name']." ".$row['last_name']; ?></td>
                          <td><?php echo $row['date']; ?></td>
                          <td><?php echo $row['time_from']; ?></td>
                          <td><?php echo $row['time_to']; ?></td>
                          <td><button type="button" class="btn btn-danger btn-sm" id="cancel" data-toggle="modal" data-target="#confirmCancel" data-id="<?php echo $row['booking_id'];?>">Cancel</button></td>
                      </tr>
                <?php endforeach; ?>
            </table>
            <div class="modal" id="confirmCancel">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                        <h5 class="modal-title">Cancel Booking</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                            Are you sure you want to cancel booking <p style="display:inline" id="bid"></p> ?
                            <form action="<?php echo site_url('Coach/cancel_booking/')?>" id="cancel-form" method="post" accept-charset="utf-8">
                            <input type="text" class="form-control" id="accept-message" name="accept-message" placeholder="Enter a short message for the resident(optional)">
                            <input type="hidden" id="form-action" value="<?php echo site_url('Coach/cancel_booking/')?>">
                            <input type="hidden" id="id" name="id" value="<?php echo $row['booking_id']; ?>">

                            <!-- resident user_id -->
                            <input type="hidden" id="uid" name="uid" value="<?php echo $row['user_id']; ?>">
                            <input type="hidden" id="title" name="title" value="Coach Booking Cancelled:">
                            <input type="hidden" id="type" name="type" value="coach_booking">
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
        <br><br>
       
    <?php else :?>
        <h5 class="text-center">You Currently Have No Accepted Bookings</h5>
    <?php endif; ?>
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