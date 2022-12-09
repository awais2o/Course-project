<?php
echo $id = $_POST['selected_id'];

$product_name = $_POST['product_name'];
$product_code = $_POST['product_code'];
$product_qty = $_POST['product_qty'];
$product_cat = $_POST['product_cat'];
$product_brand = $_POST['product_brand'];

$file_path = 'files/'. $_FILES['product_pic']['name'];
move_uploaded_file($_FILES['product_pic']['tmp_name'],$file_path);

 include('includes/database_connection.php');
$q1 = "SELECT product_pic FROM product WHERE product_id='$id'";
$run= mysqli_query($db_connection, $q1); 
$data = mysqli_fetch_assoc($run);

unlink($data['product_pic']);
// unlink('files/'.$data['product_pic']);
$q = "UPDATE product SET product_name='$product_name', product_code='$product_code',product_qty='$product_qty',cat_id='$product_cat', brand_id='$product_brand', product_pic='$file_path'";

$q_status = mysqli_query($db_connection, $q);
If($q_status){

     header('location:Product_List_.php');
}
else{
echo mysqli_error($db_connection);
}


?>