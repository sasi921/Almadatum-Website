<?php

// Database connection. Environment variables make local/hosted setup configurable
// without committing credentials; defaults preserve the existing local setup.
$host = getenv('DB_HOST') ?: 'localhost';
$database = getenv('DB_NAME') ?: 'alumni';
$username = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASSWORD') ?: '';

$connect = new PDO(
    "mysql:host={$host};dbname={$database};charset=utf8mb4",
    $username,
    $password,
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]
);
