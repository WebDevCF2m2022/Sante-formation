<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/adminPage.css">
<script src="js/adminJs.js" defer></script>
<title>Formations-Admin</title>
</head>
<body>
  <div class="color-bar">
    <div id="langueNavDesktop" class="language-selector">
      <div class="selected-language">
          <img class="flag-icon" src="icons8-french-flag-48.png" alt="French Flag"><p>FR</p><i class="fas fa-caret-down"></i>
      </div>
      <ul class="language-options">
      <li data-lang="fr">
          <img class="flag-icon" src="icons8-french-flag-48.png" alt="French Flag"><p>FR</p></li>
      <li data-lang="en">
          <img class="flag-icon" src="icons8-great-britain-48.png" alt="American Flag"><p>EN</p></li>
      </ul>
  </div>
  </div>
  <div class="menu">
    <div class="logo">
        <a href="?p=home"><img src="logo.png" alt=""></a>
    </div>
    <div class="liens">
      <a href="?p=action" class="lien">ACTIONS</a>
      <hr>
      <a href="?p=formation" class="lien">FORMATIONS</a>
      <hr>
      <a href="?p=agenda" class="lien">AGENDA</a>
      <hr>
      <a href="./?disconnect" class="deco">DÉCONNEXION</a>
      <hr>
    </div>
  </div>
  <div id="contenu">
    <h1>FORMATIONS</h1>
    <a href="#" class="ajoutArticle">Nouvel article</a>
    <div class="popup">
      <div class="popup-content">
          <h2>Nouvel article | Formations</h2>
          <form action="#" method="post" enctype="multipart/form-data">
            <label for="articleImage">Image de l'article</label>
            <input type="file" id="articleImage" name="articleImage" onchange="previewImage(this)">
    
            <!-- Ajoutez une div pour afficher et centrer l'image -->
            <div id="imagePreviewContainer">
                <img id="imagePreview" width="200px" height="auto" src="#" alt="Aperçu de l'image">
            </div>
            
            <label for="title">Titre:</label>
            <input type="text" id="title" name="title" required>
        
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" required>
        
            <label for="text">Texte:</label>
            <textarea id="text" name="text" rows="4" required></textarea>
        
            <button type="submit">Ajouter</button>
            <button class="close-popup">Fermer</button>
        </form>
      </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>Image</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Texte</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id="imgTable"><img src="logo.png" height="auto" width="200px" alt="Image 1"></td>
        <td id="titreTable">Titre 1</td>
        <td>Description 1</td>
        <td>Texte 1</td>
        <td id="buttonTable">
          <a href="modifierFormation.html" class="btn-modifier">Modifier</a>
          <button class="btn-supprimer">Supprimer</button>
        </td>
      </tr>
      <tr>
        <td id="imgTable"><img src="logo.png" height="auto" width="200px" alt="Image 2"></td>
        <td>Titre 1</td>
        <td>Description 1</td>
        <td>Texte 1</td>
        <td id="buttonTable">
          <a href="modifierFormation.html" class="btn-modifier">Modifier</a>
          <button class="btn-supprimer">Supprimer</button>
        </td>
      </tr>
    </tbody>
  </table>
  </div>
</body>
</html>
