<?php


// (C) SEARCH
$stmt = $DB->prepare("SELECT * FROM `sermons` WHERE `host` LIKE ? OR `sermon` LIKE ?");
$stmt->execute(["%".$_POST['search']."%", "%".$_POST['search']."%"]);
$results = $stmt->fetchAll();
if (isset($_POST['ajax'])) { echo json_encode($results); }
