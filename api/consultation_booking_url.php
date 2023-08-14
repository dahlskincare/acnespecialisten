<?php

// add http headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$servername = "db";
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$dbname = $_ENV['DB_NAME'];


$is_online = array_key_exists('isOnline', $_GET) ? $_GET['isOnline'] : 0;

$filters = array();
if (array_key_exists('problemId', $_GET)) {
    $filters['problemId'] = $_GET['problemId'];
}
if (array_key_exists('serviceId', $_GET)) {
    $filters['serviceId'] = $_GET['serviceId'];
}
if (array_key_exists('brandId', $_GET)) {
    $filters['brandId'] = $_GET['brandId'];
}

// join filters into a string
$query = "SELECT * FROM $dbname.consultation_booking_url WHERE isOnline = $is_online";
foreach ($filters as $key => $value) {
    $query .= " AND " . $key . " = " . "'" . $value . "'";
}
$query .= " LIMIT 1";

$problem_id =  array_key_exists('problemId', $_GET) ? $_GET['problemId'] : null;
$service_id = array_key_exists('serviceId', $_GET) ? $_GET['serviceId'] : null;
$brand_id = array_key_exists('brandId', $_GET) ? $_GET['brandId'] : null;

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
    if ($result->num_rows == 0) {
        echo '{}';
    } else {
        $row = $result->fetch_assoc();

        $output = array();

        if ($row['url_ostermalm'] != null) {
            $output["ostermalm"] = $row["url_ostermalm"];
        }
        if ($row['url_sodermalm'] != null) {
            $output["sodermalm"] = $row["url_sodermalm"];
        }
        if ($row['url_sundbyberg'] != null) {
            $output["sundbyberg"] = $row["url_sundbyberg"];
        }

        echo json_encode($output, JSON_UNESCAPED_SLASHES);
    }
}
