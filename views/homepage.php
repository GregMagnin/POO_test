<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le super store vroom</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    echo($_SESSION['user']);
    ?>

    C'est le super store vroom

    <a href="/logout"><button>Se déconnecter</button></a>
    
</body>
</html>