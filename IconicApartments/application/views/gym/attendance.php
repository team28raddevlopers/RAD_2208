<div class="row" style="width:100%">
<div class="image-wrapper col-md-3" style="overflow:hidden; height:100%">
    <img src="<?php echo base_url()?>assets/img/img3.jpg" alt="">
</div>
<div class="col-md-9">
<div class="container">
    <br><br>
    <h1 class="display-4 text-center">Mark Your Attendance At The Gym</h1>
    <br><hr><br>
    <div class="row justify-content-center">

        <!-- <div class="col-sm-3"></div> -->
        <!-- <div class="jumbotron col-sm-6" style="background: rgba(102,102,102,0.4)"> -->
            <div class="col-md-8">
                <form action="attendance" method="post">
                    
                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" class="form-control form-control-lg" id="date" placeholder="Enter date" name="date"required>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="entime">Entrance Time:</label>
                            <input type="time" class="form-control form-control-lg" id="timefrom" placeholder="Enter entrance time" name="timefrom" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="extime">Exit Time:</label>
                            <input type="time" class="form-control form-control-lg" id="timeto" placeholder="Enter exit time" name="timeto" required>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-dark btn-lg">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- <div class="col-sm-3"></div> -->
    <!-- </div> -->
    <br><br><br>

</div>
</div>
</div>
