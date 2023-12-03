<?php
include "./PHP_connections/connection.php";

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if (empty($username) || empty($password)) {
            echo "<p>Proszę wypełnić wszystkie pola formularza.</p>";
        } else {
            $sql = "SELECT username, password FROM users WHERE username = :username";
            $stmt = $conn->prepare($sql);
            
            $stmt->bindParam(':username', $username);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user === false) {
                header('Location: log_in.php?error=Błędna nazwa użytkownika!');
            } else {
                $hashed_password = $user['password'];

                if (password_verify($password, $hashed_password)) {
                    header('Location: index.php');
                    exit;
                } else {
                    header('Location: log_in.php?error=Błędne hasło!');
                }
            }
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>