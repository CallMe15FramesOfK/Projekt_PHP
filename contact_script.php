<?php

include "./PHP_connections/connection.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = trim($_POST['message']);
    $user_ID = trim($_SESSION['user']['ID']);
    if (empty($message)) {
        echo "<p>Proszę wypełnić wszystkie pola formularza.</p>";
    } else {
        $sql = "INSERT INTO comments (user_ID, message) VALUES (:user_ID, :message)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':user_ID', $_SESSION['user']['ID']);
        $stmt->bindParam(':message', $message);

        $stmt->execute();

        header('Location: contact.php?error=Komentarz wysłano!');
        
        exit;
    }
}

?>