<?php   

$con = new mysqli('localhost','root','','crud_practice');

if(!$con){
    die(mysqli_error($con));
}

?>