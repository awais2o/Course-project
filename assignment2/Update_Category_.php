<?php

$id = $_GET['selected_id'];


include('includes/database_connection.php');

$qry = "SELECT * FROM category WHERE cat_id='$id'";
$data = mysqli_query($db_connection, $qry);
$cat_data = mysqli_fetch_assoc($data);
?>

<!doctype html>
<head>
<title>Update Category</title>
</head>
<body>
<form method="post" action="Update_Category.php">
        <table style="border: 1px solid black;">
            <caption>Update Category</caption>

            <tr>
                <td>
                    <lable>Category Name </lable>
                </td>
                <td colspan=2>
                    <input type="text" name="Category_Name" value="<?php echo $cat_data['cat_name']; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <lable>Category Detail </lable>
                </td>
                <td colspan=2>
                    <input type="textarea" name="Category_Detail" value="<?php echo $cat_data['cat_details']; ?>">
                </td>
            </tr>


            <tr>
                <td>
                    <input type="text" name="selected_id" value="<?php echo $id; ?>" hidden>
                </td>

                <td>
                    <input type="submit" value="Update">
                </td>

                <td>
                    <input type="reset" value="Clear">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>