<?php
require_once('include.php');
$title = 'Wallets | '.$siteName;
$desc = '';
require_once('check-verification.php');
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
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-between-md">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-head-sub"><a class="back-to" href="./dashboard/wallets"><em class="icon ni ni-arrow-left"></em><span>My Wallets</span></a></div>
                                        <div class="nk-wgwh">
                                            <em class="icon-circle icon-circle-lg icon ni ni-sign-usd"></em>
                                            <div class="nk-wgwh-title h5"> Account Wallets <small>/</small>
                                                <div class="dropdown">
                                                    <a class="dropdown-indicator-caret" data-offset="0,4" href="#" data-toggle="dropdown"><small>USD</small></a>
                                                    <div class="dropdown-menu dropdown-menu-xxs dropdown-menu-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block">
                                <div class="nk-block-between-md g-4">
                                    <div class="nk-block-content">
                                        <div class="nk-wg1">
                                            <div class="nk-wg1-group g-2">
                                                <div class="nk-wg1-item mr-xl-4">
                                                    <div class="nk-wg1-title text-soft">Available Balance</div>
                                                    <div class="nk-wg1-amount">
                                                        <div class="amount"><?php print  number_format($sqli->getRow($sqli->getEmail($_SESSION['user_code']),'main_account_balance'),2);?> <small class="currency currency-usd">USD</small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block nk-block-lg">
                                <div class="row g-gs">
                                    <div class="col-md-4">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-wg5">
                                                    <div class="nk-wg5-title">
                                                        <h6 class="title overline-title">Level 1 wallet earnings</h6>
                                                    </div>
                                                    <div class="nk-wg5-text">
                                                        <div class="nk-wg5-amount">
                                                            <div class="amount"> <?php print number_format($sqli->getRefcom($sqli->getEmail($_SESSION['user_code']),1),2);?> <span class="currency currency-btc">USD</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-wg5-foot">
                                                        <a href="./dashboard/view-wallet-detail?id=1"><span class="text-warning"><u>View Details/Withdraw</u> <span class="text-base"></span></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-wg5">
                                                    <div class="nk-wg5-title">
                                                        <h6 class="title overline-title">Level 2 wallet earnings</h6>
                                                    </div>
                                                    <div class="nk-wg5-text">
                                                        <div class="nk-wg5-amount">
                                                            <div class="amount"> <?php print number_format($sqli->getRefcom($sqli->getEmail($_SESSION['user_code']),2),2);?> <span class="currency currency-btc">USD</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-wg5-foot">
                                                        <a href="./dashboard/view-wallet-detail?id=2"><span class="text-warning"><u>View Details/Withdraw</u> <span class="text-base"></span></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-wg5">
                                                    <div class="nk-wg5-title">
                                                        <h6 class="title overline-title">Level 3 wallet earnings</h6>
                                                    </div>
                                                    <div class="nk-wg5-text">
                                                        <div class="nk-wg5-amount">
                                                            <div class="amount"> <?php print number_format($sqli->getRefcom($sqli->getEmail($_SESSION['user_code']),3),2);?> <span class="currency currency-btc">USD</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-wg5-foot">
                                                        <a href="./dashboard/view-wallet-detail?id=3"><span class="text-warning"><u>View Details/Withdraw</u> <span class="text-base"></span></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-wg5">
                                                    <div class="nk-wg5-title">
                                                        <h6 class="title overline-title">Level 4 wallet earnings</h6>
                                                    </div>
                                                    <div class="nk-wg5-text">
                                                        <div class="nk-wg5-amount">
                                                            <div class="amount"> <?php print number_format($sqli->getRefcom($sqli->getEmail($_SESSION['user_code']),4),2);?> <span class="currency currency-btc">USD</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-wg5-foot">
                                                        <a href="./dashboard/view-wallet-detail?id=4"><span class="text-warning"><u>View Details/Withdraw</u> <span class="text-base"></span></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-wg5">
                                                    <div class="nk-wg5-title">
                                                        <h6 class="title overline-title">Level 5 wallet earnings</h6>
                                                    </div>
                                                    <div class="nk-wg5-text">
                                                        <div class="nk-wg5-amount">
                                                            <div class="amount"> <?php print number_format($sqli->getRefcom($sqli->getEmail($_SESSION['user_code']),5),2);?> <span class="currency currency-btc">USD</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-wg5-foot">
                                                        <a href="./dashboard/view-wallet-detail?id=5"><span class="text-warning"><u>View Details/Withdraw</u> <span class="text-base"></span></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-wg5">
                                                    <div class="nk-wg5-title">
                                                        <h6 class="title overline-title">Level 6 wallet earnings</h6>
                                                    </div>
                                                    <div class="nk-wg5-text">
                                                        <div class="nk-wg5-amount">
                                                            <div class="amount"> <?php print number_format($sqli->getRefcom($sqli->getEmail($_SESSION['user_code']),6),2);?> <span class="currency currency-btc">USD</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-wg5-foot">
                                                        <a href="./dashboard/view-wallet-detail?id=6"><span class="text-warning"><u>View Details/Withdraw</u> <span class="text-base"></span></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-wg5">
                                                    <div class="nk-wg5-title">
                                                        <h6 class="title overline-title">Level 7 wallet earnings</h6>
                                                    </div>
                                                    <div class="nk-wg5-text">
                                                        <div class="nk-wg5-amount">
                                                            <div class="amount"> <?php print number_format($sqli->getRefcom($sqli->getEmail($_SESSION['user_code']),7),2);?> <span class="currency currency-btc">USD</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-wg5-foot">
                                                        <a href="./dashboard/view-wallet-detail?id=7"><span class="text-warning"><u>View Details/Withdraw</u> <span class="text-base"></span></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
<?php require_once('footer.php');?>