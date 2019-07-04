<div class="row" style="width:100%">
    <div class="image-wrapper col-md-3" style="overflow:hidden; height:100%">
        <img src="<?php echo base_url()?>assets/img/img3.jpg" alt="">
    </div>
    <div class="col-md-9">
    <div class="container">
        <br><br>
        <h1 class="display-4 text-center">View Your Gym Attendence</h1>
        
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
    </div>
</div>
