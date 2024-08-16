<?php
include_once 'includes/navbars/nav.php';
?>

<!-- Banner -->
<section class="banner-section banner-slider">
    <div class="container">
        <div class="home-banner">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-down">
                    <p class="explore-text"> <span><i class="fa-solid fa-thumbs-up me-2"></i></span>No1 Peer 2 Peer
                        Πλατφόρμα Ενοικίασης Οχημάτων </p>
                    <h1>Βρες το αμάξι των ονείρων σου <br>
                        <span>Kenku Car Rental</span>
                    </h1>
                    <div class="view-all">
                        <a href="listing-grid.html" class="btn btn-view d-inline-flex align-items-center">Δείτε όλα τα
                            αμάξια
                            <span><i class="feather-arrow-right ms-2"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-down">
                    <div class="banner-imgs">
                        <img src="" class="img-fluid aos">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Search -->
<div class="section-search">
    <div class="container">
        <div class="search-box-banner">
            <form action="login.php">
                <ul class="align-items-center">
                    <li class="column-group-main">
                        <div class="form-group">
                            <label>Τοποθεσία Παραλαβής</label>
                            <div class="group-img">
                                <input type="text" class="form-control" placeholder="Enter City, Airport, or Address">
                                <span><i class="feather-map-pin"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="column-group-main">
                        <div class="form-group">
                            <label>Ημερομηνία Παραλαβής</label>
                        </div>
                        <div class="form-group-wrapp">
                            <div class="form-group date-widget">
                                <div class="group-img">
                                    <input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
                                    <span><i class="feather-calendar"></i></span>
                                </div>
                            </div>
                            <div class="form-group time-widge">
                                <div class="group-img">
                                    <input type="text" class="form-control timepicker" placeholder="11:00 AM">
                                    <span><i class="feather-clock"></i></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="column-group-main">
                        <div class="form-group">
                            <label>Ημερομηνία Παράδοσης</label>
                        </div>
                        <div class="form-group-wrapp">
                            <div class="form-group date-widge">
                                <div class="group-img">
                                    <input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
                                    <span><i class="feather-calendar"></i></span>
                                </div>
                            </div>
                            <div class="form-group time-widge">
                                <div class="group-img">
                                    <input type="text" class="form-control timepicker" placeholder="11:00 AM">
                                    <span><i class="feather-clock"></i></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="column-group-last">
                        <div class="form-group">
                            <div class="search-btn">
                                <button href="login.php" class="btn search-button" type="submit"> <i
                                        class="fa fa-search" aria-hidden="true"></i>Αναζήτηση</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
<!-- /Search -->
<!-- services -->
<section class="section services">
    <div class="service-right">
        <img src="assets/img/bg/service-right.svg" class="img-fluid" alt="services right">
    </div>
    <div class="container">
        <!-- Heading title-->
        <div class="section-heading" data-aos="fade-down">
            <h2>Πως δουλέυει;</h2>
            <p>Με τρία απλά βήματα έχετε το αμάξι που θέλετε διαθέσιμο και οι ιδιοκτήτες τα λεφτά στον λογαριασμό τους!
            </p>
        </div>
        <!-- /Heading title -->
        <div class="services-work">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                    <div class="services-group">
                        <div class="services-icon border-secondary">
                            <img class="icon-img bg-secondary" src="assets/img/icons/services-icon-02.svg"
                                style="height: 70px;" alt="Choose Locations">
                        </div>
                        <div class="services-content">
                            <h3>1. Διαλέξτε Τοποθεσία</h3>
                            <p>Αν είστε ιδιοκτήτης καταχωρίστε το αμάξι και την τοποθεσία που βρίσκεστε και είστε
                                έτοιμοι! </p>
                            <p>Αν είστε ενοικιαστής αναζητήστε βάση τοποθεσίας και διαλέξτε το αμάξι που σας
                                ενδιαφέρει!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                    <div class="services-group">
                        <div class="services-icon border-warning">
                            <img class="icon-img bg-warning bg-dark" src="assets/img/icons/services-icon-01.svg"
                                alt="Choose Locations">
                        </div>
                        <div class="services-content">
                            <h3>2. Κλείστε Ραντεβού</h3>
                            <p>Ιδιοκτήτες και υποψήφιοι ενοικιαστές κλείστε το ραντεβού σας για την παράδοση-παραλαβή
                                του οχήματος</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                    <div class="services-group">
                        <div class="services-icon border-dark">
                            <img class="icon-img bg-warning" src="assets/img/icons/services-icon-03.svg"
                                style="height: 70px;" alt="Choose Locations">
                        </div>
                        <div class="services-content">
                            <h3>3. Είστε Ετοιμοι!</h3>
                            <p>Τόσο απλά οι ιδιοκτήτες έχουν ένα επιπλέον εισόδημα και οι ενοικιαστές πάντα ένα
                                διαθέσιμο αμάξι!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /services -->


