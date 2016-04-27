<html>
<head>
	<title>Add data</title>
</head>

<body>
<?php
  include("zelnovskidbconnection.php");

if (isset($_POST['name'])) {
  $name = $_POST['name'];
  $addr = $_POST['address'];
  $ccnm = $_POST['ccnumber'];
  $crlm = $_POST['creditlimit'];


  $sql = "INSERT INTO customers (Name,Address,CreditCard,CreditLimit) VALUES ('$name','$addr','$ccnm','$crlm');";
print $sql."<br><br>";
  $query = mysqli_query($connection,$sql)
    or die("Cannot query the database.<br>");

  print "Record added<br><br>\n";
  } else {

?>

<html>
<body>

<form name="students" method="post" action="newcustomer.php" enctype="multipart/form-data">
<table>
<tr>
	<td><b>Name:</b></td>
	<td><input type="text" name="name" size="25"></td>
</tr>

<tr>
	<td><b>Address:</b></td>
	<td><input type="text" name="address" size="25"></td>
</tr>

<tr>
	<td><b>CreditCard number:</b></td>
	<td><input type="text" name="ccnumber" size="2"></td>
</tr>

<tr>
	<td><b>Credit Limit:</b></td>
	<td><input type="text" name="creditlimit" size="30"></td>
</tr>

<tr>
        <td><input type="submit" name="upload" value="Add Record"></td>
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
