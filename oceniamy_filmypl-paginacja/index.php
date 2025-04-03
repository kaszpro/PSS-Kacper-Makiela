<?php
require 'db.php';
session_start();

$stmt = $pdo->query("SELECT movies.*, 
                     (SELECT AVG(ratings.rating) FROM ratings WHERE ratings.movie_id = movies.id) AS avg_rating 
                     FROM movies");
$movies = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Oceniamy Filmy</title>
</head>
<body>
    <h1>Oceniamy Filmy</h1>
    <?php if (isset($_SESSION['user_id'])): ?>
        <p>Witaj, <?= htmlspecialchars($_SESSION['user_name']) ?>!</p>
        <a href="logout.php">Wyloguj się</a>
    <?php else: ?>
        <a href="login.php">Zaloguj się</a> | <a href="register.php">Zarejestruj się</a>
    <?php endif; ?>

    <h2>Filmy</h2>
    <?php foreach ($movies as $movie): ?>
        <div>
            <h3><?= htmlspecialchars($movie['title']) ?></h3>
            <p><?= htmlspecialchars($movie['description']) ?></p>
            <p>Średnia ocena: <?= $movie['avg_rating'] ?: 'Brak ocen' ?></p>

            <?php if (isset($_SESSION['user_id'])): ?>
                <form method="POST" action="rate.php">
                    <input type="hidden" name="movie_id" value="<?= $movie['id'] ?>">
                    <label>Ocena (1-10):</label>
                    <input type="number" name="rating" min="1" max="10" required>
                    <label>Recenzja:</label>
                    <textarea name="review"></textarea>
                    <button type="submit">Oceń</button>
                </form>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</body>
</html>
