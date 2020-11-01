    <!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

      <!-- Content -->
      <h5 class="font-weight-bold text-uppercase mb-4">Jahanzeb College</h5>
      <p>This is no real webiste of college. The site is for practice.</p>
      <p class="text-justify">Jahanzeb College is a trailblazer for the rest of the institutions in KPK because of its history, development, shaping and broadening.</p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

      <ul class="list-unstyled">
        <li>
          <p>
            <a href="index.php?page=about">ABOUT COLLEGE</a>
          </p>
        </li>
        <li>
          <p>
            <a href="index.php?page=contact">CONTACT</a>
          </p>
        </li>
        <li>
          <p>
            <a href="index.php?page=admissions">ADMISSIONS</a>
          </p>
        </li>
        <?php
        if(!isset($_SESSION['role']))
        echo '<li>
          <p>
            <a href="index.php?page=login">LOGIN</a>
          </p>
        </li>';
        ?>
      </ul>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

      <!-- Contact details -->
      <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

      <ul class="list-unstyled">
        <li>
          <p>
            <i class="fas fa-home mr-3"></i> SAIDU SHARIF SWAT</p>
        </li>
        <li>
          <p>
            <i class="fas fa-envelope mr-3"></i> info@example.com</p>
        </li>
        <li>
          <p>
            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        </li>
        <li>
          <p>
            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 text-center mx-auto my-4">
       <!-- Social buttons -->
      <h5 class="font-weight-bold text-uppercase mb-4">stay connect</h5>
      <div class="footerSocialIcons">
        <!-- Facebook -->
        <a type="button" class="btn-floating btn-fb">
        <i class="fab fa-facebook"></i>
        </a>
        <!-- Twitter -->
        <a type="button" class="btn-floating btn-yt">
        <i class="fab fa-youtube"></i>
        </a>
        <!-- Google +-->
        <a type="button" class="btn-floating btn-github" href="https://github.com/bakarfreelancer/jcswat" target="_blank">
        <i class="fab fa-github"></i>
        </a>
        <!-- Dribbble -->
        <!-- <a type="button" class="btn-floating btn-dribbble">
          <i class="fab fa-dribbble"></i>
        </a> -->
      </div>
      <h6 class="text-left mt-2 newsLetterHeading">News letter</h6>
      <div class="footerNewsLetter">
        <form action="">
          <input type="email" placeholder="user@mail.com">
          <input type="submit" value="Subscribe" class="btn-pr">
        </form>   
      </div>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">
  Copyright© JC Swat <span class="currentYear"></span>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
