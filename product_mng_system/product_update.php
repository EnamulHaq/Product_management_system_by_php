<?php


include('db_conn.php');

$id = $_REQUEST['id'];
$product = $_REQUEST['product'];
$price = $_REQUEST['price'];

//mysqli_real_escape_string($conn, $_REQUEST['comment']) it's use  for show the string (ex:student's) in the database.

$comment = mysqli_real_escape_string($conn, $_REQUEST['comment']);


$sql="UPDATE product_info SET products_name='".$product."', price='".$price."', short_description='".$comment."' WHERE id = ".$id." ";

$result = mysqli_query($conn, $sql);

if($result){
echo "Your data update successfully.";
}
else {
echo "Your data is not update something worng!";
} 

?>

