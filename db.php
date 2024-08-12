<?php
$host = 'localhost'; // Ganti dengan host database kamu jika berbeda
$dbname = 'coffeeshop';
$user = 'root'; // Ganti dengan username database kamu
$pass = ''; // Ganti dengan password database kamu

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
