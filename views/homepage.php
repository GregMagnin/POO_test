<?php 
if ($_SESSION["user"] === null) {
    header("Location:/login");
    die();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le super store vroom</title>
    <link rel="stylesheet" href="../assets/home.css">
</head>
<body>
    
    <ul class="nav">
        <li>Bonjour <?php echo($_SESSION['user']) ?> </li>
        <li>C'est le super store vroom</li>
        <li class="cart"><img src="../assets/panier.png" alt="PANIER"></li>
        <li><a href="/logout"><button>Se déconnecter</button></a></li>
    </ul>

    <div class="containerProducts">
        <div class="product1"></div>
        <div class="product2"></div>
        <div class="product3"></div>
        <div class="product4"></div>
        <div class="product5"></div>
        <div class="product6"></div>
        <div class="product7"></div>
        <div class="product8"></div>
    </div>

    

    
    
</body>
</html>