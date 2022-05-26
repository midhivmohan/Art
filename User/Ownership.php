<?php include './Master.php';?><br><br>
<style>
    td{
        padding-top: 10px
    }
</style>
         <fieldset>
                <legend align="center">Ownership Request</legend>
                <form name="" method="post" action="OwnershipCode.php" enctype="multipart/form-data">
                    <center> <table>
                <tr>
                    <td>NAME</td>
                  <td>
                      <input type="text" name="txtname" placehold="" value="" class="form-control" required=""/>
            </td></tr>
            <tr><td>ADDRESS</td>
                <td><textarea name="txtaddress" row="5" cols="21" class="form-control" required=""></textarea>
                </td></tr>
            <tr><td>SPECIES</td>
                <td><input type="text" name="txtspecies" placehold="" value=""class="form-control" required=""/>
                </td></tr>
             <td>DESCRIPTION</td>
            <td><textarea name="txtdescription" row="5" cols="21" class="form-control" required=""></textarea>
            </td></tr>
            <tr><td>IMAGE</td>
               <td><input type="file" name="txtImage" required=""/></td></tr>
            <tr><td>NUMBER</td>
                <td><input type="number" name="txtno" class="form-control" required="" min="1"/></td></tr>
            <tr>
                <td>METHOD</td>               
 <td><input type="checkbox" name="cb[]" value="purchase"/>Purchase
<input type="checkbox" name="cb[]" value="gift"/>Gift
<input type="checkbox" name="cb[]" value="inheritance"/>Inheritance
<input type="checkbox" name="cb[]" value="other mode"/>Other mode
 </td>
</tr>
            <tr><td>DATE</td>
                <td><input type="date" name="txtdate" class="form-control" required=""/><td></tr>
            
            
            <tr><td></td><td><input type="submit" value="save" class="btn btn-success" style="width:100px"/></td></tr>
            </table></center>
        </form> 
        
        
      <?php include './Footer.php'; ?>