<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
</head>
<body>
	<table border='1'>
		<thead>
			<tr>
				<th>Product Name</th>
				<th>Product Price</th>
				<th>Product Qty</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Coding Dojo Shirt</td>
				<td>9.99</td>
				<td>
					<form method='post' action='/carts/add'>
						<input type='hidden' name='product_id' value='1'>
						<input type='number' name='qty' value='1'>
						<input type='submit' value="Add to Cart">
					</form>
				</td>
			</tr>
			<tr>
				<td>Coding Dojo Mug</td>
				<td>19.99</td>
				<td>
					<form method='post' action='/carts/add'>
						<input type='hidden' name='product_id' value='2'>
						<input type='number' name='qty' value='1'>
						<input type='submit' value="Add to Cart">
					</form>
				</td>
			</tr>
			<tr>
				<td>Coing Dojo Keyboard</td>
				<td>109.99</td>
				<td>
					<form method='post' action='/carts/add'>
						<input type='hidden' name='product_id' value='3'>
						<input type='number' name='qty' value='1'>
						<input type='submit' value="Add to Cart">
					</form>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>