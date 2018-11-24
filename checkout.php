<?php
session_start();




if(isset($_SESSION["user"]))
{

$user=$_SESSION['user'];
$user_id=$user['user_id'];
$name=$user['name'];
$email=$user['email'];
$phone=$user['phone'];

};


require 'admin/db/config.php';


if(isset($_SESSION["cart_item"]))
{

$cart=$_SESSION["cart_item"];

}


else
{

$cart=array();

}










if(isset($_POST['place']))
{
  
$address_id=$_POST['radio'];
$address_pick=mysqli_query($conn,"SELECT * FROM address_table WHERE address_id='$address_id'");
$address_row=mysqli_fetch_assoc($address_pick);

$house=$address_row['house'];
$address_1=$address_row['address_1'];
$address_2=$address_row['address_2'];
$city=$address_row['city'];
$landmark=$address_row['landmark'];
$pincode=$address_row['pincode'];


$grandtotal=0;

foreach($cart as $i => $order)
{

 $total=$cart[$i]['total']; 
 $grandtotal=$grandtotal+$total;

};



$order_no='COD'.time();
$invoice_no='CF'.time();

$order="INSERT INTO orders(order_no, invoice_no, grand_total, user_id, user_type, name, email, phone, house, address_1, address_2, city, landmark, pincode, status) VALUES ('$order_no', '$invoice_no', '$grandtotal', '$user_id', 'User', '$name', '$email', '$phone', '$house', '$address_1', '$address_2', '$city', '$landmark', '$pincode', 'Order Placed')";

if (mysqli_query($conn, $order))

{

$order_id=mysqli_insert_id($conn);

foreach($cart as $i => $order_item)
{

 $total=$cart[$i]['total']; 
 $product_id=$cart[$i]['product_id']; 
 $product_image=$cart[$i]['image']; 
 $product_price=$cart[$i]['price']; 
 $product_name=$cart[$i]['product_name']; 
 $total=$cart[$i]['total']; 
 $quantity=$cart[$i]['quantity']; 
 $packet_size=$cart[$i]['product_qty']; 

 

$order_items=mysqli_query($conn,"INSERT INTO order_items(order_id, product_id, product_image, product_name, packet_size, quantity, product_price, total, order_no, invoice_no) VALUES ('$order_id', '$product_id', '$product_image', '$product_name', '$packet_size',  '$quantity', '$product_price','$total', '$order_no', '$invoice_no')");




 unset($_SESSION["cart_item"]);
echo "<script> alert('Order Placed Succesfully');window.location.href = 'order.php?id=$order_id';</script>";



}






}
else
{

echo "<script> alert('Error Please Try Again');window.location.href = 'cart.php';</script>";

}







};




if(isset($_POST['place_order']))
{

$house=$_POST['house'];
$address_1=$_POST['address_1'];
$address_2=$_POST['address_2'];
$city=$_POST['city'];
$landmark=$_POST['landmark'];
$pincode=$_POST['pincode'];

$grandtotal=0;

foreach($cart as $i => $order)
{

 $total=$cart[$i]['total']; 
 $grandtotal=$grandtotal+$total;

};



$order_no='COD'.time();
$invoice_no='CF'.time();

$order="INSERT INTO orders(order_no, invoice_no, grand_total, user_id, name, email, phone, house, address_1, address_2, city, landmark, pincode, status) VALUES ('$order_no', '$invoice_no', '$grandtotal', '$user_id', '$name', '$email', '$phone', '$house', '$address_1', '$address_2', '$city', '$landmark', '$pincode', 'Order Placed')";

if (mysqli_query($conn, $order))

{

$order_id=mysqli_insert_id($conn);

foreach($cart as $i => $order_item)
{

 $total=$cart[$i]['total']; 
 $product_id=$cart[$i]['product_id']; 
 $product_image=$cart[$i]['image']; 
 $product_price=$cart[$i]['price']; 
 $product_name=$cart[$i]['product_name']; 
 $total=$cart[$i]['total']; 
 $quantity=$cart[$i]['quantity']; 
 $packet_size=$cart[$i]['product_qty']; 

 

$order_items=mysqli_query($conn,"INSERT INTO order_items(order_id, product_id, product_image, product_name, quantity, product_price, total, order_no, invoice_no) VALUES ('$order_id', '$product_id', '$product_image', '$product_name', '$quantity', '$product_price','$total', '$order_no', '$invoice_no')");



$address=mysqli_query($conn,"INSERT INTO address_table(house, address_1, address_2, city, landmark, pincode, user_id) VALUES ('$house', '$address_1', '$address_2', '$city', '$landmark', '$pincode', '$user_id')");




unset($_SESSION["cart_item"]);
echo "<script> alert('Order Placed Succesfully');window.location.href = 'order.php?id=$order_id';</script>";



}



}
else
{


echo "<script> alert('Error Please Try Again');window.location.href = 'cart.php';</script>";

}

};














if(isset($_POST['login']))
{
  

 $log=$_POST['username'];
 $password=md5($_POST['password']);



 $sql="SELECT * FROM users WHERE (email='$log' OR phone='$log') AND password='$password'";


 $result=mysqli_query($conn,$sql);
 $row=mysqli_fetch_assoc($result);
    
 if(mysqli_num_rows($result)==1)
 {
    $_SESSION['user']=$row;
    header('location:checkout.php');

 }

 else
 {

    echo "<script language='javascript'>alert('login failed,try again')</script>";
 }


 };











