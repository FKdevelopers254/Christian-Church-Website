<?php

header('Content-Type: application/json');

$db = new mysqli('db5011636930.hosting-data.io', 'dbu1228435', 'Franciskit20', 'dbs9808822');

if ($db->connect_error) {
  echo json_encode(['status' => 'error', 'message' => $db->connect_error]);
  exit();
}

$query = 'SELECT * FROM sermons';
$result = $db->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}

echo json_encode(['status' => 'success', 'data' => $data]);

$result->free();
$db->close();

?>  
