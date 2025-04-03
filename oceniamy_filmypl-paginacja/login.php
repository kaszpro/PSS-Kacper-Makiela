<?php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        header('Location: index.php');
        exit;
    } else {
        echo "Nieprawidłowe dane logowania.";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Logowanie - Oceniamy Filmy</title>
</head>
<body>
    <form method="POST" action="login.php">
        <label>E-mail</label>
        <input type="email" name="email" required>
        <label>Hasło</label>
        <input type="password" name="password" required>
        <button type="submit">Zaloguj się</button>
    </form>
</body>
</html>
