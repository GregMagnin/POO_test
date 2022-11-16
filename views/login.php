<?php 
if ($_SESSION["user"] ?? null)  {
    header("Location:/homepage");
    die();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/login.css">
</head>
<body>
    
<form action="/logUser" method="POST">
  <input type="text" name="username" id="username">
  <input type="password" name="password" id="password">
  <input type="submit" value="Se connecter">  
</form>

</body>
</html>