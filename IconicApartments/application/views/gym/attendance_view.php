<div class="container">
    <br><br>
	<h1 class="text-center">View Your Gym Attendence</h1>
	
    <br><hr><br>

    <div class="row justify-content-center">
    <?php if($result): ?>
	<div class="col-sm-6">
            <table class="table table-hover text-center">
                <tr>
                    <th>DATE</th>
					<th>TIME-FROM</th>
                    <th>TIME-TO</th>
                </tr>
                <?php foreach($result as $row): ?>
                    <tr>
                        <td><?php echo $row['date']; ?></td>
						<td><?php echo $row['time_from']; ?></td>
						<td><?php echo $row['time_to']; ?></td>
						
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
          <?php else :?>
        <h5 class="text-center">You Currently Have No Gym Attendence</h5>
        <?php endif; ?>
        </div>

</div>
