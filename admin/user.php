<?php

session_start();

if(!isset($_SESSION['sigosoft']))
 {
   header('location:index.php');
 };

 include "config.php";
                     $sql1    = mysqli_query($conn,"SELECT COUNT(*) AS tt1 FROM contact");
            $result1 = mysqli_fetch_assoc($sql1);
            $t1=$result1['tt1'];

            $sql2    = mysqli_query($conn,"SELECT COUNT(*) AS tt2 FROM team");
            $result2 = mysqli_fetch_assoc($sql2);
            $t2=$result2['tt2'];

            $sql3    = mysqli_query($conn,"SELECT COUNT(*) AS tt3 FROM career");
            $result3 = mysqli_fetch_assoc($sql3);
            $t3=$result3['tt3'];

            $sql4    = mysqli_query($conn,"SELECT COUNT(*) AS tt4 FROM careerapply");
            $result4 = mysqli_fetch_assoc($sql4);
            $t4=$result4['tt4'];

            $sql5    = mysqli_query($conn,"SELECT COUNT(*) AS tt5 FROM freelancer");
            $result5 = mysqli_fetch_assoc($sql5);
            $t5=$result5['tt5'];

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

<?php include "sidebar.php";?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            <div class="image">
                                <img src="assets/img/background.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                  <img class="avatar border-white" width="100px" height="100px" src="assets/img/faces/face-2.jpg" alt="..."/>
                                  <h4 class="title">Sigosoft private limited<br />
                                     
                                  </h4>
                                </div>
                                <p class="description text-center">
                                    "way to innovation"
                                </p>
                            </div>
                             <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <div class="icon-success text-center">
                                            <p><?php echo $t4;?> JOB APPLICATIONS</p> 
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                         <div class="icon-success text-center">
                                           
                                             <input type="button" class="btn btn-info" value="view" 
                                          onclick="location.href = 'viewjob.php';">
                                        
                                        </div>
                                    </div>
                                </div>
<br>
                                 <div class="row">
                                    <div class="col-xs-7">
                                         <div class="icon-success text-center">
                                            <p><?php echo $t3;?> VACANCIES</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                         <div class="icon-success text-center">
                                           
                                            <input type="button" class="btn btn-info" value="view" 
                                          onclick="location.href = 'viewcareer.php';">
                                        
                                        </div>
                                    </div>
                                </div>
                                <br>

                                 <div class="row">
                                    <div class="col-xs-7">
                                         <div class="icon-success text-center">
                                            <p><?php echo $t1;?> ENQUIRIES</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                      <div class="icon-success text-center">
                                           
                                         <input type="button" class="btn btn-success" value="view" 
                                          onclick="location.href = 'contactview.php';">
                                        
                                        </div>
                                    </div>
                                </div>
<br>
<div class="row">
                                    <div class="col-xs-7">
                                         <div class="icon-success text-center">
                                            <p><?php echo $t5;?> FREELANCERS</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                      <div class="icon-success text-center">
                                           
                                         <input type="button" class="btn btn-success" value="view" 
                                          onclick="location.href = 'viewfreelancer.php';">
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                         

                            <hr>
                     
                        </div>
                        
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Team Members</h4>
                            </div>
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                    <li>
                                        <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="avatar">
                                                            <img width=100px height=100px  src="../images/people/0.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                       Praveen S Nair
                                                        <br />
                                                         <span class="text-success"><small>CEO</small></span>
<BR>
<span class="text-success"><small></small></span>
<span class="text-success"><small></small></span>
                                                    </div>

                                                    
                                                </div>
                                    </li>
<h5>Click On Any Text For Editing Credentials</h5>

                                    <?php
                        


                $counter =0;
                include "config.php";
             $result     = mysqli_query($conn,"select * from team");
            while($row1 = mysqli_fetch_assoc($result)){

            

                            ?>

                                            <li>
                                                                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="avatar">
                                                            <img width=100px height=100px src="<?php echo $row1['image'];?>" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">

<a contenteditable="true" data-old_value="<?php echo $row1["name"]; ?>" onBlur="saveInlineEdit(this,'name','<?php echo $row1["id"]; ?>')" onClick="highlightEdit(this);"><?php echo $row1["name"]; ?></a>

                                                    
                                                        <br />
                                                         <span class="text-success"><small><a contenteditable="true" data-old_value="<?php echo $row1["post"]; ?>" onBlur="saveInlineEdit(this,'post','<?php echo $row1["id"]; ?>')" onClick="highlightEdit(this);"><?php echo $row1["post"]; ?></a></small></span>
<br>
 <span class="text-success"><small><a contenteditable="true" data-old_value="<?php echo $row1["facebook"]; ?>" onBlur="saveInlineEdit(this,'facebook','<?php echo $row1["id"]; ?>')" onClick="highlightEdit(this);"><?php echo $row1["facebook"]; ?></a></small></span>
  <span class="text-success"><small><a contenteditable="true" data-old_value="<?php echo $row1["linkedin"]; ?>" onBlur="saveInlineEdit(this,'linkedin','<?php echo $row1["id"]; ?>')" onClick="highlightEdit(this);"><?php echo $row1["linkedin"]; ?></a></small></span>
                                                    </div>

                                                    <div class="col-xs-3 text-right">
                                                        
<input type="button" class="btn btn-info" value="Delete" 
                                          onclick="location.href = 'deleteteam.php?id=<?php echo $row1['id']; ?>';">
                                                         <a 
                                                    </div>
                                                </div>
                                            </li>
                                            <?php }?>
                                        </ul>
                                        
                                          <input type="button" class="btn btn-info" value="Add Team Member" 
                                          onclick="location.href = 'addteam.php';">
                            </div>
                        </div>
                       
                    </div>
                    
<div class="row">
                    <div class="col-lg-3 col-sm-6">
                       
                    </div>
                 
                </div>

                </div>
            </div>
        </div>
<script>
     function saveInlineEdit(editableObj,column,id) {
// no change change made then return false
if($(editableObj).attr('data-old_value') === editableObj.innerHTML)
return false;
// send ajax to update value
$(editableObj).css("background","#FFF url(loader.gif) no-repeat right");
$.ajax({
url: "ajax.php",
type: "POST",
dataType: "json",
data:'column='+column+'&value='+editableObj.innerHTML+'&id='+id,
success: function(response) {
// set updated value as old value
$(editableObj).attr('data-old_value',editableObj.innerHTML);
$(editableObj).css("background","#FDFDFD");
},
error: function () {
console.log("errr");
}
});
}
 </script>
<footer class="footer">
            <div class="container-fluid">
               
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> Powered by <i class="fa fa-heart heart"></i> <a href="http://www.sigosoft.com">Sigosoft</a>
                </div>
            </div>
        </footer>


</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
