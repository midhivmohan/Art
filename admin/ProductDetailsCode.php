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
alert("Product Saved..");

</script>';

?>
