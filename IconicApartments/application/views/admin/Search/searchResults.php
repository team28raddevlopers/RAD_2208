
<div class="container"  >
    <div class="row" id="searchResult">
    <div class="col-lg-12">
        <h1 class="text-center">Resident Search Results</h1>
        <br><hr><br>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <th>User Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Contact number</th>
                <th>Appartment No</th>
                <th>Email</th>
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
                                <td><?php echo $row['email']; ?></td>
                                <td><?php if($row['register']==1){ echo "Registered";}elseif($row['register']==5){ echo "Removed";}else{echo "Not";} ?></td>
                                <td><?php if($row['login']==1){ echo "Login";}else{echo "Not";} ?></td>
                        </tr>
                        <?php
                    }
                }else{
                    ?>
                <tr>
                    <td colspan="3">No results Found</td>
                </tr>
                    <?php
                }
            ?>
        </tbody>
        </table>
    </div>
    </div>
    <div class="row justify-content-center" >
            
            <button class="btn btn-primary btn-lg" onclick="printContent('searchResult')">Print</button>
    </div>
</div>