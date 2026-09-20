<?php

// Secondary database connection used by features backed by the `testing` schema.
// Environment variables make deployments configurable without editing source code.
$host = getenv('DB_HOST') ?: 'localhost';
$database = getenv('DB_SECONDARY_NAME') ?: 'testing';
$user = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASSWORD') ?: '';

$connect = new PDO(
    "mysql:host={$host};dbname={$database};charset=utf8mb4",
    $user,
    $password,
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]
);
