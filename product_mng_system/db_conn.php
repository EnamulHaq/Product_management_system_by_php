
<?php

$servername="localhost";
$username="root";
$password="";
$db ="product_db";

$conn= mysqli_connect($servername,$username,$password,$db);

if ($conn->connect_error) {
 echo "Not connected!";
}
?>