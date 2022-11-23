<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link rel="stylesheet" href="./assets/article.css">
</head>

<body>

    <ul class="nav">
        <li>Bonjour
            <?php echo($_SESSION['user']) ?>
        </li>
        <li>C'est le super store vroom</li>
        <a href="/panier">
            <li id="cart-js" class="cart"><img src="/resources/assets/panier.png" alt="PANIER">
            <p id="cartincrement" class="numberCart"><?php echo ($_SESSION['cart']) ?></p></li>
        </a>
        <li><a href="/logout"><button>Se déconnecter</button></a></li>
    </ul>

    <div class="containerProducts">
        <div class="product1">
            <div class="img"><img src="<?php echo $article['image'] ?>" alt="Voiture de collection 1/43"></div></a>
            <div class="description">
                <?php echo $article['name']; ?> <br>
                <?php echo $article['content']; ?> <br>
                <?php echo $article['price']?>€ <div class="addCart"><a
                        href="/panier?id=<?php echo $article['ID'] ?>&price=<?php echo $article['price'] ?>&article_name=<?php echo $article['name']?>"><button
                            class="add">Ajouter au panier</button></a></div>
            </div>
        </div>
    </div>


    <script type="module" src="http://localhost:5173/@vite/client"></script>
    <script type="module" src="http://localhost:5173/resources/scripts/main.js"></script>

</body>

</html>