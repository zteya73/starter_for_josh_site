// Register ScrollTrigger plugin
gsap.registerPlugin(ScrollTrigger);

// Ensure animations happen after page load
window.addEventListener("load", function() {
  gsap.from(".about-text", {
    duration: 2,
    y: 250,
    opacity: 0,
    scrollTrigger: {
      trigger: ".blocker",
      start: 400
    }
  });
});

// GSAP animation when about-text class is in view
gsap.from(".about-text", {
  scrollTrigger: ".about-text",
  duration: 2,
  y: 250,
  opacity: 0
});

// GSAP animation with blocker as trigger
gsap.from(".about-text", {
  scrollTrigger: ".blocker",
  duration: 2,
  y: 250,
  opacity: 0
});

// Animation with start property for scrolling
gsap.from(".about-text", {
  duration: 2,
  y: 250,
  opacity: 0,
  scrollTrigger: {
    trigger: ".blocker",
    start: 400
  }
});

// GSAP animation when the page is loaded
window.addEventListener("load", function() {
  gsap.from(".about-text", {
    duration: 2,
    y: 250,
    opacity: 0,
    scrollTrigger: {
      trigger: ".blocker",
      start: 400
    }
  });
});

// ScrollTrigger with custom start position
gsap.from(".about-text", {
  duration: 2,
  y: 250,
  opacity: 0,
  scrollTrigger: {
    trigger: ".blocker",
    start: "top center"
  }
});

// ScrollTrigger with scrub value for smoother animation
gsap.from(".about-text", {
  duration: 2,
  y: 250,
  opacity: 0,
  scrollTrigger: {
    trigger: ".blocker",
    start: 400,
    scrub: true
  }
});

// ScrollTrigger with markers to visualize the animation
gsap.from(".about-text", {
  duration: 7,
  y: 250,
  opacity: 0,
  scrollTrigger: {
    trigger: ".aboutbg",
    markers: true,
    start: "bottom 70%",
    end: "top 30%",
    scrub: 6
  }
});

// Linking timeline animations together
const tl = gsap.timeline({
  scrollTrigger: {
    trigger: '.aboutbg',
    markers: true,
    start: "bottom 90%",
    end: "top 30%",
    scrub: 3
  }
});

tl.from('.about-text', {
  duration: 1,
  y: 250,
  opacity: 0
}).from('.blocker', {
  duration: 1,
  x: 250,
  opacity: 0
});
