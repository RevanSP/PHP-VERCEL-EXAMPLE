<?php
header('Content-Type: application/json');
include __DIR__ . '/lib/connect.php';

$statusData = getDbConnectionStatus();

$response = [
    "X-Powered-By" => "PHP/" . phpversion(),
    "database" => $statusData
];

echo json_encode($response);
?>