<?php
session_start();
include('db_connect.php');
if(isset($_POST['gt']) &&isset($_POST['name']) )
	
	 {
		 $gt=$_POST['gt'];
		 $name=$_POST['name'];
		$payment_status="complete";
		$added_on=date('Y-m-d h:i:s');
mysqli_query($conn, "INSERT INTO `payment`( `name`, `amount`, `payment_status`, `added_on`) VALUES
 ('$name','$gt','$payment_status','$added_on')");
$_SESSION['OID']=mysqli_insert_id($conn); 
	 }
	 
	

if(isset($_POST['payment_id']) &&isset($_SESSION['OID'])){
	 
		 $payment_id=$_POST['payment_id'];
		
		
mysqli_query($conn, "UPDATE `payment` SET `payment_status`='complete',
`payment_id`='$payment_id',WHERE id ='".$_SESSION['OID']
."'");

}
?>