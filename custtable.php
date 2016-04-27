<html>
<body>
<table>
<tr>
	<th>Credit Account</th>
	<th>Customer Name</th>
	<th>Address</th>
	<th>Credit Limit</th>
</tr>
<?php
include("zelnovskidbconnection.php");
$sql = "SELECT * FROM Customers";

$query = mysqli_query($connection,$sql)
or die("database not available");

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
      <td align="right"> <?php echo "$".$ctlt; ?> </td>
    </tr>

<?php
}  //end while
?>
</table>
<br>
<a href="index.html">Back to home</a>
</body>
</html>
