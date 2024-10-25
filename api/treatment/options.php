<?php
/// Returns all funnels and corresponding data for a given flow
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Access-Control-Allow-Headers: Accept-Language, Content-Type, Cache-Control');
header("Content-Type: application/json; charset=UTF-8");

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->load();

$language = array_key_exists('HTTP_ACCEPT_LANGUAGE', $_SERVER) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : 'en';
$language = substr($language, 0, 2);

$servername = $_ENV['DB_URL'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$dbname = $_ENV['DB_NAME'];

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("DB connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, 'utf8');
mysqli_select_db($conn, $dbname);


$query = "
    SELECT 
    id, name_$language AS name, subtitle_$language AS subtitle, subtitle2_$language AS subtitle2, image, price, category_$language as category, size
    FROM t_option    
    WHERE 1
    LIMIT 99999";

$result = mysqli_query($conn, $query);
if ($result == false) {
    http_response_code(500);
    die(mysqli_error($conn));
}

http_response_code(200);
$options = array();
foreach ($result as $row) {
    $options[] = $row;
}

echo json_encode($options, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
