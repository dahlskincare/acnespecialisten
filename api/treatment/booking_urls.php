<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] . '/api');
$dotenv->load();

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$language = array_key_exists('HTTP_ACCEPT_LANGUAGE', $_SERVER) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : 'en';
$language = substr($language, 0, 2);

$servername = $_ENV['DB_URL'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$dbname = $_ENV['DB_NAME'];

$where = array();
if (array_key_exists('serviceId', $_GET)) {
    $serviceId = $_GET['serviceId'];
    $where[] = "service_id = '$serviceId'";
}
if (empty($where)) {
    $where = "1";
} else {
    $where = implode(' AND ', $where);
}

$query = "SELECT service_id, procedures, price, addon_id url_ostermalm, url_sodermalm, url_sundbyberg FROM $dbname.treatment_booking_url WHERE $where ORDER BY $dbname.treatment_booking_url.rank LIMIT 10000";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("DB connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, 'utf8');

$result = mysqli_query($conn, $query);
if ($result == false) {
    echo mysqli_error($conn);
    http_response_code(500);
} else {

    http_response_code(200);
    $output = array();
    foreach ($result as $row) {
        $output[] = $row;
    }

    echo json_encode($output, JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE);
}
