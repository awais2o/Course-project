


<!doctype html>
<head>
	<title>Product List</title>
<style>
    table{
        border: 1px solid  black;
    }
    th,td{
        border-left: 1px solid black;
		border-bottom: 1px solid black;
    }
    
</style>
</head>

<body>
<?php include('includes/top_nav.php') ?>

	<table >
        <caption>Product List</caption>
		<thead>
			<th>Id</th>
			<th>Pic </th>
			<th>Product Name</th>
			<th>Details</th>
			<th colspan="2">Operations</th>

		</thead>
		<?php


include('includes/database_connection.php');

$qry = "SELECT * FROM product";
$data = mysqli_query($db_connection, $qry);
while($product_data = mysqli_fetch_assoc($data)){
$id = $product_data['product_id'];

?>
		<tr>
			<td><?php echo $product_data['product_id']; ?></td>
			<td><img src="<?php echo $product_data['product_pic']; ?>" width="40px" height="40px"> </td>
			<td><?php echo $product_data['product_name']; ?></td>
			<td><?php echo $product_data['product_details']; ?></td>
			<td>
                <button><a href="Delete_Product.php?selected_id=<?php echo $id ?>">Delete</a></button>
			</td>
            <td>
                <button><a href="Update_Product_.php?selected_id=<?php echo $id ?>">Update</a></button>
			</td>
		</tr>
		<?php } ?>
	</table>
	
</body>

</html>