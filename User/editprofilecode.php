<?php
session_start();
include '../db_connect.php';
$name=$_POST['txtName'];
$txtAge=$_POST['txtAge'];
$txtcity=$_POST['txtcity'];
$cmob=$_POST['cmob'];
$txtAddress=$_POST['txtAddress'];
$cemail=$_POST['cemail'];



$sql=  mysqli_query($conn,"UPDATE `registration` SET `name`='$name',`dob`='$txtAge',
`phone`='$cmob',`place`='$txtcity',`address`='$txtAddress' WHERE EMAIL='".$_SESSION['email']."'");

if(!$sql)
{
//    die('Error'.mysqli_error());
}
echo '<script>window.location="EditProfile.php"</script>';
?>
