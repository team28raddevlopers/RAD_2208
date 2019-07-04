
<div class="container">
    <div class="row">
    <div class="col-lg-12">
        <h3>Result</h3>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <th>User Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Contact number</th>
                <th>Appartment No</th>
                <th>Register</th>
                <th>Login</th>
            </thead>
            <tbody id="table">
            <?php
                if($fetch_data){
                    foreach($fetch_data as $row){
                        ?>
                        <tr>                                  
                                <td><?php echo $row['user_id']; ?></td>
                                <td><?php echo $row['resident_name']; ?></td>
                                <td><?php echo $row['last_name']; ?></td>
                                <td><?php echo $row['tele_num']; ?></td>
                                <td><?php echo $row['appartment_no']; ?></td>
                                <td><?php if($row['register']==1){ echo "Registered";}else{echo "Not";} ?></td>
                                <td><?php if($row['login']==1){ echo "Login";}else{echo "Not";} ?></td>
                        </tr>
                        <?php
                    }
                }else{
                    ?>
                <tr>
                    <td colspan="3">No results Founded</td>
                </tr>
                    <?php
                }
            ?>
        </tbody>
        </table>
    </div>
    </div>
</div>