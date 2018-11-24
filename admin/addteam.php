<?php 
session_start();

if(!isset($_SESSION['sigosoft']))
 {
   header('location:index.php');
 };
include "config.php";



 if(isset($_POST['submit'])){

    $name         = $_POST['myname'];
    $post         = $_POST['post'];
    $linkedin     = $_POST['linkedin'];
    $facebook     = $_POST['facebook'];

$imgFile    = $_FILES['image']['name'];
$tmp_dir    = $_FILES['image']['tmp_name'];
$imgSize    = $_FILES['image']['size'];
$upload_dir = 'uploads/'; 
  
      $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); 
    
      $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); 
    
      $userpic = rand(1000,1000000).".".$imgExt;
        
      
      if(in_array($imgExt, $valid_extensions)){     
       
        if($imgSize < 5000000)        {
          move_uploaded_file($tmp_dir,$upload_dir.$userpic);
           $g = "uploads/";
           $gt = $g.$userpic;

    $sql = "INSERT INTO team(name,post,linkedin,facebook,image) VALUES('$name','$post','$linkedin','$facebook','$gt')";
    $res = mysqli_query($conn,$sql);
    
    if($res){
  
header("location:user.php");

}
 }
}
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Sigosoft | Admin</title>
    <link rel="icon" href="favicon.ico" type="image/icon">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>
<?php include "sidebar.php" ?>

	

   
		

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">ADD TEAM</h4>
                               
                            </div>
                            
                           
                            <div class="content">
                                <form action="" method="POST" enctype="multipart/form-data">
                                  
                              

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="myname" class="form-control border-input" placeholder=" Enter Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Post</label>
                                                <input type="text" name="post" class="form-control border-input" placeholder="Enet post" >
                                            </div>
                                        </div>
                                    </div>
                                       <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Linkedin URL</label>
                                            <input type="text" name="linkedin" class="form-control border-input" placeholder="https://www.linkedin.com/">
                                            </div>
                                        </div>
                                        </div>
                                      <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Facebook URL</label>
                                            <input type="text" name="facebook"  class="form-control border-input" placeholder="https://www.facebook.com/">
                                            </div>
                                        </div>
                                        </div>
                                  <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Image</label>
                                            <input type="file" name="image" class="form-control border-input">
                                            </div>
                                        </div>
                                        </div>

                                  
                                    <div class="text-center">
                                        <button type="submit" name="submit" class="btn btn-info btn-fill btn-wd">Submit</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            
                        </div>
                    </div>
                              </div>
                        </div>
                    </div>



                </div>
           

      <footer class="footer">
            <div class="container-fluid">
               
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> Powered by <i class="fa fa-heart heart"></i> <a href="http://www.sigosoft.com">Sigosoft</a>
                </div>
            </div>
        </footer>


   

</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
