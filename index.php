<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP is Awesome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>First Programme on PHP</h1>
    <main>
    <?php 
        for($i = 0; $i <= 4; $i++){
            echo '
        <div class="card">
        <img src="images/card.png" alt="Card Image">
        <div class="card-content">
            <h2>Card Title</h2>
            <p>This is a description for the card.</p>
        </div>
        </div>
            ';
        }
    ?>
    </main>
</body>
</html>
