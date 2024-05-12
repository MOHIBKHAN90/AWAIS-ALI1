<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    

<style>



@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

:root {
  --primary-color: #beba37;
  --primary-color-dark: #ee9821;
  --secondary-color: #04091d;
  --secondary-color-light: #0f1221;
  --secondary-color-dark: #03060f;
  --text-light: #94a3b8;
  --white: #ffffff;
  --max-width: 1200px;
  --gradient: linear-gradient(
    to right,
    var(--primary-color-dark),
    var(--primary-color)
  );
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.section__container {
  max-width: var(--max-width);
  margin: auto;
  padding: 5rem 1rem;
}

.section__header {
  font-size: 2.5rem;
  font-weight: 600;
  text-align: center;
}

.section__subheader {
  margin-bottom: 10px;
  font-size: 1.2rem;
  text-align: center;
}

.section__description {
  max-width: 600px;
  margin-top: 1rem;
  margin-inline: auto;
  color: var(--text-light);
  text-align: center;
}

.btn {
  padding: 0.5rem 1.5rem;
  outline: none;
  border: none;
  font-size: 1rem;
  color: var(--secondary-color);
  background-image: var(--gradient);
  border-radius: 5rem;
  cursor: pointer;
}

img {
  display: flex;
  width: 100%;
}

a {
  text-decoration: none;
  color: var(--white);
}

html,
body {
  scroll-behavior: smooth;
}

body {
  font-family: "Poppins", sans-serif;
  color: var(--white);
  background-color: var(--secondary-color);
}

.header {
  position: relative;
  background-color: var(--secondary-color-dark);
}

.header__socials {
  display: none;
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  flex-direction: column;
  gap: 1rem;
  z-index: 1;
}

.header__socials a {
  padding: 7px 13px;
  font-size: 1.5rem;
  color: var(--secondary-color);
  background-image: var(--gradient);
}

nav {
  position: fixed;
  isolation: isolate;
  width: 100%;
  z-index: 9;
}

.nav__bar {
  position: relative;
  isolation: isolate;
  max-width: var(--max-width);
  margin-inline: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 2rem;
}

.nav__header {
  padding: 1rem;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: var(--secondary-color);
}

.nav__logo a {
  font-size: 1.5rem;
  font-weight: 700;
}

.nav__logo a span {
  color: var(--primary-color-dark);
}

.nav__links {
  position: absolute;
  top: 68px;
  left: 0;
  width: 100%;
  padding: 2rem;
  list-style: none;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 2rem;
  transform: translateY(-100%);
  background-color: var(--secondary-color-light);
  transition: 0.5s;
  z-index: -1;
}

.nav__links.open {
  transform: translateY(0);
}

.link a {
  transition: 0.3s;
}

.link.btn a {
  color: var(--secondary-color) !important;
}

.link a:hover {
  color: var(--primary-color-dark);
}

.nav__menu__btn {
  font-size: 1.5rem;
  cursor: pointer;
}

.header__container {
  padding-top: 10rem;
  display: grid;
  gap: 4rem;
}

.header__image img {
  max-width: 300px;
  margin: auto;
}

.header__content {
  text-align: center;
}

.header__content h4 {
  margin-bottom: 1rem;
  font-size: 2.5rem;
  font-weight: 700;
}

.header__content h1 {
  margin-bottom: 2rem;
  font-size: 2.1rem;
  font-weight: 300;
  line-height: 3.5rem;
}

.header__content p {
  margin-bottom: 2rem;
  color: var(--text-light);
}

.about__container {
  display: grid;
  gap: 4rem;
}

.about__image img {
  max-width: 450px;
  margin: auto;
}

.about__content .section__header {
  margin-bottom: 1rem;
  text-align: left;
}

.about__content p {
  margin-bottom: 2rem;
  color: var(--text-light);
}

.about__content h4 {
  padding: 2rem;
  margin-bottom: 2rem;
  font-size: 1rem;
  font-weight: 400;
  color: var(--text-light);
  background-color: var(--secondary-color-light);
  border-left: 2px solid var(--primary-color-dark);
  border-radius: 5px;
}

.about__btns {
  display: flex;
  align-items: center;
  gap: 1rem;
}

.about__btns .download__btn {
  padding: 0.5rem 1.5rem;
  font-size: 1rem;
  border-radius: 5rem;
}

.about__btns a {
  padding: 3px 8px;
  font-size: 1.25rem;
  color: var(--secondary-color);
  background-image: var(--gradient);
  border-radius: 100%;
}

.banner__container {
  padding-block: 2rem;
  display: grid;
  gap: 1rem;
}

.banner__card {
  padding: 2rem 1rem;
  display: flex;
  align-items: flex-start;
  gap: 1rem;
  background-color: var(--secondary-color-light);
  border-radius: 5px;
  border-bottom: 2px solid transparent;
  transition: 0.3s;
}

.banner__card:hover {
  border-color: var(--primary-color-dark);
}

.banner__card span {
  padding: 4px 10px;
  font-size: 1.5rem;
  background-color: var(--secondary-color-dark);
  border-radius: 100%;
  transition: 0.3s;
}

.banner__card:hover span {
  color: var(--secondary-color);
  background-image: var(--gradient);
}

.banner__card h4 {
  margin-bottom: 5px;
  font-size: 1.2rem;
  font-weight: 600;
}

.banner__card p {
  color: var(--text-light);
}

.project__header {
  margin-bottom: 4rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-direction: column;
  gap: 2rem;
}

.project__nav {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  row-gap: 2rem;
}

.project__btn {
  color: var(--white);
  background-image: none;
  background-color: transparent;
}

.mixitup-control-active {
  color: var(--secondary-color);
  background-image: var(--gradient);
}

.project__grid {
  display: grid;
  gap: 1rem;
}

.project__card img {
  border-radius: 5px;
  cursor: pointer;
}

.service__grid {
  margin-top: 4rem;
  display: grid;
  gap: 4rem;
}

.service__card {
  position: relative;
  padding: 2rem;
  padding-top: 3rem;
  text-align: center;
  background-color: var(--secondary-color-light);
  border-bottom: 2px solid transparent;
  border-radius: 5px;
  transition: 0.3s;
}

.service__card:hover {
  border-color: var(--primary-color-dark);
}

.service__card span {
  position: absolute;
  top: 0;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 4px 10px;
  font-size: 2rem;
  background-color: var(--secondary-color-light);
  border-radius: 2px;
  transition: 0.3s;
}

.service__card:hover span {
  color: var(--secondary-color);
  background-image: var(--gradient);
}

.service__card h4 {
  margin-bottom: 1rem;
  font-size: 1.2rem;
  font-weight: 600;
}

.service__card p {
  color: var(--text-light);
}

.swiper {
  margin-top: 4rem;
  padding-bottom: 4rem;
  width: 100%;
}

.swiper-slide {
  padding-block: 2rem;
  background-color: var(--secondary-color-light);
}

.swiper-pagination-bullet-active {
  background-color: var(--primary-color-dark);
}

.client__card {
  padding: 2rem 1rem;
  max-width: 750px;
  margin-inline: auto;
  display: flex;
  flex-direction: column;
  gap: 2rem;
  text-align: center;
  background-color: var(--secondary-color-light);
}

.client__card img {
  max-width: 200px;
  margin: auto;
}

.client__card p {
  margin-bottom: 1rem;
  color: var(--text-light);
}

.client__card h4 {
  margin-bottom: 1rem;
  font-size: 1.2rem;
  font-weight: 400;
  color: var(--primary-color-dark);
}

.client__card h4 span {
  margin-left: 10px;
  font-size: 1rem;
  color: var(--text-light);
}

.blog__grid {
  margin-top: 4rem;
  display: grid;
  gap: 2rem 1rem;
}

.blog__card img {
  margin-bottom: 1rem;
  border-radius: 5px;
}

.blog__card p {
  margin-bottom: 5px;
  color: var(--primary-color-dark);
}

.blog__card h4 {
  margin-bottom: 10px;
  font-size: 1.2rem;
  font-weight: 600;
}

.blog__card a {
  color: var(--text-light);
  transition: 0.3s;
}

.blog__card a:hover {
  color: var(--primary-color-dark);
}

.contact__form {
  max-width: 600px;
  margin-inline: auto;
  margin-top: 4rem;
  display: grid;
  gap: 1rem;
}

.contact__form .input__row {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.contact__form input {
  width: 100%;
  padding: 1rem;
  font-size: 1rem;
  color: var(--white);
  background-color: transparent;
  outline: none;
  border: none;
  border-bottom: 2px solid var(--primary-color-dark);
  border-radius: 5px;
}

.contact__form input::placeholder {
  color: var(--text-light);
}

.contact__form .btn {
  max-width: fit-content;
  margin-inline: auto;
  margin-top: 1rem;
}

.footer {
  background-color: var(--secondary-color-dark);
}

.footer__container {
  display: grid;
  gap: 2rem;
}

.footer__col h5 {
  margin-bottom: 1.5rem;
  font-size: 1.5rem;
  font-weight: 600;
}

.footer__col p {
  margin-bottom: 1.5rem;
  color: var(--text-light);
}

.footer__socials {
  display: flex;
  align-items: center;
  gap: 1rem;
  flex-wrap: wrap;
}

.footer__socials a {
  margin-bottom: 1rem;
  padding: 3px 8px;
  font-size: 1.25rem;
  background-color: var(--secondary-color-light);
  border-radius: 100%;
  transition: 0.3s;
}

.footer__socials a:hover {
  color: var(--secondary-color);
  background-image: var(--gradient);
}

.footer__col h4 {
  margin-bottom: 1.5rem;
  font-size: 1.2rem;
  font-weight: 500;
}

.footer__links a {
  display: block;
  margin-bottom: 1rem;
  color: var(--text-light);
}

.footer__links a:hover {
  color: var(--primary-color-dark);
}

.footer__bar {
  padding: 1rem;
  font-size: 0.8rem;
  color: var(--text-light);
  text-align: center;
}

@media (width > 480px) {
  .banner__container {
    grid-template-columns: repeat(2, 1fr);
  }

  .project__grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .service__grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 4rem 1rem;
  }

  .blog__grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .contact__form .input__row {
    flex-direction: row;
  }

  .footer__container {
    grid-template-columns: repeat(2, 1fr);
  }

  .footer__col:first-child {
    grid-column: 1/3;
  }
}

@media (width > 768px) {
  .header__socials {
    display: flex;
  }

  nav {
    position: static;
  }

  .nav__bar {
    padding: 2rem 1rem;
  }

  .nav__header {
    padding: 0;
    background-color: transparent;
  }

  .nav__menu__btn {
    display: none;
  }

  .nav__links {
    position: static;
    padding: 0;
    flex-direction: row;
    background-color: transparent;
    transform: none;
  }

  .header__container {
    padding: 0 1rem;
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    gap: 2rem;
  }

  .header__content {
    padding-block: 5rem;
    text-align: left;
    grid-area: 1/1/2/2;
  }

  .about__container {
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    gap: 2rem;
  }

  .banner__container {
    grid-template-columns: repeat(3, 1fr);
  }

  .project__header {
    flex-direction: row;
  }

  .project__grid {
    grid-template-columns: repeat(3, 1fr);
  }

  .service__grid {
    grid-template-columns: repeat(3, 1fr);
  }

  .client__card {
    flex-direction: row;
    align-items: center;
    text-align: left;
  }

  .blog__grid {
    grid-template-columns: repeat(3, 1fr);
  }

  .footer__container {
    grid-template-columns: repeat(4, 1fr);
  }
}

@media (width > 1024px) {
  .banner__container {
    gap: 2rem;
  }

  .project__grid {
    gap: 2rem;
  }

  .service__grid {
    gap: 2rem;
  }

  .blog__grid {
    gap: 2rem;
  }
}






</style>


    <title>Portfolio | AWAIS</title>
  </head>
  <body>
    <header class="header">
      
      <nav>
        <div class="nav__bar">
          <div class="nav__header">
            <div class="nav__logo">
              <a href="#">FULLSTACK DEVELOPER<span>....</span></a>
            </div>
            <div class="nav__menu__btn" id="menu-btn">
              <span><i class="ri-menu-3-line"></i></span>
            </div>
          </div>
          <ul class="nav__links" id="nav-links">
            <li class="link"><a href="#home">Home</a></li>
            <li class="link"><a href="#about">About</a></li>
            <li class="link"><a href="#service">Skills</a></li>
            <li class="link"><a href="#client">Experience</a></li>
         
            <li class="link btn"><a href="#contact">Hire Me</a></li>
          </ul>
        </div>
      </nav>
      <div class="section__container header__container" id="home">
        <div class="header__image">
          <img src="image/3.JPEG" alt="header" />
        </div>
        <div class="header__content">
          <h4>AWAIS ALI</h4>
          <h1>Hi, I am AWAIS ALI.<br>This Is My Portfolio!</h1>
          <p>
            I'm a dedicated web developer with a creative flair and a penchant
            for turning lines of code into captivating online experiences.
          </p><br>
          <p>CONTACT #</p>
          <button class="btn">+92 3176440090</button>
        </div>
      </div>
    </header>

    <section class="section__container about__container" id="about">
      <div class="about__image">
        <img src="image/1.jpg" alt="about" />
      </div>
      <div class="about__content">
        <h2 class="section__header">Hi There, I'm AWAIS ALI</h2>
        <p>
          A passionate web developer with a creative flair and a knack for
          turning visions into reality. My journey in web development began with
          a for coding and design, and it has evolved into a career
          where I blend aesthetics with functionality.
        </p>
        <h4>
          With a focus on user experience and a commitment to staying updated
          with the latest industry trends, I'm dedicated to creating web
          solutions that not only meet but exceed expectations.
        </h4>
        <div class="about__btns">
          <a href="image/2.JPG" download class="download__btn">
            Download CV
          </a>
         
            </div>
      </div>
    </section>

    <section class="section__container banner__container">
      
      <div class="banner__card">
        <span><i class="ri-checkbox-line"></i></span>
        <div>
          <h4>MY PRIORITY</h4>
          <p>
            To give my 100% in my work and to client expectation 
          </p>
        </div>
      </div>
    </section>
    <section class="section__container service__container" id="service">
      
      <h2 class="section__header">MY SKILLS</h2>
      <p class="section__description">
        I'm specialize in a wide range of web development services designed to
        transform your vision into reality.
      </p>
      <div class="service__grid">
        <div class="service__card">
          <span><i class="ri-window-fill"></i></span>
          <h4>HTML</h4>
          
        </div>
        <div class="service__card">
          <span><i class="ri-store-line"></i></span>
          <h4>CSS</h4>
         
        </div>
        <div class="service__card">
          <span><i class="ri-smartphone-line"></i></span>
          <h4>MYSQL</h4>
          
        </div>
        <div class="service__card">
          <span><i class="ri-share-fill"></i></span>
          <h4>PHP</h4>
          
        </div>
        
      </div>
    </section>


    
   
    <section class="section__container client__container" id="client">
    
      <h2 class="section__header">EXPERIENCE</h2>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="client__card">
              
              <div>
                <p>
               

# My primary responsibility is to develop excelent webpages and
enhance the expectation of my client . <br><br>
# Now a days iam working on HTML , CSS . <br> <br>
# I previously completed a 3-month course from Aptech
learning institute, where I learned how to design
websites and implement of different languages using vs code
                </p>
                <h4> Currently With Aptech Institute</h4>
                <div class="client__ratings">
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-half-fill"></i></span>
                  <span><i class="ri-star-line"></i></span>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      </div>



      <h2 class="section__header">EDUCATION</h2>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="client__card">
              
              <div>
                <p>
               #  Govt degree boys college Gulistan e jauhar <br>
Computer Science · (August 2022 - May 2024) <br><br>
# Standard Grammar School
Computer Science <br><br>
</p>
                <h4># Recently Join Aptech Institute</h4>
                
              </div>
            </div>
          </div>
          
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </section>


    <section class="section__container contact__container" id="contact">
      <p class="section__subheader">Contact </p>
      <h2 class="section__header">Get In Touch</h2>
      <form action="connect.php" method="post" class="contact__form">
        <div class="input__row">
          <input type="text" placeholder="Your Name" name="name">
          <input type="text" placeholder="Company Name" name="company_name">
        </div>
        <input type="text" placeholder="Your Contact" name="contact" >
        <input type="text" placeholder="Email" required name="email">
        <input type="text" placeholder="Description about work" name="description" >
        <button type="submit" name="submit" class="btn">submit</button>
      </form>
    </section>

    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <h5><a href="#">AWAIS ALI</a></h5>
          <p>
            I'm a dedicated web developer with a creative flair and a penchant
            for turning lines of code into captivating online experiences.
          </p>
          
        </div>
        <div class="footer__col">
          <h4>Services</h4>
          <div class="footer__links">
            <a href="#">Web Design</a>
           
            <a href="#">Web Development</a>
          </div>
        </div>
        <div class="footer__col">
          <h4>Support</h4>
          <div class="footer__links">
            <a href="#">Contact</a>
            <a href="#">My Blog</a>
            <a href="#">Privacy Policy</a>
          </div>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 Web Design Mastery. All rights reserved.
      </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    

    
  </body>
</html>