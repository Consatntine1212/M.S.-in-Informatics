<?php
include_once 'includes/header.php';
include_once 'includes/navbars/nav.php';
?>



<div class="login-wrapper">
    <div class="loginbox">
        <div class="login-auth">
            <div class="login-auth-wrap">
                <div class="sign-group">
                    <a href="index.php" class="btn sign-up"><span><i class="fe feather-corner-down-left"
                                aria-hidden="true"></i></span>Αρχική </a>
                </div>
                <h1>Sign Up</h1>
                <p class="account-subtitle">Θα λάβετε email ενεργοποιησης</p>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="form-label">Username <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Username" name="username" required />
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" placeholder="Email Address" name="email" required />
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password <span class="text-danger">*</span></label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="">
                            <span class="fas fa-eye toggle-password"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Ονοματεπώνυμο <span class="text-danger">*</span></label>
                        <div class="pass-group">
                            <input type="text" class="form-control" placeholder="Full Name" name="fullname" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Τηλέφωνο <span class="text-danger">*</span></label>
                        <div class="pass-group">
                            <input type="tel" class="form-control" placeholder="Phone Number" name="phone" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Χώρα <span class="text-danger">*</span></label>
                        <div class="pass-group">
                            <input type="text" class="form-control" placeholder="Country" name="country" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Ημερομηνία Γέννησης <span class="text-danger">*</span></label>
                        <div class="pass-group">
                            <input type="date" class="form-control" placeholder="Birth Date" name="birth_date"
                                required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Προφίλ</label>
                        <div class="pass-group">
                            <input type="file" class="form-control" id="pic-upload" name="pic">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="custom_check w-100">
                            <input type="radio" id="client" name="type" value="client" checked>
                            <span class="checkmark"></span> Ενοικιαστής
                        </label>
                        <label class="custom_check w-100">
                            <input type="radio" id="owner" name="type" value="owner">
                            <span class="checkmark"></span> Ιδιοκτήτης
                        </label>

                    </div>
                    <button type="submit" name="register" value="register"
                        class=" btn btn-outline-light w-100 btn-size mt-1">Sign Up</button>
                    <div class="login-or">
                        <span class="or-line"></span>
                        <span class="span-or">Δημιουργήστε λογαριασμό με το email</span>
                    </div>
                    <!-- Social Login -->
                    <div class="social-login">
                        <a href="#"
                            class="d-flex align-items-center justify-content-center form-group btn google-login w-100"><span><img
                                    src="assets/img/icons/google.svg" class="img-fluid" alt="Google"></span>Σύνδεση με
                            Google</a>
                    </div>
                    <div class="social-login">
                        <a href="#"
                            class="d-flex align-items-center justify-content-center form-group btn google-login w-100"><span><img
                                    src="assets/img/icons/facebook.svg" class="img-fluid" alt="Facebook"></span>Σύνδεση
                            με Facebook</a>
                    </div>
                    <!-- /Social Login -->
                    <div class="text-center dont-have">Έχετε ήδη λογαριασμό <a href="login.phpσ">Sign In</a></div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'includes/footer.php'; ?>