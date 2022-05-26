<?php

define('INCLUDE_CHECK',1);
require "../connect.php";

if(!$_POST['img']) die("There is no such product!");
$gi=explode('/',$_POST['img']);
$img=mysqli_real_escape_string($link,end($gi));

$row=  mysqli_fetch_array(mysqli_query($link,"SELECT * FROM product WHERE image='".$img."'"));

if(!$row) die("There is no such product!");

echo '<strong style="text-transform:uppercase">'.$row['name'].'</strong>
<p class="descr">Category : '.$row['product_category'].'</p>
<p class="descr">Uses : '.$row['uses'].'</p>

<strong>Unit Price : $'.$row['unitprice'].'</strong>
 
<small>Drag it to your shopping cart to purchase it</small>';
?>
