<?php
/// Returns all funnels and corresponding data for a given flow
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] . '/api');
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

if (!array_key_exists('flowUrl', $_GET)) {
    http_response_code(400);
    die('Missing required parameter: flowUrl');
}
$where = "flow.url = '" . mysqli_real_escape_string($conn, $_GET['flowUrl']) . "'";

// Get flow steps
$query = "
    SELECT flow.id, 
    step1.title_$language AS step1_title, step2.title_$language AS step2_title, step3.title_$language AS step3_title, step4.title_$language AS step4_title,
    step1.consultation_banner AS step1_consultation_banner, step2.consultation_banner AS step2_consultation_banner, step3.consultation_banner AS step3_consultation_banner, step4.consultation_banner AS step4_consultation_banner,
    step1.can_skip AS step1_can_skip, step2.can_skip AS step2_can_skip, step3.can_skip AS step3_can_skip, step4.can_skip AS step4_can_skip
    FROM t_flow flow
    LEFT JOIN t_step step1 ON step1.id = flow.step1_id
    LEFT JOIN t_step step2 ON step2.id = flow.step2_id
    LEFT JOIN t_step step3 ON step3.id = flow.step3_id
    LEFT JOIN t_step step4 ON step4.id = flow.step4_id
    WHERE $where
";
$result = mysqli_query($conn, $query);
if ($result == false) {
    http_response_code(500);
    die(mysqli_error($conn));
}
$rs = mysqli_fetch_assoc($result);
if (!$rs) {
    http_response_code(404);
    die('Flow not found');
}

$steps = array();
for ($i = 1; $i < 5; $i++) {
    if (isset($rs['step' . $i . '_title'])) {
        $steps[] = array(
            'title' => $rs['step' . $i . '_title'],
            'consultation_banner' => $rs['step' . $i . '_consultation_banner'],
            'can_skip' => $rs['step' . $i . '_can_skip']
        );
    }
}

$query = "
    SELECT 
    fun.name_$language AS name, fun.option1_id, fun.option2_id, fun.option3_id, fun.option4_id, fun.duration, fun.url_sodermalm, fun.url_sundbyberg, fun.url_ostermalm
    FROM t_funnel fun    
    WHERE fun.flow_id = '" . $rs['id'] . "'
    ORDER BY fun.id ASC LIMIT 99999";

$result = mysqli_query($conn, $query);
if ($result == false) {
    http_response_code(500);
    die(mysqli_error($conn));
}

http_response_code(200);
$funnels = array();
foreach ($result as $row) {
    $funnels[] = $row;
}

echo json_encode(array('steps' => $steps, 'funnels' => $funnels), JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE);
