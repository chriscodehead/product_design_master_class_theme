<?php
require_once('include.php');
$title = 'Apply Now | Learn Product Design (UI/UX) - ' . $siteName . ' By Centadesk';
$description = 'Secure your spot in our highly sought-after product design master class by completing the registration process. Join a community of like-minded designers and gain access to expert guidance, practical sessions, and valuable mentorship. Reserve your seat now to unlock your creative potential and embark on a transformative learning journey.';
$keyword = 'registration, product design master class, expert guidance, practical sessions, mentorship, creative potential, transformative learning, secure your spot';

$msg = '';
$done = 0;
if (isset($_POST['sub'])) {
  $fullname = $_POST['fullname'];
  $ex = explode(" ", $fullname);
  $fname = $ex[0];
  $lname = end($ex);
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $sex = $_POST['gender'];
  $dob = $_POST['dob'];
  $country = $_POST['country'];
  $employment_status = $_POST['employment_status'];
  $experience_level = $_POST['experience_level'];
  $learning_hours = $_POST['learning_hours'];
  $payment_method = $_POST['payment_method'];
  $hear_about_us = $_POST['hear_about_us'];
  $learning_interest = $_POST['learning_interest'];
  $address = '';
  $user_code = $bassic->picker() . uniqid();
  $date_reg = $bassic->getDate();
  $pass = uniqid();
  $rawpass = $pass;
  $client_username = uniqid();
  $account_type = 'user';
  $email_activation = 'yes';
  $blocked_account = '0';
  $passport = 'avatar.png';
  $two_factor = 'No';
  $two_factor_code = $bassic->picker();
  $forget_password_code = uniqid();
  $passh = $bassic->passwordHash($agorithm, $pass);
  $hashed_pot = $bassic->passwordHash($agorithm, $email);
  $payment_activation_status = 'no';
  $main_account_balance = 0;
  $last_activity = $bassic->getUrl();

  if (!empty($fullname) && !empty($email) && !empty($phone) && !empty($sex) && !empty($dob) && !empty($country) && !empty($employment_status) && !empty($experience_level) && !empty($learning_hours) && !empty($payment_method) && !empty($hear_about_us) && !empty($learning_interest)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

      if ($cal->checkifdataExists($email, 'email', $user_tb) == 1) {
        $msg = "Error! Email address used, already exist";
      } else if ($cal->checkifdataExists($email, 'email', $user_tb) == 0) {

        $feilds = array('id', 'user_code', 'first_name', 'last_name', 'sex', 'country', 'email', 'phone', 'password', 'date_reg', 'last_activity', 'email_activation', 'blocked_account', 'forget_password_code', 'passport', 'client_username', 'address', 'account_type', 'hashed_pot', 'two_factor', 'two_factor_code', 'rawpass', 'payment_activation_status', 'main_account_balance', 'dob', 'employment_status', 'experience_level', 'learning_hours', 'payment_method', 'hear_about_us', 'learning_interest');
        $value = array(null, $user_code, $fname, $lname, $sex, $country, $email, $phone, $passh, $date_reg, $last_activity, $email_activation, $blocked_account, $forget_password_code, $passport, $client_username, $address, $account_type, $hashed_pot, $two_factor, $two_factor_code, $rawpass, $payment_activation_status, $main_account_balance, $dob, $employment_status, $experience_level, $learning_hours, $payment_method, $hear_about_us, $learning_interest);
        $result = $cal->insertDataB($user_tb, $feilds, $value);
        $msg = $result;
        if ($result == 'Registration was successful. Proceed to login!') {

          // Prepare the payment request payload
          $payload = array(
            'tx_ref' => $user_code, // Generate a unique transaction reference
            'amount' => $initial_pay,
            'currency' => 'NGN', // Set your desired currency
            'redirect_url' => $siteLink . 'payment-status.php',
            'payment_options' => $payment_method, // Set the payment options (e.g., card, bank transfer, etc.)
            'customer' => array(
              'email' => $email,
              'phone_number' => $phone,
              'name' => $fullname
            ),
            'customizations' => array(
              'title' => 'Product Design Master Class', // Set the title for your product or service
              'description' => 'Registration Fee', // Set the description for your product or service
              'logo' => $siteLink . 'img/logo.png' // Set the URL for your logo image
            )
          );

          // Encode the payload as JSON
          $jsonPayload = json_encode($payload);

          // Set the Flutterwave API endpoint
          $paymentUrl = 'https://api.flutterwave.com/v3/payments';

          // Initialize cURL
          $ch = curl_init();

          // Set cURL options
          curl_setopt($ch, CURLOPT_URL, $paymentUrl);
          curl_setopt($ch, CURLOPT_POST, true);
          curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonPayload);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $secretKey
          ));

          // Execute the cURL request
          $response = curl_exec($ch);

          // Close the cURL session
          curl_close($ch);

          // Decode the response JSON
          $responseData = json_decode($response, true);

          // Retrieve the payment link from the response data
          $paymentLink = $responseData['data']['link'];

          // Redirect the user to the Flutterwave payment page
          header("Location: $paymentLink");
          exit();
        } else {
          $msg = "Error! Registration failed try again.";
        }
      }
    } else {
      $msg = "Invalid email address.";
    }
  } else {
    $msg = 'Please fill all necessary fields!';
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
                    Product Design Application
                  </h1>
                  <p data-aos="fade-up" data-aos-delay="100">
                    Secure your spot in this exclusive master class today and unlock a world of design possibilities. Don't miss out on this extraordinary opportunity to learn, grow, and connect with fellow designers. ðŸ™‚
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
                  <form action="" class="row" method="post" enctype="multipart/form-data">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Full name*</label>
                        <input id="fullname" name="fullname" type="text" class="form-control" placeholder="ex. John Don" required />
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Email address*</label>
                        <input id="email" name="email" type="email" class="form-control" placeholder="ex. john@mail.com" required />
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Phone Number*</label>
                        <input id="phone" name="phone" type="text" class="form-control" placeholder="Phone Number" required />
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Gender*</label>
                        <select required id="gender" name="gender" class="form-control">
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Date of Birth*</label>
                        <input max="2007-01-01" type="date" placeholder="Select age group" name="dob" id="dob" aria-required="true" class="form-control" value="">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Select Country*</label>
                        <select required id="country" name="country" class="form-control custom-select" name="country">
                          <option>Please Select</option>
                          <option value="Afghanistan">Afghanistan</option>
                          <option value="Ã…land Islands">Ã…land Islands</option>
                          <option value="Albania">Albania</option>
                          <option value="Algeria">Algeria</option>
                          <option value="American Samoa">American Samoa</option>
                          <option value="Andorra">Andorra</option>
                          <option value="Angola">Angola</option>
                          <option value="Anguilla">Anguilla</option>
                          <option value="Antarctica">Antarctica</option>
                          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                          <option value="Argentina">Argentina</option>
                          <option value="Armenia">Armenia</option>
                          <option value="Aruba">Aruba</option>
                          <option value="Australia">Australia</option>
                          <option value="Austria">Austria</option>
                          <option value="Azerbaijan">Azerbaijan</option>
                          <option value="Bahamas">Bahamas</option>
                          <option value="Bahrain">Bahrain</option>
                          <option value="Bangladesh">Bangladesh</option>
                          <option value="Barbados">Barbados</option>
                          <option value="Belarus">Belarus</option>
                          <option value="Belgium">Belgium</option>
                          <option value="Belize">Belize</option>
                          <option value="Benin">Benin</option>
                          <option value="Bermuda">Bermuda</option>
                          <option value="Bhutan">Bhutan</option>
                          <option value="Bolivia">Bolivia</option>
                          <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                          <option value="Botswana">Botswana</option>
                          <option value="Bouvet Island">Bouvet Island</option>
                          <option value="Brazil">Brazil</option>
                          <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                          <option value="Brunei Darussalam">Brunei Darussalam</option>
                          <option value="Bulgaria">Bulgaria</option>
                          <option value="Burkina Faso">Burkina Faso</option>
                          <option value="Burundi">Burundi</option>
                          <option value="Cambodia">Cambodia</option>
                          <option value="Cameroon">Cameroon</option>
                          <option value="Canada">Canada</option>
                          <option value="Cape Verde">Cape Verde</option>
                          <option value="Cayman Islands">Cayman Islands</option>
                          <option value="Central African Republic">Central African Republic</option>
                          <option value="Chad">Chad</option>
                          <option value="Chile">Chile</option>
                          <option value="China">China</option>
                          <option value="Christmas Island">Christmas Island</option>
                          <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                          <option value="Colombia">Colombia</option>
                          <option value="Comoros">Comoros</option>
                          <option value="Congo">Congo</option>
                          <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The
                          </option>
                          <option value="Cook Islands">Cook Islands</option>
                          <option value="Costa Rica">Costa Rica</option>
                          <option value="Cote D'ivoire">Cote D'ivoire</option>
                          <option value="Croatia">Croatia</option>
                          <option value="Cuba">Cuba</option>
                          <option value="Cyprus">Cyprus</option>
                          <option value="Czech Republic">Czech Republic</option>
                          <option value="Denmark">Denmark</option>
                          <option value="Djibouti">Djibouti</option>
                          <option value="Dominica">Dominica</option>
                          <option value="Dominican Republic">Dominican Republic</option>
                          <option value="Ecuador">Ecuador</option>
                          <option value="Egypt">Egypt</option>
                          <option value="El Salvador">El Salvador</option>
                          <option value="Equatorial Guinea">Equatorial Guinea</option>
                          <option value="Eritrea">Eritrea</option>
                          <option value="Estonia">Estonia</option>
                          <option value="Ethiopia">Ethiopia</option>
                          <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                          <option value="Faroe Islands">Faroe Islands</option>
                          <option value="Fiji">Fiji</option>
                          <option value="Finland">Finland</option>
                          <option value="France">France</option>
                          <option value="French Guiana">French Guiana</option>
                          <option value="French Polynesia">French Polynesia</option>
                          <option value="French Southern Territories">French Southern Territories</option>
                          <option value="Gabon">Gabon</option>
                          <option value="Gambia">Gambia</option>
                          <option value="Georgia">Georgia</option>
                          <option value="Germany">Germany</option>
                          <option value="Ghana">Ghana</option>
                          <option value="Gibraltar">Gibraltar</option>
                          <option value="Greece">Greece</option>
                          <option value="Greenland">Greenland</option>
                          <option value="Grenada">Grenada</option>
                          <option value="Guadeloupe">Guadeloupe</option>
                          <option value="Guam">Guam</option>
                          <option value="Guatemala">Guatemala</option>
                          <option value="Guernsey">Guernsey</option>
                          <option value="Guinea">Guinea</option>
                          <option value="Guinea-bissau">Guinea-bissau</option>
                          <option value="Guyana">Guyana</option>
                          <option value="Haiti">Haiti</option>
                          <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                          <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                          <option value="Honduras">Honduras</option>
                          <option value="Hong Kong">Hong Kong</option>
                          <option value="Hungary">Hungary</option>
                          <option value="Iceland">Iceland</option>
                          <option value="India">India</option>
                          <option value="Indonesia">Indonesia</option>
                          <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                          <option value="Iraq">Iraq</option>
                          <option value="Ireland">Ireland</option>
                          <option value="Isle of Man">Isle of Man</option>
                          <option value="Israel">Israel</option>
                          <option value="Italy">Italy</option>
                          <option value="Jamaica">Jamaica</option>
                          <option value="Japan">Japan</option>
                          <option value="Jersey">Jersey</option>
                          <option value="Jordan">Jordan</option>
                          <option value="Kazakhstan">Kazakhstan</option>
                          <option value="Kenya">Kenya</option>
                          <option value="Kiribati">Kiribati</option>
                          <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of
                          </option>
                          <option value="Korea, Republic of">Korea, Republic of</option>
                          <option value="Kuwait">Kuwait</option>
                          <option value="Kyrgyzstan">Kyrgyzstan</option>
                          <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                          <option value="Latvia">Latvia</option>
                          <option value="Lebanon">Lebanon</option>
                          <option value="Lesotho">Lesotho</option>
                          <option value="Liberia">Liberia</option>
                          <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                          <option value="Liechtenstein">Liechtenstein</option>
                          <option value="Lithuania">Lithuania</option>
                          <option value="Luxembourg">Luxembourg</option>
                          <option value="Macao">Macao</option>
                          <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav
                            Republic of</option>
                          <option value="Madagascar">Madagascar</option>
                          <option value="Malawi">Malawi</option>
                          <option value="Malaysia">Malaysia</option>
                          <option value="Maldives">Maldives</option>
                          <option value="Mali">Mali</option>
                          <option value="Malta">Malta</option>
                          <option value="Marshall Islands">Marshall Islands</option>
                          <option value="Martinique">Martinique</option>
                          <option value="Mauritania">Mauritania</option>
                          <option value="Mauritius">Mauritius</option>
                          <option value="Mayotte">Mayotte</option>
                          <option value="Mexico">Mexico</option>
                          <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                          <option value="Moldova, Republic of">Moldova, Republic of</option>
                          <option value="Monaco">Monaco</option>
                          <option value="Mongolia">Mongolia</option>
                          <option value="Montenegro">Montenegro</option>
                          <option value="Montserrat">Montserrat</option>
                          <option value="Morocco">Morocco</option>
                          <option value="Mozambique">Mozambique</option>
                          <option value="Myanmar">Myanmar</option>
                          <option value="Namibia">Namibia</option>
                          <option value="Nauru">Nauru</option>
                          <option value="Nepal">Nepal</option>
                          <option value="Netherlands">Netherlands</option>
                          <option value="Netherlands Antilles">Netherlands Antilles</option>
                          <option value="New Caledonia">New Caledonia</option>
                          <option value="New Zealand">New Zealand</option>
                          <option value="Nicaragua">Nicaragua</option>
                          <option value="Niger">Niger</option>
                          <option value="Nigeria">Nigeria</option>
                          <option value="Niue">Niue</option>
                          <option value="Norfolk Island">Norfolk Island</option>
                          <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                          <option value="Norway">Norway</option>
                          <option value="Oman">Oman</option>
                          <option value="Pakistan">Pakistan</option>
                          <option value="Palau">Palau</option>
                          <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                          <option value="Panama">Panama</option>
                          <option value="Papua New Guinea">Papua New Guinea</option>
                          <option value="Paraguay">Paraguay</option>
                          <option value="Peru">Peru</option>
                          <option value="Philippines">Philippines</option>
                          <option value="Pitcairn">Pitcairn</option>
                          <option value="Poland">Poland</option>
                          <option value="Portugal">Portugal</option>
                          <option value="Puerto Rico">Puerto Rico</option>
                          <option value="Qatar">Qatar</option>
                          <option value="Reunion">Reunion</option>
                          <option value="Romania">Romania</option>
                          <option value="Russian Federation">Russian Federation</option>
                          <option value="Rwanda">Rwanda</option>
                          <option value="Saint Helena">Saint Helena</option>
                          <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                          <option value="Saint Lucia">Saint Lucia</option>
                          <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                          <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                          <option value="Samoa">Samoa</option>
                          <option value="San Marino">San Marino</option>
                          <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                          <option value="Saudi Arabia">Saudi Arabia</option>
                          <option value="Senegal">Senegal</option>
                          <option value="Serbia">Serbia</option>
                          <option value="Seychelles">Seychelles</option>
                          <option value="Sierra Leone">Sierra Leone</option>
                          <option value="Singapore">Singapore</option>
                          <option value="Slovakia">Slovakia</option>
                          <option value="Slovenia">Slovenia</option>
                          <option value="Solomon Islands">Solomon Islands</option>
                          <option value="Somalia">Somalia</option>
                          <option value="South Africa">South Africa</option>
                          <option value="South Georgia and The South Sandwich Islands">South Georgia and The South
                            Sandwich Islands</option>
                          <option value="Spain">Spain</option>
                          <option value="Sri Lanka">Sri Lanka</option>
                          <option value="Sudan">Sudan</option>
                          <option value="Suriname">Suriname</option>
                          <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                          <option value="Swaziland">Swaziland</option>
                          <option value="Sweden">Sweden</option>
                          <option value="Switzerland">Switzerland</option>
                          <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                          <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                          <option value="Tajikistan">Tajikistan</option>
                          <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                          <option value="Thailand">Thailand</option>
                          <option value="Timor-leste">Timor-leste</option>
                          <option value="Togo">Togo</option>
                          <option value="Tokelau">Tokelau</option>
                          <option value="Tonga">Tonga</option>
                          <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                          <option value="Tunisia">Tunisia</option>
                          <option value="Turkey">Turkey</option>
                          <option value="Turkmenistan">Turkmenistan</option>
                          <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                          <option value="Tuvalu">Tuvalu</option>
                          <option value="Uganda">Uganda</option>
                          <option value="Ukraine">Ukraine</option>
                          <option value="United Arab Emirates">United Arab Emirates</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="United States">United States</option>
                          <option value="United States Minor Outlying Islands">United States Minor Outlying Islands
                          </option>
                          <option value="Uruguay">Uruguay</option>
                          <option value="Uzbekistan">Uzbekistan</option>
                          <option value="Vanuatu">Vanuatu</option>
                          <option value="Venezuela">Venezuela</option>
                          <option value="Viet Nam">Viet Nam</option>
                          <option value="Virgin Islands, British">Virgin Islands, British</option>
                          <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                          <option value="Wallis and Futuna">Wallis and Futuna</option>
                          <option value="Western Sahara">Western Sahara</option>
                          <option value="Yemen">Yemen</option>
                          <option value="Zambia">Zambia</option>
                          <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Employment Status*</label>
                        <select required id="employment_status" name="employment_status" class="form-control">
                          <option value="employed">Employed</option>
                          <option value="unemployed">Unemployed</option>
                          <option value="self-employed">Self Employed</option>
                        </select>
                      </div>
                    </div>

                    <!-- <div class="col-md-12">
                          <div class="form-group">
                            <label>Company/Organization(Optional)</label>
                            <input id="company" name="company" type="text" class="form-control" placeholder="Company/Organization" />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Current Job/Role(Optional)</label>
                            <input id="job" name="job" type="text" class="form-control" placeholder="Current Job/Role" />
                          </div>
                        </div> -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Experience Level*</label>
                        <select required id="experience_level" name="experience_level" class="form-control">
                          <option value="newbies">Newbies</option>
                          <option value="Intermidiate">Intermidiate</option>
                          <option value="Advance">Advance</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Learning Device*</label>
                        <select required id="learning_device" name="learning_device" class="form-control">
                          <option value="laptop">Laptop</option>
                          <option value="desktop">Desktop</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>How Many Hours Can You Dedicated Weekly To Learning*</label>
                        <select required id="learning_hours" name="learning_hours" class="form-control">
                          <option value="24">24 Hours Weekly</option>
                          <option value="48">48 Hours Weekly</option>
                          <option value="58">58 Hours Weekly</option>
                          <option value="58+">58+ Hours Weekly</option>
                        </select>
                      </div>
                    </div>

                    <!-- <div class="col-md-12">
                      <div class="form-group">
                        <label>Preferred Session Format*</label>
                        <select required id="session" name="session" class="form-control">
                          <option value="Google Meet">Google Meet</option>
                          <option value="Zoom">Zoom</option>
                        </select>
                      </div>
                </div> -->

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Preferred Payment Method*</label>
                        <select required id="payment_method" name="payment_method" class="form-control">
                          <option value="bank transfer">Bank Transfer</option>
                          <option value="card">Credit/Debit Card</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>How did you hear about us?*</label>
                        <select required id="hear_about_us" name="hear_about_us" class="form-control">
                          <option value="facebook">Facebook</option>
                          <option value="linkedin">Linkedin</option>
                          <option value="Youtube">Youtube</option>
                          <option value="friend">Friend</option>
                          <option value="WhatsApp">WhatsApp</option>
                          <option value="other">other</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group --password"">
                    <label>Why are you interested in this Master Class?*</label>
                    <div class=" input-group">
                        <textarea id="learning_interest" name="learning_interest" class="form-control" placeholder="Tell us more about your interest and expectations"></textarea>
                      </div>
                    </div>
                </div>

                <div class="col-12 terms">
                  <p class="text-white">
                    By clicking on the Apply Now! button, you agree to <?php print $siteName; ?>.
                    <a href="#">terms and conditions of use.</a> <span class="text-success">Fee: ₦<?php print number_format($initial_pay); ?></span>
                  </p>
                </div>

                <div class="col-12">
                  <button id="sub" name="sub" class="btn mt-3 rounded-pill btn_sm_primary c-white effect-letter bg-blue">
                    Apply Now!</button>
                </div>




                </form>
              </div>
            </div>
          </div>

          <!-- <div class="po__person_support">
            <img class="floating-2" src="assets/img/persons/02.png" alt="">
            <img class="floating-3" src="assets/img/persons/15.png" alt="">
            <img class="floating-4" src="assets/img/persons/04.png" alt="">
            <img class="floating-3" src="assets/img/persons/16.png" alt="">
            <img class="floating" src="assets/img/persons/03.png" alt="">
            <img class="floating-2" src="assets/img/persons/05.png" alt="">
          </div> -->
    </div>

    </section>
    <!-- End. Banner -->


    </main>
    <!-- end main -->
  </div>
  <!-- [id] content -->
  <?php require_once('footer.php'); ?>