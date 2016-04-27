<html>
<body>
<?php
include("zelnovskidbconnection.php");
$sql = "SELECT * FROM Customers";

$query = mysqli_query($connection,$sql)
or die("database not available");

print "<table align=\"left\" cellspacing=\"2\" cellpadding=\"2\" border=\"5\">\n";
while($result = mysqli_fetch_array($query))
{
	$ccnm = $result["CreditCard"];
	$name = $result["Name"];
	$addr = $result["Address"];
	$ctlt = $result["CreditLimit"];
?>
<br>

    <tr>
      <td> <?php echo $ccnm; ?> </td>
      <td> <?php echo $name; ?> </td>
      <td> <?php echo $addr; ?> </td>
      <td> <?php echo $ctlt; ?> </td>
    </tr>

<?php
}  //end while
?>
</table>
</body>
</html>
