<?php

    require "db.php";
    
    $fetch_q = "select *from customer";
    $rows = $con->query($fetch_q);
    
    if($con-> affected_rows > 0){
        ?>
        <br>
        <div class="table-responsive-sm container-sm mt-5 card-body card">
        <h2 class="text-center"><u>Customer Details</u></h2>
            <table class="table table-hover text-primary">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Balance</th>
                </tr>

                <?php
                while($row = $rows ->fetch_assoc()){ ?>
                <tr class="text-dark">
                    <td><?php echo $row['cname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['balance']; ?></td>
                </tr>
                <?php
                } ?>
            </table>
        </div>
        <?php
    }else{
        ?>
        <h4 class="text-danger text-center mt-5">Opps !! Bank don't have any customer yet :(</h4>
        <?php
    }


?>