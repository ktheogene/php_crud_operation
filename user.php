<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $pnumber=$_POST['number'];
    $password=$_POST['pass'];

    $sql ="insert into `crud` (name,pnumber,password) values('$name','$pnumber','$password')";
$result = mysqli_query($con,$sql);

if($result){
    header('location:display.php');
}else{
    die(mysql_error($con));
}
}



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
        }
    </style>
</head>
<body>
    <form method="post">
        <h1>LOGIN SYSTEM</h1>
        <label for="username">enter you name</label> <br> <br>
        <input type="text" name="name" id="username"><br><br>
        <label for="pnumber">enter you pnumber</label><br><br>
        <input type="number" name="number" id="num"><br><br>
        <label for="pass">enter you password</label><br><br>
        <input type="password" name="pass" id="password"><br><br>
        <input type="submit" name="submit" value="save"><br><br>
    </form>
    <?php




?>
</body>
</html>