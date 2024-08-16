<?php
include_once 'includes/header.php';
include_once 'includes/navbars/nav_user.php';

if (!isset($_SESSION['user_type'])) {
    header("Location: index.php");
} else if (isset($_SESSION['user_type']) === "owner") {
    header("Location: index_owner.php");
}
?>


<!-- Breadscrumb Section -->
<div class="breadcrumb-bar">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title">Mazda Familia</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Οχήματα</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mazda Familia</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- /Breadscrumb Section -->

<section class="product-detail-head">
    <div class="container">
        <div class="detail-page-head">
            <div class="detail-headings">
                <div class="star-rated">
                    <div class="list-rating">
                        <span class="year">1980</span>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <span class="d-inline-block average-list-rating"> 5.0 </span>
                    </div>
                    <div class="camaro-info">
                        <h3>Mazda Familia</h3>
                        <div class="camaro-location">
                            <div class="camaro-location-inner">
                                <i class="feather-map-pin me-2"></i>

                                <span class="me-2"> <b>Location :</b>Λάρισα </span>
                            </div>
                            <div class="camaro-locations-inner">
                                <i class="feather-eye me-2"></i>

                                <span><b>Views :</b> 250 </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="details-btn">
                <a href=""><i class="feather-heart"></i> Wishlist</a>
            </div>
        </div>
    </div>
</section>


