<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portfolio</title>
	<link rel="stylesheet" type="text/css" href="p_style.css">
    <link rel="stylesheet" type="text/css" href="my_life.css">
	<link rel="stylesheet" type="text/css" href="p_java.js">
    <link rel = "shortcut icon" type="image/x-icon" href="images/favicon.ico" />

</head>
<body onload="myLoader()">
    <div class="cursor"></div>

    <div class="preloader" id="preloader">
      <div class="container-fluid">
        <div class="spinner">
          <span class="ball-1"></span>
          <span class="ball-2"></span>
          <span class="ball-3"></span>
          <span class="ball-4"></span>
        </div>
      </div>
    </div>
    <div class="backBtn">
      <span class="line tLine"></span>
      <span class="line mLine"></span>
      <span class="label"><a href="index.php" style="text-decoration: none; color: crimson; ">Main Page</a></span>
      <span class="line bLine"></span>
    </div>

	<canvas id="stars" style="z-index: -1;
  position:fixed;"></canvas>
<div class="slider">
    <input type="range" min="0.5" max="15" value="2" step="0.5" >
    Speed: <span id="speed"></span>
</div>

<div class="heading" style="padding-top: 100px;">
    <h1 class="section-header" style="margin: 0px;">My Life</h1>
</div>
<div class="section-header-underline"></div>

<div class="page">
  <div class="timeline">
    <div class="timeline__group">
      <span class="timeline__year time" aria-hidden="true">1999</span>
      <div class="timeline__cards">
        <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-02-02">
              <span class="time__day">13</span>
              <span class="time__month">July</span>
            </time>
          </header>
          <div class="card__content">
            <p>Landed on Earth</p>
          </div>
        </div>
        <!-- <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-09-01">
              <span class="time__day"></span>
              <span class="time__month">Sept</span>
            </time>
            <h3 class="card__title r-title">The part of my life in University of Pennsylvania</h3>
          </header>
          <div class="card__content">
            <p>Started from University of Pennsylvania. This is an important stage of my career. Here I worked in the local magazine. The experience greatly affected me</p>
          </div>
        </div> -->
      </div>
    </div>
    <div class="timeline__group">
      <span class="timeline__year time" aria-hidden="true">2015</span>
      <div class="timeline__cards">
        <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-07-14">
              <span class="time__day">15</span>
              <span class="time__month">Feb</span>
            </time>
          </header>
          <div class="card__content">
            <p>Completed my Secondary Examination</p>
          </div>
        </div>
      </div>
    </div>
    <div class="timeline__group">
      <span class="timeline__year time" aria-hidden="true">2017</span>
      <div class="timeline__cards">
        <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-08-18">
              <span class="time__day">28</span>
              <span class="time__month">feb</span>
            </time>          
          </header>
          <div class="card__content">
            <p>Completed my Heigher Secondary Examination</p>
          </div>
        </div>
      </div>
    </div>
    <div class="timeline__group">
      <span class="timeline__year time" aria-hidden="true">2017</span>
      <div class="timeline__cards">
        <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-08-18">
              <span class="time__day">13</span>
              <span class="time__month">July</span>
            </time>          
          </header>
          <div class="card__content">
            <p>I got into a Engineering College , named government college of engineering and leather technology in the Information Technology Branch.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="timeline__group">
      <span class="timeline__year time" aria-hidden="true">2021</span>
      <div class="timeline__cards">
        <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-08-18">
              <span class="time__day">28</span>
              <span class="time__month">Aug</span>
            </time>          
          </header>
          <div class="card__content">
            <p>I successfully completed my B.tech.</p>
          </div>
        </div>
      </div>
      <div class="timeline__cards">
        <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-08-18">
              <span class="time__day">1</span>
              <span class="time__month">Dec</span>
            </time>          
          </header>
          <div class="card__content">
            <p>I got a Job in FBRSystems as a web developer in kolkata.</p>
          </div>
        </div>
      </div>
      
    </div>
    <div class="timeline__group">
      <span class="timeline__year time" aria-hidden="true">2022</span>      
      <div class="timeline__cards">
        <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-08-18">
              <span class="time__day">21</span>
              <span class="time__month">March</span>
            </time>          
          </header>
          <div class="card__content">
            <p>I got a golden opportunity to work in Infosys as System Engineer in Mysore.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

		












  
 






</body>

<!-- for background canvas -->

