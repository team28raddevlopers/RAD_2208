
<div class="container">
	<h3 > Update Appointments</h3>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
                        <th>id</th>
						<th>uid</th>
						<th>date</th>
						<th>timefrom</th>
						<th>timeto</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($response as $val){
					
                          echo '<tr>
                        <td>'.$val['id'].'</td>
                        <td>'.$val['user_id'].'</td>
                        <td>'.$val['date'].'</td>
                        <td>'.$val['time_from'].'</td>
                        <td>'.$val['time_to'].'</td>
						<td><a href="'.site_url().'/Pool/edit?edit='.$val['id'].'">Edit</a></td>
						<td><a href="'.site_url().'/Pool/delete?edit='.$val['id'].'">Cancel</a></td>
                    </tr>';
                    $val['id']++;
   
					
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
