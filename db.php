<?php
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = 'admin';
const DBNAME = 'Vishal';
$dbcon = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);

if ($dbcon->connect_error) {
  die("connect error: " . $dbcon->connect_error);
}

?>