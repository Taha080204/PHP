<?php
include "header.php";
$server="localhost";
$username="root";
$dbpass="";
$dbname="office";

$connection=mysqli_connect($server,$username, $dbpass, $dbname);
if($connection){


    $read="SELECT * FROM `employees`;";
    $result = mysqli_query($connection, $read);
    if($result){
        if(mysqli_num_rows($result) > 0){


  ?>
  <table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">City</th>
            <th scope="col">Qualification</th>
        </tr>
        </thead>
        <tbody>
            <?php
         while ($row = mysqli_fetch_assoc($result)){

            echo "<tr>";
                echo"<td scope='row'>".$row['id']."</td>";
                echo"<td>".$row['Name']."</td>";
                echo"<td>".$row['Age']."</td>";
                echo"<td>".$row['City']."</td>";
                echo"<td>".$row['Qualification']."</td>";
                   echo '<td>
                   <a href="update.php?id='.$row["id"].'"class="btn btn-success px-2 mx-2">Edit</a>
                   <a href="delete.php?id='.$row["id"].'" class="btn btn-danger">Delete</a>
                   </td>';
                   echo "</tr>";
                   }
                   ?>
     </tbody>
     </table>

 <?php
            
        }
        else{
            echo "<script>alert('record not found')</script>";
            }
          }else{
            echo "<script>alert('Failed to execute query')</script>";
          }
        }else{
            die("Failed to connect");
        }
        ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
    
//establishing connection