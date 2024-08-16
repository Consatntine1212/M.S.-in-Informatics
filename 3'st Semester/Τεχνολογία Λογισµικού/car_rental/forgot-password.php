<?

include 'includes/header.php';
include 'includes/navbars/nav.php';

?>

<div class="login-wrapper">
    <div class="loginbox">
        <div class="login-auth">
            <div class="login-auth-wrap">
                <div class="sign-group">
                    <a href="index.php" class="btn sign-up"><span><i class="fe feather-corner-down-left"
                                aria-hidden="true"></i></span> Αρχική</a>
                </div>
                <h1>Επαναφορά Κωδικού</h1>
                <p class="account-subtitle"></p>
                <form action="index.php">
                    <div class="form-group">
                        <label class="form-label">Νεο Password <span class="text-danger">*</span></label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="">
                            <span class="fas fa-eye toggle-password"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Επιβεβαίωση Password <span class="text-danger">*</span></label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="">
                            <span class="fas fa-eye toggle-password"></span>
                        </div>
                    </div>
                    <button class="btn btn-outline-light w-100 btn-size">Αποθήκευση</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>