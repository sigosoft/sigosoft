<?php
include "config.php";
if($_GET['id']){
    $id=$_GET['id'];
   
}
$del = "DELETE from career where cid = '$id'";

$result = mysqli_query($conn,$del);
header("location:viewcareer.php");
?>