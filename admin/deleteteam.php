<?php
include "config.php";
if($_GET['id']){
    $id=$_GET['id'];
   
}
$del = "DELETE from team where id = '$id'";

$result = mysqli_query($conn,$del);
header("location:user.php");
?>