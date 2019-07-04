<div class="container">
    <div class="row" id="reqResidents">
    <div class="col-lg-12">
        <h3>Residents</h3>

    </div>

    <div class="table-responsive">
        <table class="table" >
            <thead class="thead-dark">
                <th>User Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Contact number</th>
                <th>Appartmet Number</th>
                <th></th>
                <th></th>
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
                    <td colspan="3">No recidents to register</td>
                </tr>
                    <?php
                }
            ?>
            </tbody>
        </table>
    </div>
    </div>
    <br><br>
    <div class="row justify-content-center" >
                <button class="btn btn-primary btn-lg" onclick="printContent('reqResidents')">Print</button>
        </div>
</div>