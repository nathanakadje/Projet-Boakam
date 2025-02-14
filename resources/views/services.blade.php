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
                                    <li class="active"><a href="canaanrooms">Room</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index">Home</a></li>
                                            <li><a href="cana"> Plage</a></li>
                                            <li><a href="canaanrooms">Chambres</a></li>
                                            <li><a href="canaancontacts">Contact</a></li>
                                            {{-- <li><a href="./accueil/rooms.html">Rooms</a></li> --}}
                                            {{-- <li><a href="./accueil/about-us.html">About Us</a></li> --}}
                                            {{-- <li><a href="./accueil/blog.html">News</a></li> --}}
                                            {{-- <li><a href="./accueil/elements.html">Elements</a></li> --}}
                                        </ul>
                                    </li>
                                    {{-- <li><a href="#">Mega Menu</a>
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
                                    <li><a href="cana">Cana Plage</a></li>
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
                        <label for="montant" class="form-label" style="width: 100%;">Montant de la chambre :</label>
                            <input type="number" class="form-control" id="montant" name="montant" min="20000" step="5000" max="50000" placeholder="disponible: 20.000, 25.000, 30.000, 50.000">
                        <div class="invalid-feedback"></div>
                    </div>
                    
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
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(./accueil/img/bg-img/04.jpeg);">
        <div class="bradcumbContent">
            <h2>Services</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    {{-- <!-- ##### Book Now Area Start ##### -->
    <div class="book-now-area">
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

    <!-- ##### Service Intro Area Start ##### -->
    <section class="services-intro">
        <div class="container">
            <div class="row align-items-center">
                <!-- Service Intro Text -->
                <div class="col-12 col-lg-6">
                    <div class="service-intro-text mb-100">
                        <div class="section-heading">
                            <div class="line-"></div>
                            <h2>Services Exceptionnels</h2>
                        </div>
                        <p>Profitez d'un séjour confortable à petit prix, avec un accueil chaleureux et un service impeccable. Idéal pour les voyageurs en quête de simplicité et de convivialité. Réservez dès maintenant et vivez une expérience authentique et chaleureuse.</p>
                        {{-- <a href="#" class="btn palatin-btn mt-50">Read More</a> --}}
                    </div>
                </div>

                <!-- Services Features -->
                <div class="col-12 col-lg-6">
                    <div class="row mb-100">

                        <!-- Single Cool Facts -->
                        <div class="col-12 col-sm-4">
                            <div class="single-cool-fact">
                                <div class="scf-text">
                                    <i class="icon-cocktail-1"></i>
                                    <p>Cocktail</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Cool Facts -->
                        <div class="col-12 col-sm-4">
                            <div class="single-cool-fact">
                                <div class="scf-text">
                                    <i class="icon-swimming-pool"></i>
                                    <p>Piscine</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Cool Facts -->
                        <div class="col-12 col-sm-4">
                            <div class="single-cool-fact">
                                <div class="scf-text">
                                    <i class="icon-beach"></i>
                                    <p>Bancs solaires</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Service Intro Area End ##### -->

    <!-- ##### Core Features Start ##### -->
    <section class="core-features-area">
        <div class="container">
            <div class="row justify-content-center">

                <!-- Single Core Feature Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-core-feature mb-100">
                        <div class="bg-thumbnail bg-img" style="background-image: url(./accueil/img/bg-img/bg-05.jpeg);"></div>
                        <!-- Content -->
                        <div class="feature-content">
                            <i class="icon-swimming-pool"></i>
                            <h3>Piscine</h3>
                            {{-- <p>Malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus. faucibus finibus.</p> --}}
                        </div>
                    </div>
                </div>

                <!-- Single Core Feature Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-core-feature mb-100">
                        <div class="bg-thumbnail bg-img" style="background-image: url(./accueil/img/bg-img/0013.JPG);"></div>
                        <!-- Content -->
                        <div class="feature-content">
                            <i class="icon-sunset"></i>
                            <h3>Belle Plage</h3>
                            {{-- <p>Malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus. faucibus finibus.</p> --}}
                        </div>
                    </div>
                </div>

                <!-- Single Core Feature Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-core-feature mb-100">
                        <div class="bg-thumbnail bg-img" style="background-image: url(./accueil/img/bg-img/014.JPG);"></div>
                        <!-- Content -->
                        <div class="feature-content">
                            <i class="icon-island"></i>
                            <h3>Détente</h3>
                            {{-- <p>Malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus. faucibus finibus.</p> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Core Features End ##### -->

    <!-- ##### Services Area Start ##### -->
    <section class="services-area">
        <div class="container">
            <div class="row">

                <!-- Single Service Area -->
                {{-- <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <i class="icon-trekking"></i>
                        <h4>Bike Rentals</h4>
                        <p>Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                    </div>
                </div> --}}

                <!-- Single Service Area -->
                {{-- <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="200ms">
                        <i class="icon-boat"></i>
                        <h4>Boat Trips</h4>
                        <p>Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                    </div>
                </div> --}}

                <!-- Single Service Area -->
                {{-- <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <i class="icon-coffee"></i>
                        <h4>Restaurants</h4>
                        <p>Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                    </div>
                </div> --}}

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <i class="icon-beach"></i>
                        <h4>Bancs solaires</h4>
                        <p>Relaxez-vous dans un cadre paisible, entre confort et bien-être. Venez illuminer vos journées à notre plage !</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <i class="icon-boarding-pass"></i>
                        <h4>Réglez vos séjours</h4>
                        <p>Notre Plage accepte les paiements via Orange Money, Wave, et bien d'autres solutions mobiles sécurisées.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <i class="icon-cocktail-1"></i>
                        <h4> Boissons exquises</h4>
                        <p>Découvrez des boissons rafraîchissants, laissez-vous séduire par des saveurs uniques. À savourer dans une ambiance chaleureuse et conviviale</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Services Area End ##### -->

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
                toastr.error('Erreur lors de la réservation 1.');
            }
              // Afficher la légende en cas d’erreur
              errorLegend.classList.remove('d-none');
        });
    });
   </script>
</body>

</html>