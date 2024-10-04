<?php

require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$dbname = $_ENV['DB_NAME'];
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];

$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

try{
    $pdo = new PDO($dsn, $user, $password);
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}