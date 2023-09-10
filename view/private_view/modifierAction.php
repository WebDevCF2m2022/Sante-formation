<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminModifier.css">
    <script src="js/adminJs.js" defer></script>
    <title>Document</title>
</head>
<body>
    <a href="?p=action" class="back-button">← Retour</a>

    <form action="#" method="post" enctype="multipart/form-data">
        <label for="articleImage">Image de l'article</label>
        <input type="file" id="articleImage" name="articleImage" onchange="previewImage(this)">

        <!-- Ajoutez une div pour centrer l'image -->
        <div id="imagePreviewContainer">
            <img id="imagePreview" width="200px" height="auto" src="#" alt="Aperçu de l'image">
        </div>

        <label for="articleTitle">Titre de l'article</label>
        <input type="text" id="articleTitle" name="articleTitle">

        <label for="articleDescription">Description de l'article</label>
        <input type="text" id="articleDescription" name="articleDescription">

        <label for="articleText">Texte de l'article</label>
        <textarea id="articleText" name="articleText" rows="6"></textarea>

        <button type="submit">Modifier l'article</button>
    </form>
</body>
</html>