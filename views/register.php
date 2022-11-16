<?php 
if ($_SESSION["user"] != null) {
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
    <link rel="stylesheet" href="../assets/register.css">
</head>
<body>

 <h1>Le super store vroom</h1> 

 <div class="formContainer">
 <h2>Inscrivez Vous !</h2>    
<form action="/registerUser" method="POST" class="form">
  <input type="text" name="username" id="username" placeholder="Nom d'utilisateur">
  <input type="password" name="password" id="password" placeholder="Mot de passe">
  <input type="submit" value="S'inscrire">  
</form>
</div>
</body>
</html>