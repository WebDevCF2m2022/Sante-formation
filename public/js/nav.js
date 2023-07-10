$(document).ready(function() {
    function updateMenu() {
      var windowWidth = $(window).width();
      if (windowWidth > 768) {
        $('nav.menu').removeClass('active'); // Modifier la sélection de la classe 'menu'
        $('.menu ul').show();
      } else {
        $('nav.menu').addClass('active'); // Modifier la sélection de la classe 'menu'
        $('.menu ul').hide();
      }
    }
  
    $(window).resize(function() {
      updateMenu();
    });
  
    $('.menu-icon').click(function() {
      $(this).toggleClass('active');
      $('nav.menu').toggleClass('active'); // Modifier la sélection de la classe 'menu'
      $('.menu ul').slideToggle();
    });
  
    // Afficher/cacher le menu burger lors du chargement initial
    updateMenu();
  });

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

  
  