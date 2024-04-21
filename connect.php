<?php

$con = new mysqli("localhost","root","","crudoperation");

if(!$con){
    die(mysql_error($con));
}

?>