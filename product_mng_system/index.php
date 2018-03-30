<?php
include('db_conn.php');
$result = mysqli_query($conn,"SELECT * FROM product_info");
$num_rows = mysqli_num_rows($result);

?>
<style type="text/css">
	.container{
		
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
	
	.container .row {
		 margin-top: 3%;
    	 text-align: center;
	}
	.container .row a{
	    border: 2px solid #bcb0b0;
	    border-radius: 34px;
	    color: #7ce069;
	    display: inline-block;
	    font-size: 43px;
	    margin: 5px;
	    padding: 12px;
	    text-align: center;
	    text-decoration: none;
	    width: 20%;
	}
	.counter{
		 color: skyblue;
    	 display: block;
    	 font-size: 38px;
    	 margin: 43px;
     	 text-align: center;
	}
</style>
<div class="container" >
	
	<h3>E.N Enterprise</h3>
	<p>Please visit our market <br> A modern and unique enterprise in the world.</p>
	<div class="row">
		<a href="product_list.php">Products list</a>
		<a href="add_product.php">Add new</a>
	</div>
	<div class="counter">
		<span>Total products: <?php echo $num_rows; ?>  </span>
	</div>
	
</div>

<?php

?>