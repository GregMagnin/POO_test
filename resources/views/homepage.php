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
    <link rel="stylesheet" href="./assets/home.css">
</head>

<body>

    <ul class="nav">
        <li>Bonjour
            <?php echo($_SESSION['user']) ?>
        </li>
        <li>C'est le super store vroom</li>
        <a href="/panier">
            <li id="cart-js" class="cart"><img src="/resources/assets/panier.png" alt="PANIER">
                <p id="cartincrement" class="numberCart"><?php echo ($_SESSION['cart']) ?></p>
            </li>
        </a>
        <li><a href="/logout"><button>Se déconnecter</button></a></li>
    </ul>



    <?php foreach ($items as $article) { ?>
    <div class="containerProducts">
        <div class="product1">
            <a href="/article?id=<?php echo $article['ID'] ?>">
                <div class="img"><img src="<?php echo $article['image'] ?>" alt="Voiture de collection 1/43"></div>
            </a>
            <div class="description">
                <?= $article['name']; ?> <br>
                <?= $article['content']; ?> <br>
                <?= $article['price']?>€ 
                <a href="/panier?id=<?php echo $article['ID'] ?>&price=<?php echo $article['price'] ?>&article_name=<?php echo $article['name']?>"><div class="addcart add">+</div></a>
            </div>
        </div>
    </div>
    <?php } ?>


    <ul class="pagination">

        <div id="pagination">
            <?php for($i=1;$i<=$pages;$i++){echo"<a href='?page=$i'>$i</a>&nbsp;";}?>
        </div>


    </ul>




    <script type="module" src="http://localhost:5173/@vite/client"></script>
    <script type="module" src="http://localhost:5173/resources/scripts/main.js"></script>

</body>

</html>