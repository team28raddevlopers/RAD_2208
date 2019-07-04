
 <div class="row justify-content-center">
            <div class="jumbotron col-sm-4" id="registerform">
                <h2 class="text-center">Search</h2>
               
                
                <?php echo form_open('AdminDashboard/fetchSearchRecords');?>

                <div class="form-group">
                            <input class="form-control mr-sm-2" name="tag" type="search" placeholder="Search" aria-label="Search">
                </div>

                    <div class="form-group">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button>
                    </div>

                            <?php echo form_close();?>
            </div>
</div>