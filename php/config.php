<?php
    $conn = mysqli_connect("localhost","root","","chatApp");
    if(!$conn){
        echo "Connected" . mysqli_connect_error();
    }
?>
