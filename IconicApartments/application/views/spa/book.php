<div class="container">
        <br><br>
        <h1 class="text-center">Book A Masseur To Conduct Your Spa Session</h1>
        <br><hr><br>
        <div class="row">
            <div class="col-sm-6">
                <h2 class="text-center">Masseurs</h2>
                <table class="table table-hover text-center">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                    </tr>
                    <?php foreach($result as $row): ?>
                        <tr>
                            <td><?php echo $row['masseur_id']; ?></td>
                            <td><?php echo $row['masseur_name']." ".$row['last_name']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="jumbotron col-sm-6">
                <!-- <h2 class="text-center">Book</h2> -->
                <form action="book" method="post">
                    <input type="hidden" id ="uid" name="uid" value="<?php echo $this->session->userdata('user_id'); ?>">
                    <div class="form-group">
                        <label for="mid">Masseur ID:</label>
                        <input type="text" class="form-control" id="mid" placeholder="Enter username" name="mid" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" class="form-control" id="date" placeholder="Enter date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="entime">Time From:</label>
                        <input type="time" class="form-control" id="timefrom" placeholder="Enter entrance time" name="timefrom" required>
                    </div>
                    <div class="form-group">
                        <label for="extime">Time To:</label>
                        <input type="time" class="form-control" id="timeto" placeholder="Enter exit time" name="timeto" required>
                    </div>
                    <input type="hidden" id ="status" name="status" value="pending">
                    <br>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-dark ">BOOK</button>
                    </div> 
                </form>
            </div>
        </div>
        
    </div>
 