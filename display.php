<?php

include "connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
            position: relative;
            justify-content: center;
            left: 500px;
            top: 150px;
            background-color:darkblue;
            font-family: "Times New Roman", Times, serif;
            color:white;
        }
    </style>
</head>
<body>
    <button><a href="user.php">Add User</a></button><br><br><br><br><br>

    <table border="1" cellspacing="3" callspecing="10">
        <thead>
            <tr>
                <th>si no</th>
                <th>name</th>
                <th>pnumber</th>
                <th>password</th>
                <th>oparations</th>
            </tr>
        </thead>
        <tbody>
       <?php
       
       $sql ="select * from `crud`";
       $result =mysqli_query($con,$sql);
       if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id =$row['id'];
            $name = $row['name'];
            $pnumber =$row['pnumber'];
            $password =$row['password'];
            echo '
            <tr>
            <td>'.$id.'</td>
            <td>'.$name.'</td>
            <td>'.$pnumber.'</td>
            <td>'.$password.'</td>
            <td>
            <button><a href="update.php?updateid='.$id.'">update</a></button>
            <button><a href="delete.php?deleteid='.$id.'">delete</a></button>
         </td>
    
          </tr>
            ';
        }


           }


       ?>
       </tbody>

    </table>
</body>
</html>