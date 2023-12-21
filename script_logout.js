const photoSlider = document.querySelector('.photo-slider');

function movePhotos() {
  const firstPhoto = photoSlider.firstElementChild;
  photoSlider.appendChild(firstPhoto);
}

// Move photos every 2 seconds
setInterval(movePhotos, 2000);
