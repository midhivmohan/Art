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
					<center>
					<h2 style="font-family:Bodoni MT Black;color:white;background-color:blue;">List of Orders</h2>
					</center>	
						
					</div>
					<div class="card-body">
						<?php
						$sql="SELECT * FROM `payment`";
$exe=mysqli_query($conn,$sql);
if(!$exe)
{
die('error'.mysqli_error());
    
}
$count=mysqli_num_rows($exe);
if($count>0)
{
?>
<center>

<form action="" method="post">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
   tr.border-bottom td {
        border-bottom: 1pt solid #E1360C;
}
</style>
    <table border="6" style="margin-center: -70px;margin-top: 50px">
    <tr>
	<th style="font-family:Bodoni MT Black;color:white;background-color:crimson;font-size:25px">SNo:-</th>
        <th style="font-family:Bodoni MT Black;color:white;background-color:crimson;font-size:25px"> Name</th>
        <th style="font-family:Bodoni MT Black;color:white;background-color:crimson;font-size:25px">Address</th>
        <th style="font-family:Bodoni MT Black;color:white;background-color:crimson;font-size:25px">PhoneNo</th>
        <th style="font-family:Bodoni MT Black;color:white;background-color:crimson;font-size:25px">Price </th>
         <th style="font-family:Bodoni MT Black;color:white;background-color:crimson;font-size:25px">Payment Status </th>
        <th style="font-family:Bodoni MT Black;color:white;background-color:crimson;font-size:25px">Payment Id </th>
          </tr>
            <?php
                while($row=mysqli_fetch_array($exe))
                {
                    ?>
    <tr class="border-bottom">
        
         <td style="color:#0000ff;font-weight:bold"><?php echo $row[0]?></td>
        <td style="color:#0000ff;font-weight:bold"><?php echo $row[1]?></td>
        <td style="color:#0000ff;font-weight:bold"><?php echo $row[2]?></td>
       <td style="color:#0000ff;font-weight:bold"><?php echo $row[3]?></td>
       <td style="color:#0000ff;font-weight:bold"><?php echo $row[4]?></td>
       <td style="color:#0000ff;font-weight:bold"><?php echo $row[5]?></td>
        <td style="color:#0000ff;font-weight:bold"><?php echo $row[6]?></td>
  
       
        
              </tr>
        <?php
                }
}
?>
</table>





