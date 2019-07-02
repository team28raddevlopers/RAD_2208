<div class="container">
    <br><br>
	<h1 class="text-center">View Your Attendence</h1>
	
	<!-- <?php echo form_open('pool/cancel'); ?> -->
    <br><hr><br>

    <div class="row justify-content-center">
    <?php if($result): ?>
	<div class="col-sm-6">
            <!-- <h2 class="text-center">Attendence</h2> -->
            <table class="table table-hover text-center">
                <tr>
                    <!-- <th>user id</th> -->
                    <th>DATE</th>
					<th>TIME-FROM</th>
                    <th>TIME-TO</th>
                </tr>
                <?php foreach($result as $row): ?>
                    <tr>
                        <!-- <td><?php echo $row['user_id']; ?></td> -->
                        <td><?php echo $row['date']; ?></td>
						<td><?php echo $row['time_from']; ?></td>
						<td><?php echo $row['time_to']; ?></td>
						
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
          <?php else :?>
        <h5 class="text-center">You Currently Have No Pool Attendence</h5>
        <?php endif; ?>
        </div>

<script language="JavaScript" type="text/javascript">
    var cancel = document.querySelectorAll('#cancel')

    cancel.forEach(element => {
      element.addEventListener('click', function(event) {
        // document.querySelector('.modal-body #name').value = event.target.attributes['data-name'].value;
        document.querySelector('#cancel-form').action = (document.querySelector('.modal-body #form-action').value + event.target.attributes['data-id'].value);
        document.querySelector('#user_id').innerHTML =  event.target.attributes['data-id'].value;     
        console.log(document.querySelector('#cancel-form').action);
          
      })
    })
</script>
<?php echo form_close(''); ?>   

</div>