<section class="section product-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="detail-product">
                    <div class="slider detail-bigimg">
                        <div class="product-img">
                            <img src="assets/img/cars/car-5.jpg" alt="Slider">
                        </div>
                    </div>
                    <!-- <div class="slider slider-nav-thumbnails">
                        <div><img src="assets/img/cars/slider-thum-01.jpg" alt="product image"></div>
                        <div><img src="assets/img/cars/slider-thum-02.jpg" alt="product image"></div>
                        <div><img src="assets/img/cars/slider-thum-03.jpg" alt="product image"></div>
                        <div><img src="assets/img/cars/slider-thum-04.jpg" alt="product image"></div>
                        <div><img src="assets/img/cars/slider-thum-05.jpg" alt="product image"></div>
                    </div> -->
                </div>
                <!--Listing Features Section-->
                <div class="review-sec specification-card ">
                    <div class="review-header">
                        <h4>Specifications</h4>
                    </div>
                    <div class="card-body">
                        <div class="lisiting-featues">
                            <div class="row">
                                <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                    <div class="feature-img">
                                        <img src="assets/img/specification/specification-icon-1.svg" alt="">
                                    </div>
                                    <div class="featues-info">
                                        <span>Μοντέλο </span>
                                        <h6> Mazda</h6>
                                    </div>
                                </div>
                                <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                    <div class="feature-img">
                                        <img src="assets/img/specification/specification-icon-2.svg" alt="">
                                    </div>
                                    <div class="featues-info">
                                        <span>Τύπος </span>
                                        <h6> Οικογενιακό</h6>
                                    </div>
                                </div>
                                <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                    <div class="feature-img">
                                        <img src="assets/img/specification/specification-icon-3.svg" alt="">
                                    </div>
                                    <div class="featues-info">
                                        <span>Κιβώτιο Ταχυτήτων </span>
                                        <h6> Manual</h6>
                                    </div>
                                </div>
                                <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                    <div class="feature-img">
                                        <img src="assets/img/specification/specification-icon-4.svg" alt="">
                                    </div>
                                    <div class="featues-info">
                                        <span>Κάυσιμο </span>
                                        <h6> Diesel</h6>
                                    </div>
                                </div>
                                <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                    <div class="feature-img">
                                        <img src="assets/img/specification/specification-icon-5.svg" alt="">
                                    </div>
                                    <div class="featues-info">
                                        <span>Χιλιόμετρα </span>
                                        <h6>1111116 Km</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Listing Features Section-->
                <div class="review-sec extra-service mb-0">
                    <div class="review-header">
                        <h4>Σχόλια</h4>
                    </div>
                    <div class="description-list">
                        <p>Το πιο cult αμάξι τώρα στα χέρια σας.
                        </p>
                    </div>
                </div>
                <div class="review-sec listing-review">
                    <div class="review-header">
                        <h4>Αξιολογήσεις<span class="me-2">(1)</span></h4>
                        <div class="reviewbox-list-rating">
                            <p>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span> (5 out of 5)</span>
                            </p>
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-header-group">
                            <div class="review-widget-header">
                                <span class="review-widget-img">
                                    <img src="assets/img/profiles/avatar-01.jpg" class="img-fluid" alt="">
                                </span>
                                <div class="review-design">
                                    <h6>Πέτρος</h6>
                                    <p>02 Jan 2023</p>
                                </div>
                            </div>
                            <div class="reviewbox-list-rating">
                                <p>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span> (5.0)</span>
                                </p>
                            </div>
                        </div>
                        <p>Όλα τέλεια </p>
                        <ul class="review-list-rating">
                            <li>
                                Αξιολόγηση
                                <p>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </p>
                            </li>
                        </ul>
                    </div>

                    <div class="review-card">
                        <div class="review-header-group">
                            <div class="review-widget-header">
                                <span class="review-widget-img">
                                    <img src="assets/img/profiles/icon2.png" class="img-fluid" alt="">
                                </span>
                                <div class="review-design">
                                    <h6>Giagkos Zinonos</h6>
                                    <p>5 May 2023</p>
                                </div>
                            </div>
                            <div class="reviewbox-list-rating">
                                <p>
                                    <i class="fas fa-star filled"></i>
                                    <span> (1.0)</span>
                                </p>
                            </div>
                        </div>
                        <p>Όλα λάθος </p>
                        <ul class="review-list-rating">
                            <li>
                                Αξιολόγηση
                                <p>
                                    <i class="fas fa-star filled"></i>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="review-sec leave-reply-form">
                    <div class="review-header">
                        <h4>Αξιολόγηση</h4>
                    </div>
                    <ul class="review-list-rating mb-3">
                        <li>
                            Αξιολόγηση
                            <p>
                                <i class="fas fa-star filled"></i>
                            </p>
                        </li>
                    </ul>
                    <div class="card-body">
                        <div class="review-list">
                            <ul>
                                <li class="review-box feedbackbox mb-0">
                                    <div class="review-details">
                                        <form class="#">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Ονοματεπώνυμο <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Email Address <span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Σχόλια </label>
                                                        <textarea rows="4" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="submit-btn">
                                                <button disabled class="btn btn-primary submit-review" type="submit">
                                                    Καταχώριση
                                                    Αξιολόγησης</button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 theiaStickySidebar">
                <div class="review-sec mt-0">
                    <div class="review-header">
                        <h4>Διαθεσιμότητα</h4>
                    </div>
                    <div class="">
                        <form class="">
                            <ul>
                                <li class="column-group-main">
                                    <div class="form-group">
                                        <label>Τοποθεσία Παραλαβής</label>
                                        <div class="group-img">
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </li>
                                <li class="column-group-main">
                                    <div class="form-group">
                                        <label>Τοποθεσία Επιστροφής</label>
                                        <div class="group-img">
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </li>
                                <li class="column-group-main">
                                    <div class="form-group m-0">
                                        <label>Ημερομηνία Παραλαβής</label>
                                    </div>
                                    <div class="form-group-wrapp sidebar-form">
                                        <div class="form-group me-2">
                                            <div class="group-img">
                                                <input type="text" class="form-control datetimepicker"
                                                    placeholder="04/11/2023">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="group-img">
                                                <input type="text" class="form-control timepicker"
                                                    placeholder="11:00 AM">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="column-group-main">
                                    <div class="form-group m-0">
                                        <label>Επιστροφή</label>
                                    </div>
                                    <div class="form-group-wrapp sidebar-form">
                                        <div class="form-group me-2">
                                            <div class="group-img">
                                                <input type="text" class="form-control datetimepicker"
                                                    placeholder="04/11/2023">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="group-img">
                                                <input type="text" class="form-control timepicker"
                                                    placeholder="11:00 AM">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="column-group-last">
                                    <div class="form-group mb-0">
                                        <div class="search-btn">
                                            <button class="btn btn-primary check-available w-100" type="button"
                                                data-bs-toggle="modal"
                                                data-bs-target="#pages_edit">Διαθεσιμότητα</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
                <div class="review-sec extra-service mt-0">
                    <div class="review-header">
                        <h4>Ιδιοκτήτης</h4>
                    </div>
                    <div class="owner-detail">
                        <div class="owner-img">
                            <a href=""><img src="assets/img/profiles/avatar-03.jpg" alt=""></a>
                        </div>
                        <div class="reviewbox-list-rating">
                            <h5><a>Retro Cars</a></h5>
                            <p>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span> (5.0)</span>
                            </p>
                        </div>
                    </div>
                    <ul class="booking-list">
                        <li>
                            Άλλα Αμάξια
                            <span>01</span>
                        </li>
                        <li>
                            Κρατήσεις
                            <span>225</span>
                        </li>
                        <li>
                            Verification
                            <h6>Verified</h6>
                        </li>
                    </ul>
                    <div class="message-btn">
                        <a href="#" class="btn btn-order">Μήνυμα στον Ιδιοκτήτη</a>
                    </div>
                </div>
                <div class="review-sec share-car mt-0">
                    <div class="review-header">
                        <h4>Κοινοποιήση</h4>
                    </div>
                    <ul class="nav-social">
                        <li>
                            <a href="javascript:void(0)"><i class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="fab fa-instagram fi-icon"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="fab fa-behance fi-icon"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="fa-brands fa-pinterest-p fi-icon"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="fab fa-twitter fi-icon"></i> </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="fab fa-linkedin fi-icon"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="review-sec share-car mt-0 mb-0">
                    <div class="review-header">
                        <h4>View Location</h4>
                    </div>
                    <<iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49165.29614324288!2d22.42414615!3d39.63100869999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1358885c595d47a1%3A0x400bd2ce2b99c30!2zzpvOrM-BzrnPg86x!5e0!3m2!1sel!2sgr!4v1683277843015!5m2!1sel!2sgr">
                        </iframe>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="details-car-grid">
                    <div class="details-slider-heading">
                        <h3>Άλλα αμάξια</h3>
                    </div>
                    <div class="car-details-slider owl-carousel">
                        <div class="card">
                            <div class="listing-item pb-0">
                                <div class="listing-img">
                                    <a href="listing-details.php">
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
                                            <a href="listing-details.php">Mazda MX-5 Miata</a>
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
                                        <a href="listing-details.php" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Ενοικίαση</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="listing-item pb-0">
                                <div class="listing-img">
                                    <a href="listing-details.php">
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
                                            <a href="listing-details.php">Mazda RX-500</a>
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
                                        <a href="listing-details.php" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Ενοικίαση</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</section>


