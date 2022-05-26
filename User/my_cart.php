<?php
 include("header.php");
  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
<title>Cart</title>

</head>
<body>
<div class="container">
    <div class="col-lg-12 text-center border rounded bg-light my-5" >
        <h1> My Cart</h1>
</div>

<div class="col-lg-8">

<table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No:</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class ="text-center">
<?php
if(isset($_SESSION['cart']))
{
foreach($_SESSION['cart'] as $key => $value)
{
    $sr=$key+1;
   
    echo"
    <tr>
    <td>$sr</td>
    <td>$value[Item_Name]</td>
    <td>$value[Price]<input type='hidden'class='iprice'value='$value[Price]'></td>
    <td>
    <input class ='text-center iquantity'onchange='subTotal()' type='number' value='$value[Quantity]'min='1' max='10'>
    <input  type='hidden'name='Item_Name'value='$value[Item_Name]'>
    </form>
    </td>
    <td class='itotal'></td>
    <td>
    <form action='manage_cart.php'method='POST'>
    <button  name='Remove_Item'class='btn btn-sm btn-outline-danger'>REMOVE</button>
   <input  type='hidden'name='Item_Name'value='$value[Item_Name]'>
    </form>
    </td>
</tr>
";
}
}
?>
    
    
  </tbody>
</table>
<div class="col-lg-9">
    <div class="border bg-light rounded p-4">
        <h4>Grand Total:</h4>
<h5 class="text-right"id="gtotal"></h5>
<br>
<?php

if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
{
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<form action="payment_process.php"method="POST">
  <div class="mb-3">
    <label>Full Name</label>
    <input type="text"name="name"id="name" class="form-control"pattern="^[A-Z a-z]+$" title="Use alphabets Only" required autocomplete="off">
	
  </div>
    <div class="mb-3">
    <label>Phone Number</label>
    <input type="number"name="phone_no" class="form-control"required pattern="[789][0-9]{9}" title="Must Number Having 10 Digits"
   autocomplete="off">
    </div>
    <div class="mb-3">
    <label>Address</label>
    <input type="text"name="address" class="form-control"pattern="^[A-Z a-z]+$" title="Use alphabets Only" required autocomplete="off">
    </div>
	
    
    <br>
   <input type="button" name="btn"id="btn"value="Pay Now" onclick="pay_now()"/>

  </form>
  <?php
}

?>
</div>
</div> 




</div>
</div>
<script>

var gt=0;
var iprice=document.getElementsByClassName('iprice');
var iquantity=document.getElementsByClassName('iquantity');
var itotal=document.getElementsByClassName('itotal');
var gtotal=document.getElementById('gtotal');
function subTotal()
{
    gt=0;
    for(i=0;i<iprice.length;i++)
    {
        itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
       
        gt=gt+(iprice[i].value)*(iquantity[i].value);
    }
    gtotal.innerText=gt;
}


subTotal();

function pay_now(){
	var name=jQuery('#name').val();
	var amt=jQuery('#amt').val();
	var phone_no=jQuery('#phone_no').val();
	var address=jQuery('#address').val();
var options = {
    "key": "rzp_test_msdBqv5V2dRXCq",
    "amount": gt*100,
    "currency": "INR",
    
    "name": "Art Space",
    "description": "Test Transaction",
    "image": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlXv3CzwTPcTmchyvVgqLb0vg1N92SPraIYA&usqp=CAU",
    "handler": function (response){
     jQuery.ajax({
		type:'post',
		url:'payment_process.php',
		data:"payment_id="+response.razorpay_payment_id+"&gt="+gt
		+"&name="+name+"&phone_no="+phone_no+"&address="+address,
		success:function(result){
		window.location.href="thank_you.php";	
		}
	 });
    }
	
};
var rzp1 = new Razorpay(options);
rzp1.open();
  	
}

</script>
   

</body>
</html>