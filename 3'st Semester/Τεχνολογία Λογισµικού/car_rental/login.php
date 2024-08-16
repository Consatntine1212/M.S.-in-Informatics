  <?php
    include_once 'includes/header.php';
    include_once 'includes/navbars/nav.php';
    ?>



  <div class="main-wrapper login-body">
      <div class="login-wrapper">
          <div class="loginbox">
              <div class="login-auth">
                  <div class="login-auth-wrap">
                      <div class="sign-group">
                          <a href="index.php" class="btn sign-up"><span><i class="fe feather-corner-down-left" aria-hidden="true"></i></span> Αρχική </a>
                      </div>
                      <h1>Σύνδεση</h1>
                      <p class="account-subtitle"></p>
                      <form action="" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                              <label class="form-label">Email <span class="text-danger">*</span></label>
                              <input type="email" placeholder="Email Adress" name="email" class="form-control">
                          </div>
                          <div class="form-group">
                              <label class="form-label">Password <span class="text-danger">*</span></label>
                              <div class="pass-group">
                                  <input type="password" name="password" value="password" class=" form-control pass-input" placeholder="Password">
                                  <span class="fas fa-eye toggle-password"></span>
                              </div>
                          </div>
                          <div class="form-group">
                              <a class="forgot-link" href="forgot-password.html">Ξεχάσατε τον κωδικό σας?</a>
                          </div>
                          <div class="form-group m-0">
                              <label class="custom_check d-inline-flex"><span>Remember me</span>
                                  <input type="checkbox" name="remeber">
                                  <span class="checkmark"></span>
                              </label>
                          </div>
                          <button type="submit" name="login" value="login" class="btn btn-outline-light w-100 btn-size mt-1">ΣΥΝΔΕΣΗ</button>
                          <div class="login-or">
                              <span class="or-line"></span>
                              <span class="span-or-log">Σύνδεση με email</span>
                          </div>
                          <!-- Social Login -->
                          <div class="social-login">
                              <a href="#" class="d-flex align-items-center justify-content-center form-group btn google-login w-100"><span><img src="assets/img/icons/google.svg" class="img-fluid" alt="Google"></span>Σύνδεση με Google</a>
                          </div>
                          <div class="social-login">
                              <a href="#" class="d-flex align-items-center justify-content-center form-group btn google-login w-100"><span><img src="assets/img/icons/facebook.svg" class="img-fluid" alt="Facebook"></span>Σύνδεση με Facebook</a>
                          </div>
                          <!-- /Social Login -->
                          <div class="text-center dont-have">Δεν έχετε λογαριασμό? <a href="register.php">Εγγραφή</a>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>

      <?php
        include_once 'includes/footer.php';    ?>