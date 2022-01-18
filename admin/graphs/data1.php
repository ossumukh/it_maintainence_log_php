<?php
header('Content-Type: application/json');

require_once('db.php');

$sqlQuery = "SELECT name,count(complain) FROM view_cmp group BY email";

$result = mysqli_query($conn,$sqlQuery);

$data1 = array();
foreach ($result as $row) {
	$data1[] = $row;
}

mysqli_close($conn);

echo json_encode($data1);
?>