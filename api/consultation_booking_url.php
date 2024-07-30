<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->load();

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$servername = $_ENV['DB_URL'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$dbname = $_ENV['DB_NAME'];

$goal = array_key_exists('goal', $_GET) ? $_GET['goal'] : 'skinConsultation';
$is_online = array_key_exists('isOnline', $_GET) ? $_GET['isOnline'] : 0;

$filters = array();
if (array_key_exists('target_id', $_GET)) {
    $filters['target_id'] = $_GET['target_id'];
}

// join filters into a string
$query = "SELECT * FROM $dbname.consultation_booking_url WHERE goal = '$goal' AND is_online = $is_online";
foreach ($filters as $key => $value) {
    $query .= " AND " . $key . " = " . "'" . $value . "'";
}
$query .= " LIMIT 1";

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
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if ($row['url_ostermalm'] != null) {
            $output["ostermalm"] = $row["url_ostermalm"];
        }
        if ($row['url_sodermalm'] != null) {
            $output["sodermalm"] = $row["url_sodermalm"];
        }
        if ($row['url_sundbyberg'] != null) {
            $output["sundbyberg"] = $row["url_sundbyberg"];
        }
    }

    if (empty($output)) {
        // no match found, use the default salon urls
        $output['ostermalm'] = 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559';
        $output['sodermalm'] = 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sodermalm-19301';
        $output['sundbyberg'] = 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300';
    }
    echo json_encode($output, JSON_UNESCAPED_SLASHES);
}
