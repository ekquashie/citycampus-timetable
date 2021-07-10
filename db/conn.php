<?php 

    $conn = mysqli_connect("localhost", "root", "", "acc");

    if(!$conn) {
        echo "Error connecting to database";
    }
?>