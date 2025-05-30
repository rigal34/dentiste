<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>
    <main>
        <form action="/contact/submit" method="POST">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <div>
                <button type="submit">Send Message</button>
            </div>
        </form>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Dentiste. All rights reserved.</p>
    </footer>
</body>
</html>