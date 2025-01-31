<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Contato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <h2>Contato</h2>
        <form action="send_message.php" method="post">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <label for="message">Mensagem:</label>
            <textarea id="message" name="message" required></textarea><br>
            <input type="submit" value="Enviar">
        </form>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
