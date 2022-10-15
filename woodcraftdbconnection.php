<?php
$con = new mysqli('localhost','root','','woodcraftdb');

if(!$con){
    die(mysqli_error($con));
};
?>