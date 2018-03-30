
<?php

$servername="localhost";
$username="root";
$password="";
$db ="product_db";

$conn= mysqli_connect($servername,$username,$password,$db);

if ($conn->connect_error) {
 echo "Not connected!";
}

$product_name = $_REQUEST['product'];
$product_price = $_REQUEST['price'];
$comment = $_REQUEST['comment'];

$sql = "INSERT INTO product_info (products_name,price,short_description) VALUES('".$product_name."', '".$product_price."','".$comment."')";

  if (mysqli_query($conn, $sql)) {
   ?>

  <table border="1" style="width: 100%; text-align: center; font-size: 20px;" cellpadding="0" cellspacing="0">
      <tr>
        <th>Product name</th>
        <th>Price</th>
        <th>Comment</th>
      </tr>
      <tr>
        <td><?php echo $product_name; ?></td>
        <td><?php echo "$".number_format($product_price,2); ?></td>
        <td><?php echo $comment; ?></td>
      </tr>
<?php 
  } 
?>

  </table>
