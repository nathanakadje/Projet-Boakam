<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
                        <a href="./accueil/index.html" class="nav-brand"><img src="./accueil/img/core-img/logo.png" alt=""></a>

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
                                    <li class="active"><a href="./accueil/index.html">Home</a></li>
                                    <li><a href="./accueil/about-us.html">About Us</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index">Home</a></li>
                                            <li><a href="./accueil/about-us.html">About Us</a></li>
                                            <li><a href="./accueil/services.html">Services</a></li>
                                            <li><a href="./accueil/rooms.html">Rooms</a></li>
                                            <li><a href="./accueil/blog.html">News</a></li>
                                            <li><a href="./accueil/contact.html">Contact</a></li>
                                            <li><a href="./accueil/elements.html">Elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index">HÔTEL</a></li>
                                                <li><a href="canaan">Canaan Plage</a></li>
                                                <li><a href="canaanservices">Services</a></li>
                                                <li><a href="./accueil/rooms.html">Rooms</a></li>
                                                <li><a href="./accueil/blog.html">News</a></li>
                                                <li><a href="./accueil/contact.html">Contact</a></li>
                                                <li><a href="./accueil/elements.html">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="./accueil/index.html">Residences</a></li>
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
                                    </li>
                                    <li><a href="canaanservices">Services</a></li>
                                    <li><a href="./accueil/contact.html">Contact</a></li>
                                </ul>

                                <!-- Button -->
                                <div class="menu-btn">
                                    <a href="#" class="btn palatin-btn" data-bs-toggle="modal" data-bs-target="#reservationModal"> Reservation</a>
                                </div>
         

