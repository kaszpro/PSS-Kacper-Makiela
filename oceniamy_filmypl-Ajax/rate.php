<?php
require 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $movie_id = $_POST['movie_id'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];

    $stmt = $pdo->prepare("INSERT INTO ratings (user_id, movie_id, rating, review) 
                           VALUES (?, ?, ?, ?) 
                           ON DUPLICATE KEY UPDATE rating = VALUES(rating), review = VALUES(review)");
    $stmt->execute([$_SESSION['user_id'], $movie_id, $rating, $review]);

    header('Location: index.php');
    exit;
}
?>
