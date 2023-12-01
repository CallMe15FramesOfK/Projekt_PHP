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
                <li><a href="./log_in.php">Logowanie</a></li>
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
            <label for="name">Imię:</label>
            <input type="text" id="name" name="name" required>
            <br>
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