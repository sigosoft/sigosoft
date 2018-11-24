<?php


include "admin/config.php";



 if(isset($_POST['submit'])){
 
 
 if(isset($_POST['g-recaptcha-response']))
          $captcha=$_POST['g-recaptcha-response'];

        if(!$captcha){
          echo "<script>alert('Please check the the captcha form')</script>";
         
        }
		else
		{
			$response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lfwo08UAAAAANpJKn05D3EduwB-V8L1-kMcXkNF&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
			if($response['success'] == false)
			{
				echo "<script>alert('wrong captcha')</script>";
				exit;
			}
			else
			{
				    $name      = $_POST['name'];
                    $email     = $_POST['email'];
                    $phone     = $_POST['phone'];
                    $message   = $_POST['message'];

    $sql = "INSERT INTO contact(name,email,phone,message) VALUES('$name','$email','$phone','$message')";
    $result = mysqli_query($conn,$sql);
    
    if($result){

    	 $messager=urlencode($message);


$sms="Hi,%20you%20a%20new%20message%20from%20".$name.":%20".$messager.".%20Contact%20No:%20".$phone.".%20Email:%20".$email;

$admin= file_get_contents("http://sms2.sigosoft.com/pushsms.php?username=Sigosoft&api_password=0f41e2wlq4rb0o1k1&sender=SGOSFT&to=7510337384&message=".$sms."&priority=11");

 $admin= file_get_contents("http://sms2.sigosoft.com/pushsms.php?username=Sigosoft&api_password=0f41e2wlq4rb0o1k1&sender=SGOSFT&to=9846237384&message=".$sms."&priority=11");

echo "<script language='javascript'>alert('Message sent succesfully !')</script>";
}
				
				
			}
		}



 $url = 'https://api.elasticemail.com/v2/email/send';

try{
        $post = array('from' => $email,
		'fromName' => $name,
		'apikey' => 'ee2ca87b-8458-4e88-8943-a9edf55ad92f',
		'subject' => 'ENQUIRY',
		'to' => 'info@sigosoft.com',
		'bodyHtml' => '
		
		
		<table style="width: 100%">
	<tr><td>   </td>
		<td style="text-align: right;font-family: sans-serif;">
			<font size="4" style="font-weight: 800;"></font><br/>
			<br/>
			
			<b>
				
			</b>
			</br>
		</td>
	</tr>
</table>
<br/>
<center><hr style="width: 97%;border: 1px solid #dd2248;"/></center>
<br/>
<center>
	<table style="width: 80%">
		<!--<tr><td>Dear Mr/Mrs. <b>'.$name.'</b>,<br/><br/></td></tr>-->
		<tr>
                <center><h4><b>ENQUIRY</b></h4></center><br/></td></tr>
	<table style="width:100%">


	<tr style="background-color: rgb(187, 181, 181);text-align: right;">
		<th colspan="4">Name:</th>
		<td>'.$name.'</td>
	</tr>
	<tr style="background-color: rgb(187, 181, 181);text-align: right;">
		<th colspan="4">Email:</th>
		<td>'.$email.'</td>
	</tr>
	<tr style="background-color: rgb(187, 181, 181);text-align: right;">
		<th colspan="4">Phone:</th>
		<td>'.$phone.'</td>
	</tr>
		<tr style="background-color: rgb(187, 181, 181);text-align: right;">
		<th colspan="4">Message:</th>
		<td>'.$message.'</td>
	</tr>
	
</table>
	</table>
</center>
<br/>

<center><hr style="width: 97%;border: 1px solid #dd2248;"/></center>
<br/>
<br/>

		
		',
		'bodyText' => 'Contact',
		'isTransactional' => false);
		
		$ch = curl_init();
		curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => $post,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
			CURLOPT_SSL_VERIFYPEER => false
        ));
		
        $result=curl_exec ($ch);
        curl_close ($ch);
		
        echo $result;	
}
catch(Exception $ex){
	echo $ex->getMessage();
}

