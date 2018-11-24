<?php 

include "admin/config.php";



 if(isset($_POST['submit'])){

    $name      = $_POST['name'];
    $email     = $_POST['email'];
    $post      = $_POST['position'];
    $message   = $_POST['message'];

      $file_name         = $_FILES['FileUpload']['name'];
      $file_size         = $_FILES['FileUpload']['size'];
      $file_tmp          = $_FILES['FileUpload']['tmp_name'];
      $file_type         = $_FILES['FileUpload']['type'];
        
        
        
      $upload_dir = 'admin/uploads/';
      //$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
      $file_ext=strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
      
      $expensions= array("doc","pdf","docx");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a doc , docx or pdf file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be less tham 2 MB';
      }
      
      if(empty($errors)==true) {
        $shuffle =str_shuffle('123456');
        $file_name = $shuffle.time().'.'.$file_ext;
         move_uploaded_file($file_tmp,"admin/uploads/".$file_name);
         //$g = "admin/uploads/";
         // $gt = $file_name;
         //echo "Success";
      }else{
         print_r($errors);
      }      


    $sql = "INSERT INTO careerapply(name,email,position,message,resume) VALUES('$name','$email','$post','$message','$file_name')";
    $res = mysqli_query($conn,$sql);
    
    if($res){
  
header("location:career.php");

}
 }

?>
<!DOCTYPE html>
<html>
	<head>
