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
if (array_key_exists('categoryId', $_GET)) {
    $categoryId = $_GET['categoryId'];
    $where[] = "c_s.category_id = '$categoryId'";
}
if (array_key_exists('problemAreaId', $_GET)) {
    $problemAreaId = $_GET['problemAreaId'];
    $where[] = "pa_s.problem_area_id = '$problemAreaId'";
}
if (empty($where)) {
    $where = "1";
} else {
    $where = implode(' AND ', $where);
}


$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("DB connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, 'utf8');
mysqli_select_db($conn, $dbname);
$query = "
SELECT DISTINCT bu.*, s.name_en, s.description_en
FROM treatment_booking_url AS bu
INNER JOIN treatment_service s ON bu.service_id = s.id
LEFT JOIN treatment_problem_area_service_ix pa_s ON s.id = pa_s.service_id
LEFT JOIN treatment_category_service_ix c_s ON s.id = c_s.service_id
WHERE $where
ORDER BY bu.rank ASC
LIMIT 10000;
";
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
