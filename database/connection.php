<?php

$hostname = 'localhost';
$database = 'to_do_list';
$username = 'postgres';
$password = 'root';

try {
    $pdo = new PDO("pgsql:host=$hostname;port=5433;dbname=$database", $username, $password);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage(); 
}