<!-- Modal Pour le formulaire -->
<div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reservationModalLabel">Réservation de chambre</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif
                <form id="reservationForm" action="{{ route('reservations.store') }}" method="POST" >
                    @csrf
                    <div class="alert alert-danger d-none" id="errorLegend" role="alert">
                        En cas d'erreur, veuillez nous contacter au 0779741238.
                    </div>
                    <div class="mb-3">
                        {{-- <label for="name" class="form-label">Nom complet</label> --}}
                        <input type="text" class="form-control" id="name" placeholder="Nom et Prénom" name="name" >
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        {{-- <label for="email" class="form-label">Email</label> --}}
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" >
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        {{-- <label for="phone" class="form-label">Téléphone</label> --}}
                        <input type="tel" class="form-control" id="phone" placeholder=" Contact Ex: 07xxxxxxxx" name="phone" >
                        <div class="invalid-feedback"></div>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="room_type" class="form-label">Type de chambre</label>
                        <select class="form-control" id="room_type" name="room_type" style="width: 100%;" required>
                            <option value="">Sélectionnez...</option>
                            <option value="simple">Chambre Simple</option>
                            <option value="double">Chambre Double</option>
                        </select>
                    </div> --}}

                    <div class="mb-3">
                        <label for="check_in" class="form-label">Date d'arrivée</label>
                        <input type="date" class="form-control" id="check_in" name="check_in" >
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        <label for="check_out" class="form-label">Date de départ</label>
                        <input type="date" class="form-control" id="check_out" name="check_out" >
                        <div class="invalid-feedback"></div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary btn-sm">Réserver</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(./accueil/img/bg-img/003.JPG);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">The Vacation Heaven</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Découvrez une escapade idyllique où le luxe rencontre la sérénité. Profitez d'un séjour inoubliable avec des chambres élégantes, des vues à couper le souffle, et des services exceptionnels pour des vacances parfaites.</p>
                                <a href="#" class="btn palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(./accueil/img/bg-img/bg-02.jpeg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">A place to remember</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Vivez une expérience inoubliable dans notre hôtel, où élégance, confort et moments précieux se rencontrent. Un séjour qui restera gravé dans votre mémoire pour toujours.</p>
                                <a href="#" class="btn palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(./accueil/img/bg-img/bg-03.jpeg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">Enjoy your life</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Découvrez un havre de paix où confort et élégance se rencontrent. Profitez d’un séjour inoubliable dans nos hôtel et résidences, conçu pour offrir des expériences uniques et mémorables.</p>
                                <a href="#" class="btn palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Book Now Area Start ##### -->
    {{-- <div class="book-now-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="book-now-form">
                        <form action="#">
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ##### Book Now Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-6">
                    <div class="about-text text-center mb-100">
                        <div class="section-heading text-center">
                            <div class="line-"></div>
                            <h2>A place to remember</h2>
                        </div>
                        <p>Vivez une expérience inoubliable dans notre hôtel, où élégance, confort et moments précieux se rencontrent. Un séjour qui restera gravé dans votre mémoire pour toujours.</p>
                        <div class="about-key-text">
                            <h6><span class="fa fa-check"></span> Des séjours inoubliables</h6>
                            <h6><span class="fa fa-check"></span> Laissez-vous emporter par l'élégance et le charme intemporel</h6>
                        </div>
                        <a href="#" class="btn palatin-btn mt-50">Read More</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail homepage mb-100">
                        <!-- First Img -->
                        <div class="first-img wow fadeInUp" data-wow-delay="100ms">
                            <img src="./accueil/img/bg-img/07.jpeg" alt="">
                        </div>
                        <!-- Second Img -->
                        <div class="second-img wow fadeInUp" data-wow-delay="300ms">
                            <img src="./accueil/img/bg-img/06.jpeg" alt="">
                        </div>
                        <!-- Third Img-->
                        {{-- <div class="third-img wow fadeInUp" data-wow-delay="500ms">
                            <img src="./accueil/img/bg-img/05.jpeg" alt="">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Pool Area Start ##### -->
    <section class="pool-area section-padding-100 bg-img bg-fixed" style="background-image: url(./accueil/img/bg-img/004.jpeg);">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-7">
                    <div class="pool-content text-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="section-heading text-center white">
                            <div class="line-"></div>
                            <h2>Infinity Pool</h2>
                            <p>Découvrez l’élégance ultime avec notre piscine à débordement offrant une vue imprenable. Plongez dans une expérience inoubliable de détente et de raffinement.</p>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-cocktail-1"></i>
                                    <p>Pool Beachbar</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-swimming-pool"></i>
                                    <p>Infinity Pool</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-beach"></i>
                                    <p>Sunbeds</p>
                                </div>
                            </div>
                        </div>
                        <!-- Button -->
                        <a href="#" class="btn palatin-btn mt-50">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Pool Area End ##### -->

    <!-- ##### Rooms Area Start ##### -->
    <section class="rooms-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Réservez votre chambre</h2>
                        <p>Découvrez nos chambres et suites élégamment décorées, alliant confort et style. Que vous préfériez une vue panoramique ou un espace intimiste, trouvez l’hébergement parfait pour votre séjour inoubliable.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(./accueil/img/bg-img/1.jpg);"></div>
                        <!-- Price -->
                        <p class="price-from">From $150/night</p>
                        <!-- Rooms Text -->
                        {{-- <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Deluxe Room</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque.</p>
                        </div> --}}
                        <!-- Book Room -->
                        <a href="#" class="book-room-btn btn palatin-btn" data-bs-toggle="modal" data-bs-target="#reservationModal">Book Room</a>
                    </div>
                </div> 

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(./accueil/img/bg-img/08.jpeg);"></div>
                        <!-- Price -->
                        <p class="price-from">From 000/night</p>
                        <!-- Rooms Text -->
                        {{-- <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Double Suite</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque.</p>
                        </div> --}}
                        <!-- Book Room -->
                        <a href="#" class="book-room-btn btn palatin-btn" data-bs-toggle="modal" data-bs-target="#reservationModal">Book Room</a>
                    </div>
                </div>

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="500ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(./accueil/img/bg-img/09.jpeg);"></div>
                        <!-- Price -->
                        <p class="price-from">From 000/night</p>
                        <!-- Rooms Text -->
                        {{-- <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Single Room</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque.</p>
                        </div> --}}
                        <!-- Book Room -->
                        <a href="#" class="book-room-btn btn palatin-btn" data-bs-toggle="modal" data-bs-target="#reservationModal">Book Room</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Rooms Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    {{-- <section class="contact-area d-flex flex-wrap align-items-center">
        <div class="home-map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137" allowfullscreen></iframe>
        </div>
        <!-- Contact Info -->
        <div class="contact-info">
            <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                <div class="line-"></div>
                <h2>Contact Info</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            </div>
            <h4 class="wow fadeInUp" data-wow-delay="300ms">Los Angeles 1481 Creekside Lane Avila Beach, CA 931</h4>
            <h5 class="wow fadeInUp" data-wow-delay="400ms">+53 345 7953 32453</h5>
            <h5 class="wow fadeInUp" data-wow-delay="500ms">yourmail@gmail.com</h5>
            <!-- Social Info -->
            <div class="social-info mt-50 wow fadeInUp" data-wow-delay="600ms">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
        </div>
    </section> --}}
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-lg-5">
                    <div class="footer-widget-area mt-50">
                        <a href="#" class="d-block mb-5"><img src="./accueil/img/core-img/logo.png" alt=""></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer-widget-area mt-50">
                        <h6 class="widget-title mb-5">Find us on the map</h6>
                        <img src="./accueil/img/bg-img/footer-map.png" alt="">
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-widget-area mt-50">
                        <h6 class="widget-title mb-5">Abonnez-vous à notre newsletter</h6>
                        <form action="#" method="post" class="subscribe-form">
                            <input type="email" name="subscribe-email" id="subscribeemail" placeholder="Votre E-mail">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>

                <!-- Copywrite Text -->
                <div class="col-12">
                    <div class="copywrite-text mt-30">
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Akam</a>
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
    

    <script>
//          document.getElementById('reservationForm').addEventListener('submit', function(e) {
//     e.preventDefault();
    
//     fetch('{{ route("reservations.store") }}', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//         },
//         body: JSON.stringify(Object.fromEntries(new FormData(this)))
//     })
//     .then(response => response.json())
//     .then(data => {
//         if(data.success) {
//             toastr.success('Chambre réservée avec succès!');
//             $('#reservationModal').modal('hide');
//             this.reset();
//         } else {
//             toastr.error('Erreur lors de la réservation');
//         }
//     })
//     .catch(error => {
//         toastr.error('Erreur lors de la réservation2');
//     });
// });

// document.getElementById('reservationForm').addEventListener('submit', function(e) {
//     e.preventDefault();

//     // Réinitialiser les messages d'erreur avant une nouvelle soumission
//     document.querySelectorAll('.invalid-feedback').forEach(el => el.textContent = '');
//     document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
        
//     // Masquer la légende d'erreur au début
//     const errorLegend = document.getElementById('errorLegend');
//     errorLegend.classList.add('d-none');
//     // Récupération des données du formulaire
//     const formData = Object.fromEntries(new FormData(this));

//     fetch('{{ route("reservations.store") }}', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//         },
//         body: JSON.stringify(formData)
//     })
//     .then(response => {
//         if (response.ok) {
//             return response.json();
//         } else {
//             return response.json().then(errors => { throw errors; });
//         }
//     })
//     .then(data => {
//         if (data.success) {
//             toastr.success('Chambre réservée avec succès!');
//             $('#reservationModal').modal('hide');
//             this.reset();
//         }
//     })
//     .catch(errors => {
//         if (errors.errors) {
//             // Gestion des erreurs de validation
//             Object.keys(errors.errors).forEach(key => {
//                 const field = document.querySelector(`[name="${key}"]`);
//                 if (field) {
//                     // Ajouter la classe `is-invalid`
//                     field.classList.add('is-invalid');

//                     // Ajouter le message d'erreur sous le champ
//                     const feedback = field.nextElementSibling;
//                     if (feedback && feedback.classList.contains('invalid-feedback')) {
//                         feedback.textContent = errors.errors[key][0];
//                     }
//                 }
//             });
//         } else {
//             // Afficher une alerte générique en cas d'erreur serveur
//             toastr.error('Erreur lors de la réservation.');
//         }
//           // Afficher la légende en cas d’erreur
//           errorLegend.classList.remove('d-none');
//     });
// });
    </script>
</body>

</html>