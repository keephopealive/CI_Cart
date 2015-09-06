<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
</head>
<body>
	<h1>Checkout</h1>	
	<?php 
		if(count($cart)>0){
			foreach($cart as $eachPartOfCart){
?>
				<h3>Product ID: <?= $eachPartOfCart['product_id'] ?></h3>
				<h3>Product Quantity: <?= $eachPartOfCart['qty'] ?></h3>
				<h3>Update: 
					<form method='post' action="/carts/update/<?= $eachPartOfCart['product_id'] ?>">
						<input type="number" name="qty" value="<?= $eachPartOfCart['qty'] ?>">
						<input type="submit" value="Update">
					</form>
				</h3>
				<h3>
					<a href="/carts/destroy/<?= $eachPartOfCart['product_id'] ?>">Remove Item from Cart</a>
				</h3>
				<hr>
<?php
			}
		}
	?>
	<a href="/">Products</a>
</body>
</html>