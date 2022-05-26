<?php
   
   include '../db_connect.php';
    include("header.php");
  ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}



/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<br><br>


  
   
                
  <form action="manage_cart.php"method="POST">
	<?php

				$result = mysqli_query($conn,"SELECT * FROM `art` ");
				while($row=  mysqli_fetch_array($result))
				{
    
	?>
  
      
			
           
<input type="hidden" name="Item_Name"value="<?php echo $row[1]?>">  
<input type="hidden" name="Price"value="<?php echo $row[3]?>">  
   
</form>


 <form action="manage_cart.php"method="POST">
	
  <div class="column">
    <div class="card">
      <img src="../../art/pic/<?php echo $row['image'];?>" width="100" height="220" class="card-img-top">
  
      <h6>	<?php echo $row[1]?><br></h6>
			<h6>Rs:- <?php echo $row[3]?></h6>
   
			<button type="submit"name="Add_to_cart"  class="btn btn-info">Add to Cart</button>	  
           
<input type="hidden" name="Item_Name"value="<?php echo $row[1]?>">  
<input type="hidden" name="Price"value="<?php echo $row[3]?>">  
      
    </div>
  </div>
</form>


</body>
</html>
 <?php 
                                }

				?>
				
			
				
				