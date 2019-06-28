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
                    <td><button type="button" class="btn btn-success btn-sm" id="accept" data-toggle="modal" data-target="#confirmAccept" data-id="<?php echo $row['booking_id'];?>" data-user="<?php echo $row['user_id'];?>">Accept</button></td>
                    <td><button type="button" class="btn btn-danger btn-sm" id="reject" data-toggle="modal" data-target="#confirmReject" data-id="<?php echo $row['booking_id'];?>" data-user="<?php echo $row['user_id'];?>">Reject</button></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <div class="modal" id="confirmAccept">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                    <h5 class="modal-title">Accept Booking</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        Accepting booking <p style="display:inline" id="bid"></p>
                        <form action="<?php echo site_url('Instructor/accept_booking/')?>" id="accept-form" method="post" accept-charset="utf-8">

                            <input type="text" class="form-control" id="accept-message" name="accept-message" placeholder="Enter a short message for the resident(optional)">
                            <input type="hidden" id="form-action"  name="form-action" value="<?php echo site_url('Instructor/accept_booking/')?>">
                            <input type="hidden" id="id" name="id" value="<?php echo $row['booking_id']; ?>">

                            <!-- resident user_id -->
                            <input type="hidden" id="uid" name="uid" value="<?php echo $row['user_id']; ?>"> 
                            <input type="hidden" id="title" name="title" value="Instructor Booking Accepted:">
                            <input type="hidden" id="type" name="type" value="gym_booking">

                            <br>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success btn-sm">Accept Booking</button>
                                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal" id="confirmReject">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                    <h5 class="modal-title">Reject Booking</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        Are you sure you want to cancel booking <p style="display:inline" id="rbid"></p> ?
                        <form action="<?php echo site_url('Instructor/reject_booking/')?>" id="reject-form" method="post" accept-charset="utf-8">
                            <input type="text" class="form-control" id="accept-message" name="accept-message" placeholder="Enter a short message for the resident(optional)">
                            <input type="hidden" id="reject-form-action" value="<?php echo site_url('Instructor/reject_booking/')?>">
                            <input type="hidden" name="rid" value="<?php echo $row['booking_id']; ?>">
                            <input type="hidden" id="ruid" name="uid" value="<?php echo $row['user_id']; ?>">
                            <input type="hidden" id="title" name="title" value="Instructor Booking Rejected:">
                            <input type="hidden" id="type" name="type" value="gym_booking">

                            <br>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger btn-sm">Reject Booking</button>
                                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

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

    <br><br><br>

</div>

<script language="JavaScript" type="text/javascript">
    var accept = document.querySelectorAll('#accept')

    accept.forEach(element => {
      element.addEventListener('click', function(event) {
        // document.querySelector('.modal-body #name').value = event.target.attributes['data-name'].value;
        document.querySelector('#accept-form').action = (document.querySelector('.modal-body #form-action').value + event.target.attributes['data-id'].value);
        document.querySelector('.modal-body #id').value = event.target.attributes['data-id'].value;
        document.querySelector('.modal-body #uid').value = event.target.attributes['data-user'].value;
        document.querySelector('#bid').innerHTML =  event.target.attributes['data-id'].value;     
        console.log(document.querySelector('#accept-form').action);
          
      })
    })

    var reject = document.querySelectorAll('#reject')

    reject.forEach(element => {
      element.addEventListener('click', function(event) {
        // document.querySelector('.modal-body #name').value = event.target.attributes['data-name'].value;
        document.querySelector('#reject-form').action = (document.querySelector('.modal-body #reject-form-action').value + event.target.attributes['data-id'].value);
        document.querySelector('.modal-body #rid').value = event.target.attributes['data-id'].value;
        document.querySelector('.modal-body #ruid').value = event.target.attributes['data-user'].value;
        document.querySelector('#rbid').innerHTML =  event.target.attributes['data-id'].value;     
        console.log(document.querySelector('#reject-form').action);
          
      })
    })
</script>