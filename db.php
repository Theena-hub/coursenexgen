<?php
    $conn = mysqli_connect("localhost", "root", "", "theena");
    date_default_timezone_set("Asia/Kolkata");
    if (!$conn) {
        echo "not connected database";
    }    
?>