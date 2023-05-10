<?php

$host = "db5011636930.hosting-data.io"; /* Host name */
$user = "dbu1228435"; /* User */
$password = "Franciskit20"; /* Password */
$dbname = "dbs9808822"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

