<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>The Palatin - Hotel &amp; Resort Template</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="./accueil/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="./accueil/style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="palatin-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="palatinNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><img src="./accueil/img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="index">Home</a></li>
                                    <li><a href="/about-us">About Us</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index">Hotel</a></li>
                                            {{-- <li><a href="./accueil/about-us.html">About Us</a></li> --}}
                                           <li> <a href="cana">Cana Plage</a></li>
                                            <li><a href="canaanservices"> Cana Services</a></li>
                                            <li><a href="canaanrooms"> Nos Chambres</a></li>
                                            {{-- <li><a href="./accueil/blog.html">News</a></li> --}}
                                            <li><a href="contact">Nos Contact</a></li>
                                            {{-- <li><a href="./accueil/elements.html">Elements</a></li> --}}
                                        </ul>
                                    </li>
                                    {{-- <li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index">HÔTEL</a></li>
                                                <li><a href="canaan">Canaan Plage</a></li>
                                                <li><a href="canaanservices">Services</a></li>
                                                <li><a href="canaanrooms">Chambres</a></li>
                                                <li><a href="./accueil/blog.html">News</a></li>
                                                <li><a href="./accueil/contact.html">Contact</a></li>
                                                <li><a href="./accueil/elements.html">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="./accueil/index.html">Home</a></li>
                                                <li><a href="./accueil/about-us.html">About Us</a></li>
                                                <li><a href="./accueil/services.html">Services</a></li>
                                                <li><a href="./accueil/rooms.html">Rooms</a></li>
                                                <li><a href="./accueil/blog.html">News</a></li>
                                                <li><a href="./accueil/contact.html">Contact</a></li>
                                                <li><a href="./accueil/elements.html">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="./accueil/index.html">Home</a></li>
                                                <li><a href="./accueil/about-us.html">About Us</a></li>
                                                <li><a href="./accueil/services.html">Services</a></li>
                                                <li><a href="./accueil/rooms.html">Rooms</a></li>
                                                <li><a href="./accueil/blog.html">News</a></li>
                                                <li><a href="./accueil/contact.html">Contact</a></li>
                                                <li><a href="./accueil/elements.html">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="./accueil/index.html">Home</a></li>
                                                <li><a href="./accueil/about-us.html">About Us</a></li>
                                                <li><a href="./accueil/services.html">Services</a></li>
                                                <li><a href="./accueil/rooms.html">Rooms</a></li>
                                                <li><a href="./accueil/blog.html">News</a></li>
                                                <li><a href="./accueil/contact.html">Contact</a></li>
                                                <li><a href="./accueil/elements.html">Elements</a></li>
                                            </ul>
                                        </div>
                                    </li> --}}
                                    {{-- <li><a href="canaanservices">Services</a></li> --}}
                                    <li><a href="contact">Contact</a></li>
                                </ul>

<!-- Modal Pour le formulaire -->
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(./accueil/img/bg-img/dev.jpg);">
        <div class="bradcumbContent">
            <h2>The Palatin</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Book Now Area Start ##### -->
    <div class="book-now-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="book-now-form">
                        {{-- <form action="#">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select1">Check In</label>
                                <select class="form-control" id="select1">
                                  <option>19 June</option>
                                  <option>20 June</option>
                                  <option>21 June</option>
                                  <option>22 June</option>
                                  <option>23 June</option>
                                  <option>24 June</option>
                                  <option>25 June</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select2">Check Out</label>
                                <select class="form-control" id="select2">
                                  <option>20 June</option>
                                  <option>21 June</option>
                                  <option>22 June</option>
                                  <option>23 June</option>
                                  <option>24 June</option>
                                  <option>25 June</option>
                                  <option>26 June</option>
                                  <option>27 June</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select3">Adults</label>
                                <select class="form-control" id="select3">
                                  <option>02</option>
                                  <option>03</option>
                                  <option>04</option>
                                  <option>05</option>
                                  <option>06</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select4">Childrens</label>
                                <select class="form-control" id="select4">
                                  <option>01</option>
                                  <option>02</option>
                                  <option>03</option>
                                  <option>04</option>
                                  <option>05</option>
                                </select>
                            </div>

                            <!-- Button -->
                            <button type="submit">Book Now</button>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Book Now Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-text mb-100">
                        <div class="section-heading">
                            <div class="line-"></div>
                            <h2>Faites-nous confiance</h2>
                        </div>
                        <p>Vous avez un projet de site web ou d'application ? Notre équipe de développeurs passionnés crée des solutions modernes, performantes et adaptées à vos besoins. Que ce soit pour une vitrine, un e-commerce ou un projet sur-mesure, nous vous accompagnons de A à Z. Design soigné, performance optimale et sécurité garantie ! Contactez-nous dès maintenant pour concrétiser vos idées ! 💡✨</p>
                        {{-- <a href="#" class="btn palatin-btn mt-50">Read More</a> --}}
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail mb-100">
                        <img src="./accueil/img/bg-img/devs.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Milestones Area Start ##### -->
    <section class="our-milestones section-padding-100-0 bg-img bg-overlay bg-fixed" >
        
    </section>
    <!-- ##### Milestones Area End ##### -->

    <!-- ##### Hotels Area Start ##### -->
    
    <!-- ##### Rooms Area End ##### -->

    <!-- ##### Testimonial Area Start ##### -->
    {{-- <section class="testimonial-area section-padding-100 bg-img" style="background-image: url(./accueil/img/core-img/pattern.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-content">
                        <div class="section-heading text-center">
                            <div class="line-"></div>
                            <h2>What Clients Say</h2>
                        </div>
                        
                        <!-- Testimonial Slides -->
                        <div class="testimonial-slides owl-carousel">
                            
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                <h6>Michael Smith, <span>Client</span></h6>
                                <img src="./accueil/img/core-img/trip.png" alt="">
                            </div>
                            
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                <h6>Nazrul Islam, <span>Developer</span></h6>
                                <img src="./accueil/img/core-img/trip.png" alt="">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ##### Testimonial Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-lg-5">
                    <div class="footer-widget-area mt-50">
                        <a href="#" class="d-block mb-5"><img src="./accueil/img/core-img/logo.png" alt=""></a>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p> --}}
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer-widget-area mt-50">
                        {{-- <h6 class="widget-title mb-5">Find us on the map</h6>
                        <img src="./accueil/img/bg-img/footer-map.png" alt=""> --}}
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-widget-area mt-50">
                        <h6 class="widget-title mb-5">Abonnez-vous à notre newsletter</h6>
                        <form action="{{ route('email.emails') }} " method="POST" class="subscribe-form">
                            @csrf
                            <input type="email" name="email" id="subscribeemail" placeholder="Votre E-mail">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>

                <!-- Copywrite Text -->
                <div class="col-12">
                    <div class="copywrite-text mt-30">
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">Akam Group</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
   <!-- jQuery-2.2.4 js -->
   <script src="./accueil/js/jquery/jquery-2.2.4.min.js"></script>
   <!-- Popper js -->
   <script src="./accueil/js/bootstrap/popper.min.js"></script>
   <!-- Bootstrap js -->
   <script src="./accueil/js/bootstrap/bootstrap.min.js"></script>
   <!-- All Plugins js -->
   <script src="./accueil/js/plugins/plugins.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
   <!-- Active js -->
   <script src="./accueil/js/active.js"></script>
   <script src="./accueil/js/app.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
   
</body>

</html>