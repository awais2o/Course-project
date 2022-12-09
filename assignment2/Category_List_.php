<!doctype html>

<head>
<title>Category List</title>
    <?php include('includes/top_nav.php') ?>
    <!-- <style>
        table,
        thead,
        tbody {
            border: 1px solid black;
        }
        .detail{
            border-left: 1px solid black ;
        }
    </style>
 -->
 <style>
    table{
        border: 1px solid  black;
    }
    th,td{
        border-left: 1px solid black;
    border-bottom: 1px solid black;
    }
    
</style>
</head>

<body>

    <table>
        <caption>Category List</caption>


        <thead>
 <tr>
                <th>Name</th>
                <th class="detail">
                    <pre>         Details            </pre>
                </th>
                <th colspan=2>Options</th>
            </tr>
        </thead>

        <tbody>
        <?php


include('includes/database_connection.php');

$qry = "SELECT * FROM category";
$data = mysqli_query($db_connection, $qry);
while ($cat_data = mysqli_fetch_assoc($data)) {
    $id = $cat_data['cat_id'];

?>
        <tr>
                <td><?php echo $cat_data['cat_name']; ?></td>
                <td class="detail" ><?php echo $cat_data['cat_details']; ?></td>
                <td>
                    <button type="button"><a href="Update_Category_.php?selected_id=<?php echo $id ?>">edit</a> </button>
                </td>
                <td>
                    <button type="button" ><a href="Delete_Category.php?selected_id=<?php echo $id ?>">delete</a> </button>
                </td>
            </tr>


            <?php } ?>
            </thead>



    </table>
    
</body>

</html>