<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
        <ul class="list-group list-group-flush">
            <?php foreach ($notifications as $notification):?>
                <?php if($notification['type'] === 'gym_booking'): ?>
                    <li class="list-group-item">
                        <span><a href="<?php echo site_url('Main/delete_notification/').$notification['notification_id']?>" class="btn btn-danger btn-sm text-center">&times;</a></span>
                        <p class="text-center"><?php echo $notification['title']." ".$notification['booking_id']; ?></p>
                        <p class="text-center"><?php echo $notification['message']; ?></p>
                        <p class="small text-right"><?php echo $notification['time']; ?></p>
                        <div class="row justify-content-center">
                            <a href="<?php echo site_url('Gym/view')?>" class="btn btn-light btn-sm text-center">View</a>
                        </div>
                    </li>
                <hr>
                <?php endif;?>
            <?php endforeach;?>
        </ul>
    </div>
</div>
</div>