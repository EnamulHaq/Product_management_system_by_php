<?php

include('db_conn.php');

$id = $_REQUEST['id'];

$sql_select = "SELECT * FROM product_info where id ='".$id."' ";

$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_row($result);

 $product_name = $row[1];
 $product_price = $row[2];
 $product_decs = $row[3];
?>

<style type="text/css">
	div.form{
  text-align: center;
  border: 2px solid beige;
  margin-left: 29rem;
  margin-right: 29rem;
  margin-top: 3rem;
  background-color: #eee;
  border: 1px solid #ecc;
  padding: 10px;
  color: #666;
  font-size: 20px;
  line-height: 37px;
}
div.form h2{
  color: #75e34c;
  text-align: center;
  margin: 0;
}
div.form p{
  margin: 0;
  font-size: 15px;
}

div.form form{}
div.form form label{
  display: block;
  width: 100%;
  text-align: left;

}
div.form form p{
  text-align: left;
  margin: 0;
}

div.form input[type="text"]{
  display: block;
  width: 94%;
  padding: 8px;
}
div.form input[type="submit"]{
  font-size: 21px;
  color: green;
  line-height: 36px;
  margin: 0;
}
textarea{
	width: 100%;
}

.container{
		
	}
	.container img{
		display: block;
		width: 11%;
		margin: 50px;
	}
	.container h3{
		text-align: center;
		font-size: 50px;
		color: #6271c0;
	}
	.container p{
		text-align: center;
		color: #4de709b3;
	}

</style>
<div class="container">
	
	<h3>E.N Enterprise</h3>
	<p>Please visit our market <br> A modern and unique enterprise in the world.</p>
</div>
<div class="form" >
        

	<form action="product_update.php" method="post">
		<label>Enter your product name:</label><br>
		<input type="text" name="product" value="<?php echo $product_name; ?>" placeholder="Product name....."><br>
		<label>Enter the product price:</label><br>
		<input type="text" name="price" value="<?php echo $product_price; ?>" placeholder="Product price......"><br>
		<label>Enter short desceription for the product:</label><br>
		<textarea  name="comment" value="<?php echo $product_decs; ?>" placeholder="Enter your desceription....">

		</textarea><br>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="submit" name="" value="Submit">
	</form>
</div>
