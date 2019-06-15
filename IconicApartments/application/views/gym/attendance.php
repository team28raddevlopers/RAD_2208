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
        <h1 class="text-center">Mark Your Attendance At The Gym</h1>
        <br><hr><br>
        <div class="row justify-content-center">
            <!-- <div class="col-sm-3"></div> -->
            <div class="jumbotron col-sm-6">
                <form action="attendance" method="post">
                    <input type="hidden" id ="uid" name="uid" value="<?php echo $user_id; ?>">
                    <!-- <input type="hidden" id ="iid" name="iid" value="I004"> remove this field for new db -->
                    <div class="form-group">
                        <label for="uname">Username:</label>
                        <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" value="<?php echo $username; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" class="form-control" id="date" placeholder="Enter date" name="date" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="entime">Entrance Time:</label>
                            <input type="time" class="form-control" id="timefrom" placeholder="Enter entrance time" name="timefrom" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="extime">Exit Time:</label>
                            <input type="time" class="form-control" id="timeto" placeholder="Enter exit time" name="timeto" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <!-- <div class="col-sm-3"></div> -->
        </div>
    </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  </body>
</html>