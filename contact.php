<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="styles/style_contact.css">
</head>
<body>
    <header>
        <h1>Welcome to the Gaming Shop</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="games.php">Games</a></li>
                <li><a href="console.php">Consoles</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Contact Us</h2>
        <p>Please feel free to contact us at the following details:</p>
        <ul>
            <li>Email: gamingshop@example.com</li>
            <li>Phone: +1 234 567 890</li>
            <li>Address: 123 Gaming Street, City, Country</li>
        </ul>

        <h2>Or Send Us a Message</h2>
        <form action="send_mail.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <br>
            <input type="submit" value="Send">
        </form>
    </main>
    <footer>
        <p>&copy; 2022 Gaming Shop. All rights reserved.</p>
    </footer>
</body>
</html>