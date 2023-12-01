<?php

include "./PHP_connections/connection.php";
try {
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        if (empty($email) || empty($message)) {
            echo "<p>Proszę wypełnić wszystkie pola formularza.</p>";
        } else {
            $sql = "INSERT INTO comments (name, email, message) VALUES (:name, :email, :message)";
            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);

            $stmt->execute();

            header('Location: contact.php?error=Komentarz wysłano!');
            
            exit;
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>