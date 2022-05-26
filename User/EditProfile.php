
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
            <form name="myform" id="myform" action="editprofilecode.php"  method="post" enctype="multipart/form-data">
       <center>
     
            <?php
            include '../db_connect.php';
            $sql=  mysqli_query($conn,"SELECT * FROM `registration` ");
            $row=  mysqli_fetch_array($sql);
            ?>
        <h3 class="c-text" align="center">Edit Profile</h3><HR/>
                <br>
       <table>
       <tr><td>Name</td>
           <td><input type="text" name="name" class="form-control"  pattern="^[A-Z a-z]+$" title="Use alphabets Only" required 
		   autocomplete="off" value="<?php  echo $_SESSION['name']; ?>"/></td>
        </tr>
         <tr><td>DOB</td>
           <td><input type="text" name="udate" class="form-control" required="" value="<?php echo $row[2] ?>"/></td>
        </tr>
         <tr><td>Place</td>
           <td><input type="text" name="txtplace" class="form-control" pattern="^[A-Z a-z]+$" title="Use alphabets Only" required 
		   autocomplete="off"value="<?php echo $row[5] ?>"/></td>
        </tr>
        <tr><td>Phone</td>
            <td><input type="text" class="form-control" name="phone" value="<?php echo $row[4] ?>" required pattern="[789][0-9]{9}" title="Must Number Having 10 Digits" style="width:230px;"/></td>
        </tr>
         <tr><td>Address</td>
             <td><textarea name="addrss" class="form-control" required=""><?php echo $row[6] ?></textarea></td>
        </tr>
        
               
        <tr><td>Email</td>
            <td><input type="email" class="form-control" name="uemail"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
			title="Email" required autocomplete="off"value="<?php echo $row[3] ?>"
			"" style="width:230px;text-transform: lowercase"/></td>
        </tr>
       
       
      
                     
                </table> 
                
                
                
<br/><br/>
<table> <tr><td></td><td>

<input type="submit" value="Edit Profile" class="btn btn-block btn-success" name="save" style="width:220px;"/></td>
           
</tr>
           
           
           
           
           
        </table>
       
      
        </fieldset>
        
        
        
        
             </center>
        </form>
        </div>
<?php include './Footer.php'; ?>
