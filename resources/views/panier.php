<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/panier.css">
</head>
<body>

<ul class="nav">
        <li>Bonjour <?php echo($_SESSION['user']) ?> </li>
        <li>C'est le super store vroom</li>
        <a href="/panier"> <li class="cart"><img src="/resources/assets/panier.png" alt="PANIER"></li></a>
        <li><a href="/logout"><button>Se déconnecter</button></a></li>
    </ul>


    <script type="module" src="http://localhost:5173/@vite/client"></script>
    <script type="module" src="http://localhost:5173/resources/scripts/main.js"></script>
</body>
</html>