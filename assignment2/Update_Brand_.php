<?php

$id = $_GET['selected_id'];
include('includes/database_connection.php');

$qry = "SELECT * FROM brand WHERE brand_id='$id'";
$data = mysqli_query($db_connection, $qry);
$brand_data = mysqli_fetch_assoc($data);
?>

<!doctype html>
<head>
<title>Add Update Brand</title>
</head>
<body>
    <form method="post" action="Update_Brand.php">
        <table style="border: 1px solid black;">
            <caption>Update Brand</caption>

            <tr>
                <td>
                    <lable>Brand Name </lable>
                </td>
                <td colspan=2>
                    <input type="text" name="Brand_Name" value="<?php echo $brand_data['brand_name']; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <lable>Brand Detail </lable>
                </td>
                <td colspan=2>
                    <input type="textarea" name="Brand_Detail" value="<?php echo $brand_data['brand_details']; ?>">
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