<meta charset="utf-8" />
<title>Sigosoft | Way to innovation</title>
<meta name="author" content="sigosoft"/>
<meta name="copyright" content="Copyright © 2018 sigosoft. Created by sigosoft private limited.">
<meta name="robots" content="NOODP,NOYDIR" />
<meta name="geo.region" content="IN-KL" />
<meta name="geo.placename" content="Kozhikode" />
<meta name="geo.position" content="11.225541" />
<meta name="ICBM" content="75.850490" />
<meta name="Language" content="English" />
<meta name="Publisher" content="sigosoft" />
<meta name="Revisit-After" content="Daily" />
<meta name="distribution" content="LOCAL" />
<meta name="Robots" content="INDEX, FOLLOW" />
<meta name="page-topic" content="Get in touch with us We will get back to you within a day.">
<meta name="YahooSeeker" content="INDEX, FOLLOW">
<meta name="msnbot" content="INDEX, FOLLOW">
<meta name="googlebot" content="index,follow"/>
<meta name="Rating" content="General"/> 
<meta name="allow-search" content="yes">
<meta name="expires" content="never">
<meta name="distribution" content="global">
<meta name="generator" content="sublime">
<meta name="dcterms.audience" content="Global">
<meta name="dcterms.dateCopyrighted" content="2018">
<meta property="og:title" content="Android app developers | iOS app developers | Calicut, Kerala">
<meta property="og:site_name" content="sigosoft.com">
<meta property="og:url" content="http://www.sigosoft.com">
<meta property="og:locale" content="en_IN">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Sigosoft is one of the best software company in calicut" />
<meta name="twitter:title" content="sigosoft - way to innovation - Create Work Inspire" />
<meta name="keywords" content="Best android app developers in calicut, Best iOS app developers in calicut, Best web app developers in calicut, Best logo and web designers in calicut">
<meta name="description" content="Sigosoft Private Limited is one of the leading software development companies based in Calicut, Kerala. Our journey began in the year of 2014, with a group of enthusiastic and determined professionals, with great technical capabilities. We are mainly focusing on Branding, Web Development, App Development, IT Consultation." />
		 <link rel="icon" href="images/favicon.ico" type="images/icon">
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
	    <link rel="shortcut icon" href="images/favicon.ico">
		    	
		<!-- CSS StyleSheets -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&amp;amp;subset=latin,latin-ext">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/prettyPhoto.css">
		<link rel="stylesheet" href="css/slick.css">
		<link rel="stylesheet" href="rs-plugin/css/settings.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<!--[if lt IE 9]>
	    	<link rel="stylesheet" href="css/ie.css">
	    	<script type="text/javascript" src="js/html5.js"></script>
	    <![endif]-->

		
		<!-- Skin style (** you can change the link below with the one you need from skins folder in the css folder **) -->
		<link rel="stylesheet" href="css/skins/default.css">
	
	</head>
	<body>
	    
	    <!-- site preloader start -->
	    <!-- <div class="page-loader">
	    	<div class="loader-in"></div>
	    </div> -->
	       <div class="pageWrapper">
	   

			<?php include "includes/header.php";?>\


			
			<!-- Content Start -->
			<div id="contentWrapper">
				<div class="page-title title-1 careers">
					<div class="container">
						<div class="row">
							<div class="cell-12">
								<h1 class="fx" data-animate="fadeInLeft">Find <span>a job</span></h1>
								<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="index.php">Home</a><span class="line-separate"></span><span class="line-separate">/</span><span>Career</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="sectionWrapper">
					<div class="container">
						<div class="cell-7">
							<div class="row">
								<div class="block fx" data-animate="fadeInLeft">
									<h3 class="block-head">We are Hiring</h3>
									<p>sigosoft's strong focus on technology innovation provides a wide range of opportunities for organic career growth. More importantly, the focus is on work-life balance along with diversity and inclusivity at all levels of the organization.<br>
									Retaining talent is an area of focus as we believe that our talent is our greatest strength. sigosoft provides exciting career opportunities for each individual desiring to enhance his professional growth.At sigosoft we value our talented team and our compensation package reflects this. Our benefits are flexible and far-reaching in scope</p>
							
								</div>
							</div>
						</div>
						<div class="cell-1"><br></div>
						<div class="cell-4 fx" data-animate="fadeInUp">
							<img alt=" A image " src="images/hire.png" title="hiring">
						</div>
					</div>
				</div>
				
				<div class="sectionWrapper img-pattern">
		    		<div class="container">
		    			<div class="row">
		    				<div class="cell-6 fx" data-animate="fadeInLeft">
								<h3 class="block-head">Job Opportunities</h3>
								<ul id="accordion" class="accordion">
									  <?php
                        


                $counter =0;
                include "admin/config.php";
             $result     = mysqli_query($conn,"select * from career");
            while($row1 = mysqli_fetch_assoc($result)){

            

                            ?>
									<li>
										<h3 class="skew-25"><a ><span class="skew25"><?php echo $row1['post']; ?></span></a></h3>
										<div class="accordion-panel active">
											<?php echo $row1['descr'] .'<br>'   . 'last date is  ' .  $row1['ldate']; ?>
										</div>
									</li>
									<?php }?>
									
								
								</ul>
					    	</div>
					    	<div class="cell-6 fx" data-animate="fadeInRight">
					    		<h3 class="block-head">Apply For A Job</h3>
					    		<div class="contact-form">
					    			<form action="" method="POST" enctype="multipart/form-data"> 
				    					<div class="form-input">
				    						<label>Full name<span class="red">*</span></label>
				    						<input type="text" name="name" required>
				    					</div>
				    					<div class="form-input">
				    						<label>Email<span class="red">*</span></label>
				    						<input type="text" name="email" required>
				    					</div>
				    					<div class="form-input">
				    						<label>Position<span class="red">*</span></label>
				    						<select name="position"  required>
    <option selected disabled>Select Position</option> 
