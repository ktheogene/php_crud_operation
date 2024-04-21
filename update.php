<?php
include 'connect.php';
$id = $_GET['updateid'];

$sql = "select * from `crud` where id =$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$name =$row['name'];
$pnumber =$row['pnumber'];
$password =$row['password'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $pnumber=$_POST['number'];
    $password=$_POST['pass'];

    $sql ="update `crud` set id=$id ,name=' $name',pnumber='$pnumber',password='$password' where id=$id";
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
        <input type="text" name="name" id="username" value="<?php echo $name ?> "><br><br>
        <label for="pnumber">enter you pnumber</label><br><br>
        <input type="number" name="number" id="num"  value="<?php echo $pnumber ?>"><br><br>
        <label for="pass">enter you password</label><br><br>
        <input type="password" name="pass" id="password"  value="<?php echo $password ?>"><br><br>
        <input type="submit" name="submit" value="update"><br><br>
    </form>
    <?php




?>
</body>
</html>