<html>
<head>
	<title>Add data</title>
</head>

<body>
<?php
  include("zelnovskidbconnection.php");

if (isset($_POST['name'])) {
  $name = $_POST['name'];
  $idnm = $_POST['ID'];


  $sql = "INSERT INTO suppliers (Name,ID) VALUES ('$name','$idnm');";
print $sql."<br><br>";
  $query = mysqli_query($connection,$sql)
    or die("Cannot query the database.<br>" . mysql_error());

  print "Record added<br><br>\n";
  } else {

?>

<html>
<body>

<form name="supplier" method="post" action="newsupplier.php" enctype="multipart/form-data">
<table>
<tr>
	<td><b>Name:</b></td>
	<td><input type="text" name="name" size="25"></td>
</tr>

<tr>
	<td><b>ID number:</b></td>
	<td><input type="text" name="ID" size="25"></td>
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
