<?php
require_once('include.php');
$title = 'Deposit | '.$siteName;
$desc = '';
require_once('head.php');?>
<body class="nk-body npc-crypto bg-white has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <?php require_once('side-bar.php');?>
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <?php require_once('header.php');?>
                <!-- content @s -->

                <?php if($sqli->getRow($sqli->getEmail($_SESSION['user_code']),'payment_activation_status')=='no'){?>
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="kyc-app wide-sm m-auto">
                                <div class="buysell-nav text-center">
                                    <ul class="nk-nav nav nav-tabs nav-tabs-s2">
                                        <li class="nav-item">
                                            <a class="nav-link" href="./dashboard/withdrawal-history">Withdrawal History</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="./dashboard/all-transaction">All Transaction</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                                    <div class="nk-block-head-content text-center">
                                        <h2 class="nk-block-title fw-normal">Activate Your Account</h2>
                                        <div class="nk-block-des">
                                            <p>To be eligible to participate in our <?php print $siteName;?> program deposit $<?php print $initial_pay;?> to get your account activated so you can start earning when you refer other users to our platform. </p>
                                        </div>
                                    </div>
                                </div>

                                <?php if(isset($_GET['error']) && !empty($_GET['error'])){?>
                                <div class="alert alert-warning">
                                    <div class="alert-cta flex-wrap flex-md-nowrap">
                                        <div class="alert-text">
                                            <p><?php print @$_GET['error'];?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>

                                <form enctype="multipart/form-data" method="post" action="./dashboard/deposit-processor">
                                    <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="nk-kycfm">

                                            <div class="nk-kycfm-head">
                                                <div class="nk-kycfm-title">
                                                    <h5 class="title">Amount</h5>
                                                    <p class="sub-title"><h1>$<?php print $initial_pay;?></h1></p>
                                                    <input type="hidden" name="amount" value="<?php print $initial_pay;?>">
                                                </div>
                                            </div>
                                            <div class="nk-kycfm-content">
                                                <div class="nk-kycfm-note">
                                                    <em class="icon ni ni-info-fill" data-toggle="tooltip" data-placement="right" title="Tooltip on right"></em>
                                                    <p>Select coin type to make payment.</p>
                                                </div>
                                                <ul class="nk-kycfm-control-list g-3">
                                                    <li class="nk-kycfm-control-item">
                                                        <input value="USDT" class="nk-kycfm-control" type="radio" name="coin" id="passport" data-title="Passport" checked>
                                                        <label class="nk-kycfm-label" for="passport">
                                                            <span class="nk-kycfm-label-icon">
                                                                <div class="label-icon">
                                                                    <em class="icon ni ni-tether x4"></em>
                                                                </div>
                                                            </span>
                                                            <span class="nk-kycfm-label-text">USDT (<?php print $usdt_network;?>)</span>
                                                        </label>
                                                    </li>

                                                    <li style="display: none;" class="nk-kycfm-control-item">
                                                        <input value="ETH" disabled class="nk-kycfm-control" type="radio" name="coin" id="national-id" data-title="National ID">
                                                        <label class="nk-kycfm-label" for="national-id">
                                                            <span class="nk-kycfm-label-icon">
                                                                <div class="label-icon">
                                                                    <em class="coin ni ni-ethereum x4"></em>
                                                                </div>
                                                            </span>
                                                            <span class="nk-kycfm-label-text">ETH(Inactive)</span>
                                                        </label>
                                                    </li>

                                                    <li style="display: none;" class="nk-kycfm-control-item">
                                                        <input value="BTC" disabled class="nk-kycfm-control" type="radio" name="coin" id="driver-licence" data-title="Driving License">
                                                        <label class="nk-kycfm-label" for="driver-licence">
                                                            <span class="nk-kycfm-label-icon">
                                                                <div class="label-icon">
                                                                    <em class="coin ni ni-bitcoin x4"></em>
                                                                </div>
                                                            </span>
                                                            <span class="nk-kycfm-label-text">BTC(Inactive)</span>
                                                        </label>
                                                    </li>
                                                </ul>
                                                <h6 class="title">To avoid delays when verifying account, Please make sure:</h6>
                                                <ul class="list list-sm list-checked">
                                                    <li>You have verified your email address.</li>
                                                    <li>You have set up your payment wallet.</li>
                                                    <li>You have filled out your profile correctly.</li>
                                                </ul>
                                            </div>
                                            <div class="nk-kycfm-footer">
                                                <div class="nk-kycfm-action pt-2">
                                                    <button name="payments" type="submit" class="btn btn-lg btn-primary">Proceed to payment</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }else{?>
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="kyc-app wide-sm m-auto">
                                <div class="buysell-nav text-center">
                                    <ul class="nk-nav nav nav-tabs nav-tabs-s2">
                                        <li class="nav-item">
                                            <a class="nav-link" href="./dashboard/withdrawal-history">Withdrawal History</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="./dashboard/all-transaction">All Transaction</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                                    <div class="nk-block-head-content text-center">
                                        <h2 class="nk-block-title fw-normal text-warning">Your Account Is Active</h2>
                                        <div class="nk-block-des">
                                            <p>You have successfully activated your account by depositing your one time initial $<?php print $initial_pay;?>. Start Earning!!!</p>
                                            <p>
                                            <div class="nk-kycfm-footer">
                                                <div class="nk-kycfm-action pt-2">
                                                    <a href="./dashboard" class="btn btn-lg btn-primary">Back to home</a>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                <!-- content @e -->
<?php require_once('footer.php');?>