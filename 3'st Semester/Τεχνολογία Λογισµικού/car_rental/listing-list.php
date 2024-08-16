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
                <h2 class="breadcrumb-title">Διαθέσιμα αμάξια</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Αμάξια</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Διαθέσιμα Αμάξια</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- /Breadscrumb Section -->

<div class="sortby-sec">
    <div class="container">
        <div class="sorting-div">
            <div class="row d-flex align-items-center">
                <div class="col-xl-4 col-lg-3 col-sm-12 col-12">
                    <div class="count-search">
                        <p>Προβολή Αποτελεσμάτων</p>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-9 col-sm-12 col-12">
                    <div class="product-filter-group">
                        <div class="sortbyset">
                            <span class="sortbytitle">Προβολη : </span>
                            <div class="sorting-select select-one">
                                <select class="form-control select">
                                    <option>5</option>
                                    <option>10</option>
                                    <option>15</option>
                                    <option>20</option>
                                </select>
                            </div>
                            <div class="sorting-select select-two">
                                <select class="form-control select">
                                    <option>Χαμηλη/Υψηλη</option>
                                    <option>Υψηλή/Χαμηλη</option>
                                </select>
                            </div>
                            <div class="sorting-select select-three">
                                <select class="form-control select">
                                    <option>Δημοφιλή</option>
                                    <option>Mazda RX-500</option>
                                    <option>Mazda MX-5 Miata</option>
                                    <option>Mazda Familia</option>
                                    <option>Tesla Model S</option>
                                    <option>Tesla Model Y</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid-listview">
                            <ul>
                                <li>
                                    <a href="listing-grid.php" class="active">
                                        <i class="feather-grid"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="listing-list.php">
                                        <i class="feather-list"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Car Grid View -->
<section class="section car-listing">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12 theiaStickySidebar">
                <form action="#" autocomplete="off" class="sidebar-form">
                    <!-- Customer -->
                    <div class="sidebar-heading">
                        <h3>Τι ψάχνετε</h3>
                    </div>
                    <div class="product-search">
                        <div class="form-custom">
                            <input type="text" class="form-control" id="member_search1" placeholder="">
                            <span><img src="assets/img/icons/search.svg" alt="img"></span>
                        </div>
                    </div>
                    <div class="accordion" id="accordionMain1">
                        <div class="card-header-new" id="headingOne">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Κατηγορία
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample1">
                            <div class="card-body-chat">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="checkBoxes1">
                                            <div class="selectBox-cont">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Tesla
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Mazda
                                                </label>
                                                <!-- View All -->
                                                <!-- /View All -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Customer -->

                    <div class="accordion" id="accordionMain2">
                        <div class="card-header-new" id="headingTwo">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Τύπος
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample2">
                            <div class="card-body-chat">
                                <div id="checkBoxes2">
                                    <div class="selectBox-cont">
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="username">
                                            <span class="checkmark"></span> Αγωνιστικό
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="username">
                                            <span class="checkmark"></span> Super Car
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="username">
                                            <span class="checkmark"></span> Ηλεκτρικό
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="username">
                                            <span class="checkmark"></span> Οικογενιακό
                                        </label>
                                        <!-- View All -->
                                        <div class="view-content">
                                            <div class="viewall-One">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Επιβατικό
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Επαγγελματικό
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> SUV
                                                </label>
                                            </div>
                                        </div>
                                        <!-- /View All -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- By Status -->
                    <div class="accordion" id="accordionMain3">
                        <div class="card-header-new" id="headingThree">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    Χωρητικότητα
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample3">
                            <div class="card-body-chat">
                                <div id="checkBoxes3">
                                    <div class="selectBox-cont">
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> 1-4
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> 4+
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /By Status -->

                    <!-- Category -->
                    <div class="accordion" id="accordionMain4">
                        <div class="card-header-new" id="headingFour">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Ελάχιστη Τιμή
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample4">
                            <div class="card-body-chat">
                                <div class="filter-range">
                                    <input type="text" class="input-range">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Category -->

                    <div class="accordion" id="accordionMain5">
                        <div class="card-header-new" id="headingFive">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    Βαθμολογία
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample5">
                            <div class="card-body-chat">
                                <div id="checkBoxes4">
                                    <div class="selectBox-cont">
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="category">
                                            <span class="checkmark"></span>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="category">
                                            <span class="checkmark"></span>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="category">
                                            <span class="checkmark"></span>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="category">
                                            <span class="checkmark"></span>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </label>
                                        <div class="view-content">
                                            <div class="viewall-Two">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span>
                                                    <i class="fas fa-star filled"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit"
                        class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary filter-btn">
                        <span><i class="feather-filter me-2"></i></span>Αναζήτηση
                    </button>
                    <a href="" class="reset-filter">Καθαρισμός</a>
                </form>
            </div>
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
                                <a class="page-link" href="#"><i class="fas fa-regular fa-arrow-left me-2"></i> Prev</a>
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