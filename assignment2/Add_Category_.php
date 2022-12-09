<! doctype html>
<head>
    <title>Add Category</title>
</head>
<body>
<?php include('includes/top_nav.php') ?>
<form method="post" action="Add_Category.php">
<table style="border:1px solid black">
    <caption>Add New  Category</caption>

<tr>
<td>
<lable>Category Name </lable>
</td>
<td colspan=2>
<input type="text" name="Category_Name" >
</td>
</tr>

<tr>
<td>
<lable>Category Detail </lable>
</td>
<td colspan=2>
<input type="textarea" name="Category_Detail" >
</td>
</tr>


<tr>
<td>
</td>

<td >
<input type="submit" value="Submit">
</td>

<td >
<input type="reset" value="Clear" >
</td>
</tr>








</table>
</form>

</body>
</html>