<?php 
    $con = mysqli_connect("localhost", "root", "", "student_crud");
    if($con == true) {
        // echo "Connected";
    }
    else {
        echo "Please try again";
    }
?>