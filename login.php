<?php 
include "connect.php"; 
include "head.php"; 
include "header.php"; 
session_start(); 
include "credentials.php"; 
?>


<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5 py-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <form class="mb-md-5 mt-md-4 pb-5" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <!-- email to login -->
              <div class="form-outline form-white mb-4">
                <input type="text" name="email" id="email" required class="form-control form-control-lg">
                <label class="form-label" for="email">Email</label>
              </div>

              <!-- password to login -->
              <div class="form-outline form-white mb-4">
                <input type="password" name="password" id="password" required class="form-control form-control-lg">
                <label class="form-label" for="password">Password</label>
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login </button>

              <?php
              if (isset($error)) {
                echo "<p>$error</p>";
              }
              ?>

            </form>

            <div>
              <p class="mb-0">Don't have an account? <a href="signup.php" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include "footer.php"; ?>