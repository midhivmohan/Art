<?php 
include './Master.php';
   include '../dbcon.php';
 ?>
<?php
   
   	$run_bart=mysqli_query($con,"select * from art");
   	$art_result1=mysqli_fetch_array($run_bart);
   
   ?>
   <br><br><br>
   <div class="container divform">
      <h2>Payment Information</h2>
      <form action="" method="post" name="f1">
         
         
         <div class="form-group">
            <label for="a3"> Order_id:</label>
            <input type="text" class="form-control" id="a3" name="cname" readonly required value="<?php echo $art_result1[0];?>">
         </div>
         <div class="form-group">
            <label for="a4"> Name:</label>
            <input type="text" class="form-control" id="a4" name="aname" required>
         </div>
		 <div class="form-group">
            <label for="a6">Address:</label>
            <input type="text" class="form-control" id="a6" name="da"  placeholder="Enter Address" required>
         </div>
		 
		 
         
         
         <div class="form-group">
            <label for="a7">Quantity:</label>
            <input type="number" class="form-control" id="a7" name="quan"  placeholder="Enter Quantity" required >
         </div>
         
         <div class="form-group">
            <label for="a9">Price(Rs.):</label>
            <input type="text" class="form-control" id="a9" name="price" required>
         </div>
         <div class="form-group">
            <label for="a10">Mode:</label>
            <select class="form-control" name="sel" id="a10" required>
               <option value="">---Select--</option>
               <option value="Cash On Delivery">Cash On Delivery</option>
            </select>
         </div>
         <button type="submit" class="btn btn-primary" name="sub">Proceed To Payment</button>
      </form>
   </div>
</div>


<?php
   if ( isset( $_POST[ 'sub' ] ) ){
   	
   	$b=$_POST['cname'];
	$a=$_POST['aname'];
	$d=$_POST['da'];
	
	$f=$_POST['quan'];
   	$c=$_POST['price'];
   $run_pay=mysqli_query($con, "
   INSERT INTO `orderdetails`(`order_id`, `name`, `address`, `contact`, `status`)
   VALUES ('$b','$a','$d','$f','$c')");
  

   	if($run_pay){
   		 echo "<script> window.alert('Congratulation! You will get your product at home in working day');
   	window.location.assign('../User/')
   </script>";
   	}
   	else{
   		 echo "<script> window.alert('Please try again later.');
   	window.location.assign('../User/')
   </script>";
   	}
   }
   mysqli_close($con);
   	?>