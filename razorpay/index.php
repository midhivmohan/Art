<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<form>
<input type="textbox" name="name"id="name"placeholder="Enter your name"/><br/><br/>
<input type="textbox" name="amt"id="amt"placeholder="Enter your amt"/><br/><br/>
<input type="button" name="btn"id="btn"value="Pay Now" onclick="pay_now()"/>

</form>
<script>
function pay_now(){
	var name=jQuery('#name').val();
	var amt=jQuery('#amt').val();
var options = {
    "key": "rzp_test_msdBqv5V2dRXCq",
    "amount": amt*100,
    "currency": "INR",
    
    "name": "Art Space",
    "description": "Test Transaction",
    "image": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlXv3CzwTPcTmchyvVgqLb0vg1N92SPraIYA&usqp=CAU",
    "handler": function (response){
     jQuery.ajax({
		type:'post',
		url:'payment_process.php',
		data:"payment_id="+response.razorpay_payment_id+"&amt="+amt
		+"&name="+name,
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