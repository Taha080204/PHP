<?php
require("connection.php");

if($_GET['id']){
    $id = $_GET['id'];

    $delete = "DELETE FROM `Appliers` where id ='$id';";

    $result = mysqli_query($connection, $delete) or die("failed to delete query.");

    if($result){
        echo "<script>alert('From row deleted.' );</script>";
        header("Location: 2index.php");
    }else{
        echo "<scrpt>alert('Failed to Delete!') </script>";
    }

}    
?>