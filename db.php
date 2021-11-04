<?php

    $con = mysqli_connect("localhost","root","","tsf-bank");
    
    if (mysqli_connect_errno()){
        echo "Failed to Connect Database";
    }

?>