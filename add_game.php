<?php
include "./PHP_connections/connection.php";

$game_name = $_POST['game_name'];
$game_price = $_POST['game_price'];

$sql = "INSERT INTO games (game_name, game_price) VALUES(:game_name, :game_price)";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':game_name', $game_name);
$stmt->bindParam(':game_price', $game_price);

if ($stmt->execute()) {
    header('Location: admin_panel.php?error=Gra została dodana!');
} else {
    header('Location: admin_panel.php?error=Wystąpił błąd podczas dodawania gry!');
}

?>