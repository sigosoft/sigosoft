<?php 

include "admin/config.php";



 if(isset($_POST['submit1'])){

    $fname      = $_POST['fullname'];
    $mobilen     = $_POST['mnumber'];
    $emailid     = $_POST['femail'];
    $areaof   = $_POST['area'];
    $aboutself   = $_POST['aboutself'];
     
        
        
      

  $sql = "INSERT INTO freelancer(fullname,numberof,emailid,areaof,about) 
  VALUES ('$fname','$mobilen','$emailid','$areaof','$aboutself')";
    $res = mysqli_query($conn,$sql);
    
    if($res){
  
header("location:career.php");

}
 }

?>