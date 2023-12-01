<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link rel="stylesheet" href="./styles/style_contact.css">
</head>
<body>
<header>
        <h1>Sklep dla graczy</h1>
        <nav>
            <ul>
                <li><a href="./index.php" >Strona Główna</a></li>
                <li><a href="./games.php">Gry</a></li>
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
        <form action="./comment.php" method="post">
        <?php if (isset($_GET['error'])) {?>
                <style>
                    body{
                        background-color: #9ADE7B;
                    }
                </style>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php }?>
            <label for="name">Nazwa:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="message">Wiadomość:</label>
            <textarea id="message" name="message" required></textarea>
            <br>
            <input type="submit" value="Wyślij" name="submit">
        </form>
    </main>
    <footer>
        <p>&copy; 2023 Sklep dla graczy. Wszelkie prawa zastrzeżone.</p>
</body>
</html>