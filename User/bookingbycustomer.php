<?php 
include './Master.php';
   include '../dbcon.php';
 ?>

<?php
$id=$_GET['id'];
$run_art=mysqli_query($con,"select * from art where art_id=$id"); //
$art_result=mysqli_fetch_array($run_art);
$_SESSION['art'] = $id;
?>
<section>

<div class="container divform">
<br><br>
	<h2>Order</h2>
	<form action="" method="post" name="f1">
		<!--<div class="form-group">
			<label for="a1">Order_ Id:</label>
			<input type="number" class="form-control" id="a1" name="custid" placeholder="Enter Id" readonly value="<?php echo $id;?>" >
		</div>-->
		<div class="form-group">
			<label for="a2">Art_Id:</label>
			<input type="number" class="form-control" id="a2" name="arid"  readonly value="<?php echo $id;?>">
		</div>
		
		
		<div class="form-group">
			<label for="a5">Status:</label>
			<input type="text" class="form-control" id="a5" name="os" readonly value="Available">
		</div>
		
		<div class="form-group">
			<label for="a7">Quantity:</label>
			<input type="number" class="form-control" id="a7" name="quan" placeholder="Enter Quantity" required>
		</div>
		
		<button type="submit" class="btn btn-primary" name="sub">Submit</button>
	</form>
</div></div> 
</section>

<?php
if ( isset( $_POST[ 'sub' ] ) ){
	$a11=$_POST['custid'];
	$a12=$_POST['arid'];
	
	$a15=$_POST['os'];
	
	$a17=$_POST['quan'];
	
	$sql = "INSERT INTO `artorder`(`order_id`, `art_id`, `quantity`, `status`) VALUES ('custid','arid','Available','quan')";
	
	
	if (mysqli_query($con, $sql)) {
		
		

   echo "<script>alert('Your Booking has been successfully! Proceed To Payment..');
	window.location.assign('paymentmode.php')
	</script>";
		
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
mysqli_close($con);
	?>
			

		
	
