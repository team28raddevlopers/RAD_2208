<div class="container">
    <div class="row" id="remMasseur">
    <div class="col-lg-12">
        <h3>Removed Masseur</h3>

    </div>

    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <th>User Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Contact number</th>
                <th>Email</th>
                <th></th>
            </thead>
            <tbody id="tble">
            <?php
                if($fetch_data){
                    foreach($fetch_data as $row){
                        ?>
                        <tr>
                        <?php echo form_open('Register/AdminUnregisterUsers')?>
                                
                             
                                
                                <td><?php echo $row['user_id']; ?></td>
                                <td><?php echo $row['masseur_name']; ?></td>
                                <td><?php echo $row['last_name']; ?></td>
                                <td><?php echo $row['tele_num']; ?></td>
                                <td><?php echo $row['email']; ?></td>

                        </tr>
                        <?php
                    }
                }else{
                    ?>
                <tr>
                    <td colspan="3">No Messeurs Removed</td>
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
                <button class="btn btn-primary btn-lg"onclick="printContent('remMasseur')">Print</button>
    </div>
    
</div>