<?php

// add http headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$servername = "db";
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$dbname = $_ENV['DB_NAME'];

$query = "SELECT * FROM $dbname.service LIMIT 1000";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("DB connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn, $query);
if ($result == false) {
    http_response_code(500);
} else {

    http_response_code(200);
    $output = array();
    foreach ($result as $row) {
        $output[] = $row;
    }

    echo json_encode($output, JSON_UNESCAPED_SLASHES);
}
