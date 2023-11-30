<?php include "head.php"; ?>
<?php include "header.php"; ?>
<?php include "addcontact.php"; ?>
<?php session_start(); ?>



<section id="contact" class="bg-gradient pb-0">
  <div class="container">
    <div class="section-header">
      <h3 class="section-title py-5">Contact</h3>
      <p class="section-description text-black">Any questions? Don't be shy, break the ice so we will sort you out!</p>
    </div>
  </div>


  <div class="container pt-5 mt-5">
    <div class="row justify-content-center">

      <div class="col-lg-3 col-md-4">

        <div class="info">
          <div>
            <i class="bi bi-geo-alt"></i>
            <p>Aungier Street<br>Dublin, IE</p>
          </div>

          <div>
            <i class="bi bi-envelope"></i>
            <p>10591210@mydbs.ie</p>
          </div>

          <div>
            <i class="bi bi-phone"></i>
            <p>+1 2345 67890</p>
          </div>
        </div>

        <div class="social-links">
          <a href="https://twitter.com/DBScollege" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="https://www.facebook.com/DublinBusinessSchool/" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/dbscollege/?hl=en" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="https://www.tiktok.com" target="_blank" class="tiktok"><i class="bi bi-tiktok"></i></a>
          <a href="https://www.linkedin.com/school/dublin-business-school/?originalSubdomain=ie" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>

      <div class="col-lg-5 col-md-8">
        <div class="">
          <form method="POST" role="form">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required value="<?php echo isset($_SESSION["name"]) ? $_SESSION["name"] : ''; ?>">
            </div>
            <div class="form-group mt-3">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required value="<?php echo isset($_SESSION["email"]) ? $_SESSION["email"] : ''; ?>">
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="text-center"><button class="btn btn-primary" type="submit">Send Message</button></div>
          </form>
        </div>
      </div>

    </div>

  </div>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d76104.59240623636!2d-6.330883985032419!3d53.41002386912815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e9de863ce97%3A0xd5fd5a41e4548a27!2sDublin%20Business%20School!5e0!3m2!1sen!2sie!4v1700497727196!5m2!1sen!2sie" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>


  <?php include "footer.php"; ?>