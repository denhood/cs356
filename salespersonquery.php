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
	$sql = "SELECT * FROM salespeople where Name = '$name'";
	$query = mysqli_query($connection,$sql);

	$num_rows = mysqli_num_rows($query);
	if($num_rows == 0)
	{
		print "there is no record";
	}
	print "<table align=\"left\" cellspacing=\"2\" cellpadding=\"2\" border=\"0\">\n";

  while($result = mysqli_fetch_array($query)) {
        $idnm = $result["ID"];
        $name = $result["Name"];
        $cmrt = $result["CommissionRate"];
?>

<table>
  <tr>
    <td> <?php echo 'Employee:  '. $idnm. '  '. $name. ' commission rate: '. $cmrt.'%'; ?> </td>
  </tr>
</table>

<?php
  }
  } else {

?>

<html>
<body>

<form name="Employee" method="post" action="salespersonquery.php" enctype="multipart/form-data">
<table>

<tr>
	<td><b>Enter Name:  </b></td>
	<td><input type="text" name="Name" size="10"></td>
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
