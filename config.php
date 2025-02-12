<?php
// Add the Strict-Transport-Security header
header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
$lang = 'sv';

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->load();