<?php 
$result     = mysqli_query($conn,"SELECT cid,post from career");
while ($row = mysqli_fetch_array($result))
{
    echo "<option value='".$row['post']."'>".$row['post']."  </option>";
}
?>        
</select> 
				    					</div>
				    					<div class="form-input">
				    						<label>Message<span class="red">*</span></label>
				    						<textarea required name="message"></textarea>
				    					</div>
				    					<div class="form-input">
				    						<label>For more details upload your CV</label>
				    						<input name="FileUpload" type="file">
				    					</div>
				    					<div>
				    						<input type="submit" name="submit" class="btn btn-large main-bg" value="submit">

				    					</div>
				    				</form><br>
				    				<div>
				    					<input type="submit" name="Register" class="btn btn-large main-bg pop" value=" Freelancer Registration"> 
				    				</div>
					    		</div>
					    	</div>
		    			</div>
		    		</div>
		    	</div>
	    	
			</div>
				<div class="cd-popup contact" role="alert">
        <div class="popup-block">
            <div class="cd-popup-container" style="min-height:440px;">
                
                <div class=" cd-popup-inner-container career-frm-cnr width">
                	<a  class="cd-popup-close cd-close-button"> <i class="fa fa-times" style="pointer-events:none;"></i> </a>

                	<div class="contact-form">
					    			<form action="freelancer.php" method="POST" id="hire_form">
				    					<div class="form-input">
				    						<label>Full Name<span class="red">*</span></label>
				    						<input type="text" value="" name="fullname" required>
				    					</div>
				    					<div class="form-input">
				    						<label>Mobile Number<span class="red">*</span></label>
				    						<input type="text" value="" name="mnumber" required>
				    					</div>
				    					<div class="form-input">
				    						<label>Email<span class="red">*</span></label>
				    						<input type="text" value="" name="femail" required>
				    					</div>
				    					<div class="form-input">
				    						<label>Select your Area of Expertise<span class="red">*</span></label>
				   						<select value="expert" name="area" required>
				    							<option value="Web_designing"> Web Designing</option>
				    							<option value="web_development">Web Development</option>
				    							<option value="DM/SEO">Digital Marketing / SEO </option>
				    							<option value="Android">Android</option>
				    							<option value="ios">IOS</option>
				    							<option value="crossplatform">Cross Platform</option>
				    						
				    						</select>
				    					</div>
				    					<div class="form-input">
				    						<label>About Yourself<span class="red">*</span></label>
				    						<textarea required name="aboutself" ></textarea>
				    					</div>
				    					
				    					<div>
				    						<input type="submit" name="submit1" class="btn btn-large main-bg" value="submit">
				    					</div>
				    				</form>
					    		</div>
                  
               
                </div>
            </div>
        </div>
    </div>
			<!-- Content End -->
			
			<?php include "includes/footer.php";?>

	    <!-- Load JS siles -->	
 		<script type="text/javascript" src="js/jquery.min.js"></script>
	    
	    <!-- Waypoints script -->
		<script type="text/javascript" src="js/waypoints.min.js"></script>
		
		<!-- SLIDER REVOLUTION SCRIPTS  -->
		<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- Animate numbers increment -->
		<script type="text/javascript" src="js/jquery.animateNumber.min.js"></script>
		
		<!-- slick slider carousel -->
		<script type="text/javascript" src="js/slick.min.js"></script>
		
		<!-- Animate numbers increment -->
		<script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
		
		<!-- PrettyPhoto script -->
		<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
		
		<!-- Share post plugin script -->
		<script type="text/javascript" src="js/jquery.sharrre.min.js"></script>
		
		<!-- Product images zoom plugin -->
		<script type="text/javascript" src="js/jquery.elevateZoom-3.0.8.min.js"></script>
		
		<!-- Input placeholder plugin -->
		<script type="text/javascript" src="js/jquery.placeholder.js"></script>
		
		<!-- Tweeter API plugin -->
		<script type="text/javascript" src="js/twitterfeed.js"></script>
		
		<!-- Flickr API plugin -->
		<script type="text/javascript" src="js/jflickrfeed.min.js"></script>

		<!-- MailChimp plugin -->
		<script type="text/javascript" src="js/mailChimp.js"></script>
		
		<!-- NiceScroll plugin -->
		<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
		
		<!-- general script file -->
		<script type="text/javascript" src="js/script.js"></script>
		<script>
			//popup
function closeForm() {
   $('body').addClass('overflow-active').removeClass('overflow-stop');
   $('.cd-popup').removeClass('is-visible');
}
$(document).ready(function ($) {
   $('.pop').on('click', function (event) {
       event.preventDefault();
       $('.contact').addClass('is-visible');
       $('body').addClass('overflow-stop').removeClass('overflow-active');
   });
   $('.cd-popup').on('click', function (event) {
       if ($(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup')) {
           event.preventDefault();
           $(this).removeClass('is-visible');
           $('body').addClass('overflow-active').removeClass('overflow-stop');
       }
   });
});
		</script>
	</body>
</html>