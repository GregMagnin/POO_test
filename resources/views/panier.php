<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/panier.css">
</head>
<body>

<ul class="nav">
        <li>Bonjour <?php echo($_SESSION['user']) ?> </li>
        <li>C'est le super store vroom</li>
        <a href="/panier"> <li class="cart" id="cart-js"><img src="/resources/assets/panier.png" alt="PANIER">
        <p id="cartincrement" class="numberCart"><?php echo ($_SESSION['cart']) ?></p></li></a>
        <li><a href="/logout"><button>Se déconnecter</button></a></li>
    </ul>
    
    <?php foreach ($cart as $items) { ?>
    <div class="containerProducts">
        <div class="product1">
        <div class="img"><img src="<?php echo $items['image'] ?>" alt="Voiture de collection 1/43"></div>
            </a>
            <div class="description">
                <?= $items['name']; ?> <br>
                <?= $items['content']; ?> <br>
                <?= $items['price']?>€ 
    </div>
    </div>
    </div>
    </div>
    <?php } ?>
    
<!--     
    <ul class="pagination">
    <div id="pagination">
           
        </div>
    </ul> -->

    <script type="module" src="http://localhost:5173/@vite/client"></script>
    <script type="module" src="http://localhost:5173/resources/scripts/main.js"></script>
</body>
</html>