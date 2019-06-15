<?php
?>

<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Iconic Gym</title>
  </head>
  <body> -->
    <div class="container">
        <br><br>
        <h1 class="text-center">Book An Instructor To Help With Your Gym Session</h1>
        <br><hr><br>
        <div class="row">
            <div class="col-sm-6">
                <h2 class="text-center">Instructors</h2>
                <p>view Instructors</p>
                <table class="table table-hover text-center">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                    </tr>
                    <?php foreach($result as $row): ?>
                        <tr>
                            <td><?php echo $row['instructor_id']; ?></td>
                            <td><?php echo $row['instructor_name']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="jumbotron col-sm-6">
                <h2 class="text-center">Book</h2>
                <form action="book" method="post">
                    <input type="hidden" id ="uid" name="uid" value="<?php echo $this->session->userdata('user_id'); ?>">
                    <div class="form-group">
                        <label for="iid">Instructor ID:</label>
                        <input type="text" class="form-control" id="iid" placeholder="Enter username" name="iid" required>
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        
    </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  </body>
</html>