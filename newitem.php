<html>
<head>
	<title>Add data</title>
</head>

<body>
<?php
  include("zelnovskidbconnection.php");

  if (isset($_POST['name'])) {
  $quty = $_POST['quantity'];
  $name = $_POST['name'];
  $idnm = $_POST['ID'];
  $whsp = $_POST['wholesale'];
  $resp = $_POST['retail'];
  $supp = $_POST['supplier'];


  $sql = "INSERT INTO items (ItemName,ID,Quantity, WholesalePrice, RetailPrice, Supplier) VALUES ('$name','$idnm','$quty','$whsp','$resp','$supp');";
print $sql."<br><br>";
  $query = mysqli_query($connection,$sql)
    or die("Cannot query the database.<br>");

  print "Record added<br><br>\n";
  } else {

?>

<html>
<body>

<form name="item" method="post" action="newitem.php" enctype="multipart/form-data">
<table>
<tr>
	<td><b>ID:</b></td>
	<td><input type="text" name="ID" size="25"></td>
</tr>

<tr>
	<td><b>Name:</b></td>
	<td><input type="text" name="name" size="25"></td>
</tr>

<tr>
	<td><b>Quantity:</b></td>
	<td><input type="text" name="quantity" size="2"></td>
</tr>
<tr>
	<td><b>Wholesale Price:</b></td>
	<td><input type="text" name="wholesale" size="2"></td>
</tr>
<tr>
	<td><b>Retail Price:</b></td>
	<td><input type="text" name="retail" size="2"></td>
</tr>
<tr>
	<td><b>Supplier:</b></td>
	<td><select name='supplier'>
	<!-- code was borrowed from http://stackoverflow.com/questions/8022353/how-to-populate-html-dropdown-list-with-values-from-database -->
	<?php
	  $conn = new mysqli('localhost', 'root', '', 'zelnovski') 
		or die ('Cannot connect to db');

	  $result = $conn->query("select id, name from suppliers");
	  while ($row = $result->fetch_assoc()) 
	  {
		  unset($id, $name);
                  $id = $row['id'];
                  $name = $row['name']; 
		  echo '<option value="'.$id.'">'.$name.'</option>';
	  }
	?>


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