<div class="modal custom-modal fade check-availability-modal" id="pages_edit" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <div class="form-header text-start mb-0">
                    <h4 class="mb-0 text-dark fw-bold">Διαθεσιμότητα</h4>
                </div>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span class="align-center" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="available-for-ride">
                            <p><i class="fa-regular fa-circle-check"></i>Mazda Familia είναι διαθέσιμο</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="row booking-info">
                            <div class="col-md-4 pickup-address">
                                <h5>Παραλαβή</h5>
                                <p>Λάρισα</p>
                                <span>Ημερομηνία : 1-1-1970</span>
                            </div>
                            <div class="col-md-4 drop-address">
                                <h5>Παράδοση</h5>
                                <p>Λάρισα</p>
                                <span>Ημερομηνία: 1-9-2023 </span>
                            </div>
                            <div class="col-md-4 booking-amount">
                                <h5>Κόστος</h5>
                                <h6><span>€45 </span> /Ημερα</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="booking-info pay-amount">
                            <h6>Τρόπος Πληρωμής</h6>
                            <div class="radio radio-btn">
                                <label>
                                    <input type="radio" name="radio"> Εγγύηση
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="radio"> Όλο το ποσό
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="booking-info service-tax">
                            <ul>
                                <li>Τιμή <span>€45</span></li>
                            </ul>
                        </div>
                        <div class="grand-total">
                            <h5>Σύνολο</h5>
                            <span>€315000000000000000</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="booking.php" class="btn btn-back">Ολοκλήρωση<i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>


<?php
include_once 'includes/footer.php';
?>