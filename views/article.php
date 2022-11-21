<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link rel="stylesheet" href="../assets/article.css">
</head>
<body>

<ul class="nav">
        <li>Bonjour <?php echo($_SESSION['user']) ?> </li>
        <li>C'est le super store vroom</li>
        <a href="/panier"> <li class="cart"><img src="../assets/panier.png" alt="PANIER"></li></a>
        <li><a href="/logout"><button>Se déconnecter</button></a></li>
    </ul>

    <div class="containerProducts"> 
        <div class="product1">
        <div class="img"><img src="<?php echo $article['image'] ?>" alt="Voiture de collection 1/43"></div></a>
        <div class="description"><?php echo $article['name']; ?> <br><?php echo $article['content']; ?> <br> <?php echo $article['price']?>€ <div class="addCart"><a href="/panier"><button>Ajouter au panier</button></a></div> </div>
        
        </div>
    </div>
    
</body>
</html>