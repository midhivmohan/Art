
   <?php 
   include './Master.php';
   include '../dbcon.php';
   ?>
   <div class="container-fluid" style="margin-top: 31px;">
      <h2>View Payment Details</h2>
   </div>
   <div class="container-fluid" style="
      background-color: white;>
      <div class="row" style="margin-left: 10px;">
      <?php
         $a=$_GET['id'];
         $sql="SELECT * FROM `orderdetails` WHERE `order_id`=$a";/ 
         $run=mysqli_query($con,$sql);
         echo "<table class='table table-bordered'>
         <tr>
         <th>Payment Id</th>
         <th>Booking Art Id</mmth>
         <th> Customer Id</th>
         <th>Amount</th>
         </tr>";
         while($result=mysqli_fetch_array($run))
         {
         	echo "<tr>
         	<td>$result[0]</td>
         <td>$result[1]</td>
         <td>$result[2]</td>
         <td>$result[3]</td>
         	</tr>";
         }
         echo "</table>";
         mysqli_close($con);
         ?>
		 <?php include './Footer.php';?>
   </div>
</div>
</div>
