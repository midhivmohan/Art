<?php
session_start();
include('db_connect.php');
if(isset($_POST['gtotal']) &&isset($_POST['name']))
	
	 {
		 $gtotal=$_POST['gtotal'];
		 $name=$_POST['name'];
		$payment_status="pending";
		$added_on=date('Y-m-d h:i:s');
mysqli_query($con, "INSERT INTO `payment`( `name`, `amount`, `payment_status`, `added_on`) VALUES
 ('$name','$amt','$payment_status','$added_on')");
$_SESSION['OID']=mysqli_insert_id($con); 
	 }
	 
	

if(isset($_POST['payment_id']) &&isset($_SESSION['OID'])){
	 
		 $payment_id=$_POST['payment_id'];
		
		
mysqli_query($con, "UPDATE `payment` SET `payment_status`='complete',
`payment_id`='$payment_id',WHERE id ='".$_SESSION['OID']
."'");

}
?>