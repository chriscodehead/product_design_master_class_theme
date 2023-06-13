<?php
require_once('include.php');
$title = 'Apply Now | Learn Product Design (UI/UX) - ' . $siteName . ' By Centadesk';
$description = 'Secure your spot in our highly sought-after product design master class by completing the registration process. Join a community of like-minded designers and gain access to expert guidance, practical sessions, and valuable mentorship. Reserve your seat now to unlock your creative potential and embark on a transformative learning journey.';
$keyword = 'registration, product design master class, expert guidance, practical sessions, mentorship, creative potential, transformative learning, secure your spot';

$msg = '';
require_once('head.php'); ?>

<body>
 <div id="wrapper">
  <div id="content">
   <!-- Start header -->
   <?php require_once('header.php'); ?>
   <!-- End header -->
   <!-- Stat main -->
   <main data-spy="scroll" data-target="#navbar-example2" data-offset="0">

    <!-- Start banner_cotact_one -->
    <section class="demo__charity banner_cotact_one">
     <div class="container">
      <div class="row justify-content-center text-center">
       <div class="col-md-8 col-lg-8">
        <div class="banner_title_inner">
         <h1 class="c-white" data-aos="fade-up" data-aos-delay="0">
          Product Design Application
         </h1>
         <p data-aos="fade-up" data-aos-delay="100">
          Secure your spot in this exclusive master class today and unlock a world of design possibilities. Don't miss out on this extraordinary opportunity to learn, grow, and connect with fellow designers. 🙂
         </p>
         <center>
          <h1>
           <div style="font-weight: 700; font-size: 40px;" class="text-success" id="timer"></div>
          </h1>
         </center>
        </div>
       </div>
      </div>

      <div class="row justify-content-center">
       <div class="col-lg-6">
        <?php if (isset($msg) && !empty($msg)) { ?>
         <div class="alert alert-danger text-white"><?php print $msg; ?></div>
        <?php } ?>
        <div class="bbox__form" data-aos="fade-up" data-aos-delay="300">

        </div>
       </div>
      </div>

      <div class="po__person_support">
       <img class="floating-2" src="assets/img/persons/02.png" alt="">
       <img class="floating-3" src="assets/img/persons/15.png" alt="">
       <img class="floating-4" src="assets/img/persons/04.png" alt="">
       <img class="floating-3" src="assets/img/persons/16.png" alt="">
       <img class="floating" src="assets/img/persons/03.png" alt="">
       <img class="floating-2" src="assets/img/persons/05.png" alt="">
      </div>
     </div>

    </section>
    <!-- End. Banner -->


   </main>
   <!-- end main -->
  </div>
  <!-- [id] content -->
  <?php require_once('footer.php'); ?>