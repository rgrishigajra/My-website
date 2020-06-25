<?php 
require 'controllers/connection.php';

$id = $_POST["id"];

$sql = "DELETE FROM staff WHERE id='$id'";
$rs = pg_query($con, $sql) or die("Cannot execute query: $query\n");
$result = $conn->query($sql);
echo 'Deleted';

?>