<section class="section popular-services popular-explore">
    <div class="container">
        <!-- Heading title-->
        <div class="section-heading" data-aos="fade-down">
            <h2>Ανακάλυψε τα πιο δημοφιλή αμάξια</h2>
            <p>Αμάξια όλων των τύπων διαθέσιμα με ένα κλικ </p>
        </div>
        <!-- /Heading title -->
        <div class="row justify-content-center">
            <div class="col-lg-12" data-aos="fade-down">
                <div class="listing-tabs-group">
                    <ul class="nav listing-buttons gap-3" data-bs-tabs="tabs">
                        <li>
                            <a class="active" aria-current="true" data-bs-toggle="tab" href="#Carmazda">
                                <span>
                                    <img src="assets/img/icons/car-icon-01.svg" alt="Mazda">
                                </span>
                                Mazda
                            </a>
                        </li>
                        <li>
                            <a data-bs-toggle="tab" href="#Cartesla">
                                <span>
                                    <img src="assets/img/icons/car-icon-06.svg" alt="Tesla">
                                </span>
                                Tesla
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content">
            <div class="tab-pane active" id="Carmazda">
                <div class="row">
                    <!-- col -->
                    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                        <div class="listing-item">
                            <div class="listing-img">
                                <a href="listing-details.html">
                                    <img src="assets/img/cars/car-01.jpg" class="img-fluid" alt="RX-500">
                                </a>
                                <div class="fav-item">
                                    <span class="featured-text">Mazda</span>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="listing-content">
                                <div class="listing-features">
                                    <a href="javascript:void(0)" class="author-img">
                                        <img src="assets/img/profiles/avatar-0.jpg" alt="author">
                                    </a>
                                    <h3 class="listing-title">
                                        <a href="listing-details.html">Mazda RX-500</a>
                                    </h3>
                                    <div class="list-rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span>(5.0)</span>
                                    </div>
                                </div>
                                <div class="listing-details-group">
                                    <ul>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-01.svg" alt="Auto"></span>
                                            <p>Manual</p>
                                        </li>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-02.svg" alt="10 KM"></span>
                                            <p>10 KM</p>
                                        </li>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-03.svg" alt="Petrol"></span>
                                            <p>Petrol</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-04.svg" alt="Power"></span>
                                            <p>Power</p>
                                        </li>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-05.svg" alt="2018"></span>
                                            <p>2018</p>
                                        </li>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-06.svg" alt="Persons"></span>
                                            <p>2 Persons</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="listing-location-details">
                                    <div class="listing-price">
                                        <span><i class="feather-map-pin"></i></span>Θεσσαλονίκη
                                    </div>
                                    <div class="listing-price">
                                        <h6>€400 <span>/ Ημέρα</span></h6>
                                    </div>
                                </div>
                                <div class="listing-button">
                                    <a href="listing-details.html" class="btn btn-order"><span><i
                                                class="feather-calendar me-2"></i></span>Ενοικίαση</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->

                    <!-- col -->
                    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                        <div class="listing-item">
                            <div class="listing-img">
                                <a href="listing-details.html">
                                    <img src="assets/img/cars/car-02.jpg" class="img-fluid" alt="MAZDA">
                                </a>
                                <div class="fav-item">
                                    <span class="featured-text">Mazda</span>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="listing-content">
                                <div class="listing-features">
                                    <a href="javascript:void(0)" class="author-img">
                                        <img src="assets/img/profiles/avatar-02.jpg" alt="author">
                                    </a>
                                    <h3 class="listing-title">
                                        <a href="listing-details.html">Mazda MX-5 Miata</a>
                                    </h3>
                                    <div class="list-rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span>(5.0)</span>
                                    </div>
                                </div>
                                <div class="listing-details-group">
                                    <ul>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-01.svg" alt="Auto"></span>
                                            <p>Manual</p>
                                        </li>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-02.svg" alt="22 KM"></span>
                                            <p>22 KM</p>
                                        </li>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-03.svg" alt="Petrol"></span>
                                            <p>Petrol</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-04.svg" alt="Diesel"></span>
                                            <p>Diesel</p>
                                        </li>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-05.svg" alt="2016"></span>
                                            <p>2016</p>
                                        </li>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-06.svg" alt="Persons"></span>
                                            <p>2 Persons</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="listing-location-details">
                                    <div class="listing-price">
                                        <span><i class="feather-map-pin"></i></span>Αθήνα
                                    </div>
                                    <div class="listing-price">
                                        <h6>80 <span>/ Ημέρα</span></h6>
                                    </div>
                                </div>
                                <div class="listing-button">
                                    <a href="listing-details.html" class="btn btn-order"><span><i
                                                class="feather-calendar me-2"></i></span>Ενοικίαση</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->

                    <!-- col -->
                    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                        <div class="listing-item">
                            <div class="listing-img">
                                <a href="listing-details.html">
                                    <img src="assets/img/cars/car-03.jpg" class="img-fluid" alt="Audi">
                                </a>
                                <div class="fav-item">
                                    <span class="featured-text">Mazda</span>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="listing-content">
                                <div class="listing-features">
                                    <a href="javascript:void(0)" class="author-img">
                                        <img src="assets/img/profiles/avatar-03.jpg" alt="author">
                                    </a>
                                    <h3 class="listing-title">
                                        <a href="listing-details.html">Mazda Familia</a>
                                    </h3>
                                    <div class="list-rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span>(5.0)</span>
                                    </div>
                                </div>
                                <div class="listing-details-group">
                                    <ul>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-05.svg" alt="Manual"></span>
                                            <p>Manual</p>
                                        </li>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-02.svg" alt="10 KM"></span>
                                            <p>1110 KM</p>
                                        </li>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-03.svg" alt="Petrol"></span>
                                            <p>Petrol</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-04.svg" alt="Power"></span>
                                            <p>Power</p>
                                        </li>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-05.svg" alt="2019"></span>
                                            <p>1980</p>
                                        </li>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-06.svg" alt="Persons"></span>
                                            <p>4 Persons</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="listing-location-details">
                                    <div class="listing-price">
                                        <span><i class="feather-map-pin"></i></span>Λάρισα
                                    </div>
                                    <div class="listing-price">
                                        <h6>€45 <span>/ Ημέρα</span></h6>
                                    </div>
                                </div>
                                <div class="listing-button">
                                    <a href="listing-details.html" class="btn btn-order"><span><i
                                                class="feather-calendar me-2"></i></span>Ενοικίαση</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->

                </div>
            </div>

            <div class="tab-pane fade" id="Cartesla">
                <div class="row">
                    <!-- col -->
                    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                        <div class="listing-item">
                            <div class="listing-img">
                                <a href="listing-details.html">
                                    <img src="assets/img/cars/car-08.jpg" class="img-fluid" alt="Tesla">
                                </a>
                                <div class="fav-item">
                                    <span class="featured-text">Tesla</span>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="listing-content">
                                <div class="listing-features">
                                    <a href="javascript:void(0)" class="author-img">
                                        <img src="assets/img/profiles/avatar-0.jpg" alt="author">
                                    </a>
                                    <h3 class="listing-title">
                                        <a href="listing-details.html">Tesla Model S</a>
                                    </h3>
                                    <div class="list-rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span>(5.0)</span>
                                    </div>
                                </div>
                                <div class="listing-details-group">
                                    <ul>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-01.svg" alt="Auto"></span>
                                            <p>Auto</p>
                                        </li>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-02.svg" alt="22 miles"></span>
                                            <p>22 miles</p>
                                        </li>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-03.svg" alt="Diesel"></span>
                                            <p>Electricity</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-04.svg" alt="Power"></span>
                                            <p>Power</p>
                                        </li>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-05.svg" alt="2019"></span>
                                            <p>2021</p>
                                        </li>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-06.svg" alt="Persons"></span>
                                            <p>5 Persons</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="listing-location-details">
                                    <div class="listing-price">
                                        <span><i class="feather-map-pin"></i></span>Αθήνα
                                    </div>
                                    <div class="listing-price">
                                        <h6>€30 <span>/ Ημέρα</span></h6>
                                    </div>
                                </div>
                                <div class="listing-button">
                                    <a href="listing-details.html" class="btn btn-order"><span><i
                                                class="feather-calendar me-2"></i></span>Ενοικίαση</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->

                    <!-- col -->
                    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                        <div class="listing-item">
                            <div class="listing-img">
                                <a href="listing-details.html">
                                    <img src="assets/img/cars/car-09.jpg" class="img-fluid" alt="Tesla">
                                </a>
                                <div class="fav-item">
                                    <span class="featured-text">Tesla</span>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="listing-content">
                                <div class="listing-features">
                                    <a href="javascript:void(0)" class="author-img">
                                        <img src="assets/img/profiles/avatar-02.jpg" alt="author">
                                    </a>
                                    <h3 class="listing-title">
                                        <a href="listing-details.html">Tesla Model Y</a>
                                    </h3>
                                    <div class="list-rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span>(5.0)</span>
                                    </div>
                                </div>
                                <div class="listing-details-group">
                                    <ul>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-01.svg" alt="Auto"></span>
                                            <p>Auto</p>
                                        </li>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-02.svg" alt="22 KM"></span>
                                            <p>22 KM</p>
                                        </li>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-03.svg" alt="Petrol"></span>
                                            <p>Petrol</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-04.svg" alt="Diesel"></span>
                                            <p>Diesel</p>
                                        </li>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-05.svg" alt="2016"></span>
                                            <p>2016</p>
                                        </li>
                                        <li>
                                            <span><img src="assets/img/icons/car-parts-06.svg" alt="Persons"></span>
                                            <p>5 Persons</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="listing-location-details">
                                    <div class="listing-price">
                                        <span><i class="feather-map-pin"></i></span>Αθήνα
                                    </div>
                                    <div class="listing-price">
                                        <h6>€80 <span>/ Ημέρα</span></h6>
                                    </div>
                                </div>
                                <div class="listing-button">
                                    <a href="listing-details.html" class="btn btn-order"><span><i
                                                class="feather-calendar me-2"></i></span>Ενοικίαση</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Facts By The Numbers -->
