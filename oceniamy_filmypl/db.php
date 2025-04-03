<?php
$host = 'localhost';
$db = 'oceniamy_filmy';
$user = 'root'; // Ustaw odpowiednią nazwę użytkownika
$pass = '';     // Hasło, jeśli zostało ustawione

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Błąd połączenia z bazą danych: " . $e->getMessage());
}
?>
