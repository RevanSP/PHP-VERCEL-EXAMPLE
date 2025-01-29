<?php
function loadEnv($filePath)
{
    if (!file_exists($filePath)) {
        return;
    }

    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        list($name, $value) = explode('=', $line, 2);
        putenv(trim("$name=$value"));
    }
}

loadEnv(__DIR__ . '/../../.env'); 

function getDbConnectionStatus()
{
    $host = getenv('DB_HOST');
    $username = getenv('DB_USERNAME');
    $password = getenv('DB_PASSWORD');
    $database = getenv('DB_DATABASE');
    $port = getenv('DB_PORT');

    $conn = new mysqli($host, $username, $password, $database, $port);

    if ($conn->connect_error) {
        return [
            'status' => "Connection failed: " . $conn->connect_error,
            'errorDetails' => $conn->connect_error
        ];
    } else {
        return [
            'status' => "Connected successfully!",
            'version' => $conn->server_info,
            'host' => $host,
            'database' => $database
        ];
    }
}
