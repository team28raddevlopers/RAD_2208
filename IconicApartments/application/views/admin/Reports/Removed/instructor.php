<div class="container">
    <div class="row" id="remInstructors">
    <div class="col-lg-12">
        <h3>Instructor</h3>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <th>User Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Contact number</th>
                <th>Email</th>
               
            </thead>
            <tbody id="table">
            <?php
                if($fetch_data->num_rows()>0){
                    foreach($fetch_data->result() as $row){
                        ?>
                        <tr>
                                <td><?php echo $row->user_id; ?></td>
                                <td><?php echo $row->instructor_name; ?></td>
                                <td><?php echo $row->last_name; ?></td>
                                <td><?php echo $row->tele_num; ?></td>
                                <td><?php echo $row->email; ?></td>
                                
                        </tr>
                        <?php
                    }
                }else{
                    ?>
                <tr>
                    <td colspan="3">No Instrutors Removed</td>
                </tr>
                    <?php
                }
            ?>
        </tbody>
        </table>
    </div>
    </div>
    <div class="row" >
            
            <button class="btn btn-primary" onclick="printContent('remInstructors')">Print</button>
    </div>
</div>