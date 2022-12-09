<!DOCTYPE html>
<head>    <title>Add Product</title></head>
<body>
<?php include('includes/top_nav.php') ?>

    <form method="POST" action="Add_Product.php" enctype="multipart/form-data">
        <table style="border:1px solid black">
<caption>Add New product</caption>
        <tr>
                <td>Product Name</td>
                <td><input type="text" name="product_name"  /></td>
            </tr>
            <tr>
                <td>Product Code</td>
                <td><input type="text" name="product_code"  /></td>
            </tr>
            <tr>
                <td>Product Quantity</td>
                <td><input type="number" name="product_qty"  min="1" max="100000"/></td>
            </tr>

            <tr>
                <td>Product Category</td>
                <td>
                    <select name="product_cat">
					<?php include('includes/database_connection.php'); 
					$qry = "SELECT * FROM category";
					$data = mysqli_query($db_connection, $qry);
					while($category_data = mysqli_fetch_assoc($data))
					{					
                        if($category_data['cat_name'] ==''){continue;}
                        else
?>
                        <option value="<?php echo $category_data['cat_id'] ?>"><?php echo $category_data['cat_name'] ?></option>
                    <?php } ?>
					</select>
					<a href="Add_Category_.php">Add New Category</a>
                </td>
            </tr>


            <tr>
                <td>Product Brands</td>
                <td>
                    <select name="product_brand">
					<?php include('includes/database_connection.php'); 
					$qry = "SELECT * FROM brand";
					$data = mysqli_query($db_connection, $qry);
					while($brand_data = mysqli_fetch_assoc($data))
					{					
                        if($brand_data['brand_name'] ==''){continue;}
                        else
					?>
                        <option value="<?php echo $brand_data['brand_id'] ?>"><?php echo $brand_data['brand_name'] ?></option>
                    <?php } ?>
					</select>
					<a href="Add_New_Brand_.php">Add New Brand</a>
                </td>
            </tr>


            <tr>
                <td>Product File</td>
                <td>
                    <input type="file" name="product_pic" />
                </td>
            </tr>


            <tr>
                <td>product Details</td>
                <td><textarea name="product_details"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SAVE" /><input type="reset" value="RESET" /></td>
            </tr>
        </table>    
      
    </form>
</body>
</html>

