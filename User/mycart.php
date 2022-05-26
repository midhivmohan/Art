<!DOCTYPE html>
<?php 
session_start();
include './Master.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
           
   
<style>
    body{
        
        font-family: 'Source Sans Pro',sans-serif;
        
    }
    
    
    
    td,th{
        padding-left: 50px;
        padding-top: 10px
      
        
    } 
    .cascade{
display: inline-block;
margin: 20px auto;

}
  
</style>

</script>
<link rel="stylesheet" href="style.css" type="text/css" />

<link href="C1.css" rel="Stylesheet" type="text/css" />
<script type="text/javascript" src="JS1.js"></script>
<script type="text/javascript" src="JS2.js"></script>
    <script language="javascript">
        $(document).ready(function () {
            $("#txtdate").datepicker({
                minDate: 3
            });
        });
    </script>

          
</head>
<body style="background-color: #F2F2F2;font-size: 16px;">
      
    
    <br/>
      
        <div class="container" class="form-group col-lg-4">
          <center>  <fieldset style="width: 1000px;padding: 5px;
background: white;
box-shadow: 0px 0px 5px 0px #33B5E5;
position: relative;">
            <form name="myform" id="myform" action=""  method="post" enctype="multipart/form-data">
       <center>
     
            <?php
            include '../Connection.php';
            $sql=  mysqli_query($con,"select * from orderdetails where smail='".$_SESSION['email']."'");
           // $row=  mysqli_fetch_array($sql);
            ?>
        <h3 class="c-text" align="center">My Orders</h3><HR/>
                <br>
       <table border="1" >
           <tr style="background-color: #5cb85c;
    border-color: #4cae4c;">
        <th>Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Price </th>
         <th>Product</th>
        <th>Quantity</th>
          </tr>
            <?php
                while($row=mysqli_fetch_array($sql))
                {
                    ?>
    <tr>
        
    
        <td><?php echo $row['clientname']?></td>
        <td><?php echo $row['address']?></td>
       <td><?php echo $row['contact']?></td>
       <td><?php echo $row['totalprice']?></td>
       <?php 
    $unam=$row['username'];
       $qd=  mysqli_query($con, "select *from productorder where username='$unam' ");
       $r1=  mysqli_fetch_array($qd);
       ?>
       <td><?php echo $r1['pname']?></td>
        <td><?php echo $r1['quanity']?></td>
 
       
        
              </tr>
      
               <?php 
                }
               ?>      
                </table> 
                
                
                
<br/><br/>
<table> <tr><td></td><td><input type="submit" value="Edit Profile" class="btn btn-block btn-success" name="save" style="width:220px;"/></td>
           
</tr>
           
           
           
           
           
        </table>
       
      
        </fieldset>
        
        
        
        
             </center>
        </form>
        </div>
<?php include './Footer.php'; ?>
