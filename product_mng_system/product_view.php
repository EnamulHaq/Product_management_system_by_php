<?php

include('db_conn.php');

$id = $_REQUEST['id'];

$sql_select = "SELECT * FROM product_info where id ='".$id."' ";
//$sql = "Select id form product_info WHERE id = '".$id."' ";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_row($result);

 $product_name = $row[1];
 $product_price = $row[2];
 $product_decs = $row[3];

 ?>
  <table border="1" style="width: 100%; text-align: center; font-size: 20px;" cellpadding="0" cellspacing="0">
  <tr>
    <th>Products name</th>
    <th>Price</th>
    <th>Comment</th>
  </tr>

  <tr>
  	<td><?php echo $product_name; ?></td>
  	<td><?php echo "$".number_format($product_price, 2); ?></td>
  	<td><?php echo $product_decs; ?></td>
  </tr>
  </table>

 <?php

?>
