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
    <a href="?p=formation" class="back-button">← Retour</a>

    <form action="#" method="post" enctype="multipart/form-data">
        <label for="articleImage">Image de l'article</label>
        <input type="text" id="formationImage" name="formationImage"  value='<?=$modForm->getFormationImage()?>'>

        <!-- Ajoutez une div pour centrer l'image -->
        <div id="imagePreviewContainer">
            <img id="imagePreview" width="200px" height="200px" src="#" alt="Aperçu de l'image">
        </div>

        <label for="articleTitle">Titre de l'article</label>
        <input type="text" id="formationText" name="formationText" value="<?=$modForm->getFormationText()?>" >

        <label for="articleDescription">Description de l'article</label>
        <input type="text" id="formationDescription" name="formationDescription" value="<?=$modForm->getFormationDescription()?>">

        <label for="articleText">Texte de l'article</label>
        <textarea id="articleText" name="articleText" rows="6"></textarea>
        <input type="hidden" name ="idFormation" value="<?=$modForm->getIdFormation()?>">
        <button type="submit">Modifier l'article</button>
    </form>
</body>
</html>