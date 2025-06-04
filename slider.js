document.addEventListener("DOMContentLoaded", function() {
  var photosWrapper = document.querySelector('.js-photos');
  var photos = document.querySelectorAll('.js-photo');
  var photoWidth = photos[0].offsetWidth; // 500px

  var btnDecaleGauche = document.querySelector('.js-btn-decale-gauche');
  var btnDecaleDroite = document.querySelector('.js-btn-decale-droite');

  // position slide courante
  var position = 0;
  var minPosition = 0;
  var maxPosition = photos.length - 1;

  function decaleGauche () {
    position++;

    if (position > maxPosition) {
      retourDebut();
    } else {
      photosWrapper.style.left = position * -photoWidth + "px";
    }
  }

  function decaleDroite () {
    position--;

    if (position < minPosition) {
      retourFin();
    } else {
      photosWrapper.style.left = position * -photoWidth + "px";
    }
  }

  function retourDebut () {
    position = minPosition;
    photosWrapper.style.left = position * -photoWidth + "px";
  }

  function retourFin () {
    position = maxPosition;
    photosWrapper.style.left = position * -photoWidth + "px";
  }

  btnDecaleGauche.addEventListener('click', decaleGauche);
  btnDecaleDroite.addEventListener('click', decaleDroite);
})