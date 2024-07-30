<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->load();

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$language = array_key_exists('HTTP_ACCEPT_LANGUAGE', $_SERVER) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : 'en';
$language = substr($language, 0, 2);

$servername = $_ENV['DB_URL'];;
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$dbname = $_ENV['DB_NAME'];

$query = "SELECT id, image_url, duration, price, name_$language AS name, description_$language AS description FROM $dbname.consultation_service";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("DB connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, 'utf8');

$result = mysqli_query($conn, $query);

if ($result == false) {
    http_response_code(500);
} else {
    http_response_code(200);
    $output = array();
    foreach ($result as $row) {
        $output[] = $row;
    }

    echo json_encode($output, JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE);
}
