<?php

    require "db.php";
    $fetch_hist = "select *from trans_history";
    $rows = $con->query($fetch_hist);
    if($con->affected_rows > 0){
        ?>
        <div class="table-responsive-sm container-sm mt-5 card-body card">
            <h2 class="text-center mb-5 mt-5"><u>Transaction History</u></h2>
            
                <table class="table table-hover text-primary">
                    <tr>
                        <th>Sender</th>
                        <th>Receiver</th>
                        <th>Trans Amount</th>
                        <th>Trans Time</th>
                    </tr>                    
                    <?php
                    while($row = $rows->fetch_assoc()){
                    ?>
                    <tr class="text-dark">
                            <td><?php echo $row['sender']; ?></td>
                            <td><?php echo $row['receiver']; ?></td>
                            <td><?php echo $row['trans_amt']; ?></td>
                            <td><?php echo $row['trans_time']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>                    
                </table>                      
        </div>
        <?php

    }else{
        ?>
        <h3 class="text-center text-primary mt-5 mb-5">Opps !! No Transaction done by Customer yet..</h3>
        <?php
    }
?>