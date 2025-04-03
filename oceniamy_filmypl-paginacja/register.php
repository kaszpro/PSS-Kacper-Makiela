<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    if ($stmt->execute([$name, $email, $password])) {
        header('Location: login.php?registered=true');
        exit;
    } else {
        echo "Błąd rejestracji.";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Rejestracja - Oceniamy Filmy</title>
</head>
<body>
    <form method="POST" action="register.php">
        <label>Imię</label>
        <input type="text" name="name" required>
        <label>E-mail</label>
        <input type="email" name="email" required>
        <label>Hasło</label>
        <input type="password" name="password" required>
        <button type="submit">Zarejestruj się</button>
    </form>
</body>
</html>
