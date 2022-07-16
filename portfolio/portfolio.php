<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portfolio</title>
	<link rel="stylesheet" type="text/css" href="p_style.css">
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
    <h1 class="section-header" style="margin: 0px;">WEB and Graphics</h1>
</div>
<div class="section-header-underline"></div>

		<div class="container">

  <img src="portfolio/p1.jpg">
  <img src="portfolio/p2.jpg">
  <img src="portfolio/p3.jpg">
  <img src="portfolio/p4.jpg">
  <img src="portfolio/p5.jpg">
  <img src="portfolio/p6.jpg">
  <img src="portfolio/p7.jpg">
  <img src="portfolio/p8.jpg">
</div>







<!-- web sites design -->
<div class="heading" style="padding-top: 100px;">
    <h1 class="section-header" style="margin: 0px;">My Website Projects</h1>
</div>
<div class="section-header-underline"></div>

<div class="live_projects_section">
  <div class="live_card">
    <div><img src="portfolio/website/web (1).jpeg"></div>
    <div class="project_heading">FBRS Website</div>
    <div class="live_button"><a href="https://www.fbrsystems.com/" target="_blank"><button>Live Project</button></a></div>
  </div>  
  <div class="live_card">
    <div><img src="portfolio/website/web (2).jpeg"></div>
    <div class="project_heading">Dollar B Exchange</div>
    <div class="live_button"><a href="http://dollarbexchange.com/" target="_blank"><button>Live Project</button></a></div>
  </div> 
  <!-- <div class="live_card">
    <div><img src="portfolio/website/web (3).jpeg"></div>
    <div class="project_heading">E-commerce</div>
    <div class="live_button" ><a href="/other/ecom/index.html" target="_blank"><button>Live Project</button></a></div>
  </div> 
 -->  <div class="live_card">
    <div><img src="portfolio/website/web (4).jpeg"></div>
    <div class="project_heading">Instagram Clone</div>
    <div class="live_button" ><a href="/other/insta_clone/html/index.html" target="_blank"><button>Live Project</button></a></div>
  </div> 
</div>
<!-- we sites design end -->




<div class="content">
  <h1 class="section-header">Video Gallery</h1>
  <div class="section-header-underline"></div>
  <div class="video-gallery">
    <div class="gallery-item">
      <img src="portfolio/p9.jpg" alt="North Cascades National Park" />
      <div class="gallery-item-caption">
        <div>
          <h2>Web Site Promo Video</h2>
          <p>Made using After Effects</p>
        </div>
        <a class="vimeo-popup" href="https://youtu.be/gTyvuLakNZU"></a>
      </div>
    </div>

    <div class="gallery-item ">
      <img src="portfolio/p10.jpg" alt="Mt. Rainier" />
      <div class="gallery-item-caption">
        <div>
          <h2>App Promo Video</h2>
          <p>Made using After Effects and Prmiere Pro</p>
        </div>
        <a class="vimeo-popup" href="https://youtu.be/IQHLP1VOAs0"></a>
      </div>
    </div>

    <div class="gallery-item">
      <img src="portfolio/p11.jpg" alt="Olympic National Park" />
      <div class="gallery-item-caption">
        <div>
          <h2>Meghalaya Day 1</h2>
          <p>A Traveling Video on Meghalaya</p>
        </div>
        <a class="vimeo-popup" href="https://youtu.be/THqbGpP6KEE"></a>
      </div>
    </div>

    <div class="gallery-item">
      <img src="portfolio/p12.jpg" alt="Mount St. Helens" />
      <div class="gallery-item-caption">
        <div>
          <h2>Meghalaya Day 2</h2>
          <p>A Traveling Video on Meghalaya</p>
        </div>
        <a class="vimeo-popup" href="https://youtu.be/-lh-a1NW9Y0"></a>
      </div>
    </div>

    <div class="gallery-item">
      <img src="portfolio/p13.jpg" alt="Mount St. Helens" />
      <div class="gallery-item-caption">
        <div>
          <h2>Calm Cinematic Video</h2>
          <p>RAIN AMDIENCE FOR MEDITATION</p>
        </div>
        <a class="vimeo-popup" href="https://youtu.be/GQH-j81osY8"></a>
      </div>
    </div>

    <div class="gallery-item">
      <img src="portfolio/p14.jpg" alt="Mount St. Helens" />
      <div class="gallery-item-caption">
        <div>
          <h2>B-Roll Video</h2>
          <p>CINEMATIC B-ROLL SEWING</p>
        </div>
        <a class="vimeo-popup" href="https://youtu.be/J5aLnMQncHI"></a>
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