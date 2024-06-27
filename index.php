<!DOCTYPE html>
<html lang="en" class="index-page">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Freelancer Job Board</title>
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="Card.css">
  <link rel="stylesheet" href="test.css">
  <link rel="stylesheet" href="cd.css">
  <link rel="stylesheet" href="ai.css">
  <link rel="stylesheet" href="chatbot.css">
  <link rel="stylesheet" href="working-div.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-0 shadow-sm sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Freelancer Job Board</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="#">How It Works</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="#">Contact Us</a>
            </li>
          </ul>
          <div class="d-flex align-items-center">
            <!-- Search button to toggle search bar -->
            <button id="toggleSearch" class="btn btn-light shadow-none me-2">
              <i class="bi bi-search"></i> <a href="job-container.html"> Search</a>

            </button>
            <!-- Search input initially hidden -->
            <div id="searchContainer" class="input-group me-2" style="display: none;">


            </div>
            <!-- Notification button with dropdown (placeholder) -->
            <!-- <div class="dropdown me-3">
              <button class="btn btn-light shadow-none" type="button" id="notificationDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-bell"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                <a class="dropdown-item" href="#">Notification 1</a>
                <a class="dropdown-item" href="#">Notification 2</a>
                <a class="dropdown-item" href="#">Notification 3</a>
                
              </div>

            </div> -->

            <!-- Login and Register buttons -->
            <a href="login.php" class="btn  shadow-none me-2">Login</a>
            <a href="registration.php" class="btn  shadow-none">Register</a>

          </div>
        </div>

    </nav>
  </header>
  <main>
    <div class="style-background">

      <div class="row-stylebackground">
        <div class="column-style1 col md-6">
          <img src="man.png">
          <img src="elements.png" class="elements">
        </div>
        <div class="column-style2 col md-6">
          <h1>Creative<br><span class="homepage-span" style="background: linear-gradient(to right, #f32170, #ff6b08,#cf23cf, #eedd44);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;"> marketing</span> agency </h1>
          <p> ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <div class="btn-learn">
            <a href="" class="btn ">Learn More </a> <a href="" class="btn"> or Contact </a>
          </div>
        </div>
      </div>
    </div>
    <div class="big-page">
      <div class="features2">
        <ul>
          <li><a href="#">Jobs</a>
            <ul class="dropdown-nav1">
              <li><a href="">Find a Jobs</a></li>
              <li><a href="">Post a Jobs</a></li>
            </ul>
          </li>
          <li><a href="#">Freelancers</a>
            <ul class="dropdown-nav2">

              <li><a href="#">Search Work</a></li>
              <li><a href="#">How to earn</a></li>
              <li><a href="#"> Skill Catagories
                  <span class="fa fa-plus"></span>
                </a>
                <ul class="catagory-drop">
                  <li><a href="#">Web Developer</a></li>
                  <li><a href="#">UX Designer</a></li>
                  <li><a href="#">Logo Design </a></li>
                  <li><a href="#">App Developer</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Clients</a>
            <ul class="dropdown-nav3">
              <li><a href="#">Hire Freelancer</a></li>
              <li><a href="#">Job Listing</a></li>
              <li><a href="#">Companies</a></li>
            </ul>
          </li>
          <li><a href="#">Services</a>
            <ul class="dropdown-nav4">
              <li><a href="#">Browse A services</a></li>
              <li><a href="#">Post A service</a></li>
              <li><a href="#">How it works</a></li>
              <li><a href="#">About Us</a></li>
            </ul>
          </li>
          <li><a href="#">Contanct Us</a></li>


        </ul>

      </div>

    </div>
    <div class="image-statement">
      <div class="statement-part">
        <div class="column-statement">
          <img src="pic2.jpg" alt="">
        </div>
        <div class="column-statement">
          <p class="statement">Unlock a world of possibilities !</p>
          <p class="statement2"> Explore exciting freelance projects or connect with talented freelancers.
            Start your journey to success with us!</p>
          <div class="get-started">
            <a href="registration.php" class="button-statement">start your journey</a>
          </div>
        </div>
      </div>
    </div>
    <div style="width:100%;  background-image: linear-gradient(to top right, #8B5CF6, #EC4899);">
      <div class="container">
        <div class="slider">
          <div class="item" style="text-align: center; padding-top:150px">
            <a href="test.php" style="background: linear-gradient(to right, #f32170, #ff6b08,#cf23cf, #eedd44);
             -webkit-text-fill-color: transparent;
             -webkit-background-clip: text;border-left:10px solid purple; padding:30px" class="card-link">Testimonial </a>

          </div>
          <div class="item" style="text-align: center; padding-top:150px">
            <a href="#" style="background: linear-gradient(to right, #f32170, #ff6b08,#cf23cf, #eedd44);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;border-left:10px solid purple; padding:30px" class="card-link">About Us </a>
          </div>
          <div class="item" style="text-align: center; padding-top:150px">
            <a href="#" class="card-link" style="background: linear-gradient(to right, #f32170, #ff6b08,#cf23cf, #eedd44);
             -webkit-text-fill-color: transparent;
             -webkit-background-clip: text;border-left:10px solid purple; padding:30px">How It Works</a>
          </div>
          <div class="item" style="text-align: center; padding-top:150px">
            <a href="#" class="card-link" style="background: linear-gradient(to right, #f32170, #ff6b08,#cf23cf, #eedd44);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;border-left:10px solid purple; padding:20px">Top Freelancer Profile </a>
          </div>
          <div class="item" style="text-align: center; padding-top:150px">
            <a href="#" class="card-link" style="background: linear-gradient(to right, #f32170, #ff6b08,#cf23cf, #eedd44);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;border-left:10px solid purple; padding:30px">Catagory</a>
          </div>
          <div class="item" style="text-align: center; padding-top:150px">
            <a href="#" class="card-link" style="background: linear-gradient(to right, #f32170, #ff6b08,#cf23cf, #eedd44);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;border-left:10px solid purple; padding:30px">Job Listing</a>
          </div>
          <button id="next" class="card-button">></button>
          <button id="prev" class="card-button">
            <</button>


        </div>
      </div>
    </div>
    <div class="cd-autoplay">
      <div class="slide-container swiper">
        <div class="slide-content">
          <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/img1.png" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Mohamed Yousef
                </h2>
                <p class="description">The lorem text the section that contains header with having open
                  functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                <button class="button">View More</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/img2.png" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Mohamed Yousef
                </h2>
                <p class="description">The lorem text the section that contains header with having open
                  functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                <button class="button">View More</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/img3.png" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Mohamed Yousef
                </h2>
                <p class="description">The lorem text the section that contains header with having open
                  functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                <button class="button">View More</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/img4.png" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Mohamed Yousef
                </h2>
                <p class="description">The lorem text the section that contains header with having open
                  functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                <button class="button">View More</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/img5.png" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Mohamed Yousef
                </h2>
                <p class="description">The lorem text the section that contains header with having open
                  functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                <button class="button">View More</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/img3.png" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Mohamed Yousef
                </h2>
                <p class="description">The lorem text the section that contains header with having open
                  functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                <button class="button">View More</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/img2.png" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Mohamed Yousef
                </h2>
                <p class="description">The lorem text the section that contains header with having open
                  functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                <button class="button">View More</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/img1.png" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Mohamed Yousef
                </h2>
                <p class="description">The lorem text the section that contains header with having open
                  functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                <button class="button">View More</button>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="images/img3.png" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Mohamed Yousef
                </h2>
                <p class="description">The lorem text the section that contains header with having open
                  functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                <button class="button">View More</button>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <div>
    </div>

    <div class="msg-ai">
      <div class="contain-chat">
        <div class="question1">
          <h1 class="question-1"> Get Instant Answer Of Your Any<br> Question !! <h1>
              <h4>Start a conversation powered by OpenAI technologies.</h4>
        </div>
      </div>
      <div class="container-box">
        <div class="rectangular">
          <p style="text-align: center;"><em>Hi 👋 I'm here to help you up your work game with a little help from AI.</em></p>
          <p style="text-align: center;"><em>But first, are you a client hiring for a project? Or a freelancer looking for work? 👀</em></p>
          <button class="chatbot-button"><a href="ai.php" style="text-decoration: none;color:black">Ask Your All Question Here</a></button>
        </div>
        <div class="triangle"></div>
      </div>
    </div>



    <div class="w-div">
      <h1 class="w-title">How it works</h1>
      <div class="w-img-contain">
        <div class="it-1">
          <div class="des-number" style="width: 200px; height:100px">1</div>
          <img style="width: 200px; height:200px; border-left: 5px solid silver;" src="images/signup-1.png" alt="">
          <div class="des" style="width: 200px; height:100px">Sign Up</div>
        </div>
        <div class="it-2">
          <div class="des-number" style="width: 200px; height:100px;">2</div>
          <img style="width: 200px; height:200px; border-left: 5px solid blue;" src="images/login-1.jpeg" alt="">
          <div class="des" style="width: 200px; height:100px">Log In</div>
        </div>
        <div class="it-3">
          <div class="des-number" style="width: 200px; height:100px">3</div>
          <img style="width: 200px; height:200px; border-left: 5px solid tomato;" src="images/connect.jpeg" alt="">
          <div class="des" style="width: 200px; height:100px;">Connect With Employee</div>
        </div>
      </div>

    </div>
    <div class="client-div">
      <section class="team-container">
        <div class="team-img-container">
          <img src="images/team1.png" alt="">
          <img src="images/team2.png" alt="">
          <img src="images/team3.png" alt="">
          <img src="images/team4.png" alt="">
        </div>
        <div class="team-content">
          <h3 class="team-title"><span style="background: linear-gradient(to right, #f32170, #ff6b08,#cf23cf, #eedd44);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text; font-weight: 500;">Empower Your </span><span style="font-weight: 700;"> Projects </span><span style="background: linear-gradient(to right, #f32170, #ff6b08,#cf23cf, #eedd44);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;font-weight: 700;">
             with Talent</span></h3>
          <p class="description">Embark on your project journey with us! Connect with a diverse pool of skilled professionals ready to bring your vision to life. Post your job now and tap into a network of talented individuals eager to contribute their expertise to your success. Let's build something extraordinary together!</p>
          <button class="btn-primary" style="margin-left:130px; margin-top:50px"><a href="registration.php" style="text-decoration: none; color:white">Post Job</a></button>
        </div>
      </section>

    </div>
    <div class="freelancer-div">
      <section class="features">
        <div class="feature-content">
          <h3 class="black-h"><span style="background: linear-gradient(to right, #f32170, #ff6b08,#cf23cf, #eedd44);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;">Feature you will</span><br> love and enjoy</h3>
          <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam consectetur
            officiis obcaecati iste recusandae voluptas deleniti odit qui quibusdam. Esse, neque similique.
            Voluptatibus ipsum corporis blanditiis nostrum neque nam perspiciatis.There are many variations of
            passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
          <div class="card">
            <h3 style="font-size: 25px;">Dekstop and mobile</h3>
            <p class="description">There are many variations of passages of Lorem Ipsum available,<br> but the
              majority have suffered alteration.</p>
          </div>
          <div class="card">
            <h3 style="font-size: 25px;">Dekstop and mobile</h3>
            <p class="description">There are many variations of passages of Lorem Ipsum available,<br> but the
              majority have suffered alteration.</p>
          </div>

        </div>
        <div class="feature-img">
          <img src="images/architect.png" alt="">
          <div class="ten-years">
            <h2>10+ years</h2>
            <p>Experience</p>
          </div>
        </div>
      </section>
    </div>
    <!-- facts section start -->
    <!-- facts section starts -->
    <section class="facts">
      <h3 class="black-h" style="text-align: center;background: linear-gradient(to right, #f32170, #ff6b08,#cf23cf, #eedd44);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;">Some Facts</h3>
      <p class="description">There are many variations of passages of Lorem Ipsum available, but the majority have
        suffered alteration.</p>
      <div class="fact-card-container">
        <div class="card">
          <img style="padding-left: 30px;width: 150px;
  height: 100px;" src="images/ri1.png" alt="">
          <h2 class="card-start">54</h2>
          <p class="card-title  black-h">Awards Winnings</p>
        </div>
        <div class="card">
          <img style="width: 90px;
  height: 100px;" src="images/icons/projects.png" alt="">
          <h2 class="card-start">1458</h2>
          <p class="card-title  black-h">Project Finished</p>
        </div>
        <div class="card">
          <img style="width: 90px;
  height: 100px;" src="images/icons/customers.png" alt="">
          <h2 class="card-start">590</h2>
          <p class="card-title  black-h">Clients Worked</p>
        </div>
        <div class="card">
          <img style="width: 90px;
  height: 100px;" src="images/icons/email.png" alt="">
          <h2 class="card-start">22578</h2>
          <p class="card-title  black-h">Email Send</p>
        </div>
      </div>
    </section>
    <!-- Sponsors Section -->
    <section class="sponsors">
      <h3 class="black-h" style="background: linear-gradient(to right, #f32170, #ff6b08,#cf23cf, #eedd44);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;">Our Sponsors</h3>
      <p class="description">There are many variations of passages of Lorem Ipsum available,<br> but the majority
        have suffered alteration.</p>
      <div class="sponsors-img-container">
        <img src="images/sponsors/spotify.png" alt="">
        <img src="images/sponsors/amazon.png" alt="">
        <img src="images/sponsors/google.png" alt="">
        <img src="images/sponsors/telerama.png" alt="">
        <img src="images/sponsors/figma.png" alt="">
      </div>

    </section>
    <!-- Chat Icon -->
    <!-- Add this code to your index.php -->
    <div class="ai-chatbot" id="aiChatbot">
      <button class="chatbot-toggler" id="chatbotToggler">
        <span class="material-symbols-rounded">mode_comment</span>
        <span class="material-symbols-outlined">close</span>
      </button>
      <div class="chatbot">
        <header>
          <h2>Chatbot</h2>
          <span class="close-btn material-symbols-outlined" id="closeChatbot">close</span>
        </header>
        <ul class="chatbox">
          <li class="chat incoming">
            <span class="material-symbols-outlined">smart_toy</span>
            <p>Hi there 👋<br>How can I help you today?</p>
          </li>
        </ul>
        <div class="chat-input">
          <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
          <span id="send-btn" class="material-symbols-rounded">send</span>
        </div>
      </div>
    </div>



  </main>

  <footer>
    <div class="footer-column">
      <h3 class="section-title">Lets Connect</h3>
      <p class="section-description">Please fill out the form on this section to contact with me or call between
        9:00 A.M and 8.00 P.M ET, Monday through Friday.</p>
      <div class="social-links">
        <a href=""><img src="images/icons/facebook.png" alt=""></a>
        <a href=""><img src="images/icons/insta.png" alt=""></a>
        <a href=""><img src="images/icons/twitter.png" alt=""></a>
      </div>
    </div>
    <div class="footer-column">
      <h3 class="section-title">Let’s Message Us</h3>
      <form class="contact">
        <input type="text" placeholder="Your Name">
        <input type="email" name="" id="" placeholder="Your Email">
        <textarea name="" id="" placeholder="Message" cols="30" rows="10"></textarea>
        <input class="btn-primary" type="submit" value="submit">
      </form>

    </div>
  </footer>
  <script src="ai.js"></script>
  <script src="Card.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const navbar = document.querySelector('nav');
      const navLinks = document.querySelectorAll('.navbar-nav a');
      const toggleSearch = document.getElementById('toggleSearch');
      const searchContainer = document.getElementById('searchContainer');
      const searchInput = document.getElementById('searchInput');
      const searchButton = document.getElementById('searchButton');

      function updateNavColor(isScrolled) {
        const navbar = document.querySelector('nav');
        const linksToChangeColor = document.querySelectorAll('nav a');

        if (isScrolled) {
          navbar.classList.add('scrolled');
          linksToChangeColor.forEach(link => {
            link.style.color = 'white';
          });
        } else {
          navbar.classList.remove('scrolled');
          linksToChangeColor.forEach(link => {
            link.style.color = 'black';
          });
        }
      }

      window.addEventListener('scroll', function() {
        var navbar = document.querySelector('nav');
        var scrolled = window.scrollY > 0;

        if (scrolled) {
          navbar.classList.add('scrolled');
        } else {
          navbar.classList.remove('scrolled');
        }
      });
      // Toggle search bar visibility
      // toggleSearch.addEventListener('click', function() {
      //   if (searchContainer.style.display === 'none') {
      //     searchContainer.style.display = 'flex';
      //     searchInput.focus();
      //   } else {
      //     searchContainer.style.display = 'none';
      //   }
      // });

      searchButton.addEventListener('click', function() {
        const searchTerm = searchInput.value;
        // You can implement your search logic here
        alert('Searching for: ' + searchTerm);
      });
    });
  </script>

  <script>
    function toggleNotifications() {
      const notificationDropdown = document.getElementById('notificationDropdown');

      // Toggle the display of the notification dropdown
      if (notificationDropdown.style.display === 'none') {
        notificationDropdown.style.display = 'block';
      } else {
        notificationDropdown.style.display = 'none';
      }
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
  <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>

  <script>
    var swiper = new Swiper(".slide-content", {
      slidesPerView: 3,
      spaceBetween: 25,
      loop: true,
      centerSlide: 'true',
      fade: false, // Set fade to false to disable the fade effect
      grabCursor: 'true',
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        520: {
          slidesPerView: 2,
        },
        950: {
          slidesPerView: 3,
        },
      },
    });
  </script>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="working-div.js"></script>

  <script>

  </script>

</body>

</html>