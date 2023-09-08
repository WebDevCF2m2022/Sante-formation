document.addEventListener("DOMContentLoaded", function () {
    const ajoutArticleButton = document.querySelector(".ajoutArticle");
    const popup = document.querySelector(".popup");
    const closePopupButton = document.querySelector(".close-popup");

    ajoutArticleButton.addEventListener("click", function (e) {
        e.preventDefault();
        popup.style.display = "block";
    });

    closePopupButton.addEventListener("click", function () {
        popup.style.display = "none";
    });
});

// FONCTION QUI AFFICHE L'IMAGE DANS LES FORMULAIRES
function previewImage(input) {
    var imagePreview = document.getElementById('imagePreview');
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            imagePreview.style.display = 'block';
            imagePreview.src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    } else {
        imagePreview.style.display = 'none';
        imagePreview.src = '#';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    var selectedLanguage = document.querySelector('.selected-language');
    var languageOptions = document.querySelector('.language-options');
  
    selectedLanguage.addEventListener('click', function() {
      languageOptions.style.display = (languageOptions.style.display === 'block') ? 'none' : 'block';
    });
  
    var languageItems = document.querySelectorAll('.language-options li');
    for (var i = 0; i < languageItems.length; i++) {
      languageItems[i].addEventListener('click', function() {
        var langCode = this.getAttribute('data-lang');
        var langText = this.textContent.trim();
        var langFlag = this.querySelector('.flag-icon');
  
        selectedLanguage.innerHTML = '';
        selectedLanguage.appendChild(langFlag.cloneNode(true));
        selectedLanguage.innerHTML += ' ' + langText + ' <i class="fas fa-caret-down"></i>';
        languageOptions.style.display = 'none';
  
        // Ajoutez le code ici pour mettre à jour la langue de votre site en fonction de langCode
      });
    }
  });