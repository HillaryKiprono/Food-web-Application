<?php
include "config.php";
$id=$_GET["key"];
$in=$_POST["food_name"];
$ip=$_POST["food_price"];
$qry="update  fooditem set food_name='$in', food_price='$ip' where id=$id";
if (mysqli_query($conn,$qry)==true)
{
      echo "<script> alert('Record updated');</script>";
      echo "<script> window.location='adminLogin.php';</script>";
}



?>