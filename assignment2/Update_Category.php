<?php

echo $id = $_POST['selected_id'];

$Category_name = $_POST['Category_Name'];
$Category_details = $_POST['Category_Detail'];

include('includes/database_connection.php');
$q = "UPDATE category SET cat_name='$Category_name', cat_details='$Category_details' WHERE cat_id= '$id'";

$q_status = mysqli_query($db_connection, $q);
If($q_status){

     header('location:Category_List_.php');
}
else{
echo mysqli_error($db_connection);
}



?>