<div class="container">
    <div class="row" id="remResident">
    <div class="col-lg-12">
        <h3>Removed Residents</h3>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <th>User Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Contact number</th>
                <th>Appartmet Number</th>
             
            </thead>
            <tbody id="tble">
            <?php
                if($fetch_data->num_rows()>0){
                    foreach($fetch_data->result() as $row){
                        ?>
                        <tr>
                                
                                <td><?php echo $row->user_id; ?></td>
                                <td><?php echo $row->resident_name; ?></td>
                                <td><?php echo $row->last_name; ?></td>
                                <td><?php echo $row->tele_num; ?></td>
                                <td><?php echo $row->appartment_no; ?></td>
                      
                        </tr>
                        <?php
                    }
                }else{
                    ?>
                <tr>
                    <td colspan="3">No Resident removed</td>
                </tr>
                    <?php
                }
            ?>
        </tbody>
        </table>
    </div>
    </div>
    <div class="row" >
                <button class="btn btn-primary"onclick="printContent('remResident')">Print</button>
    </div>
</div>