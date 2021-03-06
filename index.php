<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuda - An awasome responsive Website. Design your website with this template">
    <!-- google description -->
    <title>Cuda - An awasome responsive Website</title>
    <link rel="shortcut icon" href="/resorces/img/favicon.png">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- font awasome -->
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- vendors file -->
    <link rel="stylesheet" href="bendors/css/normalize.css">
 
    <link rel="stylesheet" href="bendors/grid.css">
    <!-- resorces file -->
    <link rel="stylesheet" href="resorces/css/style.css">
    <link rel="stylesheet" href="resorces/css/responsive.css">
    <!-- for media quarry -->
    
</head>
<body>
     

    <!-- start header section -->

    <header id="home">
        <nav>
            <div class="row">
                <a href="#home">
                    <img src="resorces/img/logo.png" alt="cuda" class="logo">
                </a>
                <ul class="main-nav">
                    <li class="active"><a href="#home">home</a></li>
                    <li><a href="#service">services</a></li>
                    <li><a href="#team">team</a></li>
                    <li><a href="#skill-section">skill</a></li>
                    <li><a href="#portfolio">portfolio</a></li>
                    <li><a href="#testominal">testominal</a></li>
                    <li><a href="#contact">contact</a></li>
                </ul>
                <div class="mobile-menu">
                    <span style="color: #fff;" onclick="openNav()">&#9776;</span>
                <div id="myNav" class="overlay">
                        <a href="javascript:void(0)" onclick="closeNav()" class="close-btn">&times;</a>
                    <div class="overlay-contant">
                         <a onclick="closeNav()" href="#home">home</a>
                         <a onclick="closeNav()" href="#service">services</a>
                         <a onclick="closeNav()" href="#team">team</a>
                         <a onclick="closeNav()" href="#skill-section">skill</a>
                         <a onclick="closeNav()" href="#portfolio">portfolio</a>
                         <a onclick="closeNav()" href="#testominal">testominal</a>
                         <a onclick="closeNav()" href="#contact">contact</a>
                    </div>
                </div>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="hero-text-box">
                <h1>Hi there! We are the new kids on the block 
                    and we build awesome websites and mobile apps.</h1>
                 <a href="#contact" class="btn btn-hero">Work with us</a>
            </div>
        </div>

    </header>





    <!-- end header section -->

   <!-- start services section -->
   <section class="services-section clearfix js--services-section" id="service">
       <div class="row"> 
           <h2>SERVICES WE PROVIDE</h2>
           <p class="little-description">
            We are working with both individuals and businesses from all over the globe 
            to create awesome websites and applications.</p>
  
       </div>
       <div class="row">
           <div class="col span_1_of_4 box">
            <i class="far fa-flag services-icon"></i>
            <h3>Branding</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ipsum?</p>
           </div>
           <div class="col span_1_of_4 box">
            <i class="fas fa-pencil-alt services-icon"></i>
            <h3>Design</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ipsum?</p>
           </div>
           <div class="col span_1_of_4 box">
            <i class="fas fa-cogs services-icon"></i>
            <h3>Development</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ipsum?</p>
           </div>
           <div class="col span_1_of_4 box">
            <i class="fas fa-rocket services-icon"></i>
            <h3>Rocket Science</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ipsum?</p>
           </div>
       </div>
   </section>

