<html>
<body>
<?php
include("zelnovskidbconnection.php");
$sql = "SELECT * FROM suppliers";

$query = mysqli_query($connection,$sql)
or die("database not available");

print "<table border=\"1\" style=\"width:100%\">\n";
print "<tr>\n<th>Supplier ID Number</th>\n<th>Supplier Name</th>\n</tr>\n";
while($result = mysqli_fetch_array($query))
{
	$idnm = $result["ID"];
	$name = $result["Name"];
?>
<br>

    <tr>
      <td> <?php echo $idnm; ?> </td>
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
