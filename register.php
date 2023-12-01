<?php

include "./PHP_connections/connection.php";
try {

   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $username = trim($_POST['username']);
       $email = trim($_POST['email']);
       $password = trim($_POST['password']);

       if (empty($username) || empty($email) || empty($password)) {
           echo "<p>Proszę wypełnić wszystkie pola formularza.</p>";
       } else {
           $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
           $stmt = $conn->prepare($sql);

           $hashed_password = password_hash($password, PASSWORD_DEFAULT);

           $stmt->bindParam(':username', $username);
           $stmt->bindParam(':email', $email);
           $stmt->bindParam(':password', $hashed_password);

           $stmt->execute();

           header('Location: signup.php?error=Konto zostało stworzone!');


           exit;
       }
   }
} catch (PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
}
?>