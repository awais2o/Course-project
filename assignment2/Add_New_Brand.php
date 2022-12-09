<?php
include('includes/database_connection.php');
$Brand_Name = $_POST['Brand_Name'];
$Brand_Detail = $_POST['Brand_Detail'];
if ($Brand_Name != '') {
    $qry = "INSERT INTO brand (brand_name, brand_details) VALUES ('$Brand_Name', '$Brand_Detail')";
    $data_save = mysqli_query($db_connection, $qry);
    
}

header('location:Add_New_Brand_.php');


?>