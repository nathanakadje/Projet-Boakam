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
                                    <li><a href="index">Home</a></li>
                                    <li class="active"><a href="cana">Canaan Plage</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index">Home</a></li>
                                            <li><a href="cana">Plage</a></li>
                                            <li><a href="canaanservices">Services</a></li>
                                            <li><a href="canaanrooms">Chambres</a></li>
                                            <li><a href="canaancontacts">Contact</a></li>
                                            {{-- <li><a href="./accueil/blog.html">News</a></li> --}}
                                            {{-- <li><a href="./accueil/about-us.html">About Us</a></li> --}}
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
                                    <li><a href="canaanservices">Services</a></li>
                                    <li><a href="canaancontacts">Contact</a></li>
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
                <form id="reservationForm" action="{{ route('stores.store') }}" method="POST" >
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

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(./accueil/img/bg-img/chambre.jpeg);">
        <div class="bradcumbContent">
            <h2>Nos Chambres</h2>
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
                            <h2>Un lieu paisible</h2>
                        </div>
                        <p>Découvrez un lieu paisible où le murmure des vagues caresse le sable doré. Sous un ciel azur, laissez-vous emporter par la sérénité de la plage, un refuge parfait pour échapper au tumulte de la vie quotidienne. Ici, chaque instant respire le calme et l’harmonie, offrant une évasion inoubliable au cœur de la nature.</p>
                        {{-- <a href="#" class="btn palatin-btn mt-50">Read More</a> --}}
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail mb-100">
                        <img src="./accueil/img/bg-img/06.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Milestones Area Start ##### -->
    <section class="our-milestones section-padding-100-0 bg-img bg-overlay bg-fixed" style="background-image: url(./accueil/img/bg-img/07.jpeg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="section-heading text-center white">
                        <div class="line-"></div>
                        <h2> Notre Parcours</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="scf-text">
                            <i class="icon-cocktail-1"></i>
                            <h2><span class="counter">50</span></h2>
                            <p>Rafraîchissements</p>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="scf-text">
                            <i class="icon-swimming-pool"></i>
                            <h2><span class="counter">1</span></h2>
                            <p>Piscine</p>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="scf-text">
                            <i class="icon-resort"></i>
                            <h2><span class="counter">3</span></h2>
                            <p>Hotel</p>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="900ms">
                        <div class="scf-text">
                            <i class="icon-restaurant"></i>
                            <h2><span class="counter">24</span></h2>
                            <p>Appartements</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Milestones Area End ##### -->

    <!-- ##### Hotels Area Start ##### -->
    <section class="our-hotels-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Notre Hotel</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Hotel Info -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-hotel-info mb-100">
                        <div class="hotel-info-text">
                            <h6><span class="fa fa-check"></span> Salle de Bain agréable</h6>
                            <h6><span class="fa fa-check"></span> Téléviseur à écran plat </h6>
                            <h6><span class="fa fa-check"></span> Climatisation parfaite.</h6>
                        </div>
                        <div class="hotel-img">
                            <img src="./accueil/img/bg-img/008.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <!-- Single Hotel Info -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-hotel-info mb-100">
                        <div class="hotel-info-text">
                            <h6><span class="fa fa-check"></span> Wi-Fi haut débit gratuit </h6>
                            <h6><span class="fa fa-check"></span> Service de chambre </h6>
                            <h6><span class="fa fa-check"></span> Matelas haut de gamme</h6>
                        </div>
                        <div class="hotel-img">
                            <img src="./accueil/img/bg-img/01.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <!-- Single Hotel Info -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-hotel-info mb-100">
                        <div class="hotel-info-text">
                            <h6><span class="fa fa-check"></span>Espace de Travail Ergonomique</h6>
                            <h6><span class="fa fa-check"></span> Un refrigirateur à votre disposition</h6>
                            <h6><span class="fa fa-check"></span> Profitez d’une vue panoramique sur la mer</h6>
                        </div>
                        <div  class="hotel-img">
                            <img src="./accueil/img/bg-img/009.jpeg" alt="">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hotels Area End ##### -->

     <!-- ##### Rooms Area Start ##### -->
     <section class="rooms-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Réservez votre chambre</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Single Rooms Area -->
                
                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(./accueil/img/bg-img/008.jpeg);"></div>
                        <!-- Price -->
                        <p class="price-from">20 000 FCFA</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Une Chambre</h4>
                            <p><span class="fa fa-check"></span> Ecran plat</p>
                            <p><span class="fa fa-check"></span> Climatisation</p>
                            <p><span class="fa fa-check"></span> Salle de Bain</p>                   
                            <p><span class="fa fa-check"></span> Espace de Travail</p>                                           

                        </div>
                        <!-- Book Room -->
                        <a href="#" data-bs-toggle="modal" data-bs-target="#reservationModal" class="book-room-btn btn palatin-btn">Réserver</a>
                    </div>
                </div>

             <!-- Single Rooms Area -->
             <div class="col-12 col-md-6 col-lg-4">
                <div class="single-rooms-area wow fadeInUp" data-wow-delay="300ms">
                    <!-- Thumbnail -->
                    <div class="bg-thumbnail bg-img" style="background-image: url(./accueil/img/bg-img/Room3.JPG);"></div>
                    <!-- Price -->
                    <p class="price-from">30 000 FCFA</p>
                    <!-- Rooms Text -->
                    <div class="rooms-text">
                        <div class="line"></div>
                        <h4>Une Chambre</h4>
                        <p><span class="fa fa-check"></span> Ecran plat</p>                   
                        <p><span class="fa fa-check"></span> Climatisation</p>
                        <p><span class="fa fa-check"></span> Salle de Bain</p>                   
                        <p><span class="fa fa-check"></span> Espace de Travail</p>                                           
                    </div>
                    <!-- Book Room -->
                    <a href="#" data-bs-toggle="modal" data-bs-target="#reservationModal" class="book-room-btn btn palatin-btn">Réserver</a>
                </div>
            </div>

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(./accueil/img/bg-img/Room4.JPG);"></div>
                        <!-- Price -->
                        <p class="price-from">50 000 FCFA</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4> Une Suite</h4>
                            <p><span class="fa fa-check"></span> Un Salon</p>
                            <p><span class="fa fa-check"></span> Ecran plat</p>
                            <p><span class="fa fa-check"></span> Climatisation</p>
                            <p><span class="fa fa-check"></span> Une terrasse</p>                        
                            <p><span class="fa fa-check"></span> Salle de Bain</p>                        
                            <p><span class="fa fa-check"></span> Espace de Travail</p>                                           
                        </div>
                        <!-- Book Room -->
                        <a href="#" data-bs-toggle="modal" data-bs-target="#reservationModal" class="book-room-btn btn palatin-btn">Réserver</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
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

   <script>
        // Afficher les messages de succès ou d'erreur
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
   </script>
   <script>
    //          document.getElementById('reservationForm').addEventListener('submit', function(e) {
    //     e.preventDefault();
        
    //     fetch('{{ route("stores.store") }}', {
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
    
    document.getElementById('reservationForm').addEventListener('submit', function(e) {
        e.preventDefault();
    
        // Réinitialiser les messages d'erreur avant une nouvelle soumission
        document.querySelectorAll('.invalid-feedback').forEach(el => el.textContent = '');
        document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
            
        // Masquer la légende d'erreur au début
        const errorLegend = document.getElementById('errorLegend');
        errorLegend.classList.add('d-none');
        // Récupération des données du formulaire
        const formData = Object.fromEntries(new FormData(this));
    
        fetch('{{ route("stores.store") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(formData)
        })
        .then(response => {
            if (response.ok) {
                return response.json();
            } else {
                return response.json().then(errors => { throw errors; });
            }
        })
        .then(data => {
            if (data.success) {
                toastr.success('Chambre réservée avec succès!');
                $('#reservationModal').modal('hide');
                this.reset();
            }
        })
        .catch(errors => {
            if (errors.errors) {
                // Gestion des erreurs de validation
                Object.keys(errors.errors).forEach(key => {
                    const field = document.querySelector(`[name="${key}"]`);
                    if (field) {
                        // Ajouter la classe `is-invalid`
                        field.classList.add('is-invalid');
    
                        // Ajouter le message d'erreur sous le champ
                        const feedback = field.nextElementSibling;
                        if (feedback && feedback.classList.contains('invalid-feedback')) {
                            feedback.textContent = errors.errors[key][0];
                        }
                    }
                });
            } else {
                // Afficher une alerte générique en cas d'erreur serveur
                toastr.error('Erreur lors de la réservation.');
            }
              // Afficher la légende en cas d’erreur
              errorLegend.classList.remove('d-none');
        });
    });
</script>
</body>

</html>