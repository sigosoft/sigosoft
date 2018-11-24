<?php 
session_start();

if(!isset($_SESSION['sigosoft']))
 {
   header('location:index.php');
 };
include "config.php";



 if(isset($_POST['submit'])){

    $post      = $_POST['post'];
    $descr     = $_POST['descr'];
    $ldate     = $_POST['date'];
    

    $sql = "INSERT INTO career(post,descr,ldate) VALUES('$post','$descr','$ldate')";
    $res = mysqli_query($conn,$sql);
    
    if($res){
  
header("location:viewcareer.php");

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
                                <h4 class="title">ADD CAREERS</h4>
                                <br>
                                   <input type="button" class="btn btn-info" value="View careers" 
                                          onclick="location.href = 'viewcareer.php';">
                            </div>
                            
                           
                            <div class="content">
                                <form action="" method="POST">
                                  
                              

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Name of vacancy</label>
                                                <input type="text" name="post" class="form-control border-input" placeholder="Name of vacancy" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="descr"  class="form-control border-input" cols="100" rows="10" placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                       </div>
                                       <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Date</label>
                                            <input type="date" name="date"  class="form-control border-input" placeholder="Last Date" value="">
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
