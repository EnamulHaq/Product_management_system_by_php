
<?php

?>
<style type="text/css">
	div.form{
    background-color: #68d1cd;
    border: 1px solid #ecc;
    color: #666;
    font-size: 20px;
    margin-left: 8%;
    margin-top: 3rem;
    padding: 10px;
    text-align: center;
    width: 83%;
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
  width: 100%;
  padding: 10px;
}
div.form input[type="submit"]{
  font-size: 21px;
  color: #5D5252;
  line-height: 36px;
  background: #00ff1e;
  margin-top: 30px;
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
	<form action="submit_product.php" method="post">
		<label>Enter your product name:</label><br>
		<input type="text" name="product" placeholder="Product name....."><br>
		<label>Enter the product price:</label><br>
		<input type="text" name="price" placeholder="Product price......"><br>
		<label>Enter short desceription for the product:</label><br>
		<textarea name="comment" placeholder="Enter product desceription....">

		</textarea><br>
		<input type="submit" value="Submit">
	</form>
</div>


<?php

 ?>