<section class="section facts-number">
    <div class="facts-left">
        <img src="assets/img/bg/facts-left.png" class="img-fluid" alt="facts left">
    </div>
    <div class="facts-right">
        <img src="assets/img/bg/facts-right.png" class="img-fluid" alt="facts right">
    </div>
    <div class="container">
        <!-- Heading title-->
        <div class="section-heading" data-aos="fade-down">
            <h2 class="title text-white">Ας μιλήσουν οι αριθμοί</h2>
            <p class="description text-white">Τα στατιστικά και οι αριθμοί δεν λένε ποτέ ψέματα</p>
        </div>
        <!-- /Heading title -->
        <div class="counter-group">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="count-group flex-fill">
                        <div class="customer-count d-flex align-items-center">
                            <div class="count-img">
                                <img src="assets/img/icons/bx-heart.svg" alt="">
                            </div>
                            <div class="count-content">
                                <h4><span class="counterUp">16</span>K+</h4>
                                <p>Ικανοποιημένοι Πελάτες</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="count-group flex-fill">
                        <div class="customer-count d-flex align-items-center">
                            <div class="count-img">
                                <img src="assets/img/icons/bx-car.svg" alt="">
                            </div>
                            <div class="count-content">
                                <h4><span class="counterUp">2547</span>+</h4>
                                <p>Αμάξια</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="count-group flex-fill">
                        <div class="customer-count d-flex align-items-center">
                            <div class="count-img">
                                <img src="assets/img/icons/bx-user-check.svg" alt="">
                            </div>
                            <div class="count-content">
                                <h4><span class="counterUp">625</span>K+</h4>
                                <p>Υποψήφιοι Ενοικιαστές</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="count-group flex-fill">
                        <div class="customer-count d-flex align-items-center">
                            <div class="count-img">
                                <img src="assets/img/icons/bx-history.svg" alt="">
                            </div>
                            <div class="count-content">
                                <h4><span class="counterUp">200</span>K+</h4>
                                <p>Kilometer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Facts By The Numbers -->
