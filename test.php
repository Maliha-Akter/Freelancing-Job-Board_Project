<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="test.css">
    <title>Document</title>
</head>

<body >
    <div class="testi-root">
        <div id="page" class="site">
            <div class="container-user">
                <div class="testi">
                    <div class="head-user">
                        <h3 class="h3-user">Testimonials</h3>
                        <p>See what people are saying...</p>
                    </div>
                    <div class="body swiper">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <div class="wrapper">
                                    <div class="thumbnail">
                                        <img src="images/user1.jpg" alt="">
                                    </div>
                                    <div class="aside">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="name">
                                            <h4 class="h4-user">John Doe</h4>
                                            <p>Graphic Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="wrapper">
                                    <div class="thumbnail">
                                        <img src="images/user2.jpg" alt="">
                                    </div>
                                    <div class="aside">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="name">
                                        <h4 class="h4-user">John Doe</h4>
                                            <p>Graphic Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="wrapper">
                                    <div class="thumbnail">
                                        <img src="images/user3.jpg" alt="">
                                    </div>
                                    <div class="aside">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="name">
                                        <h4 class="h4-user">John Doe</h4>
                                            <p>Graphic Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="wrapper">
                                    <div class="thumbnail">
                                        <img src="images/user4.jpg" alt="">
                                    </div>
                                    <div class="aside">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="name">
                                        <h4 class="h4-user">John Doe</h4>
                                            <p>Graphic Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="wrapper">
                                    <div class="thumbnail">
                                        <img src="images/user5.jpg" alt="">
                                    </div>
                                    <div class="aside">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="name">
                                        <h4 class="h4-user">John Doe</h4>
                                            <p>Graphic Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Add more slides as needed -->
                        </ul>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Navigation -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            autoHeight: true,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false, // Adjust the delay (in milliseconds) as needed
            },
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>


</body>

</html>