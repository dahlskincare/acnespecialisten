<?php
/// Returns all funnels and corresponding data for a given flow
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header('Access-Control-Allow-Methods: POST, OPTIONS');

// validate request with basic authentication
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

/*
// get the request method
$method = $_SERVER['REQUEST_METHOD'];
if ($method != 'POST') {
    http_response_code(405);
    die('Method [' . $method . '] not allowed');
}
*/

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
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

// Get the posted data.
$postdata = file_get_contents("php://input");
// split string on ';'
$commands = explode(';', $postdata);
echo $postdata;

foreach ($commands as $command) {
    try {
        $result = mysqli_query($conn, $command);
        if ($result == false) {
            echo mysqli_error($conn);
            echo PHP_EOL;
        }
    } catch (Error $e) {
        echo $e->getMessage();
        echo PHP_EOL;
    } catch (Exception $e) {
        echo $e->getMessage();
        echo PHP_EOL;
    }
}
// add a linebreak
echo PHP_EOL;

echo 'Build completed';
http_response_code(200);
