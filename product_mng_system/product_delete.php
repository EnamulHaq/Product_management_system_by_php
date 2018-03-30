<?php


include('db_conn.php');

$id = $_REQUEST['id'];
$sql = "DELETE FROM product_info WHERE id='".$id."'";

if(!empty($id)){
	// get delete query
     if(mysqli_query($conn, $sql)){

     	echo "Product deleted successfully.";
     }else{
     	echo 'Data not be delete !';
     }
     

}else{
	// For id missing
	echo "Missing your id!";
}


?>