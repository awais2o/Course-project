<?php
include('includes/database_connection.php');
$Category_Name = $_POST['Category_Name'];
$Category_Detail = $_POST['Category_Detail'];
if ($Category_Name != '') {
    $qry = "INSERT INTO category (cat_name, cat_details) VALUES ('$Category_Name', '$Category_Detail')";
    $data_save = mysqli_query($db_connection, $qry);
}
header('location:Add_Category_.php');


?>