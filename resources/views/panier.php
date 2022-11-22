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
        <p id="cartincrement" class="numberCart"></p></li></a>
        <li><a href="/logout"><button>Se déconnecter</button></a></li>
    </ul>
    
    <?php foreach ($showcart as $items) { ?>
    <div class="containerProducts">
        <div class="product1">
            <div class="description">
                <?php echo $items['article_name']; ?> <br>
                <?php echo $items['price']?>€
    </div>
    </div>
    </div>
    </div>
    <?php } ?>
    
    
    <ul class="pagination">
    <div id="pagination">
            <?php for($i=1;$i<=$pages;$i++){echo"<a href='?page=$i&id=$items[id]&price=$items[price]&article_name=$items[article_name]'>$i</a>&nbsp;";}?>
        </div>
    </ul>

    <script type="module" src="http://localhost:5173/@vite/client"></script>
    <script type="module" src="http://localhost:5173/resources/scripts/main.js"></script>
</body>
</html>