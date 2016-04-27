<html>
<body>
<?php
include("zelnovskidbconnection.php");
$sql = "SELECT * FROM salespeople";

$query = mysqli_query($connection,$sql)
or die("database not available");

print "<table border=\"1\" style=\"width:100%\">\n";
print "<tr>\n<th>ID number</th>\n<th>Employee Name</th>\n<th>Commission Percentage</th>\n</tr>\n";
while($result = mysqli_fetch_array($query))
{
	$idnm = $result["ID"];
	$name = $result["Name"];
	$cmrt = $result["CommissionRate"];
?>
<br>

    <tr>
      <td> <?php echo $idnm; ?> </td>
      <td> <?php echo $name; ?> </td>
      <td align="right"> <?php echo $cmrt."%"; ?> </td>
    </tr>

<?php
}  //end while
?>
</table>
<br>
<a href="index.html">Back to home</a>
</body>
</html>
