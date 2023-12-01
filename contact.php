<?php

// Replace with your actual database credentials
$db_host = 'localhost';
$db_name = 'gamingshop';
$db_user = 'root';
$db_pass = '';

try {
    // Create a new PDO connection
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the submitted data
        $name = $_SESSION['user'];
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        // Check if any of the input fields are empty
        if (empty($email) || empty($message)) {
            echo "<p>Proszę wypełnić wszystkie pola formularza.</p>";
        } else {
            // Prepare the SQL query
            $sql = "INSERT INTO comments (name, email, message) VALUES (:name, :email, :message)";
            $stmt = $conn->prepare($sql);

            // Bind the submitted data to the prepared statement
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);

            // Execute the prepared statement
            $stmt->execute();

            // Redirect the user to the comments page
            header('Location: comments.php');
            exit;
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./styles/style_contact.css">
</head>
<body>
<header>
        <h1>Witamy w sklepie dla graczy</h1>
        <nav>
            <ul>
                <li><a href="./index.php">Strona Główna</a></li>
                <li><a href="./games.php">Gry</a></li>
                <li><a href="./console.php">Konsole</a></li>
                <li><a href="./contact.php">Kontakt</a></li>
                <li><a href="./log_in.php">Zaloguj</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Skontaktuj się z nami!</h2>
        <p>Proszę skontaktować się z nami pod adresem:</p>
        <ul>
            <li>Email: gamingshop@example.com</li>
            <li>Telefon: +1 234 567 890</li>
            <li>Adres: 123 Gaming Street, City, Country</li>
        </ul>

        <h2>Lub wyślij do nas wiadomość:</h2>
        <form action="send_mail.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="message">Wiadomość:</label>
            <textarea id="message" name="message" required></textarea>
            <br>
            <input type="submit" value="Wyślij">
        </form>
    </main>
    <footer>
        <p>&copy; 2023 Sklep dla graczy. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>