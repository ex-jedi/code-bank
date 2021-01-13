// ********** GSAP **********
import { gsap } from 'gsap';
import { CSSRulePlugin } from 'gsap/CSSRulePlugin';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(CSSRulePlugin, ScrollTrigger);

ScrollTrigger.batch('.fade-in-rotate', {
  start: 'top 98%',
  markers: true,
  // interval: 0.1, // time window (in seconds) for batching to occur.
  // batchMax: 3,   // maximum batch size (targets)
  onEnter: (batch) => gsap.to(batch, { opacity: 1, rotateX: 0, ease: 'power1.in' }),
  onLeaveBack: (batch) => gsap.to(batch, { opacity: 0, rotateX: 90, ease: 'power1.in' }),
  onEnterBack: (batch) => gsap.to(batch, { opacity: 1, rotateX: 0, ease: 'power1.in' }),
  // you can also define things like start, end, etc.
});

// ********** Homepage Parallax Image **********

function homepageParallax() {
  gsap.to('.parallax-image', {
    yPercent: -30,
    ease: 'none',
    scrollTrigger: {
      trigger: '.parallax-image-section',
      start: 'top bottom',
      end: 'bottom',
      scrub: 0.5,
    },
  });
}

export { homepageParallax };
