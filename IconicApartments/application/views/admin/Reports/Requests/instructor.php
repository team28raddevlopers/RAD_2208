<div class="container">
    <div class="row" id="reqInstructor">
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
                if($fetch_data){
                    foreach($fetch_data as $row){
                        ?>
                        <tr>
                                <td><?php echo $row['user_id']; ?></td>
                                <td><?php echo $row['instructor_name']; ?></td>
                                <td><?php echo $row['last_name']; ?></td>
                                <td><?php echo $row['tele_num']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                
                        </tr>
                        <?php
                    }
                }else{
                    ?>
                <tr>
                    <td colspan="3">No Instrutors to register</td>
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
            
            <button class="btn btn-primary btn-lg" onclick="printContent('regInstructor')">Print</button>
    </div>
</div>