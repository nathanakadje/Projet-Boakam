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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
                                    <li><a href="index">Home</a></li>
                                    <li class="active"><a href="cana-plage-services">Services</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index">Home</a></li>
                                            <li><a href="cana-plage-hotel">Plage</a></li>
                                            <li><a href="cana-plage-rooms">Chambres</a></li>
                                            <li><a href="cana-plage-services">Services</a></li>
                                            <li><a href="contact">Contact</a></li>
                                            {{-- <li><a href="./accueil/about-us.html">About Us</a></li> --}}
                                            {{-- <li><a href="./accueil/blog.html">News</a></li> --}}
                                            {{-- <li><a href="./accueil/elements.html">Elements</a></li> --}}
                                        </ul>
                                    </li>
                                    {{-- <li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="rooms.html">Rooms</a></li>
                                                <li><a href="blog.html">News</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="rooms.html">Rooms</a></li>
                                                <li><a href="blog.html">News</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="rooms.html">Rooms</a></li>
                                                <li><a href="blog.html">News</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="rooms.html">Rooms</a></li>
                                                <li><a href="blog.html">News</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                        </div>
                                    </li> --}}
                                    <li><a href="cana-plage-hotel">Cana Plage</a></li>
                                    <li><a href="cana-plage-rooms">Room</a></li>
                                </ul>

                                <!-- Button -->
                                    {{-- <div class="menu-btn">
                                        <a href="#" class="btn palatin-btn">Make a Reservation</a>
                                    </div> --}}

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
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(./accueil/img/bg-img/bg-8.jpg);">
        <div class="bradcumbContent">
            <h2>Contact</h2>
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

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-information-area">
        <div class="container">
            <div class="row">

                <!-- Single Contact Information -->
                {{-- <div class="col-12 col-lg-4">
                    <div class="single-contact-information mb-100">
                        <div class="section-text">
                            <h3>Aidjan</h3>
                            <p>Ahua non loin du Lycée Municipal.</p>
                        </div>
                        <!-- Single Contact Information -->
                        <div class="contact-content d-flex">
                            <p>Address</p>
                            <p>Canaan Plage <br></p>
                        </div>
                        <!-- Single Contact Information -->
                        <div class="contact-content d-flex">
                            <p>Phone</p>
                            <p>225 0140262267</p>
                        </div>
                        <!-- Single Contact Information -->
                        <div class="contact-content d-flex">
                            <p>E-mail</p>
                            <p>yourmail@gmail.com</p>
                        </div>
                    </div>
                </div> --}}

                <!-- Single Contact Information -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-information mb-100">
                        <div class="section-text">
                            <h3>Abidjan</h3>
                            {{-- <p>Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Integer tempus ligula sem.</p> --}}
                        </div>
                        <!-- Single Contact Information -->
                        {{-- <div class="contact-content d-flex">
                            <p>Address</p>
                            <p>245 Principe Lane <br> </p>
                        </div> --}}
                        <!-- Single Contact Information -->
                        <div class="contact-content d-flex">
                            <p>Phone</p>
                            <p>+225 07 79 74 12 38</p>
                        </div>
                        <!-- Single Contact Information -->
                        <div class="contact-content d-flex">
                            <p>E-mail</p>
                            <p>christakadje20@gmail.com</p>
                        </div>
                    </div>
                </div>

                <!-- Single Contact Information -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-information mb-100">
                        <div class="section-text">
                            <h3>Jacqueville</h3>
                            {{-- <p>Ahua non loin du Lycée Municipal.</p> --}}
                        </div>
                        <!-- Single Contact Information -->
                        {{-- <div class="contact-content d-flex">
                            <p>Address</p>
                            <p>Lycée Municipal<br></p>
                        </div> --}}
                        <!-- Single Contact Information -->
                        <div class="contact-content d-flex">
                            <p>Phone</p>
                            <p>+225 0140262267</p>
                        </div>
                        <!-- Single Contact Information -->
                        <div class="contact-content d-flex">
                            <p>E-mail</p>
                            <p>bokamtchemartin48@gmail.com</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Contact Form Area Start ##### -->
    <section class="contact-form-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <div class="line-"></div>
                        <h2>Contactez-nous</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form -->        
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                    <form action="{{ route('subjects.subject') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                            </div>
                            <div class="col-lg-4">
                                <input type="email" class="form-control" name="email" placeholder="E-mail">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="subject" placeholder="Sujet de votre message">
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn palatin-btn mt-50">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Form Area End ##### -->

    <!-- ##### Google Maps ##### -->
    {{-- <div class="map-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137" allowfullscreen></iframe>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.3931255646485!2d-4.429588725943543!3d5.2007435371217525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc02d6561d794dd%3A0x36855d71801e78fc!2sCana%20Plage!5e0!3m2!1sfr!2sci!4v1738703709057!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-lg-5">
                    <div class="footer-widget-area mt-50">
                        <a href="#" class="d-block mb-5"><img src="./accueil/img/core-img/logo.png" alt=""></a>
                        {{-- <p style="visibility: hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p> --}}
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
                        <h6 class="widget-title mb-5">Subscribe to our newsletter</h6>
                        <form action="#" method="post" class="subscribe-form">
                            <input type="email" name="subscribe-email" id="subscribeemail" placeholder="Your E-mail">
                            <button type="submit">S'inscrire</button>
                        </form>
                    </div>
                </div>

                <!-- Copywrite Text -->
                <div class="col-12">
                    <div class="copywrite-text mt-30">
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Akam Group</a>
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