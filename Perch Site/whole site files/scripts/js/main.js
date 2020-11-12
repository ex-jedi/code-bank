// TODO: Module all the things so each page just has one js file

// *=========================================
// ** GSAP  **
// *=========================================

import { gsap } from 'gsap';
import { CSSRulePlugin } from 'gsap/CSSRulePlugin';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(CSSRulePlugin, ScrollTrigger);

ScrollTrigger.defaults({
  // markers: true,
});

// *=========================================
// ** Cookie Warning  **
// *=========================================

const cookieBanner = document.querySelector('.cookie-warning-wrapper');
const cookieWarningButton = document.querySelector('.cookie-warning-button');

if (localStorage.getItem('cookieSeen') !== 'shown') {
  cookieBanner.classList.add('show-cookie-warning');
} else {
  cookieBanner.style.display = 'none';
}

cookieWarningButton.addEventListener(
  'click',
  () => {
    localStorage.setItem('cookieSeen', 'shown');
    cookieBanner.classList.remove('show-cookie-warning');
    cookieBanner.addEventListener('transitionend', () => {
      cookieBanner.style.display = 'none';
    });
  },
  { once: true }
);



// ********** Scroll Trigger Examples **********

// TODO: Delete ScrollTrigger examples

//* Scrolltrigger in tween example
// gsap.to('.animation-test', {
//   scrollTrigger: {
//     trigger: '.animation-test',
//     start: 'top 90%',
//     end: 'top 10%',
//     scrub: 2,
//     markers: true,
//     toggleActions: 'resume pause reverse resume',
//   },
//   y: -200,
// });

// * Scroll Trigger Timeline
// const tl = gsap.timeline({
//   scrollTrigger: {
//     trigger: '.animation-test',
//     start: 'top 70%',
//     end: 'top 30%',
//     scrub: 2,
//     markers: true,
//     toggleActions: 'resume pause reverse resume',
//   },
// });

// * ScrollTrigger defaults example
ScrollTrigger.defaults({
  // markers: true,
});

// * ScrollTrigger instance example
// ScrollTrigger.create({
//   trigger: '.homepage-section-two',
//   start: 'top 90%',
//   end: 'bottom 10%',
//   // scroller: '#main-content',
//   // horizontal: true,
//   markers: true,
//   id: 'Test',
//   toggleClass: 'active',
//   onEnter: () => console.log('Enter'),
//   onLeave: () => console.log('Leave'),
//   onEnterBack: () => console.log('Enter again'),
//   onLeaveBack: () => console.log('Leave again'),
//   onUpdate: (self) => console.log('update', self.progress.toFixed(3)),
//   onToggle: (self) => console.log('toggled', self.isActive),
// });

// *=========================================
// ** Main Nav  **
// *=========================================
const mainNav = document.querySelector('.main-nav');
const mainNavTrigger = document.querySelector('.main-nav-trigger');

// ********** Open Menu **********

const openMenuTl = gsap.timeline({
  paused: true,
  defaults: { ease: 'power3.in', duration: 1 },
});

// *=========================================
// ** Accessibility  **
// *=========================================

// * Adding focus outline class when tab key is used
function handleFirstTab(e) {
  if (e.keyCode === 9) {
    document.body.classList.add('user-is-tabbing');

    window.removeEventListener('keydown', handleFirstTab);
    window.addEventListener('mousedown', handleMouseDownOnce);
  }
}

function handleMouseDownOnce() {
  document.body.classList.remove('user-is-tabbing');

  window.removeEventListener('mousedown', handleMouseDownOnce);
  window.addEventListener('keydown', handleFirstTab);
}

window.addEventListener('keydown', handleFirstTab);
