<?php
include('config.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premiere_Boy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel = "shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="www.premiereboy.rf.gd">Premiere<span>Boy</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="portfolio.php" class="menu-btn">Portfolio</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
      <div class="max-width">
          <div class="row">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Hirak Das</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="portfolio.php">My Portfolio</a>
            </div>
          </div>
      </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/profile.jpeg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Hirak and I'm a <span class="typing-2"></span></div>
                    <p>Hi!I am Hirak and I am Web developer & Graphic Designer. I feel strongly that my ideas can only be expressed through art and this field helps me to do so. I always had fascination for editing,designing and web development.
                    As we all know that most of the advertisements are done digitally via videos ,banners etc and almost every field has websites.Web development is still an extremely vital part of any marketing strategy. Therefore, editing,designing and web development has become quite handy nowadays.
                    </p>
                    <a href="images/Work_ONE_PAGE_CV.pdf" download="Hirak_CV">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Web Design</div>
                        <p>I have thorough knowledge about HTML,CSS,JAVASCRIPT and also have clear concept about Php and MySQL.</p>
                    </div>
                </div>
                <div class="card">
                    <!-- <a href="video_work.php" style="color:white"> -->
                    <div class="box">                        
                        <i class="fas fa-video"></i>
                        <div class="text">Video Editing</div> 
                        <p>I have professionalism in the field of Video editing and edit my Videos using Adobe Premiere Pro.</p>
                        </div>
                    <!-- </a> -->
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Logo Desinging</div>
                        <p>I have done multiple projects on logo designing and I make the logos on Adobe Photoshop.</p>
                        <a href="logo_work.php"></a>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>I am a Graphic Designer, Video editor frontend web developer.  I have sound knowledge in Html,CSS,JavaScript. I also know about MySQL and PHP. I have expertise in the field of video editing  and logo designing. Graphic Designing is my passion and helps me to express my love for art.</p>
                    <a href="my_life.php">My Life</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>40%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>60%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>C++</span>
                            <span>40%</span>
                        </div>
                        <div class="line Clang"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Adobe photoshop</span>
                            <span>50%</span>
                        </div>
                        <div class="line AdobePhoto"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Adobe After Effects</span>
                            <span>50%</span>
                        </div>
                        <div class="line AfterEffects"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Adobe Premiere Pro</span>
                            <span>60%</span>
                        </div>
                        <div class="line PremierePro"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My teams</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/profile-1.jpg" alt="">
                        <div class="text">Hirak Das</div>
                        <p>Founder</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-2.jpg" alt="">
                        <div class="text">Bidisha Chakraborty</div>
                        <p>Programmer</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-3.jpg" alt="">
                        <div class="text">Anwesha Biswas</div>
                        <p>Graphics Designer | Video Editor</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-4.jpg" alt="">
                        <div class="text">Abdul Majid</div>
                        <p>Web Developer</p>
                    </div>
                </div>
                <!-- <div class="card">
                    <div class="box">
                        <img src="images/profile-3.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-4.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-5.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>






    <section class="contact" id="contact">
        <div class="max-width">
            <!--social media-->
            <div class="social">
                <a href="https://www.facebook.com/hirak.das.3158/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.linkedin.com/in/hirak-das-118b04140/"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.instagram.com/premiereboy13/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCEFkFPDdyysoFr-jqzT88pQ"><i class="fab fa-youtube"></i></a>
                <a href="https://github.com/karih123"><i class="fab fa-github"></i></a>
            </div>            

            <!-- contact section start -->
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>If you require additional information ,feel free to contact me. You can get in touch with me via email, phone number or even message option is present beside my profile.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Hirak Das</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Basundhara, 95/K-1, First Floor, Canal S Rd, Chingrighata, Kolkata, West Bengal 700105</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">dhirak289@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form class="contact-form" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" class="fullname" placeholder="Name">
                            </div>
                            <div class="field email">
                                <input type="text" name="email" class="email-input" placeholder="Email">
                            </div>
                        </div>
                        <div class="field">
                            <input type="text"  name="subject" class="subject" placeholder="Subject">
                        </div>
                        <div class="field textarea">
                            <textarea class="message" name="message" cols="30" rows="10" placeholder="Message.."></textarea>
                        </div>
                        <div class="button-area">
                            <button class="send-msg" name="ok" type="submit">Send message</button>
                        </div>
                    </form>

                    <?php 
            if(isset($_POST['ok'])){
                include_once 'function.php';
                $obj=new Contact();
                $res=$obj->contact_us($_POST);
                if($res==false){
                    echo "<script>alert('Query successfully Submitted.Thank you')</script>";
                    echo"<script>window.open('index.php','_self')</script>";
                }else{
                    echo "<script>alert('Something Went wrong!!')</script>";
                }
            }
            ?>
                </div>
            </div>
        </div>
  
    </section>
      
    <!-- footer section start -->
    <footer>
        <span>Created By <a href="admin.php">HirakDas</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
</body>
</html>

