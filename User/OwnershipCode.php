<?php
session_start();
include '../Connection.php';
$name=$_POST['txtname'];
$address=$_POST['txtaddress'];
$species=$_POST['txtspecies'];
$description=$_POST['txtdescription'];
$image="";
if (isset($_FILES['txtImage']))
{
    $errors=array();
    $file_name=$_FILES['txtImage']['name'];
    $file_size=$_FILES['txtImage']['size'];
    $file_tmp=$_FILES['txtImage']['tmp_name'];
    $file_type=$_FILES['txtImage']['type'];
    $file_ext=strtolower(end(\explode('.',$_FILES['txtImage']['name'])));
    $extensions=array("jpeg","jpg","png","jfif");
    if(in_array($file_ext,$extensions)==false)
    {
        $errors[]="extension not allowed ,please choose a JPEG or PNG files.";
          
    }
    if(empty($errors)==true)
    {
        move_uploaded_file($file_tmp,"../ownerupload/".$file_name);
        $image=$file_name;
    }
    else 
    {
    print_r($errors);
}
}
$no=$_POST['txtno'];
$method=implode(',',$_POST['cb']);
$date=$_POST['txtdate'];

$status='NA';
$user=$_SESSION['email'];


$sql=mysqli_query($con,"insert into ownership_request values('','$name','$address','$species','$description','$image','$no','$method','$date','$status','$user')");
if(!$sql)
{
//    die('error creating inserton'.mysqli_error());
}
echo '<script type="text/javascript">
alert("Request Sent Successfully");
window.location="Ownership.php";
</script>';

?>
