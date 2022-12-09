<?php

$id = $_GET['selected_id'];


include('includes/database_connection.php');

$qry = "SELECT * FROM product WHERE product_id='$id'";
$data = mysqli_query($db_connection, $qry);
$product_data = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<head>Update Product</head>
<body>
<?php include('includes/top_nav.php') ?>

    <form method="POST" action="Update_Product.php" enctype="multipart/form-data">
    <img src="<?php echo $product_data['product_pic']; ?>" alt="Not found" width="70px" height="100px">    
    <table>
<caption>Change Details product</caption>
        <tr>
                <td>Product Name</td>
                <td><input type="text" name="product_name" value="<?php echo $product_data['product_name']; ?>" /></td>
            </tr>
            <tr>
                <td>Product Code</td>
                <td><input type="text" name="product_code" value="<?php echo $product_data['product_code']; ?>" /></td>
            </tr>
            <tr>
                <td>Product Quantity</td>
                <td><input type="number" name="product_qty"  min="1" max="100000" value="<?php echo $product_data['product_qty']; ?>"/></td>
            </tr>

            <tr>
                <td>Product Category</td>
                <td>
                    <select name="product_cat" aria-placeholder="<?php echo $product_data['product_cat']; ?>">
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

                </td>
            </tr>


            <tr>
                <td>Product Brands</td>
                <td>
                    <select name="product_brand" aria-placeholder="<?php echo $product_data['product_brand']; ?>">
					<?php include('includes/database_connection.php'); 
					$qry = "SELECT * FROM brand";
					$data = mysqli_query($db_connection, $qry);
					while($brand_data = mysqli_fetch_assoc($data))
					{					
                        if($brand_data['brand_name'] ==''){continue;}
                        else					?>
                        <option value="<?php echo $brand_data['brand_id'] ?>"><?php echo $brand_data['brand_name'] ?></option>
                    <?php } ?>
					</select>

                </td>
            </tr>


            <tr>
                <td>Product File</td>
                <td>
                    <input type="file" name="product_pic" value="<?php echo $product_data['product_pic']; ?>" />
                </td>
            </tr>



            <tr>
                <td></td>
                <td><input type="submit" value="SAVE" /><input type="reset" value="RESET" /></td>
            </tr>
        </table>    
      
    </form>
</body>
</html>

