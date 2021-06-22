// *==============================================================================
// ** Flickity  **
// *==============================================================================

// ********** Installation **********

// https://flickity.metafizzy.co/extras.html#module-loaders
// https://flickity.metafizzy.co/extras.html#module-loaders


// ********** Imports **********

import * as Flickity from 'flickity';
import 'flickity-imagesloaded';

// ********** Init Options **********

function flickityInit() {
  const carousel = document.querySelector('.illustration-portfolio-section');
  const flkty = new Flickity(carousel, {
    imagesLoaded: true,
    autoPlay: 10000,
    prevNextButtons: false,
    wrapAround: true,
    selectedAttraction: 0.006,
    friction: 0.15,
  });
}


// ********** Export **********
export { flickityInit };


// ********** Run **********
flickityInit();