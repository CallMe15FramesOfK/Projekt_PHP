<?php
session_start();
include "./PHP_connections/connection.php";

$game_name = $_POST['game_name'];
$sql = "SELECT ID FROM games WHERE game_name = :game_name";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':game_name', $game_name);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$game_ID = $result['ID'];
$user_ID = trim($_SESSION['user']['ID']);

$name = $_POST['name'];
$surname = $_POST['surname'];
$address = $_POST['address'];
$postal_code = $_POST['postal_code'];
$payment_method = $_POST['payment_method'];

$sql = "INSERT INTO orders (user_ID, game_ID, first_name, last_name, address, postal_code, purchase_method) VALUES (:user_ID, :game_ID, :name, :surname, :address, :postal_code, :payment_method)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':user_ID', $user_ID);
$stmt->bindParam(':game_ID', $game_ID);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':surname', $surname);
$stmt->bindParam(':address', $address);
$stmt->bindParam(':postal_code', $postal_code);
$stmt->bindParam(':payment_method', $payment_method);

if ($stmt->execute()) {
    header('Location: order.php?error=Zamówienie wysłano!');
} else {
    echo "Wystąpił błąd podczas dodawania danych do bazy danych. Proszę spróbować ponownie.";
}

$conn = null;
?>