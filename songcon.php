<?php


// (C) SEARCH
$stmt = $DB->prepare("SELECT * FROM `songs` WHERE `title` LIKE ? OR `song` LIKE ?");
$stmt->execute(["%".$_POST['search']."%", "%".$_POST['search']."%"]);
$results = $stmt->fetchAll();
if (isset($_POST['ajax'])) { echo json_encode($results); }
