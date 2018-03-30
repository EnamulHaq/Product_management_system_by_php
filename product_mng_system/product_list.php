<?php

include('db_conn.php');
// Data collection

$sql = "SELECT *  FROM product_info";
$result = $conn->query($sql);

?>
<style type="text/css">
  tr .td a{
    text-decoration: none;
    color:#67de4f;
  }
  tr .th{
    color: red;
  }
</style>


<table border="1" style="width: 100%; text-align: center; font-size: 20px;" cellpadding="0" cellspacing="0">
  <tr>
    <th>S.N</th>
    <th>Products name</th>
    <th>Price</th>
    <th>Comment</th>
    <th class="th">Action</th>
  </tr>

<?php 
// $sn use for increment the serial number
$sn = 0;
while($row = $result->fetch_assoc()) { 
$sn++;
  ?>
  <tr>
    <td><?php echo $sn; ?></td>
    <td><?php echo $row['products_name']; ?></td>
    <td><?php echo "$".number_format($row['price'], 2); ?></td> 
    <td><?php echo $row['short_description']; ?></td>
    <td class="td"><a href="product_delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    <td class="td"><a href="product_edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
    <td class="td"><a href="product_view.php?id=<?php echo $row['id']; ?>">View</a></td>
  </tr>
<?php  } 

?>

</table>
<?php

?>