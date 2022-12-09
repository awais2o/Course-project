<?php

echo $id = $_POST['selected_id'];

$brand_name = $_POST['Brand_Name'];
$brand_details = $_POST['Brand_Detail'];

include('includes/database_connection.php');
$q = "UPDATE brand SET brand_name='$brand_name', brand_details='$brand_details' WHERE brand_id= '$id'";

$q_status = mysqli_query($db_connection, $q);
If($q_status){

     header('location:Brand_List_.php');
}
else{
echo mysqli_error($db_connection);
}



?>