<!-- end services section -->


   <!-- start team section -->
   <section class="team-section" id="team">
       <div class="row">
           <h2>MEET OUR BEAUTIFUL TEAM</h2>
           <p class="little-description">We are a small team of designers and developers, who help brands with big ideas.</p>
       </div>

       <div class="row">
        <div class="col span_1_of_4 box">
            <img src="resorces/img/teammembar.jpg.png" alt="hasley" class="team-member">
            <h3>Olivia Wilde</h3>
            <span class="role">Lead Designer.</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, facilis?</p>
            <div class="social-link">
                <ul>
                    <li><a href="https://facebook.com/shazid"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fas fa-envelope-square"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col span_1_of_4 box">
            <img src="resorces/img/teammembar.jpg.png" alt="hasley" class="team-member">
            <h3>Ashley Greene</h3>
            <span class="role">SEO / Developer</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, facilis?</p>
            <div class="social-link">
                <ul>
                    <li><a href="https://facebook.com/shazid"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fas fa-envelope-square"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col span_1_of_4 box">
            <img src="resorces/img/teammembar.jpg.png" alt="hasley" class="team-member">
            <h3>ANNE HATHAWAY</h3>
            <span class="role">CEO / Marketing Guru</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, facilis?</p>
            <div class="social-link">
                <ul>
                    <li><a href="https://facebook.com/shazid"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fas fa-envelope-square"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col span_1_of_4 box">
            <img src="resorces/img/teammembar.jpg.png" alt="hasley" class="team-member">
            <h3>Kate Upton</h3>
            <span class="role">Creative Director</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, facilis?</p>
            <div class="social-link">
                <ul>
                    <li><a href="https://facebook.com/shazid"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fas fa-envelope-square"></i></a></li>
                </ul>
            </div>
        </div>
       </div>
   </section>
      <!-- end team section -->

  <!-- start skill section -->
   <section class="skill-section" id="skill-section">
       <div class="row">
        <h2>WE GOT SKILLS!</h2>
        <p class="liitle-description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
            tempor incididunt ut labore et dolore magna aliqua.
        </p>

       </div>
       
    <div class="row">
        <div class="col span_1_of_4 box">
            <svg class="radial-progress web-design" data-percentage="90" viewBox="0 0 80 80">
                <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">90%</text>
              </svg>
              <h3>WEB DESIGN</h3>
        </div>
        <div class="col span_1_of_4 box">
            <svg class="radial-progress html-css" data-percentage="75" viewBox="0 0 80 80">
                <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">75%</text>
              </svg>
              <h3>HTML/CSS</h3>
        </div>
        <div class="col span_1_of_4 box">
            <svg class="radial-progress graphics-design" data-percentage="70" viewBox="0 0 80 80">
                <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">70%</text>
              </svg>
              <h3>GRAPHICS DESIGN</h3>
        </div>

        <div class="col span_1_of_4 box">
            <svg class="radial-progress ul-li" data-percentage="85" viewBox="0 0 80 80">
                <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">85%</text>
              </svg>
              <h3>UL/LI</h3>
        </div>

    </div>
   </section>
    <!-- end skill section -->
  <!-- start portfolio section -->

   <section class="portfolio-section" id="portfolio">
    <div class="row">
        <h2>OUR PORTFOLIO</h2>
        <p class="little-description">
            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
            consectetur, adipisci velit, sed quia non numquam
        </p>
    </div>

    <div class="row">
        <div class="portfolio-filter">
            <button type="button" data-filter="all">all</button>
            <button type="button" data-filter=".web">web</button>
            <button type="button" data-filter=".apps">apps</button>
            <button type="button" data-filter=".icons">icons</button>
        </div>
    </div>

    <div class="row container">
        <div class="col span_1_of_2 mix apps box">
            <img class="portfolio-image" src="resorces/img/1.png" alt="1">
            <h4>sometric Perspective Mock-Up</h4>
        </div>
        <div class="col span_1_of_2 mix web box">
            <img class="portfolio-image" src="resorces/img/2.png" alt="1">
            <h4>sometric Perspective Mock-Up</h4>
        </div>
        <div class="col span_1_of_2 mix icons box">
            <img class="portfolio-image" src="resorces/img/3.png" alt="1">
            <h4>sometric Perspective Mock-Up</h4>
        </div>
        <div class="col span_1_of_2 mix icons web apps box">
            <img class="portfolio-image" src="resorces/img/4.png" alt="1">
            <h4>sometric Perspective Mock-Up</h4>
        </div>
    </div>

    <div class="row">
        <a href="#" class="btn btn-load-load">load more project</a>
    </div>

   </section>

  <!-- end portfolio section -->
  <!-- start testominal section -->

   <section class="testominal" id="testominal">

    <div class="row">
        <h2>WHAT POEPLE SAY ABOUT US</h2>
        <p class="little-description">
            Our clients love us!
        </p>
    </div>
    <div class="row">
        <div class="col span_1_of_2 box">
            <div class="client-photo">
                <img src="resorces/img/test1.png" alt="client">
            </div>
            <div class="client-review">
                
                <p>"Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque.???</p>
                <h4>Daniel Imran</h4>
                <span class="role">CEO of Pinterest</span>
            </div>
        </div>
        <div class="col span_1_of_2 box">
            <div class="client-photo">
                <img src="resorces/img/test1.png" alt="client">
            </div>
            <div class="client-review">
                
                <p>"Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque.???</p>
                <h4>Daniel Imran</h4>
                <span class="role">CEO of Pinterest</span>
            </div>
        </div><div class="col span_1_of_2 box">
            <div class="client-photo">
                <img src="resorces/img/test1.png" alt="client">
            </div>
            <div class="client-review">
                
                <p>"Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque.???</p>
                <h4>Daniel Imran</h4>
                <span class="role">CEO of Pinterest</span>
            </div>
        </div>
        <div class="col span_1_of_2 box">
            <div class="client-photo">
                <img src="resorces/img/test1.png" alt="client">
            </div>
            <div class="client-review">
                
                <p>"Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque.???</p>
                <h4>Daniel Imran</h4>
                <span class="role">CEO of Pinterest</span>
            </div>
        </div>
    </div>


   </section>

  <!-- ends testominal section -->
  <!-- contact testominal section -->
   <section class="contact-section" id="contact">



   <div class="row">
       <h2>GET IN TOUCH</h2>
       <p class="little-discription">
        1600 Pennsylvania Ave NW, Washington, DC 20500, United States of America. Tel: (202) 456-1111
       </p>
   </div>
   <div class="row">
       <form action="https://formspree.io/f/xeqvkjan" method="POST" target="_blank">
           <div class="row">
               <div class="col span_1_of_2">
                   <input type="text" name="Name" placeholder="Your Name  &#42;" required>
               </div>
                <div class="col span_1_of_2">
                <input type="email" name="Email" placeholder="Your Email  &#42;" required>
                </div>
           </div>

           <div class="row">
            <textarea name="Massage" placeholder="Your Massage &#42;" required id="#" cols="30" rows="10"></textarea>
               
           </div>
           <div class="row">
               <input type="submit" value="Send Message" class="btn btn-submit">
           </div>
       </form>
   </div>


</section>


  <!-- contact ends testominal section -->
 
  <!-- start  footer section -->
 <footer class="footer-section">

<ul>
    <li><a href="#">facebook</a></li>
    <li><a href="#">twitter</a></li>
    <li><a href="#">google+</a></li>
    <li><a href="#">linkedin</a></li>
    <li><a href="#">youtube</a></li>
    <li><a href="#">github</a></li>
    
</ul>



 </footer>

  <!--  ends footer section -->
 

    <!-- js script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="bendors/js/html5shiv.min.js"></script>
<script src="bendors/js/respond.min.js"></script>
<script src="bendors/js/selectivizr.js"></script>
<script src="bendors/js/jquery.waypoints.min.js"></script>
 <!-- there was animated circle js -->
<script src="bendors/js/mixitup.js"></script>
<script src="resorces/js/main.js"></script>
</body>
</html>