<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="img/logoSanteFormation.png">
    <link rel="stylesheet" href="css/admin.css">
    <title>Administration</title>
</head>
<body>
<div class="blocAdmin">
    <form class="form" action="" method="POST">
      <div class="logo">
        <img src="img/logoSanteFormation.png" alt="Logo">
      </div>
        <?php include_once "../controller/public_controller.php"; ?>
        <?php if(isset($erreur)){echo $erreur; }?>
      <div class="form-group">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="pwd" required>
      </div>
      <div class="form-group">
          <button type="submit" name="submit">Se connecter</button>
      </div>

    </form><br>
        <a href="./"><button id="buttonAdmin">Retour sur notre site...</button></a>

  </div>
</body>
</html>