<?php

include('includes/database_connection.php');

$id = $_GET['selected_id'];

$q = "DELETE FROM category WHERE cat_id='$id'";
$q_status = mysqli_query($db_connection, $q);
If($q_status){ 
header('location:Category_List_.php');
} 



?>