<?php 

include "config/koneksi.php";

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Web P5 | List member</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap" rel="stylesheet">
                        
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/bootstrap-icons.css">

        <link rel="stylesheet" href="css/owl.carousel.min.css">
        
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <link href="css/templatemo-pod-talk.css" rel="stylesheet">
<!--

TemplateMo 584 Pod Talk

https://templatemo.com/tm-584-pod-talk

-->
    </head>
    
    <body>

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand me-lg-5 me-0" href="index.html">
                        <img src="images/logofinalbanget-removebg-preview.png" class="logo-image img-fluid" alt="templatemo pod talk">
                    </a>

                    <form action="#" method="get" class="custom-form search-form flex-fill me-3" role="search">
                        <div class="input-group input-group-lg">    
                            <input name="search" type="search" class="form-control" id="search" placeholder="Search Podcast" aria-label="Search">

                            <button type="submit" class="form-control" id="submit">
                                <i class="bi-search"></i>
                            </button>
                        </div>
                    </form>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="listing-page.php">Our Member</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                        </ul>

                        <div class="ms-4">
                            <a href="#section_1" class="btn custom-btn custom-border-btn smoothscroll">Get started</a>
                        </div>
                    </div>
                </div>
            </nav>
            

             <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">

                            <h2 class="mb-0">List Member</h2>
                        </div>

                    </div>
                </div>
            </header>

            <section class="trending-podcast-section section-padding pt-0" >
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12" id="section_1">
                            <div class="section-title-wrap mb-5">
                                <h4 class="section-title">About Member</h4>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0" id="vigo">
                            <div class="custom-block custom-block-full">
                                <div class="custom-block-image-wrap">
                                    <a href="vigo.php">
                                        <img src="images/vigo-list.jpg" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="custom-block-info" >
                                    <h5 class="mb-2">
                                        <a href="vigo.php">
                                            Vigo
                                        </a>
                                    </h5>

                                    <div class="profile-block d-flex">
                                        <img src="images/ppicture/vigo.png" class="profile-block-image img-fluid" alt="">

                                        <p>
                                            Yanuar First Giovin
                                            <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                            <strong>Leader</strong></p>
                                    </div>

                                    <p class="mb-0">"If I’m going to die anyway, at least I’ll die trying" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     -Aslan</p>

                                    <div class="custom-block-bottom d-flex justify-content-between mt-3">

                                        <a href="#" class="bi-heart me-1">
                                            <span>2.5M</span>

                                        <a href="#" class="bi-chat me-1">
                                            <span>924k</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="social-share d-flex flex-column ms-auto">
                                    <a class="badge ms-auto">
                                        <span class="bi bi-heart love-icon" data-id="1"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0" id="dika">
                            <div class="custom-block custom-block-full">
                                <div class="custom-block-image-wrap">
                                    <a href="dika.php">
                                        <img src="images/dika-list.jpg" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="custom-block-info" >
                                    <h5 class="mb-2">
                                        <a href="dika.php">
                                            Dika
                                        </a>
                                    </h5>
                                    <div class="profile-block d-flex">
                                        <img src="images/ppicture/dika.png" class="profile-block-image img-fluid" alt="">

                                       <p>
                                        Andika Praditya
                                        <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                        <strong>FrontEnd</strong></p>
                                    </div>
                                    <p class="mb-0">"This is your life and its ending one moment at a time."</p>

                                    <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                       
                                        <a href="#" class="bi-heart me-1">
                                            <span>100k</span>
                                        </a>

                                        <a href="#" class="bi-chat me-1">
                                            <span>92k</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="social-share d-flex flex-column ms-auto" id="kevin">
                                    <a class="badge ms-auto">
                                        <span class="bi bi-heart love-icon" data-id="2"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="custom-block custom-block-full">
                                <div class="custom-block-image-wrap">
                                    <a href="kevin.php">
                                        <img src="images/kevin-list.jpg" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="custom-block-info" >
                                    <h5 class="mb-2">
                                        <a href="kevin.php">
                                            Kevin
                                        </a>
                                    </h5>

                                    <div class="profile-block d-flex">
                                        <img src="images/ppicture/kevin.png" class="profile-block-image img-fluid" alt="">

                                        <p>
                                            Kevin Timothy Adiel
                                            <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                            <strong>BackEnd</strong></p>
                                    </div>

                                    <p class="mb-0">"This Is Your First Life, It's Okay To Make Some Mistakes.."</p>

                                    <div class="custom-block-bottom d-flex justify-content-between mt-3">

                                        <a href="#" class="bi-heart me-1">
                                            <span>999M</span>
                                        </a>

                                        <a href="#" class="bi-chat me-1">
                                            <span>99M</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="social-share d-flex flex-column ms-auto">
                                    <a class="badge ms-auto">
                                        <span class="bi bi-heart love-icon" data-id="3"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0 space" id="rasya">
                            <div class="custom-block custom-block-full">
                                <div class="custom-block-image-wrap">
                                    <a href="rasya.php">
                                        <img src="images/rasya-list.jpg" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="custom-block-info" >
                                    <h5 class="mb-2">
                                        <a href="rasya.php">
                                            Rasya
                                        </a>
                                    </h5>

                                    <div class="profile-block d-flex">
                                        <img src="images/ppicture/rasya.png" class="profile-block-image img-fluid" alt="">

                                        <p>
                                            Rasya Putra Pratama
                                            <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                            <strong>BackEnd</strong></p>
                                    </div>

                                    <p class="mb-0">"Without Music, Life Would Be a Mistake."</p>
                                    <div class="custom-block-bottom d-flex justify-content-between mt-3">

                                        <a href="#" class="bi-heart me-1 color-fill">
                                            <span>100M</span>
                                        </a>

                                        <a href="#" class="bi-chat me-1">
                                            <span>924k</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="social-share d-flex flex-column ms-auto">
                                    <a class="badge ms-auto">
                                        <span class="bi bi-heart love-icon" data-id="4"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0 space" id="ravi">
                            <div class="custom-block custom-block-full">
                                <div class="custom-block-image-wrap">
                                    <a href="ravi.php">
                                        <img src="images/ravi-list.jpg" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="custom-block-info">
                                    <h5 class="mb-2">
                                        <a href="ravi.php">
                                            Ravi
                                        </a>
                                    </h5>

                                    <div class="profile-block d-flex">
                                        <img src="images/ppicture/ravi.png" class="profile-block-image img-fluid" alt="">

                                        <p>
                                            Ravi Achmad Fadilah
                                            <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                            <strong>BackEnd</strong></p>
                                    </div>

                                    <p class="mb-0">"Mankind's Greatest Fear</p>
                                    <p class="mb-0">Is Mankind Itself."</p>

                                    <div class="custom-block-bottom d-flex justify-content-between mt-3">

                                        <a href="#" class="bi-heart me-1">
                                            <span>2.5k</span>
                                        </a>

                                        <a href="#" class="bi-chat me-1">
                                            <span>924k</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="social-share d-flex flex-column ms-auto">
                                    <a class="badge ms-auto">
                                        <span class="bi bi-heart love-icon" data-id="5"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0 space" id="satya">
                            <div class="custom-block custom-block-full">
                                <div class="custom-block-image-wrap">
                                    <a href="satya.php">
                                        <img src="images/satyaa-list.jpg" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="custom-block-info">
                                    <h5 class="mb-2">
                                        <a href="satya.php">
                                            Satya
                                        </a>
                                    </h5>

                                    <div class="profile-block d-flex">
                                        <img src="images/ppicture/satya.png" class="profile-block-image img-fluid" alt="">

                                        <p>
                                            Satya Rizky Nugraha
                                            <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                            <strong>BackEnd</strong></p>
                                    </div>

                                    <p class="mb-0">"Alea iacta est"</p>
                                    <p class="mb-0">"The Dice Has Been Thrown"</p>
                                    <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                        <a href="#" class="bi-heart me-1">
                                            <span>29M</span>
                                        </a>

                                        <a href="#" class="bi-chat me-1">
                                            <span>25M</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="social-share d-flex flex-column ms-auto">
                                    <a class="badge ms-auto">
                                        <span class="bi bi-heart love-icon" data-id="6"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0 space" id="radit">
                            <div class="custom-block custom-block-full">
                                <div class="custom-block-image-wrap">
                                    <a href="radit.php">
                                        <img src="images/radit-list.jpg" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="custom-block-info">
                                    <h5 class="mb-2">
                                        <a href="radit.php">
                                            Radit
                                        </a>
                                    </h5>

                                    <div class="profile-block d-flex">
                                        <img src="images/ppicture/radit.png" class="profile-block-image img-fluid" alt="">

                                        <p>
                                            Radithya Al Fakhri Wibowo
                                            <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                            <strong>FrontEnd</strong></p>
                                    </div>

                                    <p class="mb-0">"There is no right or wrong, only power and the will to wield it."</p>

                                    <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                        <a href="#" class="bi-heart me-1">
                                            <span>6.9M</span>
                                        </a>

                                        <a href="#" class="bi-chat me-1">
                                            <span>420K</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="social-share d-flex flex-column ms-auto">
                                    <a class="badge ms-auto">
                                        <span class="bi bi-heart love-icon" data-id="7"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0 space" id="al">
                            <div class="custom-block custom-block-full">
                                <div class="custom-block-image-wrap">
                                    <a href="al.php">
                                        <img src="images/al-list.jpg" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="custom-block-info">
                                    <h5 class="mb-2">
                                        <a href="al.php">
                                            Almovic
                                        </a>
                                    </h5>

                                    <div class="profile-block d-flex">
                                        <img src="images/ppicture/al.png" class="profile-block-image img-fluid" alt="">

                                        <p>
                                            Hidjrah Zlatan Almovic
                                            <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                            <strong>FrontEnd</strong>
                                        </p>
                                    </div>

                                    <p class="mb-0">"I don't love anything in this world as well as you~ Is that Weird?"</p>

                                    <div class="cu999m-block-bottom d-flex justify-content-between mt-3">

                                       <a href="#" class="bi-heart me-1">
                                            <span>99M</span>
                                        </a>
                                        
                                        <a href="#" class="bi-chat me-1">
                                            <span>999M</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="social-share d-flex flex-column ms-auto">
                                    <a class="badge ms-auto">
                                        <span class="bi bi-heart love-icon" data-id="8"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 space" id="yazid">
                            <div class="custom-block custom-block-full">
                                <div class="custom-block-image-wrap">
                                    <a href="yazid.php">
                                        <img src="images/yazid-list.jpg" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="custom-block-info" >
                                    <h5 class="mb-2">
                                        <a href="yazid.php">
                                            Yazid
                                        </a>
                                    </h5>

                                    <div class="profile-block d-flex">
                                        <img src="images/ppicture/yazid.png" class="profile-block-image img-fluid" alt="">

                                        <p>
                                            Yazid AL-Baihaqi
                                            <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                            <strong>FrontEnd</strong></p>
                                    </div>

                                    <p class="mb-0">"I'll be friend everyone, no matter what kind of person they are"</p>

                                    <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                        <a href="#" class="bi-heart me-1">
                                            <span>100T</span>
                                        <a href="#" class="bi-chat me-1">
                                            <span>924k</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="social-share d-flex flex-column ms-auto">
                                    <a class="badge ms-auto">
                                        <span class="bi bi-heart love-icon" data-id="9"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>


        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <div class="subscribe-form-wrap">
                            <h6>Subscribe. Every weekly.</h6>

                            <form class="custom-form subscribe-form" action="#" method="get" role="form">
                                <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]@[^ @]" class="form-control" placeholder="Email Address" required="">

                                <div class="col-lg-12 col-12">
                                    <button type="submit" class="form-control" id="submit">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-md-0 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Contact</h6>

                        <p class="mb-2"><strong class="d-inline me-2">Phone:</strong>+6282256922172</p>

                        <p>
                            <strong class="d-inline me-2">Email:</strong>
                            <a href="#">ynnuarr77@gmail.com</a> 
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">

                            <div class="d-flex flex-wrap">
                                
                            </div>
                        

                        <h6 class="site-footer-title mb-3">Social</h6>

                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="https://www.instagram.com/yn_nuar/" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://wa.me/+6282256922172" class="social-icon-link bi-whatsapp"></a>
                            </li>
                        </ul>
                        <br>
                        <p class="copyright-text mb-0">Copyright © 2024 SIGMA CORPS</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>