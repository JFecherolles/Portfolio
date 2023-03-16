/* Responsive */

const navbar = document.querySelector('.navbar');
const menu_toggle = document.querySelector('.menu_toggle');

menu_toggle.onclick = function() {
  // alert ('Menu toggle clicked');
  menu_toggle.classList.toggle('open');
  navbar.classList.toggle('responsive');
}


/* Animation */

const header = document.querySelector('header');
const title = document.querySelectorAll('.left h1, h2');
const p = document.querySelectorAll('.left p, a');
const img = document.querySelector('.Mario, .Yoshi, .Toad, .Luigi');


window.addEventListener('load', () => { 
  const move = gsap.timeline({paused: true});

  move
  .staggerFrom(header , 2 , {y:-100 , opacity:0, ease: "power2.out"}, 0.1)
  .staggerFrom(img , 1 , {x:1000 , opacity:0, ease: "power2.out"}, 0.3)
  .staggerFrom(title , 1 , {opacity:0, ease: "power2.out"}, 0.1)
  .staggerFrom(p , 1 , {opacity:0, ease: "power2.out"}, 0.1)

  move.play()
});
