<?php
include_once 'includes/header.php';
include_once 'includes/navbars/nav_user.php';

if (!isset($_SESSION['user_type'])) {
    header("Location: index.php");
} else if (isset($_SESSION['user_type']) === "client") {
    header("Location: index_client.php");
}

?>


<!-- Breadscrumb Section -->
<div class="breadcrumb-bar">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title">Tα αμάξια σας</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index_owner.php">Αρχική</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Αμάξια</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tα αμάξια σας</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- /Breadscrumb Section -->

<div class="sortby-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="notification-btn">
                    <a href="add_car.php" class="btn btn-primary">Προσθήκη αμαξιού</a>
                </div>
            </div>
        </div>
    </div>
</div>
< <!-- Notification Modal -->
    <div class="modal custom-modal fade check-availability-modal" id="invoice" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="form-header text-start mb-0">
                        <h4 class="mb-0 text-dark fw-bold">Αίτηση</h4>
                    </div>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span class="align-center" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="available-for-ride">
                                <p><i class="fa-regular fa-circle-check"></i>Αίτηση για το Mazda Familia</p>
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
                                <h6>Τρόπος Πληρωμής</h6 <div class="radio">
                                <label>
                                    <input type="radio" disable checked name="radio"> Όλο το ποσό
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="grand-total">
                            <h5>Σύνολο</h5>
                            <span>€315000000000000000</span>
                        </div>
                        <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pages_edit"><i
                                class="feather-bar-chart me-2"></i>Αποδοχή</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal custom-modal fade check-availability-modal payment-success-modal" id="pages_edit" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="payment-success">
                        <span class="check"><i class="fa-solid fa-check-double"></i></span>
                        <h5>Επιβεβαίωση</h5>
                        <p>Το αίτημα με κωδικό:#506416445 έχει εγκριθεί.</p>
                    </div>
                    <!-- close button redirect to index -->
                    <div class="text-center">
                        <a href="index.php" class="btn btn-primary">Επιστροφή στην Αρχική</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="section car-listing">
        <div class="container">
            <div class="row">

                <div class="col-xl-9 col-lg-8 col-sm-12 col-12">
                    <div class="row">
                        <div class="listview-car">
                            <div class="card">
                                <div class="blog-widget d-flex">
                                    <div class="blog-img">
                                        <a href="listing-details.php">
                                            <img src="assets/img/car-list-1.jpg" class="img-fluid" alt="blog-img">
                                        </a>
                                    </div>
                                    <div class="bloglist-content w-100">
                                        <div class="card-body">
                                            <div class="blog-list-head d-flex">
                                                <div class="blog-list-title">
                                                    <h3><a href="listing-details.php">Tesla Model S</a></h3>
                                                    <h6>Category : <span>Tesla</span></h6>
                                                </div>
                                                <div class="blog-list-rate">
                                                    <div class="list-rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <span>(5.0)</span>
                                                    </div>
                                                    <h6>€30 <span>/ Ημέρα</span></h6>
                                                </div>
                                            </div>
                                            <div class="listing-details-group">
                                                <ul>
                                                    <li>
                                                        <span><img src="assets/img/icons/car-parts-05.svg"
                                                                alt="Auto"></span>
                                                        <p>Auto</p>
                                                    </li>
                                                    <li>
                                                        <span><img src="assets/img/icons/car-parts-02.svg"
                                                                alt="10 KM"></span>
                                                        <p>22 miles</p>
                                                    </li>
                                                    <li>
                                                        <span><img src="assets/img/icons/car-parts-03.svg"
                                                                alt="Petrol"></span>
                                                        <p>Electricity</p>
                                                    </li>
                                                    <li>
                                                        <span><img src="assets/img/icons/car-parts-04.svg"
                                                                alt="Power"></span>
                                                        <p>Power</p>
                                                    </li>
                                                    <li>
                                                        <span><img src="assets/img/icons/car-parts-05.svg"
                                                                alt="2018"></span>
                                                        <p>2021</p>
                                                    </li>
                                                    <li>
                                                        <span><img src="assets/img/icons/car-parts-06.svg"
                                                                alt="Persons"></span>
                                                        <p>5 Persons</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-list-head list-head-bottom d-flex">
                                                <div class="blog-list-title">
                                                    <div class="title-bottom">
                                                        <div class="car-list-icon">
                                                            <img src="assets/img/profiles/avatar-0.jpg" alt="">
                                                        </div>
                                                        <div class="address-info">
                                                            <h5><a href="">Elon Musk</a></h5>
                                                            <h6><i class="feather-map-pin me-2"></i>Αθήνα</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="listing-button">
                                                    <a href="listing-details.php" type="sumit"
                                                        class="btn btn-order"><span><i
                                                                class="feather-calendar me-2"></i></span>Ενοικίαση</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--Pagination-->
                    <div class="blog-pagination">
                        <nav>
                            <ul class="pagination page-item justify-content-center">
                                <li class="previtem">
                                    <a class="page-link" href="#"><i class="fas fa-regular fa-arrow-left me-2"></i>
                                        Prev</a>
                                </li>
                                <li class="justify-content-center pagination-center">
                                    <div class="page-group">
                                        <ul>
                                            <li class="page-item">
                                                <a class="active page-link" href="#">1 <span
                                                        class="visually-hidden">(current)</span></a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="nextlink">
                                    <a class="page-link" href="#">Next <i
                                            class="fas fa-regular fa-arrow-right ms-2"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!--/Pagination-->


                </div>
            </div>
        </div>
    </section>

    <?php
    include_once 'includes/footer.php';
    ?>