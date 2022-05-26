<?php

define('INCLUDE_CHECK',1);
require "dbcon.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>

<link rel="stylesheet" type="text/css" href="demo.css" />

<!--[if lt IE 7]>
<style type="text/css">
	.pngfix { behavior: url(pngfix/iepngfix.htc);}
    .tooltip{width:200px;};
</style>
<![endif]-->


<script type="text/javascript" src="js1.js"></script>
<script type="text/javascript" src="js2.js"></script>

<script type="text/javascript" src="simpletip/jquery.simpletip-1.3.1.pack.js"></script>

<link rel='shortcut icon' href='../images/Profile-Woman-Icon.png' type='image/x-icon'>

<script type="text/javascript" src="script.js"></script>

</head>

<body>

<div id="main-container">

	 <div class="tutorialzine" style="margin-left: -250px">
             <h1 style="font-size: 35px">ArtSpace</h1>
                 
    <h3>The best products at the best prices</h3>
    </div>


       <div class="container" style="margin-top: -100px">
    
    	<span class="top-label">
            <span class="label-txt">Our Products</span>
        </span>
        
        <div class="content-area">
    
    		<div class="content drag-desired">
            	
                <?php

				$result = mysqli_query($link,"SELECT * FROM product where quantity!=0");
				while($row=  mysqli_fetch_array($result))
				{
                                    ?>
                    
	<div class="product">
            <img src="../../art/Admin/pic/<?php echo $row['image'];?>" alt="'.htmlspecialchars($row['name']).'" width="140" height="220" class="pngfix" />
            <br/><br/>
            <a href="newfile.php?img=<?php echo $row['image'];?>&pid=<?php echo $row['pid'];?>">ORDER</a>
        </div>
				
        
                    
                    <?php 
                                }

				?>
                
                
       	        <div class="clear"></div>
            </div>

        </div>
        
        <div class="bottom-container-border">
        </div>

    </div>



<!--    <div class="container">
    
    	<span class="top-label">
            <span class="label-txt">Shopping Cart</span>
        </span>
        
        <div class="content-area">
    
    		<div class="content drop-here">
            	<div id="cart-icon">
	            	<img src="img/Shoppingcart_128x128.png" alt="shopping cart" class="pngfix" width="128" height="128" />
					<img src="img/ajax_load_2.gif" alt="loading.." id="ajax-loader" width="16" height="16" />
                </div>

				<form name="checkoutForm" method="post" action="order.php">
                
                <div id="item-list">
                </div>
                
				</form>                
                <div class="clear"></div>

				<div id="total"></div>

       	        <div class="clear"></div>
                
                <a href="" onclick="document.forms.checkoutForm.submit(); return false;" class="button">Checkout</a>
                
          </div>

        </div>
        
        <div class="bottom-container-border">
        </div>

    </div>-->

	<div class="tutorial-info">	
&copy; GreenLand || Developed @2019
</div>

</body>
</html>
