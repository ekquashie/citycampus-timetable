<?php 
    require_once('conn.php');

    //Insert into hall table
    if(isset($_POST['hallsubmit'])) {
        $name = $_POST['hallname'];
        $capacity = $_POST['hallcapacity'];

        $sql = "INSERT INTO halls (name, capacity) VALUES ('$name', '$capacity')";

        $query = mysqli_query($conn, $sql);
        if($query) {
            echo $name." has been added successfully";
            header("location: ../halls.php");
        }
    }

    //Query hall table
    // if(isset($_GET['edit'])) {
    //     $id = $_GET['edit'];

    //     $update = true;
    //     $query = "SELECT * FROM halls WHERE id=$id";
    //     $result = mysqli_query($conn, $query);

    //     if($result) {
    //         $rec = mysqli_fetch_array($result);
    //         $name = $rec['name'];
    //         $capacity = $rec['capacity'];
    //     }
    // }
?>