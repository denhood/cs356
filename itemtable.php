<html>
<body>
<?php
include("zelnovskidbconnection.php");
$sql = "SELECT items.ID, items.ItemName, items.Quantity, items.WholesalePrice, items.RetailPrice, suppliers.Name FROM `items` JOIN `suppliers` ON items.Supplier = suppliers.ID ORDER BY items.ID ASC";

$query = mysqli_query($connection,$sql)
or die("database not available");

print "<table border=\"1\" style=\"width:100%\">\n";
print "<tr>\n<th>ID Number</th>\n<th>Item Name</th>\n<th>Quantity</th>\n<th>Wholesale Price</th>\n<th>Retail Price</th>\n<th>Supplier</th>\n</tr>\n";
while($result = mysqli_fetch_array($query))
{
	$idnm = $result["ID"];
	$item = $result["ItemName"];
	$quty = $result["Quantity"];
	$whsp = $result["WholesalePrice"];
	$repr = $result["RetailPrice"];
	$name = $result["Name"];
?>
<br>

    <tr>
      <td> <?php echo $idnm; ?> </td>
      <td> <?php echo $item; ?> </td>
      <td> <?php echo $quty; ?> </td>
      <td align="right"> <?php echo '$'.$whsp; ?> </td>
      <td align="right"> <?php echo '$'.$repr; ?> </td>
      <td> <?php echo $name; ?> </td>
    </tr>

<?php
}  //end while
?>
</table>
<br>
<a href="index.html">Back to home</a>
</body>
</html>
