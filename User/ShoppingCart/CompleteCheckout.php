<?php
session_start();
define('INCLUDE_CHECK',1);
require "./connect.php";

$total=$_POST['txtTotal'];
$txtname=$_POST['txtname'];
$txtAddress=$_POST['txtAddress'];
$txtMob=$_POST['txtMob'];
$txtHolder=$_POST['txtHolder'];
$txtType=$_POST['txtType'];
$txtCard=$_POST['txtCard'];
$txtNumber=$_POST['txtNumber'];
$txtCVV=$_POST['txtCVV'];
 $txtExpiry=$_POST['txtExpiry'];
  $bname=$_POST['bname'];
$user=$_SESSION['name'];
$mmil=$_SESSION['email'];

$dd= date("Y-m-d");


if($txtExpiry < $dd) {
    echo '<script type="text/javascript">
alert("Your Card invalid..Check your expiry date..");
window.location="../Home.php";</script>';
}
elseif ($txtExpiry >= $dd)  {
    

$sql="insert into orderdetails(totalprice,clientname,address,contact,cardholder,typeofcard,nameofcard,
    cardnumber,cvvnumber,expirydate,username,smail,Bankname)
     values('$total','$txtname','$txtAddress','$txtMob','$txtHolder','$txtType','$txtCard','$txtNumber',
         '$txtCVV','$txtExpiry','$user','$mmil','$bname')";
 $exe=mysqli_query($link,$sql);
 
 echo '<script type="text/javascript">
alert("Your Order Placed Successfully..\n We Will Reach You Soon..!!");
window.location="../Home.php";</script>';
}
?>
