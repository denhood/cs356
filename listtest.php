<!DOCTYPE HTML>
<!-- test of populate drop down list -->

<?php

$conn = new mysqli('localhost', 'root', '', 'zelnovski') 
or die ('Cannot connect to db');

    $result = $conn->query("select id, name from suppliers");

    echo "<html>";
    echo "<body>";
    echo "<select name='id'>";

    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['id'];
                  $name = $row['name']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';

}

    echo "</select>";
    echo "</body>";
    echo "</html>";
?> 
