<?php

include_once 'includes/header.php';
include_once 'includes/navbars/nav_user.php';
?>


<!-- Breadscrumb Section -->
<div class="breadcrumb-bar">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title">Ολοκλήρωση Ενοικίασης</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Ενοικίαση</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ολοκλήρωση Ενοικίασης</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="order-confirmation">
    <div class="container">
        <div class="confirm-order">
            <div class="section-title">
                <h3>Ολοκλήρωση Ενοικίασης</h3>
                <h5>Ποσό : <span>€315000000000000000</span></h5>
            </div>
            <div class="booking-details order-confirm-box">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="confirmation-title">
                            <h4>Πληροφορίες</h4>
                            <a href="javascript:void(0)">Επεξεργασία</a>
                        </div>
                        <div class="order-car">
                            <span><img src="assets/img/detail-smallcar-img-2.jpg" alt=""></span>
                            <h5>Mazda Familia<span>€315000000000000000</span></h5>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="confirmation-title">
                            <h4>Πληρωμή</h4>
                            <a href="javascript:void(0)">Επεξεργασία</a>
                        </div>
                        <div class="visa-card">
                            <a href=""><img src="assets/img/visa.svg" alt=""></a>
                            <h6>Κάρτα</h6>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="confirmation-title">
                            <h4>Παραλαβή</h4>
                            <a href="javascript:void(0)">Επεξεργασία</a>
                        </div>
                        <ul class="address-info">
                            <li>Λάρισα</li>
                            <li>1-1-1970 - 11:00 PM</li>
                        </ul>

                    </div>
                    <div class="col-lg-6">
                        <div class="confirmation-title">
                            <h4>Στοιχεία</h4>
                            <a href="javascript:void(0)">Επεξεργασία</a>
                        </div>
                        <ul class="address-info">
                            <li>Giagkos Zinonos</li>
                            <li>giagkos@google.gr</li>
                            <li>6999999999</li>
                            <li>Greece</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="confirmation-title">
                            <h4>Παράδοση</h4>
                            <a href="javascript:void(0)">Επεξεργασία</a>
                        </div>
                        <ul class="address-info mb-0">
                            <li>Λάρισα</li>
                            <li>1-9-2023</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="place-order-btn">
                <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pages_edit"><i
                        class="feather-bar-chart me-2"></i>Καταχώριση Αιτήματος</a>
            </div>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal custom-modal fade check-availability-modal payment-success-modal" id="pages_edit" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-body">
                <div class="payment-success">
                    <span class="check"><i class="fa-solid fa-check-double"></i></span>
                    <h5>Επιβεβαίωση</h5>
                    <p>Το αίτημα σας έχει κατατεθεί στον ιδιοκτήτη.
                        Κωδικός:<span> #5064164454</span>
                    </p>
                </div>
                <!-- close button redirect to index -->
                <div class="text-center">
                    <a href="index.php" class="btn btn-primary">Επιστροφή στην Αρχική</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Modal -->


<?php
include_once 'includes/footer.php';
?>