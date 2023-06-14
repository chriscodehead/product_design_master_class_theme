<?php
require_once('include.php');
$title = 'Apply Now | Learn Product Design (UI/UX) - ' . $siteName . ' By Centadesk';
$description = 'Secure your spot in our highly sought-after product design master class by completing the registration process. Join a community of like-minded designers and gain access to expert guidance, practical sessions, and valuable mentorship. Reserve your seat now to unlock your creative potential and embark on a transformative learning journey.';
$keyword = 'registration, product design master class, expert guidance, practical sessions, mentorship, creative potential, transformative learning, secure your spot';

$msg = '';

$txRef = $_GET['tx_ref'];
if (isset($txRef) && !empty($txRef)) {
} else {
 header("Location: apply");
}
$sql = query_sql("SELECT * FROM $user_tb WHERE `user_code`='" . $txRef . "' LIMIT 1");
$row = mysqli_fetch_assoc($sql);

$message = '<h3 class="text-success">Congratulations ' . $_GET['name'] . '!</h3>

        <p>We are thrilled to inform you that your registration for our Product Design Master Class has been successfully completed. You are now officially part of a vibrant community of passionate designers who are committed to pushing the boundaries of creativity and innovation.</p>

        <p>By joining this master class, you have taken a significant step towards honing your product design skills, gaining valuable insights, and expanding your professional network. We are confident that this journey will be transformative, empowering you to unleash your full potential in the world of design.</p>

        <p>Throughout the course, you will have access to industry experts, practical sessions, mentorship, and a supportive community of fellow learners. We encourage you to actively engage, share your ideas, and embrace the challenges that lie ahead. Together, we will explore new horizons, create impactful designs, and shape the future of product design.</p>

        <p>Once again, congratulations on securing your spot in our Product Design Master Class. We look forward to embarking on this incredible learning journey with you!</p>

        <p>If you have any questions or need further assistance, please do not hesitate to reach out to our support team. Welcome aboard!</p><br /><br />
        <center><a href="https://t.me/+dGfFrNVllHhhYTg8"><button class="btn btn-primary">Join Telegram!</button></a></center>
<br /><br />
        <p>Best regards,
        ' . $this->siteName . ' Team<br /><br />
        Powered by: <a href="https://centadesk.com">CENTADESK GLOBAL SERVICES</a></p>';

if (isset($_GET['status'])) {
 //* check payment status
 if ($_GET['status'] == 'cancelled') {
  // echo 'YOu cancel the payment';
  header('Location: apply?id=cancelled');
 } elseif ($_GET['status'] == 'successful') {
  $txid = $_GET['transaction_id'];

  $curl = curl_init();
  curl_setopt_array($curl, array(
   CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$txid}/verify",
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => "",
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 0,
   CURLOPT_FOLLOWLOCATION => true,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => "GET",
   CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Authorization: Bearer " . $secretKey
   ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);

  $res = json_decode($response);
  if ($res->status) {
   $amountPaid = $res->data->charged_amount;
   $amountToPay = $res->data->meta->price;
   if ($amountPaid >= $amountToPay) {

    $msg = $message;
    $pass = uniqid();
    $passh = $bassic->passwordHash($agorithm, $pass);
    $fullname = $row['first_name'] . ' ' . $row['last_name'];
    $email = $row['email'];
    $email_call->ActivateMail($email, $pass, $fullname);
    $done = 1;
    $fields = array('payment_activation_status', 'rawpass', 'password');
    $values = array('yes', $pass, $passh);
    $result = $cal->update($user_tb, $fields, $values, 'user_code', $txRef);
    //* Continue to give item to the user

   } else {
    $msg = 'Fraud transaction detected';
   }
  } else {
   $msg = 'Can not process payment';
  }
 }
}
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
          Product Design Application Status
         </h1>
         <p style="text-align: justify !important;" data-aos="fade-up" data-aos-delay="100">
          <?php if (isset($msg) && !empty($msg)) { ?>
           <?php print $msg; ?>
          <?php } ?>
         </p>

        </div>
       </div>
      </div>

      <div class="row justify-content-center">
       <div class="col-lg-6">

        <div class="bbox__form" data-aos="fade-up" data-aos-delay="300">

        </div>
       </div>
      </div>


     </div>

    </section>
    <!-- End. Banner -->


   </main>
   <!-- end main -->
  </div>
  <!-- [id] content -->
  <?php require_once('footer.php'); ?>