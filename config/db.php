<?php
$host = 'localhost';
$db   = 'datacode.db';
$user = 'root';       // ajusta a tu usuario de MySQL
$pass = 'rootpword';           // ajusta a tu contraseña de MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Error de conexión: ' . $e->getMessage());
}