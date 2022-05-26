<?php
include '../db_connect.php';
$artcategory=$_POST['txtcategory'];
$sql=mysqli_query($conn,"INSERT INTO `artcategory` VALUES ('','$artcategory')");

if(!$sql)

echo '<script type="text/javascript">
alert("Category Saved Successfully");
window.location="ArtCategory.php";
</script>';

?>
