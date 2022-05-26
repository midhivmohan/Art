<?php include('db_connect.php');?>

<div class="container-fluid">
<style>
	input[type=checkbox]
{
  /* Double-sized Checkboxes */
  -ms-transform: scale(1.5); /* IE */
  -moz-transform: scale(1.5); /* FF */
  -webkit-transform: scale(1.5); /* Safari and Chrome */
  -o-transform: scale(1.5); /* Opera */
  transform: scale(1.5);
  padding: 10px;
}
</style>
	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<fieldset>
		 <br>
         <center>       
    <h2 style="font-family:Bodoni MT Black;background-color:yellow;">ART  DETAILS</h2>
    </center>
				
                <form name="myForm" method="post" action="#" enctype="multipart/form-data"onsubmit="return validateForm()">
				
				
				
                    <center> <br>
					
					<table>
                   
<tr>

    <td>ART CATEGORY</td>
    <td><select name="ddlcategory" required="">
            <option value="">........</option>
                <?php
                $sql="SELECT * FROM `artcategory` ";
                $exe=  mysqli_query($conn,$sql);
                if(!$exe)
                {
                    die('Error'.mysqli_error());
                }
                $count=mysqli_num_rows($exe);
                if($count>0)
                {
                    while($row=  mysqli_fetch_array($exe))
                    {
                        
                    ?>
                <option><?php echo $row[1]?></option>
                <?php
                    }
                }
                ?>
            </select>
			
        </td>
		
</tr>
<br>
<tr><td>NAME</td>
             <td><br>
 <input type="text" name="txtname" placeholder="" value="" pattern="^[A-Z a-z]+$" title="Use alphabets Only" required=""/>
            </td></tr>
        </td>
</tr>

<tr><td>UNIT PRICE</td>
                  <td><br>

  <input type="number" name="txtPrice" name="price"id="field" onfocusout="checkAmount();"required=""/>
            </td></tr>
        </td>
        <tr><td>IMAGE</td>
               <td><br><input type="file" name="img"  row="10" cols="30"required=""/>
               </td></tr>

                          <tr><td></td><td><br><input type="submit" value="save" class="btn btn-success" style="width:100px"/></td></tr>
            </table></center>
        </form> 
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php
include '../db_connect.php';
$artcategory=$_POST['ddlcategory'];
$name=$_POST['txtname'];
$txtPrice=$_POST['txtPrice'];
$i=$_FILES["img"]["name"];

move_uploaded_file($_FILES["img"]["tmp_name"],"pic/".$_FILES["img"]["name"]);
$sql=mysqli_query($conn,"INSERT INTO `art`( `name`, `image`, `unit_price`, `status`) VALUES ('$name','$i','$txtPrice','Active')");

if(!$sql)
{
    die('error creating insertion'.mysqli_error());
}
echo '<script type="text/javascript">

</script>';

?>
        
      <script>
	  function checkAmount() {    
var myField = document.getElementById("field")
var reg = /^\d{0,4}(\.\d{0,2})?$/;    if (reg.test(myField.value))
{       
alert("Valid Amount!");    
}else{        
alert("Invalid Amount!");     } }
 
function validateForm() {
  let x = document.forms["myForm"]["txtname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>