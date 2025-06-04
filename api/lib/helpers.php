<?php

function getStaticPath($path)
{
    $path = ltrim($path, '/');

    $isVercel = isset($_SERVER['VERCEL']) || isset($_ENV['VERCEL']);

    $finalPath = $isVercel ? '/' . $path : '../public/' . $path;

    if (!$isVercel) {
        error_log("Static Path Debug - Original: $path, Final: $finalPath, Is Vercel: " . ($isVercel ? 'Yes' : 'No'));
    }

    return $finalPath;
}