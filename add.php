<?php

header('Content-Type: application/json');

$db = new mysqli('db5010747022.hosting-data.io', 'dbu801212', 'Franciskit20', 'dbs9091888');

if ($db->connect_error) {
  echo json_encode(['status' => 'error', 'message' => $db->connect_error]);
  exit();
}

$title = $_POST['title'];
$description = $_POST['description'];

$stmt = $db->prepare('INSERT INTO titles_descriptions (title, description) VALUES (?, ?)');
$stmt->bind_param('ss', $title, $description);

if ($stmt->execute()) {
  echo json_encode(['status' => 'success']);
} else {
  echo json_encode(['status' => 'error', 'message' => $stmt->error]);
}

$stmt->close();
$db->close();

?>
