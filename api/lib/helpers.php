<?php

function getStaticPath($path)
{
    // If it's an external URL (starts with http:// or https://), return as is
    if (strpos($path, 'http://') === 0 || strpos($path, 'https://') === 0) {
        return $path;
    }

    $path = ltrim($path, '/');

    $isVercel = isset($_SERVER['VERCEL']) || isset($_ENV['VERCEL']);

    $finalPath = $isVercel ? '/' . $path : '../public/' . $path;

    if (!$isVercel) {
        error_log("Static Path Debug - Original: $path, Final: $finalPath, Is Vercel: " . ($isVercel ? 'Yes' : 'No'));
    }

    return $finalPath;
}