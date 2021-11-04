<?php

    require "db.php";
    if(isset($_POST['search_btn'])){
        $search = $_POST['search'];
        $search_query = "select *from customer where cname like '%$search%' or email like '%$search%'";
        $rows = $con->query($search_query);
        if($con->affected_rows > 0){
            while($row = $rows->fetch_assoc()){
                ?><script>alert("Details Of Searched Customer :\nName : <?php echo $row['cname'];?>
                                \nEmail : <?php echo $row['email'];?>
                                \nBalance : <?php echo $row['balance'];?>")</script><?php
            }
        }else{
            ?><script>alert("Search Not Found..")</script><?php
        }
    }
    ?><script>window.location.href="index.php";</script><?php    
?>