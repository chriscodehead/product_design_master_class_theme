<?php
require_once('include.php');
$title = 'Product Design Online Class | UI/UX Master Class - ' . $siteName . ' By Centadesk';
$description = 'Welcome to our website, your gateway to unlocking your creative potential in the world of product design. Discover our transformative master class, designed to equip you with the skills, knowledge, and mentorship you need to excel. Join our vibrant community of passionate designers and shape the future through innovative and impactful designs.';
$keyword = ' product design master class, creative potential, transformative learning, skills development, mentorship, vibrant community, innovative designs, impactful designs';
require_once('head.php'); ?>

<body>
  <div id="wrapper">
    <div id="content">
      <!-- Start header -->
      <?php require_once('header.php'); ?>
      <!-- End header -->
      <!-- Stat main -->
      <main data-spy="scroll" data-target="#navbar-example2" data-offset="0">

        <!-- Start Banner Section -->
        <section class="demo_1 banner_demo6 banner_section">
          <div class="container">
            <div class="row">
              <div class="col-lg-5 mb-5">
                <div class="banner_title">
                  <div class="offer">
                    <span class="c-white">80% Off </span>
                    <span class="c-aquamarine"> Product Design Master Class </span>
                  </div>
                  <h1 class="c-white">
                    Master Digital Product Design: UX Research & UI Design <span class="text-success">Cohort 2.0</span> <span style="font-size: 35px;">(Live Sessions)</span>
                  </h1>
                  <p class="c-light">
                    A complete design education for product designers: Research the user experience, then design a great user interface
                  </p>
                  <div class="prices">
                    <span>Starting at only</span>
                    <p>₦<?php print number_format($initial_pay); ?>/* <strike>₦<?php print number_format($oldprice); ?></strike> </p>
                  </div>
                </div>
                <a href="apply" class="btn btn_md_primary bg-red effect-letter rounded-8 c-white mb-3 mb-sm-0 mr-2">
                  Apply Now!</a>
                <button type="button" class="btn btn_watch btn_md_primary btn_video" data-toggle="modal" data-src="https://www.youtube.com/embed/VvHoHw5AWTk" data-target="#mdllVideo">
                  <i class="fa fa-trophy"></i>
                  Certified Course | Watch Video
                </button>
              </div>

            </div>
          </div>
        </section>
        <!-- End Banner -->

        <!-- Start logos -->
        <section style="display: none;" class="logos_section padding-t-5 text-center">
          <div class="container">
            <h3>Trusted by content creators across the world</h3>
            <div class="row justify-content-md-center">
              <div class="col-md-10">
                <div class="wrapper_logos">
                  <div class="items bxslider">
                    <a class="item-client" href="https://techocraft.com" target="_blank">
                      <img src="img/techo-craft-logo.png" alt="" />
                      <span>Visit site</span>
                    </a>
                    <a class="item-client" href="https://centadesk.com" target="_blank">
                      <img src="img/centadesk-logo.png" alt="" />
                      <span>Visit site</span>
                    </a>
                    <a class="item-client" href="#" target="_blank">
                      <img src="assets/img/logos/fitbit.png" alt="" />
                      <span>Visit site</span>
                    </a>
                    <a class="item-client" href="#" target="_blank">
                      <img src="assets/img/logos/google.png" alt="" />
                      <span>Visit site</span>
                    </a>
                    <a class="item-client" href="#" target="_blank">
                      <img src="assets/img/logos/slack.png" alt="" />
                      <span>Visit site</span>
                    </a>
                    <a class="item-client" href="#" target="_blank">
                      <img src="assets/img/logos/uber.png" alt="" />
                      <span>Visit site</span>
                    </a>
                  </div>
                  <div class="logos_masks"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End logos -->


        <!-- Start Pricing -->
        <section style="background-color: #c873730f; padding-bottom: 50px;" class="pricing_section pricing_demo2 pricing_demo3 padding-t-3" id="Pricing">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-8 col-lg-6 text-center">
                <div class=""><!-- title_sections -->
                  <div style="display: none;" class="before_title">
                    <span>Pricing</span>
                    <span class="c-red">Plan</span>
                  </div>
                  <h2 class="text-dark">Subscribe to <?php print $siteName; ?>’s top courses</h2>
                  <p>Are you ready to take your product design skills to the next level? Join our exclusive live session master class and embark on an incredible journey that will transform the way you approach design. Whether you're a budding designer seeking to enhance your skills or an experienced professional looking to refine your expertise, this master class is tailor-made for you.</p>
                  <!-- Start nav -->
                  <ul class="nav nav-pills" id="pills-tab" role="tablist">

                    <li style="display: none;" class="nav-item" role="presentation">
                      <a class="nav-link" id="pills-annual-tab" data-toggle="pill" href="#pills-annual" role="tab" aria-controls="pills-annual" aria-selected="false">WEB DEVELOPMENT </a>
                    </li>

                    <li style="display: none;" class="nav-item" role="presentation">
                      <a class="nav-link active" id="pills-month-tab" data-toggle="pill" href="#pills-month" role="tab" aria-controls="pills-month" aria-selected="true"> PRODUCT DESIGN (UI/UX)</a>
                    </li>

                  </ul>
                  <!-- End. nav -->
                </div>
              </div>
            </div>

            <div style="background-color: white;" class="tab-content" id="pills-tabContent">

              <div style="display: none;" class="tab-pane fade" id="pills-annual" role="tabpanel" aria-labelledby="pills-annual-tab">

                <div class="blocks_pricing">
                  <div class="row">



                    <div class="col-md-6 col-lg-12">
                      <div class="item__price popular">
                        <img class="icon_popular" src="img/stars.svg" />
                        <div class="logo_price">
                          <div class="icon_gif">
                            <img class="gif" src="assets/img/gif/winking_face.gif" />
                          </div>
                        </div>
                        <h4 class="name_p">Deluxe</h4>
                        <p class="info_price">
                          For individuals looking for a simple CRM solution
                        </p>
                        <div class="number">
                          <span class="n_price">$57</span>
                          <span class="duration">/ ann.</span>
                        </div>
                        <!-- icon Semicircle -->
                        <svg width="22" height="19" viewBox="0 0 22 19">
                          <g id="icon_semicircle" transform="translate(-325.349 -2843.002)">
                            <path class="item_fill" id="Subtraction_6" data-name="Subtraction 6" d="M7.485,7A7.477,7.477,0,0,1,2.349,4.966,7.472,7.472,0,0,1,0,0H14.967A7.514,7.514,0,0,1,7.485,7Z" transform="matrix(0.966, 0.259, -0.259, 0.966, 327.161, 2851.367)" fill="#F28E1C" />
                            <path class="item_opacity" id="Subtraction_7" data-name="Subtraction 7" d="M7.485,0A7.5,7.5,0,0,0,0,7H14.967A7.514,7.514,0,0,0,7.485,0Z" transform="translate(332.383 2843.002)" fill="#F28E1C" opacity="0.1" />
                          </g>
                        </svg>
                        <div class="feature_price">
                          <ul class="list-group">
                            <li class="list-group-item">
                              2GB RAM + 30GB SSD Storage
                            </li>
                            <li class="list-group-item">
                              Multiple Operating Systems
                            </li>
                            <li class="list-group-item">
                              Instant Activation
                            </li>
                            <li class="list-group-item">
                              cPanel or Direct Admin
                            </li>
                            <li class="list-group-item">
                              Unlimited Support
                            </li>
                          </ul>
                          <button type="button" class="btn effect-letter btn_md_primary rounded-8 c-white bg-yollow">
                            Select Plan
                          </button>
                        </div>
                      </div>
                    </div>



                  </div>
                </div>
              </div>

              <div class="tab-pane fade show active" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
                <div class="blocks_pricing">
                  <div class="row">


                    <div class="col-md-6 col-lg-12">
                      <div class="item__price popular">
                        <img class="icon_popular" src="img/stars.svg" />
                        <div class="logo_price">
                          <div class="icon_gif">
                            <img class="gif" src="assets/img/gif/winking_face.gif" />
                          </div>
                        </div>
                        <center>
                          <h1>
                            <div style="font-weight: 1000; font-size: 50px;" class="text-primary" id="timer"></div>
                          </h1>
                        </center>
                        <h4 class="name_p">Product Design (UI/UX)</h4>
                        <p class="info_price">
                          Master Digital Product Design: UX Research & UI Design
                        </p>
                        <div class="number">
                          <span class="n_price">₦<?php print number_format($initial_pay); ?></span>
                          <span class="duration">/* <strike>₦<?php print number_format($oldprice); ?></strike> </span>
                        </div>
                        <!-- icon Semicircle -->
                        <svg width="22" height="19" viewBox="0 0 22 19">
                          <g id="icon_semicircle" transform="translate(-325.349 -2843.002)">
                            <path class="item_fill" id="Subtraction_6" data-name="Subtraction 6" d="M7.485,7A7.477,7.477,0,0,1,2.349,4.966,7.472,7.472,0,0,1,0,0H14.967A7.514,7.514,0,0,1,7.485,7Z" transform="matrix(0.966, 0.259, -0.259, 0.966, 327.161, 2851.367)" fill="#F28E1C" />
                            <path class="item_opacity" id="Subtraction_7" data-name="Subtraction 7" d="M7.485,0A7.5,7.5,0,0,0,0,7H14.967A7.514,7.514,0,0,0,7.485,0Z" transform="translate(332.383 2843.002)" fill="#F28E1C" opacity="0.1" />
                          </g>
                        </svg>
                        <div class="feature_price">
                          <ul class="list-group">
                            <li class="list-group-item">
                              <i class="fa fa-check text-primary"></i>
                              Phases: Beginner | Intermediate | Advanced
                            </li>
                            <li class="list-group-item">
                              <i class="fa fa-check text-primary"></i>
                              Beginner friendly
                            </li>
                            <li class="list-group-item">
                              <i class="fa fa-check text-primary"></i>
                              2-month course period
                            </li>
                            <li class="list-group-item">
                              <i class="fa fa-check text-primary"></i>
                              Complete online learning experience
                            </li>
                            <li class="list-group-item">
                              <i class="fa fa-check text-primary"></i>
                              Flexible self-paced experience
                            </li>
                            <li class="list-group-item">
                              <i class="fa fa-check text-primary"></i>
                              Detailed evaluation of every task by course mentors
                            </li>
                            <li class="list-group-item">
                              <i class="fa fa-check text-primary"></i>
                              40+ hours of on-demand videos
                            </li>
                            <li class="list-group-item">
                              <i class="fa fa-check text-primary"></i>
                              Continuous evaluation instead of examinations
                            </li>
                            <li class="list-group-item">
                              <i class="fa fa-check text-primary"></i>
                              UI/UX Design certificate
                            </li>
                            <li class="list-group-item">
                              <i class="fa fa-check text-primary"></i>
                              9 UI/UX Design portfolio projects
                            </li>
                            <li class="list-group-item">
                              <i class="fa fa-check text-primary"></i>
                              Your best works will be added to our students works of fame
                            </li>
                            <li class="list-group-item">
                              <i class="fa fa-check text-primary"></i>
                              Lifetime access to course materials
                            </li>
                            <li class="list-group-item">
                              <i class="fa fa-check text-primary"></i>
                              Opportunity to participate in sponsored academy competitions
                            </li>
                            <li class="list-group-item">
                              <i class="fa fa-check text-primary"></i> Opportunity to network with top product desigers
                            </li>
                          </ul>

                          <div class="col-lg-12">
                            <h1 class="text-dark pt-5">What you'll learn</h1>
                            <ul class="list-group">
                              <li class="list-group-item">
                                <i class="fa fa-check text-primary"></i>
                                User Research
                              </li>
                              <li class="list-group-item">
                                <i class="fa fa-check text-primary"></i>
                                Low Fidelity Prototyping
                              </li>
                              <li class="list-group-item">
                                <i class="fa fa-check text-primary"></i>
                                High Fidelity Prototyping
                              </li>
                              <li class="list-group-item">
                                <i class="fa fa-check text-primary"></i>
                                User Journey Mapping
                              </li>
                              <li class="list-group-item">
                                <i class="fa fa-check text-primary"></i>
                                Information Architecture
                              </li>
                              <li class="list-group-item">
                                <i class="fa fa-check text-primary"></i>
                                Affinity Mapping
                              </li>
                              <li class="list-group-item">
                                <i class="fa fa-check text-primary"></i>
                                User Testing & Design Validation
                              </li>
                              <li class="list-group-item">
                                <i class="fa fa-check text-primary"></i>
                                UX Audit
                              </li>
                              <li class="list-group-item">
                                <i class="fa fa-check text-primary"></i>
                                Principles of Visual Design
                              </li>
                              <li class="list-group-item">
                                <i class="fa fa-check text-primary"></i>
                                Principles of User Experience(UX) Design and User Interface(UI) design and Customer Experience (CX) Design
                              </li>
                              <li class="list-group-item">
                                <i class="fa fa-check text-primary"></i>
                                Tools & Techniques for Low Fidelity & High Fidelity Prototyping
                              </li>
                              <li class="list-group-item">
                                <i class="fa fa-check text-primary"></i>
                                User Research for creating compelling products and services
                              </li>
                              <li class="list-group-item">
                                <i class="fa fa-check text-primary"></i>
                                Principles & Frameworks for Design Thinking and Information Architecture
                              </li>
                            </ul>

                          </div>

                          <div class="col-lg-12">
                            <h1 class="text-dark pt-5">Essential Items For Program Success</h1>
                            <ul class="list-group">
                              <li class="list-group-item">
                                <i class="fa fa-check text-primary"></i>
                                A laptop or desktop computer
                              </li>
                              <li class="list-group-item">
                                <i class="fa fa-check text-primary"></i>
                                Internet connection
                              </li>
                              <li class="list-group-item">
                                <i class="fa fa-check text-primary"></i>
                                You will need to be on Telegram where you will be mentored in our exclusive groups for the course.
                              </li>
                              <li class="list-group-item">
                                <i class="fa fa-check text-primary"></i>
                                Figma for the UI/UX Design course. You do not have to download this application since it is web-based as well.
                              </li>
                              <li class="list-group-item">
                                <i class="fa fa-check text-primary"></i>
                                and your time 🤝
                              </li>

                            </ul>

                          </div>


                          <a href="apply"><button type="button" class="btn effect-letter btn_md_primary rounded-8 c-white bg-yollow">
                              Apply Now!!!
                            </button></a>



                        </div>
                      </div>

                    </div>

                  </div>
                </div>
              </div>

            </div>

          </div>
        </section>
        <!-- End Start Pricing -->


        <!-- Start Pricing -->
        <section class="pricing_section margin-b-5" id="Curriculum">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-8 col-lg-6 text-center">
                <div class="title_sections_inner margin-b-5">
                  <h2 class="padding-t-5">UI/UX Design Curriculum</h2>
                  <!-- toggle switch -->
                  <div class="toggle_switch margin-t-4">

                    <div style="display: none;" class="toggle">
                      <input type="checkbox" id="switcher" class="check" />
                      <b class="b switch"></b>
                    </div>


                  </div>
                </div>
              </div>
            </div>

            <div class="blocks_pricing" id="monthly">
              <div class="row justify-content-center">

                <div class="col-md-6 col-lg-4">
                  <div class="item__price">
                    <div class="logo_price">
                      <div class="icon_gif">
                        <img class="gif" src="assets/img/partying_face.gif" />
                      </div>
                    </div>
                    <h4 class="name_p">Beginner Session</h4>
                    <div style="display: none;" class="number">
                      <span class="n_price">0</span>
                      <span class="coins">$</span>
                      <span class="d-block per">Free</span>
                    </div>
                    <p style="display: none;" class="info_price">
                      For individuals looking for a simple CRM solution
                    </p>
                    <div class="feature_price">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          A brief look into the definition and relevance of UI and UX design.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          UI design tools.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Figma's interface and prototyping fundamentals using Figma.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Introduction to Design patterns.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Learn all about the fundamentals of building professional logos.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          User Research and its methods.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Design briefs, mood boards, and grid systems.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Typography.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Wireframes
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Iconography.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Designing forms and tables.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Working with components in Figma.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Introduction to Responsive design.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Introduction to prototyping.
                        </li>
                      </ul>
                      <a href="apply"><button type="button" class="btn effect-letter scale rounded-pill btn_md_primary c-white bg-blue">
                          Apply Now!
                        </button></a>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="item__price popular">
                    <img style="display: none;" class="icon_popular" src="assets/img/popular.svg" />

                    <div class="logo_price">
                      <div class="icon_gif">
                        <img class="gif" src="assets/img/nerd_face.gif" />
                      </div>
                    </div>
                    <h4 class="name_p">Intermediate Session</h4>
                    <div style="display: none;" class="number">
                      <span class="n_price">49</span>
                      <span class="coins">$</span>
                      <span class="d-block per">Per User/Month Billed Annually</span>
                    </div>
                    <p style="display: none;" class="info_price">
                      For individuals looking for a simple CRM solution
                    </p>
                    <div class="feature_price">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Carrying out our user survey.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Competitor's analysis.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Conducting interviews.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Creating the design brief.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Creating the user flow.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Creating the mood boards.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Building out our colour system.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Creating UI components.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Creating the high fidelity mockups for our desktop UI.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Prototyping our desktop UI mockups.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Creating the high fidelity mockups for our mobile UI.
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Prototyping the mobile UI mockups.
                        </li>
                      </ul>
                      <a href="apply"><button type="button" class="btn effect-letter scale rounded-pill btn_md_primary c-white bg-yollow">
                          Apply Now!
                        </button></a>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="item__price">
                    <div class="logo_price">
                      <div class="icon_gif">
                        <img class="gif" src="assets/img/smiling_face_with_sunglasses.gif" />
                      </div>
                    </div>
                    <h4 class="name_p">Advanced Session</h4>
                    <div style="display: none;" class="number">
                      <span class="n_price">129</span>
                      <span class="coins">$</span>
                      <span class="d-block per">Per User/Month Billed Annually</span>
                    </div>
                    <p style="display: none;" class="info_price">
                      For businesses looking for deep customization and
                      advanced reports
                    </p>
                    <div class="feature_price">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          This is a flexible but in-depth session where each student will be creating a set of 6 UI samples throughout the session. This is meant to help each student become truly employable as a result of their ability to apply their skill to any industry. There are 2 bonus chapters which are not required for graduation/certification.
                        </li>
                        <!-- <li class="list-group-item">
                          <i class="fa fa-check-circle text-success"></i>
                          Required Fields
                        </li> -->

                      </ul>
                      <a href="apply"><button type="button" class="btn scale effect-letter rounded-pill btn_md_primary c-white bg-orange-red">
                          Apply Now!
                        </button></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>



          </div>
        </section>
        <!-- End Start Pricing -->


        <!-- Start Banner Section -->
        <section class="demo_1 banner_section banner_demo7" id="About">
          <div class="container">
            <div class="row">
              <div class="col-md-5 my-auto">
                <div class="banner_title">
                  <h1 style="font-size: 40px;">Get ready to revolutionize the world of product design.</h1>
                  <p>

                    At <?php print $siteName; ?>, we are passionate about design and committed to empowering individuals to unleash their creative potential. As a leading provider of design education, we offer transformative master classes that equip students with the skills, knowledge, and confidence to excel in the field of product design.</p>
                  <p>

                    Our team of industry experts, including experienced designers and educators, has carefully crafted a comprehensive curriculum that combines theory and practical training. Through engaging exercises, real-world case studies, and interactive live sessions, we ensure that our students gain hands-on experience and a deep understanding of the design process.</p>
                  <p>

                    We believe in the power of mentorship and personalized guidance. That's why our master classes provide direct access to industry professionals who offer invaluable insights, feedback, and support. We foster a collaborative and inclusive learning environment, encouraging students to connect with fellow designers, exchange ideas, and build lasting relationships.</p>
                  <p>

                    At <?php print $siteName; ?>, we are committed to staying at the forefront of design innovation. We constantly update our curriculum to incorporate the latest techniques, tools, and industry trends. By embracing technology and leveraging its potential, we prepare our students to thrive in an ever-evolving design landscape.</p>
                  <p>

                    We are proud to have inspired and nurtured countless aspiring designers who have gone on to make a significant impact in their respective fields. Whether you are a beginner taking your first steps in design or an experienced professional seeking to refine your skills, we are here to support you on your journey towards achieving your design goals.</p>
                  <p>

                    Join us at <?php print $siteName; ?> and unlock your creative potential. Together, let's shape the future of design and make a lasting impact.</p>
                  <p>

                    Welcome to our vibrant community of passionate designers!

                    <?php print $siteName; ?></p>

                  <a style="display: none;" href="#" class="btn btn_md_primary effect-letter rounded-8 bg-blue c-white">Discover</a>
                  <div style="display: none;" class="margin-t-8">
                    <button type="button" class="btn btn_video" data-toggle="modal" data-src="https://www.youtube.com/embed/VvHoHw5AWTk" data-target="#mdllVideo">
                      <div class="scale rounded-circle play_video">
                        <i class="tio play_outlined"></i>
                      </div>
                      <span class="ml-3 font-s-16 c-dark">Show video</span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <img class="ill_05" src="assets/img/girl.svg" />
              </div>
            </div>
          </div>
        </section>
        <!-- End Banner -->

        <!-- Start About -->
        <section class="abo_company">
          <div class="container">
            <div class="row">

              <div class="col-lg-4 emo">
                <div class="gq_item ill_item" style="background-color: #e9f0ff;">
                  <!-- <span class="d-block c-dark font-s-16">🏆 Certificate: Recognize Your Achievement</span> -->
                  <img class="img-fluid ill_sec" src="assets/img/receiving-graduation-certificate-8451931-6720452.png" />
                  <div class="title_sections">
                    <h2 class="c-dark">🏆 Certificate: Recognize Your Achievement</h2>
                    <p class="c-gray">
                      Upon completing our Product Design Master Class, you'll be awarded a prestigious certificate that validates your newfound expertise. This certificate serves as a tangible testament to your commitment and dedication to mastering the art of product design. Display it proudly to showcase your skills to potential employers, clients, or collaborators, opening doors to exciting career opportunities.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 emo mb-4 mb-lg-0">
                <div class="gq_item ill_item">
                  <!-- <span class="d-block c-dark font-s-16">🚀 Practical Training: Hands-On Experience</span> -->
                  <img class="img-fluid ill_sec" src="assets/img/Security.png" />
                  <div class="title_sections">
                    <h2 class="c-dark">🚀 Practical Training: Hands-On Experience</h2>
                    <p class="c-gray">
                      We believe in learning by doing, which is why our master class emphasizes practical training. Through engaging exercises, live demonstrations, and real-world case studies, you'll gain invaluable hands-on experience. Dive into the design process, experiment with different techniques, and refine your skills. Our expert instructors will guide you every step of the way, ensuring you develop the practical expertise needed to tackle any design challenge confidently.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 emo">
                <div class="gq_item ill_item">
                  <!-- <span class="d-block c-dark font-s-16">🤝 Mentorship: Guidance from Industry Experts</span> -->
                  <img class="img-fluid ill_sec" src="assets/img/Update.png" />
                  <div class="title_sections">
                    <h2 class="c-dark">🤝 Mentorship: Guidance from Industry Experts</h2>
                    <p class="c-gray">
                      In addition to the comprehensive curriculum, our master class offers mentorship from seasoned industry professionals. Benefit from their vast experience, industry insights, and personalized guidance. Whether you're seeking career advice, feedback on your portfolio, or guidance on specific design projects, our mentors are here to support you. Forge valuable connections, tap into their expertise, and receive valuable mentorship that can propel your design career to new heights.
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>
        <!-- End. About -->


        <!-- Start Services -->
        <section class="service_demo3 margin-t-8 default_footer dark padding-t-12" id="Apply">
          <div class="container">
            <img class="shape_overlay" src="img/shape-lines.svg" />
            <div class="row">
              <div class="col-lg-12 margin-b-3">
                <div class="title_sections margin-b-2">
                  <h2>Ready to get started with product design?</h2>
                  <p>
                    Secure your spot in this exclusive master class today and unlock a world of design possibilities. Don't miss out on this extraordinary opportunity to learn, grow, and connect with fellow designers.
                  </p>
                  <p>
                    Enroll in our Product Design Master Class today and gain access to a transformative learning experience. Earn a certificate, immerse yourself in practical training, and receive invaluable mentorship—empowering you to become a confident, skilled, and sought-after product designer. Don't miss this opportunity to shape your future in the dynamic world of design!
                  </p>
                </div>
                <div class="dashed-line margin-b-2"></div>
                <!-- Start Testimonial -->
                <div class="block_testimonial">
                  <h3 class="c-white">What Our Students Say</h3>

                  <!-- Start Testimonial -->
                  <!-- Swiper -->
                  <div class="swiper-container gallery-top content_swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="content">
                          "The Product Design Master Class exceeded all my expectations! The practical training and mentorship provided a solid foundation for me to refine my design skills. I highly recommend this class to anyone looking to take their product design expertise to the next level."
                        </div>
                        <div class="man👨">
                          <h4 class="d-inline-block">Sarah D</h4>
                          <a class="d-inline-block" href="#">@SarahD</a>
                          <h6>Student</h6>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="content">
                          "Enrolling in the Product Design Master Class was the best decision I made for my career. The hands-on experience and guidance from industry experts were invaluable. This class helped me unlock my creative potential and boosted my confidence as a designer."
                        </div>
                        <div class="man👨">
                          <h4 class="d-inline-block">John M</h4>
                          <a class="d-inline-block" href="#">@JohnM</a>
                          <h6>Student</h6>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="content">
                          "The Product Design Master Class not only equipped me with practical skills but also inspired me to think outside the box. The curriculum was comprehensive, and the instructors were engaging and supportive. I feel more prepared than ever to tackle any design challenge that comes my way."
                        </div>
                        <div class="man👨">
                          <h4 class="d-inline-block">Emily R</h4>
                          <a class="d-inline-block" href="#">@Emily R</a>
                          <h6>Student</h6>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="content">
                          "I can't recommend the Product Design Master Class enough! The mentorship I received from the tutors was exceptional. Their insights and feedback helped me grow as a designer and gave me the confidence to pursue my dream projects. This class is a game-changer!"
                        </div>
                        <div class="man👨">
                          <h4 class="d-inline-block">Michael S</h4>
                          <a class="d-inline-block" href="#">@MichaelS</a>
                          <h6>Student</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-container gallery-thumbs img_persong">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img class="pagination rounded-circle" src="img/01.png" />
                      </div>
                      <div class="swiper-slide">
                        <img class="pagination rounded-circle" src="img/02.png" />
                      </div>
                      <div class="swiper-slide">
                        <img class="pagination rounded-circle" src="img/03.png" />
                      </div>
                      <div class="swiper-slide">
                        <img class="pagination rounded-circle" src="img/07.png" />
                      </div>
                    </div>
                  </div>
                  <!-- End Swiper -->
                  <div style="display: none;" class="logos-simple mt-4">
                    <a href="#">
                      <img src="img/slack-w.png" />
                    </a>
                    <a href="#">
                      <img src="img/google-w.png" />
                    </a>
                    <a href="#">
                      <img src="img/airbnb-w.png" />
                    </a>
                  </div>

                  <div class="col-12">
                    <a href="apply"><button id="sub" name="sub" class="btn mt-3 rounded-pill btn_sm_primary c-white effect-letter bg-blue">
                        Apply Now!</button></a>
                  </div>

                </div>
              </div>



            </div>
          </div>
          <!-- .container -->
        </section>
        <!-- End. Services -->

        <!-- Start Works -->
        <section class="works_demo2 gng_serv_about padding-t-5" id="Projects">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="title_sections">
                  <div class="before_title">
                    <!-- <span>Clients We</span>
                    <span class="c-blue">Work For</span> -->
                  </div>
                  <h2 class="text-secondary">Projects.</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8">
                <a href="https://www.behance.net/barbaraij" class="item_ig item_mywork">
                  <div class="mg_img">
                    <img class="item_pic" src="assets/img/0321.png" />
                  </div>
                  <div class="info_work">
                    <h4>
                      Spring Labs — Disrupting How Financial Info Is Shared.
                    </h4>
                    <p>
                      Websites & Digital Platforms
                    </p>
                    <div class="link_view">Show Project</div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4">
                <div class="item_ig item_mywork">
                  <div class="icon_played">

                  </div>
                  <a href="https://www.behance.net/barbaraij" class="d-block">
                    <div class="mg_img">
                      <img class="item_pic" src="assets/img/097.png" />
                    </div>
                    <div class="info_work">
                      <h4>Healto — Evolving Healthcare Systems.</h4>
                      <p>
                        Websites & Digital Platforms
                      </p>
                      <div class="link_view">Show Project</div>
                    </div>
                  </a>

                </div>
              </div>
              <div class="col-lg-4">
                <a href="https://www.behance.net/barbaraij" class="item_ig item_mywork">
                  <div class="mg_img">
                    <video class="item_pic" playsinline muted autoplay loop src="assets/img/rezz-jamming_2.mp4"></video>
                  </div>
                  <div class="info_work">
                    <h4>Healto — Evolving Healthcare Systems.</h4>
                    <p>
                      Websites & Digital Platforms
                    </p>
                    <div class="link_view">Show Project</div>
                  </div>
                </a>
              </div>
              <div class="col-lg-8">
                <a href="https://www.behance.net/barbaraij" class="item_ig item_mywork">
                  <div class="mg_img">
                    <img class="item_pic" src="assets/img/78970654.png" />
                  </div>
                  <div class="info_work">
                    <h4>
                      Spring Labs — Disrupting How Financial Info Is Shared.
                    </h4>
                    <p>
                      Websites & Digital Platforms
                    </p>
                    <div class="link_view">Show Project</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- End. works -->

        <!-- strat Blog -->
        <section class="blog_agency margin-t-5 padding-t-12" id="Blog">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-lg-3">
                <div class="title_sections">
                  <h2>Unlock Your Creative Potential</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 mb-3 mb-lg-0 items">
                <a href="https://dribbble.com/maduip" class="item_art">
                  <div class="item_top">
                    <div class="date_mo">
                      <h5>31</h5>
                      <span>Mar</span>
                    </div>
                    <div class="item_cai">
                      <span class="c-red">Design</span>
                      <div class="name_pub">By Instructor</div>
                    </div>
                  </div>
                  <img src="assets/img/097422.png" />
                  <div class="ga_info">
                    <h4>
                      UI / Visual Design, Product Design, UX Design / Research
                    </h4>
                    <div class="tags__bottom">
                      <span>#Google </span>
                      <span>#Amazon</span>
                      <span>#Design</span>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 mb-3 mb-lg-0 items">
                <a href="https://www.behance.net/barbaraij" class="item_art">
                  <div class="item_top">
                    <div class="date_mo">
                      <h5>4</h5>
                      <span>Jun</span>
                    </div>
                    <div class="item_cai">
                      <span>Design</span>
                      <div class="name_pub">By Ifeanyi Madu</div>
                    </div>
                  </div>
                  <img src="assets/img/654.png" />
                  <div class="ga_info">
                    <h4>
                      UI / Visual Design, Product Design, UX Design / Research?
                    </h4>
                    <div class="tags__bottom">
                      <span>#Google </span>
                      <span>#Amazon</span>
                      <span>#Design</span>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 mb-3 mb-lg-0 items">
                <a href="https://dribbble.com/maduip" class="item_art is_image">
                  <img src="img/original-68c44c0f61fd9d248a287af746a1aa95.png" />
                </a>
              </div>
              <div class="col-lg-4 mb-3 mb-lg-0 items">
                <a href="https://dribbble.com/maduip" class="item_art is_image">
                  <img src="img/original-b0fabf7ac42c227c3b5a63bb1a098809.png" />
                </a>
              </div>
              <div class="col-lg-4 mb-3 mb-lg-0 items">
                <a href="https://www.behance.net/barbaraij" class="item_art">
                  <div class="item_top">
                    <div class="date_mo">
                      <h5>9</h5>
                      <span>Jun</span>
                    </div>
                    <div class="item_cai">
                      <span>Developer</span>
                      <div class="name_pub">By Instructor</div>
                    </div>
                  </div>
                  <img src="assets/img/0654.png" />
                  <div class="ga_info">
                    <h4>
                      UI / Visual Design, Product Design, UX Design / Research?
                    </h4>
                    <div class="tags__bottom">
                      <span>#Google </span>
                      <span>#Amazon</span>
                      <span>#Design</span>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 mb-3 mb-lg-0 items">
                <a href="https://www.behance.net/barbaraij" class="item_art">
                  <div class="item_top">
                    <div class="date_mo">
                      <h5>13</h5>
                      <span>Jun</span>
                    </div>
                    <div class="item_cai">
                      <span>Illustration</span>
                      <div class="name_pub">By Instructor</div>
                    </div>
                  </div>
                  <img src="img/21f746161494927.63c66dc11e919.png" />
                  <div class="ga_info">
                    <h4>
                      UI / Visual Design, Product Design, UX Design / Research?
                    </h4>
                    <div class="tags__bottom">
                      <span>#Google </span>
                      <span>#Amazon</span>
                      <span>#Design</span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- End. Blog -->


        <!-- Start Testimonial -->
        <section class="testimonial_demo2 padding-t-12">
          <div class="container">
            <div class="row justify-content-between">

              <div class="col-lg-5 mb-4 mb-lg-0" style="margin-top: 30px;">
                <div class="item_mmon">
                  <div class="profile_user">
                    <img src="img/christian-chika.png" />
                    <div class="categ">
                      <span>Founder</span>
                    </div>
                  </div>
                  <div class="info_persons">
                    <p>
                      "I am thrilled to have you here. Our mission is simple: to empower individuals like you to unlock their creative potential and thrive in the world of design. Through our master class, we provide a transformative learning experience, combining expert guidance, practical training, and invaluable mentorship."
                    </p>
                    <h5><a href="https://www.linkedin.com/in/chriscodehead">Christian Chika</a></h5>
                    <span>Software Engineer</span>
                  </div>
                </div>
              </div>

              <div class="col-lg-5" style="margin-top: 30px;">
                <div class="item_mmon">
                  <div class="profile_user">
                    <img src="img/Barbara-Ikeonyia.png" />
                    <div class="categ">
                      <span>Tutor/Mentor</span>
                    </div>
                  </div>
                  <div class="info_persons">
                    <p>
                      "I firmly believe that education is a lifelong pursuit, and I am thrilled to accompany you on this exciting path of discovery. Together with our co-founder and the rest of our team, we are here to support you every step of the way. Our collective aim is to empower you with the skills, creativity, and confidence necessary to succeed in this dynamic industry."
                    </p>
                    <h5><a href="https://www.behance.net/barbaraij">Barbara Ikeonyia</a></h5>
                    <span>Product Designer (UI & UX)</span>
                  </div>
                </div>
              </div>


              <div class="col-lg-5" style="margin-top: 30px;">
                <div class="item_mmon">
                  <div class="profile_user">
                    <img src="img/Madu-ip.png" />
                    <div class="categ">
                      <span>Tutor/Mentor</span>
                    </div>
                  </div>
                  <div class="info_persons">
                    <p>
                      "With a shared passion for design, I am committed to providing you with an exceptional learning experience. As your tutor, I am dedicated to imparting my knowledge, experience, and insights to help you master the art of product design. Together, we will explore innovative techniques, tackle real-world challenges, and foster your growth as a designer."
                    </p>
                    <h5><a href="https://dribbble.com/maduip">Emmanuel Madu IP</a></h5>
                    <span>Product Designer (UI & UX)</span>
                  </div>
                </div>
              </div>

              <div class="col-lg-5" style="margin-top: 30px;">
                <div class="item_mmon">
                  <div class="profile_user">
                    <img src="img/Ani-Frankpeter.png" />
                    <div class="categ">
                      <span>Mentor</span>
                    </div>
                  </div>
                  <div class="info_persons">
                    <p>
                      "As a mentor of our esteemed organization, I extend a warm welcome to each and every one of you. It is an honor to be a part of your design journey and assist you in reaching your fullest potential. Thank you for choosing our organization for your design education. I am genuinely excited about the journey we are about to embark on, and I look forward to witnessing your remarkable progress and achievements."
                    </p>
                    <h5><a href="https://www.dazeign.com/">Ani Frankpeter</a></h5>
                    <span>Product Designer (UI & UX)</span>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </section>
        <!-- End. Testimonial -->


        <!-- Start Services -->
        <section style="background-color: #c873730f; margin-top: 40px;" class="services_section hosting_service padding-t-12" id="Services">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-lg-4">
                <div class="title_sections mb-0">
                  <div class="img_title">
                    <img src="img/54.svg" />
                  </div>
                  <h2>Unlock Your Creative Potential and Ignite Your Design Career</h2>
                  <p>
                    At <?php print $siteName; ?>, our team of mentors will guide you through every phase with great tasks, real-world projects, and thorough project/task evaluations.
                  </p>
                </div>
              </div>
              <div class="col-lg-6 ml-auto">
                <div class="row">
                  <div class="col-md-6 item">
                    <div class="items_serv sevice_block" data-aos="fade-up" data-aos-delay="0">
                      <div class="icon--top">
                        <i class="fa fa-address-card"></i>
                      </div>
                      <div class="txt">
                        <h3>Learn from Renowned Industry Experts:</h3>
                        <p>
                          Our master class is led by a team of seasoned product design veterans who have successfully brought countless innovative products to life. Gain invaluable insights, tips, and tricks directly from the industry's finest minds.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 item">
                    <div class="items_serv sevice_block" data-aos="fade-up" data-aos-delay="100">
                      <div class="icon--top">
                        <i class="fa fa-code"></i>
                      </div>
                      <div class="txt">
                        <h3>Hands-on, Practical Approach:</h3>
                        <p>
                          Theory is essential, but practical experience is paramount. Through a series of engaging exercises, live demonstrations, and real-world case studies, you'll develop the skills necessary to tackle any design challenge with confidence.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 item">
                    <div class="items_serv sevice_block" data-aos="fade-up" data-aos-delay="200">
                      <div class="icon--top">
                        <i class="fa fa-wrench"></i>
                      </div>
                      <div class="txt">
                        <h3>Cutting-Edge Techniques and Tools:</h3>
                        <p>
                          Stay ahead of the curve with the latest design methodologies and tools used by top professionals. Discover how to leverage technology to streamline your workflow and create exceptional designs that leave a lasting impact.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 item">
                    <div class="items_serv sevice_block" data-aos="fade-up" data-aos-delay="300">
                      <div class="icon--top">
                        <i class="fa fa-comments-o"></i>
                      </div>
                      <div class="txt">
                        <h3>Interactive Live Sessions:</h3>
                        <p>
                          Interact directly with our expert instructors in live sessions conducted via Zoom or Google Meet. Ask questions, seek personalized feedback, and collaborate with fellow participants from around the world, fostering a vibrant and supportive community.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Services -->


        <!-- Start money section -->
        <section class="money_section padding-t-3 margin-t-12">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-md-8 col-lg-6">
                <div class="title_sections">
                  <h2>Introducing the Ultimate Product Design Master Class!</h2>
                  <p>
                    Our meticulously crafted curriculum covers all aspects of product design, from ideation and prototyping to user testing and final presentation.
                  </p>
                </div>
                <a href="apply" class="btn btn_lg_primary rounded-8 c-white effect-letter bg-red">Get Started</a>
              </div>
              <img class="img_hand" src="img/hands.svg" />
            </div>
          </div>
        </section>
        <!-- End. money -->



        <!-- Start Some help -->
        <section class="need_help_sec padding-t-12 margin-b-12" id="Contact">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="block_help">
                  <div class="title_sections mb-0">
                    <h2 class="c-white">Need Some Help?</h2>
                    <p class="c-light">
                      Whether you’re stuck or just want some tips on where to
                      start, hit up our experts anytime.
                    </p>
                    <div class="item_help">
                      <a href="https://api.whatsapp.com/send?phone=<?php print $site_whatsapp_num; ?>&text=Hello, I want to enquire about <?php print $siteName; ?>" target="_blank"><span class="c-aquamarine">Let's Chat</span></a>
                      <p>
                        24/7/365 through the chat widget.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mt-4 mt-lg-0">
                <img class="img_help" src="img/78.svg" />
              </div>
            </div>
          </div>
        </section>
        <!-- End. some help -->

      </main>
      <!-- end main -->
    </div>
    <!-- [id] content -->
    <?php require_once('footer.php'); ?>