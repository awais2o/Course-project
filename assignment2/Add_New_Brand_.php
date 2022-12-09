<! doctype html>
<head>
<title>Add Brand</title>
</head>
<body>
<?php include('includes/top_nav.php') ?>
<form method="post" action="Add_New_Brand.php">
<table style="border:1px solid black">
    <caption>Add New  Brand</caption>

<tr>
<td>
<lable>Brand Name </lable>
</td>
<td colspan=2>
<input type="text" name="Brand_Name" >
</td>
</tr>

<tr>
<td>
<lable>Brand Detail </lable>
</td>
<td colspan=2>
<input type="textarea" name="Brand_Detail" >
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