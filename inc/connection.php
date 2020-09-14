<?php
// connect to database

$servername = "localhost";
$username = "phil";
$password = "W3Q@l1^njxSg";


try {
  $db = new PDO("mysql:host=$servername;dbname=portfolio", $username, $password);
  // set the PDO error mode to exception
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connection successful <br />";
} catch(Exception $e) {
  echo "Connection failed: " . $e->getMessage();
}