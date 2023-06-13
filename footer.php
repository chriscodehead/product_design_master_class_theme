<footer class="default_footer chiy_footer foot_demo2 padding-py-12">
  <div class="container">
    <div class="defalut-footer">
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-sm-0">
          <div class="item_about">
            <a class="" href="./">
              <img width="200" src="img/logo.png" alt="" />
            </a>
            <p>
              Master Digital Product Design: UX Research & UI Design Cohort 2.0. A complete design education for product designers: Research the user experience, then design a great user interface.
            </p>
            <div class="address">
              <span><?php print $siteAddress; ?></span>
              <span>Call us:
                <a class="c-red" href="tel:<?php print $sitePhone; ?>"><?php print $sitePhone; ?></a></span>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-2">
          <div class="item_links">
            <h4>Social</h4>
            <a class="nav-link" href="#">Facebook</a>
            <a class="nav-link" href="#">Twitter</a>
            <a class="nav-link" href="#">Instagram</a>
            <a class="nav-link" href="#">Youtube</a>
            <a class="nav-link" href="#">Linkedin</a>
          </div>
        </div>
        <div class="col-6 col-md-2">
          <div class="item_links">
            <h4>Company</h4>
            <a class="nav-link" href="./#About">About</a>
            <a class="nav-link" href="./#Curriculum">Curriculum</a>
            <a class="nav-link" href="./#Projects">Projects</a>
            <a class="nav-link" href="./#Pricing">Pricing</a>
            <a class="nav-link" href="./#Contact">Contact</a>
          </div>
        </div>
        <div class="col-md-4 mt-4 mt-sm-0">
          <div class="item_subscribe">
            <h4>Subscribe</h4>
            <p>
              Subscribe To <?php print $siteName; ?>’s Top Courses And Unlock Your Creative Potential and Ignite Your Design Career.
            </p>
            <a href="#Apply" class="btn btn_md_primary bg-red effect-letter rounded-8 c-white mb-3 mb-sm-0 mr-2">
              Get Started</a>
            <form style="display: none;" class="form-row">
              <div class="col-md-11 form-group subscribebtn">
                <div class="item_input">
                  <input type="email" class="form-control rounded-pill" id="exampleInputEmail1" placeholder="Enter email address" aria-describedby="emailHelp" />
                  <button type="button" class="btn ripple_circle scale rounded-circle btn_subscribe">
                    <i class="tio send"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 margin-t-1">
          <!-- <select data-menu>
      <option>French</option>
      <option selected>English</option>
      <option>Arabic</option>
      <option>Russian</option>
     </select> -->

        </div>
      </div>

      <div class="col-12 text-center padding-t-6">
        <div class="copyright">
          <span>© <?php print $siteYear; ?>
            <a href="./" target="_blank"><?php print $siteName; ?>.</a> Powered by <a href="https://centadesk.com">Centadesk.</a>
            All Right Reseved.</span>
        </div>
      </div>
    </div>
    <!-- End Footer -->
  </div>
</footer>

<!-- Back to top with progress indicator-->
<div class="prgoress_indicator">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
  <i style="top: 10px;" class=""></i>
</div>

<!-- Purchase item -->
<a href="https://api.whatsapp.com/send?phone=<?php print $site_whatsapp_num; ?>&text=Hello, I want to enquire about <?php print $siteName; ?>" target="_blank" class="rakon_purchase">
  <button type="button" class="btn btn_purch">
    <div class="icon">
      <img src="img/WhatsApp_icon.png" />
    </div>
    <span class="txt">Support</span>
  </button>
</a>
<!-- End. -->

<!-- Tosts -->
<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center">
  <div class="toast toast_demo" id="myTost" role="alert" aria-live="assertive" aria-atomic="true" data-animation="true" data-autohide="false">
    <div class="toast-body">
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <i class="fa fa-close"></i>
      </button>
      <h5>Hi there 👋</h5>
      <p>We are glad you joined us <a href="#Apply">Join us</a></p>
    </div>
  </div>
</div>
<!-- End. Toasts -->

<!-- Start Section Loader -->
<section class="loading_overlay">
  <div class="loader_logo">
    <img class="" width="300" src="img/logo.png" />
  </div>
</section>
<!-- End. Loader -->

<!-- Video Modal -->
<div class="modal mdll_video fade" id="mdllVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <button type="button" class="close bbt_close ripple_circle" data-dismiss="modal" aria-label="Close">
    <i class="tio clear"></i>
  </button>
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="#" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<script src="assets/js/jquery-3.5.0.js" type="text/javascript"></script>
<script src="assets/js/jquery-migrate.min.js" type="text/javascript"></script>
<script src="assets/js/popper.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/vendor/particles.min.js" type="text/javascript"></script>
<script src="assets/js/vendor/TweenMax.min.js" type="text/javascript"></script>
<script src="assets/js/vendor/ScrollMagic.js" type="text/javascript"></script>
<script src="assets/js/vendor/animation.gsap.js" type="text/javascript"></script>
<script src="assets/js/vendor/debug.addIndicators.min.js" type="text/javascript"></script>
<script src="assets/js/vendor/swiper.min.js" type="text/javascript"></script>
<script src="assets/js/vendor/countdown.js" type="text/javascript"></script>
<script src="assets/js/vendor/simpleParallax.min.js" type="text/javascript"></script>
<script src="assets/js/vendor/waypoints.min.js" type="text/javascript"></script>
<script src="assets/js/vendor/jquery.counterup.min.js" type="text/javascript"></script>
<script src="assets/js/vendor/charming.min.js" type="text/javascript"></script>
<script src="assets/js/vendor/imagesloaded.pkgd.min.js" type="text/javascript"></script>
<script src="assets/js/vendor/jquery.bxslider.min.js" type="text/javascript"></script>
<script src="assets/js/vendor/sharer.js" type="text/javascript"></script>
<script src="assets/js/vendor/sticky.min.js" type="text/javascript"></script>
<script src="assets/js/vendor/aos.js" type="text/javascript"></script>
<script src="assets/js/main.js" type="text/javascript"></script>
<script src="assets/js/pages/hosting.js" type="text/javascript"></script>



<script>
  // Set the end date and time for the course
  const endDate = new Date("2023-07-01T00:00:00").getTime();

  // Update the countdown every second
  const timer = setInterval(() => {
    // Get the current date and time
    const now = new Date().getTime();

    // Calculate the time remaining
    const timeRemaining = endDate - now;

    // Check if the countdown is finished
    if (timeRemaining < 0) {
      clearInterval(timer);
      document.getElementById("timer").innerHTML = "The course has already started!";
      return;
    }

    // Calculate days, hours, minutes, and seconds
    const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

    // Display the countdown Time remaining: 
    document.getElementById("timer").innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
  }, 1000);
</script>

</body>

</html>