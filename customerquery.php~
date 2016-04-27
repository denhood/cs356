<html>
<body>
<?php
include("zelnovskidbconnection.php");
if(isset($_POST['Name']))
{
	$name = $_POST['Name'];
}
if(!empty($name))
{
	$sql = "SELECT * FROM customers where Name = '$name' OR CreditCard = '$name'";
	$query = mysqli_query($connection,$sql);

	$num_rows = mysqli_num_rows($query);
	if($num_rows == 0)
	{
		print "there is no record";
	}
	//print "<table align=\"center\" cellspacing=\"2\" cellpadding=\"2\" border=\"0\">\n";
	print "<table style=\"width:100%\">";

  while($result = mysqli_fetch_array($query)) {
        $ccnm = $result["CreditCard"];
        $name = $result["Name"];
	$addr = $result["Address"];
	$crlm = $result["CreditLimit"];
?>

<table>
  <tr>
    <td> <?php echo 'Customer:  '. $ccnm. '  '. $name. ' address: '. $addr; ?> </td>
  </tr>
</table>

<?php
  }
  } else {

?>


<form name="Customer name or credit number: " method="post" action="customerquery.php" enctype="multipart/form-data">
<table>

<tr>
	<td><b>Enter ID:  </b></td>
	<td><input type="text" name="Name" size="4"></td>
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
