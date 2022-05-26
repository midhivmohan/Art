
 <?php  
session_start(); 
session_destroy();
header("location: /art/login.php");
exit();
?>
