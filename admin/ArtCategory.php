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
						<style>
    th{
        background-color: #0480be;
        color: white
    }
    table{
        text-align: center
    }
</style>
         <fieldset>
		 
             <center>
      <center>       
    <h2 style="font-family:Bodoni MT Black;color:white;background-color:green;">ART  CATEGORY</h2>
    </center>
                 <br>
                 <form name="" method="POST" action="ArtCategoryCode.php">
                     <center> <table style="margin-left: -300px">
                <tr>
                    <td>ART CATEGORY</td>
                  <td>
                      <input type="text" name="txtcategory" value="" pattern="^[A-Z a-z]+$" title="Use alphabets Only" required autocomplete="off"/>
            </td></tr>
            
                        <tr><td></td><td><br><input type="submit" value="save" class="btn btn-success" style="width:100px"/></td></tr>
            </table></center>
        </form> 
               
                 <br>
                 <table style="margin-left: -300px;width: 300px" border="1">
                     <tr><th>ID</th><th>CATEGORY</th></tr>
                     
               
               <?php
               include '../db_connect.php';
               $sql=  mysqli_query($conn,"SELECT * FROM `artcategory`");
               while($row=  mysqli_fetch_array($sql))
               {
                   ?>
                     <tr><td><?php echo $row[0] ?></td>
                         <td><?php echo $row[1] ?></td>
                     
                     </tr>
                     <?php
               }
             
               ?>  
                 
                   </table>
				   </div>
				   </div>
				   </div>
                 


                 
                 
                 
                 
        