<?php

    require "db.php";        
    if(isset($_POST['transfer'])){
        $sender = $_POST['sender'];
        $receiver = $_POST['receiver'];
        $trans_amt = $_POST['trans_amt'];

        $chk_balance_query = "select *from customer where email = '$sender'";
        $rows = $con->query($chk_balance_query);
        $rows = $rows->fetch_assoc();
        if($rows['balance'] > $trans_amt) {
            $deduct_amt_query = "update customer set balance=balance-$trans_amt where email = '$sender'";
            $con->query($deduct_amt_query);
            if($con->affected_rows > 0){
                $credit_amt_query = "update customer set balance=balance+$trans_amt where email = '$receiver'";
                $con->query($credit_amt_query);
                if($con->affected_rows > 0){

                    $insert_hist_query = "insert into trans_history values('$sender','$receiver',$trans_amt,CURRENT_TIMESTAMP)";
                    $con->query($insert_hist_query);

                    ?>
                        <script>alert('Transaction Sucessfull!!')</script>
                    <?php
                }else{
                    ?>
                        <script>alert('Something Went Wrong!!')</script>
                    <?php
                }
            }else{
                ?><script>alert('Something Went Wrong!!')</script><?php
            }
        }else{
            ?><script>alert('Insufficient amount in your account !!')</script><?php
        }
        ?><script>window.location.href = "index.php#customer";</script><?php
    }else{
        ?><script>window.location.href = "index.php";</script>
        <?php
    }

?>