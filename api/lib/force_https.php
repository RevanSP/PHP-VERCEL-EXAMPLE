<?php
$https = isset($_SERVER['HTTPS']) ? $_SERVER['HTTPS'] : 'off';

if ($https !== 'on' && $_SERVER['SERVER_NAME'] !== 'localhost') {
    $url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header("Location: $url", true, 301);
    exit;
}