header("location:contact.php");

}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sigosoft | Way to innovation | Sigosoft Software company in Calicut | Software Development Company | Best Software Company in Calicut | Web designing in Calicut | Digital marketing | Web designers in Kerala | Web designers in Kozhikode | Software company in Kerala | Top web developers | Mobile Application development | Ecommerce development in Kerala | Ecommerce development in Calicut | IT Company in Calicut | IT company in Kerala | Top IT company in Calicut | Web Application development in Kerala | Web application development in Kozhikode | Android calicut | Ecommerce calicut | Ecommerce kozhikode | Cyberpark calicut | Cyberpark kozhikode | Website calicut | website kozhikode | Professional Website Design| Standard Website Design| Dynamic Website | E commerce Website| Business Consultancy| Software Company in Calicut| No.1 IT Company | Perfect Service|SEO| Startup companies in kerala|Startup companies in Calicut|Startup jobs in kerala|Startup jobs in Calicut| Domain Registration | Website Hosting| Website Name Registration|Branding| Logo Design| Brochure Design|No.1 Software company Kerala |No.1 Software company India|No.1 Software company Calicut | Kozhikode|Software Company in Calicut|No.1 Software company Cochin|No.1 Software company Bangalore|No.1 IT company Kerala|No.1 IT Company Calicut|No.1 IT Company Cochin|No.1 IT Company Abudhabi|No.1 IT Company U A E|No.1 Web design Company India|No.1 IT Company India|No.1 Web design Company Kerala|No.1 Web design Company Calicut|No.1 Web design Company Cochin|No.1 Web design Company Bangalore UAE Abudhabi|No.1 Software Development Company Calicut Cochin Kerala India|Software Solution| Software: Loyalty Solution|  Mobile Based Advertisement Solution|Online Marketing| Software Company Calicut Kozhikode|IT company Calicut|No.1 Web design Abu Dhabi Software Development Calicut Kozhikode| Software Companies in UL Cyber Park Calicut|No.1 Software company Abu Dhabi|Event Managemnet |Colour Grading / Color Grading |No.1 Software Company Cochin|Android application development calicut cochin kerala india|IT and Software Companies address in Kerala, India, Offshore development companies in  Cochin, kerala Dubai, Qatar, Middle East, Saudi Arabia, Outsource Software Development to India, kerala, Cochin, Outsource Software Projects to India, kerala, Cochin, Software company address kerala, IT Companies list in Kerala, India, Cochin, Dubai, Qatar, Middle East, Saudi Arabia, Software Companies in kerala, List of software companies Kerala, India, Cochin, Dubai, Qatar, Middle East, Saudi Arabia, Kuwait, Corporate companies in Kerala, India, Cochin, Dubai, Qatar, Middle East, Saudi Arabia, Multimedia companies in Kerala, India, Cochin, Dubai, Qatar, Middle East, Saudi Arabia| Android Application, Mobile Website Design and Development |Mobile Trailer | UL Cyber Park| Jobs | career | Mobile website design Calicut Cochin Kerala India| Innovative Mobile Marketing|SEO Calicut, SEO Service Cochin, Internet marketing Calicut Cochin Kerala, Innovative Mobile Solution Company| Mobile Booking system, Bar code, Parking Automation ,Augmented reality in calicut cochin kerala|Android application development calicut Cochin kerala |Gate Automation | Location based mobile marketing | Proximity marketing | Network Marketing Shopper marketing| Innovative Marketing|Mobile Advertising| Sigosoft Private Limited Calicut,kozhikode Cochin Kerala Bangalore Chickpet India,U.A.E, Kuwait | Facebook Calicut | Facebook Kozhikode | Social Media Promotion | Linkedin | instagram </title>

     </title>
<meta name="author" content="sigosoft"/>
<meta name="copyright" content="Copyright © 2018 sigosoft. Created by sigosoft private limited.">
<meta name="robots" content="NOODP,NOYDIR" />
<meta name="geo.region" content="IN-KL" />
<meta name="geo.placename" content="Calicut" />
<meta name="geo.position" content="11.2588" />
<meta name="ICBM" content="75.7804" />
<meta name="Language" content="English" />
<meta name="Publisher" content="Sigosoft" />
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
<meta property="og:title" content="Software Company in Calicut | Android app developers | iOS app developers | Calicut, Kerala">
<meta property="og:site_name" content="sigosoft.com">
<meta property="og:url" content="https://www.sigosoft.com">
<meta property="og:locale" content="en_IN">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Sigosoft is the best software company in calicut" />
<meta name="twitter:title" content="sigosoft - way to innovation - Create Work Inspire" />
<meta name="keywords" content="software company in calicut,software company in Kozhikode,Software company in kerala,android app developers in calicut,iOS app developers in calicut,web app developers in calicut,logo and web designers in calicut,ecommerce in calicut,mobile app development in calicut,best software company in calicut,best software company in kerala,web design kozhikode,web design kerala, website kozhikode,website calicut,software calicut,software kozhikode,android calicut,android kozhikode,android kerala,digital marketing kozhikode,ecommerce kozhikode,digital marketing calicut,mobile app kozhikode,mobile app calicut,mobile app kerala,ios calicut, cyberpark calicut,cyberpark kozhikode">