<script >
	// DOM selectors
const stars = document.getElementById('stars');
const starsCtx = stars.getContext('2d');
const slider = document.querySelector(".slider input");
const output = document.querySelector("#speed");

// global variables
let screen, starsElements, starsParams = { speed: 2, number: 300, extinction: 4 };

// run stars
setupStars();
updateStars();

// handle slider
output.innerHTML = slider.value;
slider.oninput = function() {
    output.innerHTML = this.value;
    starsParams.speed = this.value;
};

// update stars on resize to keep them centered
window.onresize = function() {
    setupStars();
};

// star constructor
function Star() {
    this.x = Math.random() * stars.width;
    this.y = Math.random() * stars.height;
    this.z = Math.random() * stars.width;

    this.move = function() {
        this.z -= starsParams.speed;
        if (this.z <= 0) {
            this.z = stars.width;
        }
    };

    this.show = function() {
        let x, y, rad, opacity;
        x = (this.x - screen.c[0]) * (stars.width / this.z);
        x = x + screen.c[0];
        y = (this.y - screen.c[1]) * (stars.width / this.z);
        y = y + screen.c[1];
        rad = stars.width / this.z;
        opacity = (rad > starsParams.extinction) ? 1.5 * (2 - rad / starsParams.extinction) : 1;

        starsCtx.beginPath();
        starsCtx.fillStyle = "rgba(255, 255, 255, " + opacity + ")";
        starsCtx.arc(x, y, rad, 0, Math.PI * 2);
        starsCtx.fill();
    }
}

// setup <canvas>, create all the starts
function setupStars() {
    screen = {
        w: window.innerWidth,
        h: window.innerHeight,
        c: [ window.innerWidth * 0.5, window.innerHeight * 0.5 ]
    };
    window.cancelAnimationFrame(updateStars);
    stars.width = screen.w;
    stars.height = screen.h;
    starsElements = [];
    for (let i = 0; i < starsParams.number; i++) {
        starsElements[i] = new Star();
    }
}

// redraw the frame
function updateStars() {
    starsCtx.fillStyle = "black";
    starsCtx.fillRect(0, 0, stars.width, stars.height);
    starsElements.forEach(function (s) {
        s.show();
        s.move();
    });
    window.requestAnimationFrame(updateStars);
}
</script>

<script>
    $(document).ready(function() {
  $('.video-gallery').magnificPopup({
  delegate: 'a', 
  type: 'iframe',
  gallery:{
    enabled:true
  }
});
});


</script>





<!--     pre loader start -->
    <script>
        // $(document).ready(function(){
            //  $('div#loading').removeAttr('id');
        // });
        var preloader = document.getElementById("preloader");
        // window.addEventListener('load', function(){
        //  preloader.style.display = 'none';
        //  })

        function myLoader(){
            preloader.style.display = 'none';
        };
    </script>
<!--     pre loader end -->

<!-- mouse cursor start -->
<script>
    const updateProperties = (elem, state) => {
  elem.style.setProperty('--x', `${state.x}px`)
  elem.style.setProperty('--y', `${state.y}px`)
  elem.style.setProperty('--width', `${state.width}px`)
  elem.style.setProperty('--height', `${state.height}px`)
  elem.style.setProperty('--radius', state.radius)
  elem.style.setProperty('--scale', state.scale)
}

document.querySelectorAll('.cursor').forEach(cursor => {
  let onElement

  const createState = e => {
    const defaultState = {
      x: e.clientX,
      y: e.clientY,
      width: 40,
      height: 40,
      radius: '50%'
    }

    const computedState = {}

    if (onElement != null) {
      const { top, left, width, height } = onElement.getBoundingClientRect()
      const radius = window.getComputedStyle(onElement).borderTopLeftRadius

      computedState.x = left + width / 2
      computedState.y = top + height / 2
      computedState.width = width
      computedState.height = height
      computedState.radius = radius
    }

    return {
      ...defaultState,
      ...computedState
    }
  }

  document.addEventListener('mousemove', e => {
    const state = createState(e)
    updateProperties(cursor, state)
  })

  document.querySelectorAll('a, button').forEach(elem => {
    elem.addEventListener('mouseenter', () => (onElement = elem))
    elem.addEventListener('mouseleave', () => (onElement = undefined))
  })
})

</script>
<!-- mouse cursor end -->
</html>