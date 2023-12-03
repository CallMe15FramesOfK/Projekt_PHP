<?php
include "./PHP_connections/connection.php";

$game_name = $_POST['game_name'];

$sql = "DELETE FROM games WHERE game_name = :game_name";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':game_name', $game_name);

if ($stmt->execute()) {
    header('Location: admin_panel.php?error=Gra została usunięta!');
} else {
    header('Location: admin_panel.php?error=Wystąpił błąd podczas usuwania gry!');
}

?>