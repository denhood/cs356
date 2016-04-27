<html>
<body>
<?php
include("zelnovskidbconnection.php");
if(isset($_POST['InvNum']))
{
	$invoice = $_POST['InvNum'];
}
if(!empty($invoice))
{
	$sql = "SELECT sales.Date, items.ItemName, customers.Name FROM `sales` JOIN `items` ON sales.Item = items.ID JOIN `customers` ON sales.CustomerID = customers.CreditCard where sales.InventoryNumber = '$invoice'";
	$query = mysqli_query($connection,$sql);

	$num_rows = mysqli_num_rows($query);
	if($num_rows == 0)
	{
		print "there is no record";
	}
	print "<table align=\"left\" cellspacing=\"2\" cellpadding=\"2\" border=\"0\">\n";

  while($result = mysqli_fetch_array($query)) {
        $date = $result["Date"];
        $item = $result["ItemName"];
        $name = $result["Name"];
?>

<table>
  <tr>
    <td> <?php echo 'Customer:  '. $name. ' bought '. $item. ' on: '. $date; ?> </td>
  </tr>
</table>

<?php
  }
  } else {

?>

<html>
<body>

<form name="Invoice" method="post" action="invoicequery.php" enctype="multipart/form-data">
<table>

<tr>
	<td><b>Enter Invoice Number:  </b></td>
	<td><input type="text" name="InvNum" size="4"></td>
</tr>
<br>
<tr>
        <td><input type="submit" name="upload" value="Submit"></td>
        <td><input type="reset" name="reset" value="Reset"></td>
</tr>

</table>
</form>

<?php
  }
?>
<br>
<a href="index.html">Back to home</a>
</body>
</html>
