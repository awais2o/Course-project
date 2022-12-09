<?php

$product_name = $_POST['product_name'];
$product_code = $_POST['product_code'];
$product_qty = $_POST['product_qty'];
$product_cat = $_POST['product_cat'];
$product_brand = $_POST['product_brand'];


$file_path = 'files/'. $_FILES['product_pic']['name'];
move_uploaded_file($_FILES['product_pic']['tmp_name'],$file_path);


$product_details = $_POST['product_details'];


 include('includes/database_connection.php');
if ($product_name != '') {
    $save = "INSERT INTO product (product_name, product_code,product_qty,cat_id, brand_id, product_details , product_pic)
    VALUES ('$product_name', '$product_code', '$product_qty','$product_cat', '$product_brand', '$product_details', '$file_path')";
   
   $result = mysqli_query($db_connection, $save);
}


header('location:Add_Product_.php');






?>