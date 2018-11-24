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
                                <h4 class="title">VIEW JOB APPLICATIONS</h4>
                                
                            </div>
                            
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>No</th>
                                    	<th>Name</th>
                                    	<th>Email</th>
                                    	<th>Position</th>
                                    	<th>Message</th>
                                        <th>Time and Date</th>
                                     <th>Download Resume</th>
                                    </thead>
                                    <?php
                        
session_start();

if(!isset($_SESSION['sigosoft']))
 {
   header('location:index.php');
 };

                $counter =0;
                include "config.php";
             $result     = mysqli_query($conn,"select * from careerapply");
            while($row1 = mysqli_fetch_assoc($result)){

            

                            ?>
                                    <tbody>
                                        <tr>
                                        	<td><?php echo ++$counter; ?></td>
                                        	<td><?php echo $row1['name']; ?></td>
                                        	<td><?php echo $row1['email']; ?></td>
                                        	<td><?php echo $row1['position']; ?></td>
                                        <td><?php echo $row1['message']; ?></td>
                                       
<td><?php echo $row1['timestamp']; ?></td>
<td><input type="button" class="btn btn-info" value="Download" 
                                          onclick="location.href = 'uploads/<?php echo $row1['resume'];?>';"></td>
                                        </tr>
                                       
                                    </tbody>
                                     <?php }; ?>
                                </table>

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
