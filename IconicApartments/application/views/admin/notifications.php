<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <ul class="list-group list-group-flush">
                <?php foreach ($notifications as $notification):?>
                        <li class="list-group-item">
                            <span><a href="<?php echo site_url('Main/delete_notification/').$notification['notification_id']?>" class="btn btn-danger btn-sm text-center">&times;</a></span>
                            <p class="text-center"><?php echo $notification['title']." ".$notification['booking_id']; ?></p>
                            <p class="text-center"><?php echo $notification['message']; ?></p>
                            <p class="small text-right"><?php echo $notification['time']; ?></p>
                            <!-- <div class="row justify-content-center">
                                <?php if($notification['type'] === 'resident_request' || $notification['type'] === 'employee_request'): ?>
                                    <a href="<?php echo site_url('AdminDashboard/RegisterRequests')?>" class="btn btn-light btn-sm text-center">View</a>
                                <?php elseif($notification['type'] === 'employee_request'): ?>
                                    <a href="<?php echo site_url('Spa/view')?>" class="btn btn-light btn-sm text-center">View</a>
                                <?php endif;?>
                            </div> -->
                        </li>
                    <hr>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
    <br><br><br>
</div> 