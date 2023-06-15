var currentImageIndex = 0;
var images = document.querySelectorAll("#lightbox .image");
var prevButton = document.querySelector("#lightbox .prev");
var nextButton = document.querySelector("#lightbox .next");
var interval;

function showImage(index) {
    if (index < 0) {
        index = images.length - 1;
    } else if (index >= images.length) {
        index = 0;
    }

    images[currentImageIndex].classList.remove("active");
    images[index].classList.add("active");

    currentImageIndex = index;
}

function showPreviousImage() {
    clearInterval(interval);
    showImage(currentImageIndex - 1);
    startSlideshow();
}

function showNextImage() {
    clearInterval(interval);
    showImage(currentImageIndex + 1);
    startSlideshow();
}

function startSlideshow() {
    clearInterval(interval);
    interval = setInterval(function () {
        showImage(currentImageIndex + 1);
    }, 7500);
}

prevButton.addEventListener("click", showPreviousImage);
nextButton.addEventListener("click", showNextImage);

// Afficher la première image au chargement de la page
showImage(currentImageIndex);

// Démarrer le diaporama automatique
startSlideshow();
