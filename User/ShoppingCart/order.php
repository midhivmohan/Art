<?php
session_start();
error_reporting(0);
define('INCLUDE_CHECK',1);
require "./connect.php";
$user=$_SESSION['name'];
if(!$_POST)
{
	if($_SERVER['HTTP_REFERER'])
	header('Location : '.$_SERVER['HTTP_REFERER']);
	
	exit;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>

<link rel="stylesheet" type="text/css" href="demo.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="simpletip/jquery.simpletip-1.3.1.pack.js.txt"></script>



<script type="text/javascript" src="script.js"></script>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white;
    color: black;
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}</style>
</head>

<body>

<div id="main-container">

    <div class="container">
    
    	<span class="top-label">
            <span class="label-txt">Your order</span>
        </span>
        
        <div class="content-area">
    
    		<div class="content">
            	
                <?php
				$total="";
				$cnt = array();
				$products = array();
				
				foreach($_POST as $key=>$value)
				{
					$key=(int)str_replace('_cnt','',$key);
				
					$products[]=$key;
					$cnt[$key]=$value;
				}

				$result = mysqli_query($link,"SELECT * FROM product WHERE pid IN(".join($products,',').")");
				
				if(!mysqli_num_rows($result))
				{
					echo '<h1>There was an error with your order!</h1>';
				}
				else
				{
					echo '<h1>You ordered:</h1>';
					
    while($row=  mysqli_fetch_array($result))
    {
            echo '<h2>'.$cnt[$row['pid']].' x '.$row['name'].'</h2>';
            //echo $cnt[$row['pid']];
          // echo '<input type="hidden" name="txtUnit" value="'.$row['unit'].'"/>';
           $total +=$cnt[$row['pid']] * $row['unitprice'];
         
            $ra=  mysqli_fetch_array(mysqli_query($link,"SELECT quantity FROM product where name='".$row['name']."'"));
            $qty=$ra['quantity']-$cnt[$row['pid']];
            $sql=mysqli_query($link,"update product set quantity='$qty' where name='".$row['name']."'");
            
            $myquery=mysqli_query($link,"insert into productorder(pname,quanity,unitprice,username,status)
             values('".$row['name']."','".$cnt[$row['pid']]."','".$row['unitprice']."','".$user."','NA')");
            
            
    }

					echo '<h1>Total: $'.$total.'</h1>';
				}
				?>
                
                
       	        <div class="clear"></div>
            </div>

        </div>
        
        <div class="bottom-container-border">
        </div>

    </div>

    <div class="container">
    
    	<span class="top-label">
            <span class="label-txt">Complete Checkout</span>
        </span>
        
        <div class="content-area">
    
<div class="content">
<form action="CompleteCheckout.php" method="post">
    <table>
        <tr><td><input type="hidden" value="<?php echo $total ?>" name="txtTotal"/></td></tr>
        <tr><td>Full Name </td>
            <td><input type="text" name="txtname" value="" class="form-control" required pattern="^[A-Z a-z]+$" title="Use Alphabets Only"/></td></tr>
          <tr><td>Address</td>
              <td><textarea name="txtAddress" rows="4" cols="20" class="form-control" required></textarea></td></tr>    
     <tr><td>Mobile Number</td>
         <td><input type="text" name="txtMob" value="" class="form-control" required pattern="[789][0-9]{9}" title="Use Valid Mobile"/></td></tr>
      <tr><td>Card Holder Name</td>
            <td><input type="text" name="txtHolder" value="" class="form-control" required pattern="^[A-Z a-z]+$" title="Use Alphabets Only"/></td></tr> 
      <tr><td>Card Type</td>
          <td><select name="txtType" class="form-control" style="height: 40px;">
                  <option value="">-Select-</option>
                  <option>Credit Card</option>
                  <option>Debit Card</option>
              </select></td></tr> 
 <tr><td>Card Name</td>
<td><input type="text" name="txtCard" value="" class="form-control" required/></td></tr>
   <tr><td>Card Number</td>
<td><input type="text" name="txtNumber" value="" class="form-control" required/></td></tr> 
   <tr><td>CVV Number</td>
<td><input type="text" name="txtCVV" value="" class="form-control" required/></td></tr>
<tr><td>Expiry Date</td>
<td><input type="date" name="txtExpiry" value="" class="form-control" required/></td></tr>
          <tr><td>Bank Name</td>
<td><input type="text" name="bname" value="" class="form-control" required/></td></tr>
        <tr><td></td><td><input type="submit" value="Place Order" class="button button1"/></td></tr>
    </table>


</form>
              
                
                
       	        <div class="clear"></div>
            </div>

        </div>
        
        <div class="bottom-container-border">
        </div>

    </div>
    
    
    
    
</div>

</body>
</html>