<!-- <section id="r-advantages-part" class="r-advantages-part">
    <div class="r-advantage-main-part r-advantage-main-part-white">
        <div class="container clearfix">
            <div class="r-welcome-msg-part">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-6">
                            <div class="r-welcome-msg animated fadeInUp">
                                <span>120+ ΤΥΠΟΙ &amp; ΜΟΝΤΕΛΑ</span>
                                KENKU Rental <b>Πλεονεκτήματα.</b>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-6">
                            <div class="r-welcome-text">
                                Γνωρίζουμε ότι η διαφορά βρίσκεται στις λεπτομέριες για αυτό και εμείς σας εγγυόύμαστε
                                με γνώμονα την πολυετή εμπειρίας μια αξέχαστη εμπειρία.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="r-advantages-box">
                        <div class="icon"> <img src="assets/images/advantage-icon-1.png" alt=""> </div>
                        <div class="head">24/7 Υποστήριξη Πελατών</div>
                        <div class="sub-text">Είτε ενοικιαστής είτε ιδιοκτήτης</div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="r-advantages-box">
                        <div class="icon"> <img src="assets/images/advantage-icon-2.png" alt=""> </div>
                        <div class="head">Κάντε κράτηση οποιαδήποτε στιγμή</div>
                        <div class="sub-text">24/7 Διαθέσιμα αμάξια</div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="r-advantages-box">
                        <div class="icon"> <img src="assets/images/advantage-icon-3.png" alt=""> </div>
                        <div class="head">Διαθέσιμα αμάξια σχεδόν δίπλα σας</div>
                        <div class="sub-text">250+ Τοποθεσίες</div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="r-advantages-box">
                        <div class="icon"> <img src="assets/images/advantage-icon-4.png" alt=""> </div>
                        <div class="head">Μοντέλα, τύποι και κυβικά στα μέτρας σας</div>
                        <div class="sub-text">Κάντε κράτηση τώρα</div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="r-advantages-box">
                        <div class="icon"> <img src="assets/images/advantage-icon-5.png" alt=""> </div>
                        <div class="head">Επιπλέον εισόδημα</div>
                        <div class="sub-text">Καταχωρίστε τα αμάξια σας</div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="r-advantages-box">
                        <div class="icon"> <img src="assets/images/advantage-icon-6.png" alt=""> </div>
                        <div class="head">Αξιοκρατικό σύστημα αξιολογήσεων</div>
                        <div class="sub-text">Δίπλα σας για οποιοδήποτε πρόβλημα προκύψει</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="r-new-member">
    <div class="r-new-member r-who-we-outer r-new-member-dark">
        <div class="container">
            <div class="r-sec-head r-sec-head-left r-sec-head-line r-sec-head-r pt-0">
                <span>Μαθετε Περισσότερα για μας</span>
                <h2>Τι είναι το <b>Kenku</b> Car Rental</h2>
            </div>
            <div class="row clearfix mb-5 r-who-we-small">
                <div class="col-lg-6">
                    <p class="mb-0" style="color:aliceblue!important; background-color:rgba(0,0,0,0.4)!important">Η ιδέα
                        ξεκίνησε
                        όταν οι 4 βασικοί ιδρυτές και
                        μέτοχοι της
                        εταιρείας,
                        πραγματοποιήσαμε ένα αυθόρμητο ταξίδι αναψυχής. Εκει ανακαλύψαμε πως είτε δεν υπήρχαν διαθέσιμα
                        αμάξια για ενοικίαση είτε οι εταιρείς ενοικιάσεων, λόγω της μεγάλης ζήτησης, ζητούσαν διπλά και
                        τριπλά λεφτά. Τότε σκεφτήκαμε πως θα ήταν αν μπορούσαμε εκείνη την στιγμή να βρούμε ένα αμάξι
                        για λίγες μέρες από κάποιο ντόπιο. Από εκείνη την στιγμή άρχισε να δουλέυετε στο κεφάλι μας το
                        KENKU</p>
                </div>
                <div class="col-lg-6">
                    <p class="blockquote" style="background-color:rgba(0,0,0,0.4)!important">
                        Χωρίς μεσάζων εταιρείες, με εμπιστοσύνη και ασφάλεια έχετε ένα διαθέσιμο αμάξι σε κάθε σας
                        προορισμό. Τουρίστες και τοπική κοινωνία έρχονται πιο κοντά και πλέον μπορούν να μοιραστούν
                        πολλά παραπάνω από ένα σπίτι ή μια υπηρεσία.
                    </p>
                </div>
            </div>
            <div class="row r-who-we clearfix">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 mb-3">
                    <div class="r-who-we-in">
                        <img src="assets/images/who-we-01.png" class="d-block img-fluid" alt="">
                        <h4>Σχεδόν σε κάθε χώρα</h4>
                        <p>Διαθέσιμα αμάξια σε κάθε hot προορισμό</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 mb-3">
                    <div class="r-who-we-in">
                        <img src="assets/images/who-we-02.png" class="d-block img-fluid" alt="">
                        <h4>Εγγυημένα λεφτά</h4>
                        <p>Η πληρωμή γίνεται αυτόματα από μας, το πρώτο λεπτό που εγκρίνετε η αίτηση</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 mb-3">
                    <div class="r-who-we-in">
                        <img src="assets/images/who-we-03.png" class="d-block img-fluid" alt="">
                        <h4>Ανοιχτό σύστημα αξιολογήσεων</h4>
                        <p>Ιδιοκτήτες και ενοικιαστές αξιολογούντε συνεχώς</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 mb-3">
                    <div class="r-who-we-in">
                        <img src="assets/images/who-we-04.png" class="d-block img-fluid" alt="">
                        <h4>Ολοι οι τύποι αμαξιών</h4>
                        <p>Ότι αμάξι έχετε μπορείτε άμεσα να το διαθέσετε σε κάποιο ενδιαφερόμενο άτομο </p>
                    </div>
                </div>
            </div>
            <div class="r-btns pt-5 pb-2">
                <a href="#" class="btn btn-full">ΟΧΗΜΑΤΑ</a>
                <a href="#" class="btn btn-full btn-dark">ΚΡΑΤΗΣΗ</a>
            </div>
        </div>
    </div>
</section> -->