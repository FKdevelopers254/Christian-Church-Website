<?php

error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
ob_start();
session_start();

define('PROJECT_NAME', 'FK DEVELOPERS');

define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'db5011636930.hosting-data.io');
define('DB_SERVER_USERNAME', 'dbu1228435');
define('DB_SERVER_PASSWORD', 'Franciskit20');
define('DB_DATABASE', 'dbs9808822');

$dboptions = array(
    PDO::ATTR_PERSISTENT => FALSE,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
  $DB = new PDO(DB_DRIVER . ':host=' . DB_SERVER . ';dbname=' . DB_DATABASE, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, $dboptions);
} catch (Exception $ex) {
  echo $ex->getMessage();
  die;
}


/* * ***** Google related activities end ** */
?>