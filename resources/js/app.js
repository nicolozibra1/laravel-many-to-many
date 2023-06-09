import './bootstrap';
import anime from 'animejs/lib/anime.es.js'
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

// DOM LOAD
document.addEventListener('DOMContentLoaded', function() {
    if(window.location.href !== '/about') {
        const svgElement = document.getElementById('my-svg');
    svgElement.classList.add('animated');
    const titleElement = document.getElementById('title');
    titleElement.classList.add('start');

    setTimeout(function() {
        let welcome = document.querySelector('.welcome')
        welcome.classList.add('opaced');
      }, 1000);

    setTimeout(function() {
        document.querySelector('.waviy').classList.add('loaded');
      }, 2100);

    setTimeout(function() {
       const aboutMe = document.querySelector('.about-me');
       aboutMe.classList.toggle('opacity-0');
       aboutMe.style.scale = '1';
      }, 5000);
    }

    //   BUTTON CLICK
  let button = document.querySelector('.about-me');
  button.addEventListener('click', function() {
    const svgElement = document.getElementById('my-svg');
    svgElement.classList.add('reverse-animated');
    svgElement.classList.remove('animated');
    const mainContent = document.getElementById('main-content');
    mainContent.classList.add('fade');
    setTimeout(function() {
            window.location.href = '/about';
        }, 4000);
})
  });



// TEXT ANIMATION
const text = document.querySelector('.text');
text.innerHTML = text.textContent.replace(/\S/g, "<span>$&</span>");

const animation = anime.timeline({
    targets : '.text span',
    easing : 'easeInOutExpo',
    loop : false,
});

animation.add({
    rotate : function(){
        return anime.random(-360,360)
    },
    translateX : function(){
        return anime.random(-500,500)
    },
    translateY : function(){
        return anime.random(-500,500)
    },
    duration : 0,
})

animation.add({
    rotate : 0,
    translateX : 0,
    translateY : 0,
    duration : 5000,
    delay : anime.stagger(10),
})
