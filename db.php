<?php
// db.php - update credentials
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = ''; // set your password
$DB_NAME = 'veg_shop';


$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($conn->connect_error) {
die('Connection failed: ' . $conn->connect_error);
}
?>