?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Paddakam | Checkout </title>
 <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
 <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="shortcut icon" href="connect/images/webimage/186favicon.ico" type="image/x-icon">
 <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
 <?php include 'includes/header.php';?>
 <section class="inner-banner"></section>
 <div class="container">
  <div class="tab">
   <div class="tab-menu-holder  col-md-2">
    <ul class="tabs ">
   
     <!-- <li><a href="#">User</a> </li> -->
  <!--    <li><a href="#">Guest</a> </li> -->
    </ul>
   </div>
   <div class="col-md-10">
    <div class="tab_content checkout-form">
     
     <div class="tabs_item">
      <h4 class="text-center">User</h4>

      <?php 
       if(isset($_SESSION['user']))
       {
      ?>

      <div class="form-container">
       <form method="post" action="" class="form">
       
        
        
        <div class="field-prepend">
         <label>House No</label>
         <input class="form-field" type="text" placeholder="House No / Flat No" name="house" required>
        </div>
        <div class="field-prepend">
         <label>Address 1</label>
         <input class="form-field" type="text" placeholder="Address 1" name="address_1" required>
        </div>
        <div class="field-prepend">
         <label>Address 2</label>
         <input class="form-field" type="text" placeholder="Address 2" name="address_2" required>
        </div>
        <div class="field-prepend">
         <label>City</label>
         <input class="form-field" type="text" placeholder="City Name" name="city" required>
        </div>
        <div class="field-prepend">
         <label>Land Mark</label>
         <input class="form-field" type="text" name="landmark" placeholder="Land Mark" name="landmark" required>
        </div>
        <div class="field-prepend">
         <label>Pincode</label>
         <input class="form-field" type="text" placeholder="Pincode" name="pincode">
        </div>

         <div class="field-prepend text-center">
         
         <input class="btn btn primary" type="submit" name="place_order" value="Save & Place Order">&nbsp&nbsp
         <input class="btn btn primary" type="submit" name="order" value="Place Order">
        </div>

       </form>

      <form method="POST"> 
      </div>
      <div class="address-container">
       <h5>View all address</h5>

        <?php
        
        $sql=mysqli_query($conn,"SELECT * FROM address_table WHERE user_id='$user_id'");
        while($row=mysqli_fetch_assoc($sql))
        {
        ?>

       <div class="col-md-4">
        <div class="address-list-container">
         <div class="radio-holder">
           <input id="<?php echo $row['address_id']; ?>" name="radio" type="radio" class="radio" value="<?php echo $row['address_id']; ?>" checked> <label for="<?php echo $row['address_id']; ?>">Choose</label> 
         

         </div>
         <ul class="address-list">
          <li><strong><?php echo $row['house']; ?></strong></li>
          <li><?php echo $row['address_1']; ?></li>
          <li><?php echo $row['address_2']; ?></li>
          <li><?php echo $row['city']; ?></li>
          <li><?php echo $row['landmark']; ?></li>
          <li><?php echo $row['pincode']; ?></li>
         </ul>
        </div>
       </div>
       
       <?php }; ?>

        <div class="field-prepend text-center">
         
         <input class="btn btn primary" type="submit" name="place" value="Place Order">
        </div>
     
      </form>

      </div>

        

      <?php
      }

      else
      {?>
      
          <div class="col-md-6 text-center col-md-offset-3">
          <div class=" our-form">

            <!-- Login -->
          
            <form method="POST">
            <h3><strong>LOGIN</strong></h3>
            <p>Welcome back! Sighn To Your Account</p><br>
            
            <div class="form-group edit-form">
              <input type="text" class="form-control placeholder-style" id="inputPassword3" placeholder="Username/email-id" name="username" required>
            </div>
            <div class="form-group edit-form">
              <input type="password" class="form-control placeholder-style" id="inputPassword3" placeholder="password" name="password" required>
            </div>
            <div class="row">
             
              <div class="text-center">
                <button class="white-btn" name="login" type="submit">LOGIN</button>
              </div>
            </div>
          </div>
          </form>

          <!-- Login -->


        </div>
       

      <?php } ?>

     </div>


    </div>
   </div>
  </div>
 </div>
 <section class="main-section ">
  <div class="container">
   <div class="col-md-3 text-center ">
    <div class="features box-border">
     <img src="images/fish-skelton-white.png">
     <h4>Convent Shopping</h4>
     <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
    </div>
   </div>
   <div class="col-md-3 text-center">
    <div class="features  box-border">
     <img src="images/fish-skelton-white.png">
     <h4>Convent Shopping</h4>
     <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
    </div>
   </div>
   <div class="col-md-3 text-center ">
    <div class="features box-border">
     <img src="images/fish-skelton-white.png">
     <h4>Convent Shopping</h4>
     <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
    </div>
   </div>
   <div class="col-md-3 text-center ">
    <div class="features box-border">
     <img src="images/fish-skelton-white.png">
     <h4>Convent Shopping</h4>
     <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
    </div>
   </div>
  </div>
 </section>
 <?php include 'includes/footer.php';?>
 <!-- (JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/main.js"></script>
 <script>
  function readURL(input) {
   if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
     $('#blah').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
   }
  }
  $("#imgInp").change(function() {
   readURL(this);
  });
  //tabs
  $(document).ready(function() {
   (function($) {
    $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
    $('.tab ul.tabs li a').click(function(g) {
     var tab = $(this).closest('.tab'),
      index = $(this).closest('li').index();
     tab.find('ul.tabs > li').removeClass('current');
     $(this).closest('li').addClass('current');
     tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
     tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
     g.preventDefault();
    });
   })(jQuery);
  });
 </script>
</body>
</html>
