<?php
/// Returns all funnels and corresponding data for a given flow
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// validate request using basic authentication
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    http_response_code(401);
    die('Unauthorized');
} else {
    $username = $_SERVER['PHP_AUTH_USER'];
    $password = $_SERVER['PHP_AUTH_PW'];

    if ($username != 'marcusdahl' || $password != 'Poliskontroll123!') {
        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');
        http_response_code(401);
        die('Unauthorized');
    }
}


require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] . '/api');
$dotenv->load();

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
http_response_code(200);
echo 'hi!';