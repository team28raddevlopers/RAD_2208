
<div class="container">
    <br><br>
    <h1 class="display-4 text-center">Book A Coach To Practice Tennis</h1>
    <br><hr><br>


    <div class="row justify-content-center">
        <h3>Select Date and Time to Search Available Coaches</h3>
        <br><br><br>
        <form action="booking" method="post" class="form-inline">
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control ml-sm-2 mr-sm-2" id="date" placeholder="Enter date" name="date" value ="<?php echo $info['date']; ?>" required>
            </div>
            <div class="form-group">
                <label for="entime">Time From:</label>
                <input type="time" class="form-control ml-sm-2 mr-sm-2" id="timefrom" placeholder="Enter entrance time" name="timefrom" value="<?php echo $info['time_from'] ?>" required>
            </div>
            <div class="form-group">
                <label for="extime">Time To:</label>
                <input type="time" class="form-control ml-sm-2 mr-sm-3" id="timeto" placeholder="Enter exit time" name="timeto" value="<?php echo $info['time_to'] ?>" required>
            </div>
            <button type="submit" class="btn btn-dark btn-sm">SEARCH</button>
        </form>
    </div>

    <br><hr>

    <?php if($available): ?>
        <?php if($result):?>
            <table class="table table-hover text-center">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>BOOK</th>
                </tr>
                <?php foreach($result as $row): ?>
                    <tr>
                        <td><?php echo $row['coach_id']; ?></td>
                        <td><?php echo $row['coach_name']." ".$row['last_name']; ?></td>
                        <!-- <td>
                            <form action="book" method="post">
                                <input type="hidden" id ="uid" name="uid" value="<?php echo $this->session->userdata('user_id'); ?>">
                                <input type="hidden" id ="iid" name="iid" value="<?php echo $row['coach_id']; ?>">
                                <input type="hidden" id ="date" name="date" value="<?php echo $info['date']; ?>">
                                <input type="hidden" id ="timefrom" name="timefrom" value="<?php echo $info['time_from'] ?>">
                                <input type="hidden" id ="timeto" name="timeto" value="<?php echo $info['time_to'] ?>">
                                <input type="hidden" id ="status" name="status" value="pending">
                                <button type="submit" class="btn btn-primary btn-sm">Book</button>
                            </form>
                        </td> -->
                        <td><button type="button" class="btn btn-dark btn-sm" id="bookbtn" data-toggle="modal" data-target="#confirmBooking" data-id="<?php echo $row['coach_id'];?>" data-uid="<?php echo $row['user_id'];?>">Book</button></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <h5 class="text-center">Selected Time Slot is Not Available. Please Select a Different Time Slot</h5>
        <?php endif; ?>
    <?php endif; ?>

    <div class="modal" id="confirmBooking">
        <div class="modal-dialog">
            <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Confirm Booking</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                Are you sure you want to book Coach <p style="display:inline" id="id"></p> ?
                <form action="book" method="post" id="booking-form">
                        <input type="hidden" id="form-action" value="<?php echo site_url('Tennis/cancel_booking/')?>">
                        <input type="hidden" id ="uid" name="uid" value="<?php echo $this->session->userdata('user_id'); ?>">
                        <input type="hidden" id ="cid" name="cid" value="<?php echo $row['coach_id']; ?>">
                        <input type="hidden" id ="date" name="date" value="<?php echo $info['date']; ?>">
                        <input type="hidden" id ="timefrom" name="timefrom" value="<?php echo $info['time_from'] ?>">
                        <input type="hidden" id ="timeto" name="timeto" value="<?php echo $info['time_to'] ?>">
                        <input type="hidden" id ="status" name="status" value="pending">

                        <input type="hidden" id ="iuid" name="iuid" value="<?php echo $row['user_id']; ?>">
                        <input type="text" class="form-control" id="message" name="message" placeholder="Enter a short message for the coach(optional)">
                        <input type="hidden" id="title" name="title" value="New Booking">
                        <input type="hidden" id="type" name="type" value="new_booking">
                <br>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm">Book</button>
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>

            </div>
        </div>
    </div>
    <br><br><br>


</div>
    <script language="JavaScript" type="text/javascript">
    var book = document.querySelectorAll('#bookbtn')

    book.forEach(element => {
        element.addEventListener('click', function(event) {

        document.querySelector('.modal-body #cid').value = event.target.attributes['data-id'].value;
        document.querySelector('.modal-body #iuid').value = event.target.attributes['data-uid'].value;


        document.querySelector('.modal-body #id').innerHTML =  event.target.attributes['data-id'].value;
        console.log(document.querySelector('#booking-form').action);
        console.log(event.target.attributes['data-id'].value);


      })
    })
</script>
