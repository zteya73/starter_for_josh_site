gsap.registerPlugin(ScrollTrigger);

// Create the GSAP timeline with ScrollTrigger
gsap.timeline({
  scrollTrigger: {
    trigger: '.about',
    markers: true, // For debugging only
    start: "bottom 90%",
    end: "top 30%",
    scrub: 3,
  }
})
  // Navbar animation
  .from('.navbar', { scale: 0, duration: 2 })
  .from('.navbar-brand', { opacity: 0, scale: 0, ease: "back" })
  .from('.tag', { opacity: 0, y: 10, ease: "back" })

  // Scroll-triggered animations
  .from('.about-text', {
    duration: 1,
    y: 250,
    opacity: 0,
  })
  .from('.blocker', {
    duration: 1,
    x: 250,
    opacity: 0,
  });