<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lid worden - Gamehub</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="boody">
    
    <?php include 'navbar.php'; ?>
    
    <h2 class="liid">Lid worden</h2>
    <br>
    <div class="form-container">
        <form action="lidworden.php" method="POST">
            <label for="naam">Naam:</label>
            <br>
            <input type="text" id="naam" name="naam" required>
            <br><br>
            
            <label for="email">E-mail:</label>
            <br>
            <input type="email" id="email" name="email" required>
            <br><br>
            
            <label for="game">Kies een game:</label>
            <br>
            <select id="game" name="game" required>
                <option value="Minecraft">Minecraft</option>
                <option value="Fortnite">Fortnite</option>
                <option value="Pokemon">Pokemon</option>
                <option value="Rocket League">Rocket League</option>
            </select>
            <br><br>
            
            <button class="lidd" type="submit">Lid worden</button>
        </form>
    </div>
    
</body>
</html>