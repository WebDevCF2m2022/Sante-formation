<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/admin.css">
    <title>Document</title>
</head>
<body>
<div class="blocAdmin">
    <form class="form" action="login.php" method="POST">
      <div class="logo">
        <img src="img/logoSanteFormation.png" alt="Logo">
      </div>
      <div class="form-group">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Se connecter">
      </div>
    </form>
  </div>
</body>
</html>