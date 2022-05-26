 <?php
 session_start();
 if(isset($_REQUEST['subbtn']))
                                                        {
include'db_connect.php';
$n=$_POST['uname'];
$d=$_POST['udate'];
$e=$_POST['uemail'];
$phn=$_POST['phone'];
$c=$_POST['txtplace'];
$adds=$_POST['addrss'];
$p=$_POST['txtpass'];

														
$sql=mysqli_query($conn,"INSERT INTO `registration`( `name`, `dob`, `email`, `phone`, `place`, `address`,`password`,`status`) VALUES ('$n','$d','$e','$phn','$c','$adds','$p','Active')");
if(!$sql)
{
//    die('error in creating insertion'.mysqli_error($con)); 
}
   echo '<script>alert("Sign Up Successfully Completed...")</script>';
    echo '<script>window.location.href="login.php";</script>';
														}
														
?>           