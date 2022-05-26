<?php

define('INCLUDE_CHECK',1);
require "../connect.php";

if(!$_POST['img']) die("There is no such product!");
$aig=explode('/',$_POST['img']);
$img=mysqli_real_escape_string($link,end($aig));
$row=  mysqli_fetch_array(mysqli_query($link,"SELECT * FROM product WHERE image='".$img."'"));

echo json_encode(array(
	'status' => 1,
	'id' => $row['pid'],
	'price' => (float)$row['unitprice'],
	'txt' => '<table width="100%" id="table_'.$row['pid'].'">
  <tr>
    <td width="30%">'.$row['name'].'</td>
    <td width="10%">$'.$row['unitprice'].'</td>
    <td width="20%">Available : '.$row['quantity'].'</td>
 <td width="10%">
 <input type="number" size="50" value="1" min="1" max="'.$row['quantity'].'" name="'.$row['pid'].'_cnt" id="'.$row['pid'].'_cnt" onchange="change('.$row['pid'].');" />

	</td>
	<td width="15%"><a href="#" onclick="window.remove('.$row['pid'].');return false;" class="remove">remove</a></td>
  </tr>
</table>'
));

?>