<meta name="description" content="Sigosoft Private Limited is a leading software development company in Calicut, Kerala. We are mainly focusing on Digital Marketing, Web Development, App Development and IT Consultation. We have strong background in E-commerce development and in Mobile App development." />
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
		<script src='https://www.google.com/recaptcha/api.js'></script>
	
	</head>
	<body>
	    
	    <!-- site preloader start -->
	    <!-- <div class="page-loader">
	    	<div class="loader-in"></div>
	    </div> -->
	    <!-- site preloader end -->
	      <div class="pageWrapper">
	   
	   

			<?php include "includes/header.php";?>
			
			<!-- Content Start -->
			<div id="contentWrapper">
				<div class="page-title title-1 contact-us">
					<div class="container">
						<div class="row">
							<div class="cell-12">
								<h1 class="fx" data-animate="fadeInLeft">Contact <span>us</span></h1>
								<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="index.php">Home</a><span class="line-separate"></span><span class="line-separate">/</span><span>Contact us</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="padd-top-50">
					<div class="container">
						<div class="row">
			    			<div class="cell-7 contact-form fx" data-animate="fadeInLeft">
			    				<h3 class="block-head">Get in Touch</h3>
			    				<mark id="message"></mark>
			    				<form class="form-signin cform" method="POST"  id="frmDemo" autocomplete="on">
			    					<div class="form-input">
				    					<label>First name<span class="red">*</span></label>
				    					<input type="text" required="required" name="name" id="name">
			    					</div>
			    					<div class="form-input">
			    						<label>Email<span class="red">*</span></label>
			    						<input name="email" type="email" id="email" required="required">
			    					</div>
			    					<div class="form-input">
			    						<label>Phone</label>
			    						<input name="phone" type="number" style="width:100%;padding: 12px 15px;" id="phone">			    						
			    					</div>
			    					<div class="form-input">
			    						<label>Message<span class="red">*</span></label>
			    						<textarea required="required" name="message" cols="40" rows="7" id="messageTxt" spellcheck="true"></textarea>
			    					</div>
			    					<div class="g-recaptcha" data-sitekey="6Lfwo08UAAAAACuok9KtAKklkRgl1lGV8tNf8Egc"></div><br><br>
			    					<div class="form-input">
			    						<input type="submit" class="btn btn-large main-bg" name="submit" value="submit">&nbsp;&nbsp;
			    						<input type="reset" class="btn btn-large" value="Reset" id="reset">
			    					</div>
			    					<div id="message"></div>
			    				</form>
			    			</div>
			    			<div class="cell-5 contact-detalis">
			    				<h3 class="block-head">Contact Details</h3>
			    				<p class="fx" data-animate="fadeInRight">Don't hesitate to let our team get everything done. You only need to outline the problem - the rest is on us.</p>
			    				<hr class="hr-style4">
			    				<div class="clearfix"></div>
			    				<div class="padding-vertical">
			    					<div class="cell-8 fx" data-animate="fadeInRight">
				    					
				    					<h5 >Address:</h5>
				    					 <ul>
							    	<h6>INDIA:</h6>
								    <li class="footer-contact"><i class="fa fa-home"></i><span>Sigosoft Private Limited <br>Malabar Arcade, Bypass Junction, Pantheerankave,  Kozhikode, Kerala</span></li>
                                     <li class="footer-contact"><a href="tel:+914952433123"><i class="fa fa-fax"></i><span>+91495 2433123</span></a></li>
								     <li class="footer-contact"><a href="tel:+919846237384"><i class="fa fa-phone"></i><span>+91- 9846 23 73 84</span></a></li>
                                     <h6>UAE:</h6>
                                      <li class="footer-contact"><i class="fa fa-home"></i><span>Sigosoft Private Limited <br>Rashid Al Hamrani Building, Near Ajman Chamber of Commerce, Opp. Emirates Plaza Hotel, Ajman</span></li>
                                       <li class="footer-contact"><a href="tel:+971562530256"><i class="fa fa-phone"></i><span>+971 56 253 0256</span></a></li>
								    <li class="footer-contact"><i class="fa fa-envelope"></i><span><a href="mailto:info@sigosoft.com">info@sigosoft.com</a></span></li>
								    <h6>United Kingdom:</h6>
                                      <li class="footer-contact"><i class="fa fa-home"></i><span>Sigosoft Private Limited <br>36, Briarway, Fishponds, Bristol BS16 4EB, United Kingdom</span></li>
                                       <li class="footer-contact"><a href="tel:+971562530256"><i class="fa fa-phone"></i><span>+44 7487 822364</span></a></li>
								    <li class="footer-contact"><i class="fa fa-envelope"></i><span><a href="mailto:info@sigosoft.com">info@sigosoft.com</a></span></li>
								    
								    
								   
							    </ul>
				    					
				    				</div>
				    				<div class="cell-2"><br></div>
				    				
			    				</div>
			    			</div>
						</div>
					</div>
				</div>
				
				<div class="padd-vertical-45">
			    	<div class="container">
			    			
						    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3913.439140330055!2d75.84997531418593!3d11.22907125374738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba65baaeb3ab60b%3A0x4c724459a088a139!2sSigosoft!5e0!3m2!1sen!2sin!4v1514365228132" width="1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			    		</div>
		    	</div>
			</div>
			</div>
			<!-- Content End -->
			
			<?php include "includes/footer.php";?>
		    
		    <!-- Back to top Link -->
	    	<div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>
	    
	    </div>
	    
<script>
!function() {
  var t;
  if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0, 
  t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
  t.factory = function(e) {
    return function() {
      var n;
      return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
    };
  }, t.methods.forEach(function(e) {
    t[e] = t.factory(e);
  }), t.load = function(t) {
    var e, n, o, i;
    e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"), 
    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js", 
    n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
  });
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('kmgne259xigc');
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
		
		<!-- Contact us js file -->
		<script type="text/javascript" src="js/contact.js"></script>
		
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
	</body>
</html>