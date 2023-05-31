<?php
require_once('include.php');
$title = 'Dashboard | '.$siteName;
$desc = '';
require_once('check-verification.php');
require_once('head.php');?>
<body class="nk-body npc-crypto bg-white has-sidebar ">
    <div class="nk-app-root">

        <div class="nk-main ">
            <?php require_once('side-bar.php');?>

            <div class="nk-wrap ">
                <?php require_once('header.php');?>

                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-sub"><span>Welcome!</span>
                                </div>
                                <div class="nk-block-between-md g-4">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title fw-normal"><?php print $firstname = $sqli->getRow($sqli->getEmail($_SESSION['user_code']),'first_name').' '.$sqli->getRow($sqli->getEmail($_SESSION['user_code']),'last_name');?></h2>
                                        <div class="nk-block-des">
                                            <p><?php print @$timewhen;?>. Have you started earning?</p>
                                        </div>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="nk-block-tools gx-3">
                                            <?php if($sqli->getRow($sqli->getEmail($_SESSION['user_code']),'payment_activation_status')=='no' || $sqli->getRow($sqli->getEmail($_SESSION['user_code']),'usdt')=="" || $sqli->getRow($sqli->getEmail($_SESSION['user_code']),'email_activation')=="no"){?>
                                            <li><a href="./dashboard/deposit" class="btn btn-primary"><span>Deposit</span> <em class="icon ni ni-arrow-long-right"></em></a></li>
                                            <?php }else{?>
                                                <li><a href="./dashboard/wallets" class="btn btn-primary"><span>Wallets</span> <em class="icon ni ni-arrow-long-right"></em></a></li>
                                            <?php }?>
                                            <li><a href="./dashboard/withdraw" class="btn btn-white btn-light"><span>Withdraw</span> <em class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a></li>
                                            <li class="opt-menu-md dropdown">
                                                <a href="#" class="btn btn-white btn-light btn-icon" data-toggle="dropdown"><em class="icon ni ni-setting"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="./dashboard/profile"><em class="icon ni ni-user-circle"></em><span>Settings</span></a></li>
                                                        <li><a href="./dashboard/add-wallet"><em class="icon ni ni-coin-alt"></em><span>Add Wallet </span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block">
                                <div class="row gy-gs">
                                    <div class="col-lg-5 col-xl-4">
                                        <div class="nk-block">
                                            <div class="nk-block-head-xs">
                                                <div class="nk-block-head-content">
                                                    <h5 class="nk-block-title title">Overview</h5>
                                                </div>
                                            </div>
                                            <div class="nk-block">
                                                <div class="card card-bordered text-light is-dark h-100">
                                                    <div class="card-inner">
                                                        <div class="nk-wg7">
                                                            <div class="nk-wg7-stats">
                                                                <div class="nk-wg7-title">Available balance in USD</div>
                                                                <div class="number-lg amount"><?php print  number_format($sqli->getRow($sqli->getEmail($_SESSION['user_code']),'main_account_balance'),2);?></div>
                                                            </div>
                                                            <div class="nk-wg7-stats-group">
                                                                <div class="nk-wg7-stats w-50">
                                                                    <div class="nk-wg7-title">Direct Referrals</div>
                                                                    <div class="number-lg"><?php print @number_format($sqli->countReferals($cal->selectFrmDB($user_tb,'client_username','email',$sqli->getEmail($_SESSION['user_code']))));?></div>
                                                                </div>
                                                                <div class="nk-wg7-stats w-50">
                                                                    <div class="nk-wg7-title">Recent Earning</div>
                                                                    <div class="number">$<?php print number_format($sqli->gettodayRefcom($sqli->getEmail($_SESSION['user_code'])),2);?></div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-wg7-foot">
                                                                <span class="nk-wg7-note">Last activity at <span style="color: gold;"> <?php print  $sqli->getRow($sqli->getEmail($_SESSION['user_code']),'last_login');?></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-xl-8">
                                        <div class="nk-block">
                                            <div class="nk-block-head-xs">
                                                <div class="nk-block-between-md g-2">
                                                    <div class="nk-block-head-content">
                                                        <h5 class="nk-block-title title">My Wallets</h5>
                                                    </div>
                                                    <div class="nk-block-head-content">
                                                        <a href="./dashboard/wallets" class="link link-primary">See All</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row g-2">
                                                <div class="col-sm-3">
                                                    <div class="card bg-light">
                                                        <div class="nk-wgw sm">
                                                            <a class="nk-wgw-inner" href="./dashboard/wallets">
                                                                <div class="nk-wgw-name">
                                                                    <div class="nk-wgw-icon">
                                                                        <em class="icon ni ni-coin-alt"></em>
                                                                    </div>
                                                                    <h5 class="nk-wgw-title title">Level 1 Earning</h5>
                                                                </div>
                                                                <div class="nk-wgw-balance">
                                                                    <div style="font-size: 14px;" class="amount"><?php print number_format($sqli->getRefcom($sqli->getEmail($_SESSION['user_code']),1),2);?><span class="currency currency-nio">USD</span></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="card bg-light">
                                                        <div class="nk-wgw sm">
                                                            <a class="nk-wgw-inner" href="./dashboard/wallets">
                                                                <div class="nk-wgw-name">
                                                                    <div class="nk-wgw-icon">
                                                                        <em class="icon ni ni-coin-alt"></em>
                                                                    </div>
                                                                    <h5 class="nk-wgw-title title">Level 2 Earning</h5>
                                                                </div>
                                                                <div class="nk-wgw-balance">
                                                                    <div style="font-size: 14px;" class="amount"><?php print number_format($sqli->getRefcom($sqli->getEmail($_SESSION['user_code']),2),2);?><span class="currency currency-nio">USD</span></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="card bg-light">
                                                        <div class="nk-wgw sm">
                                                            <a class="nk-wgw-inner" href="./dashboard/wallets">
                                                                <div class="nk-wgw-name">
                                                                    <div class="nk-wgw-icon">
                                                                        <em class="icon ni ni-coin-alt"></em>
                                                                    </div>
                                                                    <h5 class="nk-wgw-title title">Level 3 Earning</h5>
                                                                </div>
                                                                <div class="nk-wgw-balance">
                                                                    <div style="font-size: 14px;" class="amount"><?php print number_format($sqli->getRefcom($sqli->getEmail($_SESSION['user_code']),3),2);?><span class="currency currency-nio">USD</span></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="card bg-light">
                                                        <div class="nk-wgw sm">
                                                            <a class="nk-wgw-inner" href="./dashboard/wallets">
                                                                <div class="nk-wgw-name">
                                                                    <div class="nk-wgw-icon">
                                                                        <em class="icon ni ni-coin-alt"></em>
                                                                    </div>
                                                                    <h5 class="nk-wgw-title title">Level 4 Earning</h5>
                                                                </div>
                                                                <div class="nk-wgw-balance">
                                                                    <div style="font-size: 14px;" class="amount"><?php print number_format($sqli->getRefcom($sqli->getEmail($_SESSION['user_code']),4),2);?><span class="currency currency-nio">USD</span></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-block nk-block-md">
                                            <div class="nk-block-head-xs">
                                                <div class="nk-block-between-md g-2">
                                                    <div class="nk-block-head-content">
                                                        <h6 class="nk-block-title title"></h6>
                                                    </div>
                                                    <div class="nk-block-head-content">
                                                        <a href="./dashboard/wallets" class="link link-primary">See All</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col-sm-4">
                                                    <div class="card bg-light">
                                                        <div class="nk-wgw sm">
                                                            <a class="nk-wgw-inner" href="./dashboard/wallets">
                                                                <div class="nk-wgw-name">
                                                                    <div class="nk-wgw-icon">
                                                                        <em class="icon ni ni-sign-dollar"></em>
                                                                    </div>
                                                                    <h5 class="nk-wgw-title title">Level 5 Earning</h5>
                                                                </div>
                                                                <div class="nk-wgw-balance">
                                                                    <div style="font-size: 14px;" class="amount"><?php print number_format($sqli->getRefcom($sqli->getEmail($_SESSION['user_code']),5),2);?><span class="currency currency-nio">USD</span></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="card bg-light">
                                                        <div class="nk-wgw sm">
                                                            <a class="nk-wgw-inner" href="./dashboard/wallets">
                                                                <div class="nk-wgw-name">
                                                                    <div class="nk-wgw-icon">
                                                                        <em class="icon ni ni-sign-dollar"></em>
                                                                    </div>
                                                                    <h5 class="nk-wgw-title title">Level 6 Earning</h5>
                                                                </div>
                                                                <div class="nk-wgw-balance">
                                                                    <div style="font-size: 14px;" class="amount"><?php print number_format($sqli->getRefcom($sqli->getEmail($_SESSION['user_code']),6),2);?><span class="currency currency-nio">USD</span></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="card bg-light">
                                                        <div class="nk-wgw sm">
                                                            <a class="nk-wgw-inner" href="./dashboard/wallets">
                                                                <div class="nk-wgw-name">
                                                                    <div class="nk-wgw-icon">
                                                                        <em class="icon ni ni-sign-dollar"></em>
                                                                    </div>
                                                                    <h5 class="nk-wgw-title title">Level 7 Earning</h5>
                                                                </div>
                                                                <div class="nk-wgw-balance">
                                                                    <div style="font-size: 14px;" class="amount"><?php print number_format($sqli->getRefcom($sqli->getEmail($_SESSION['user_code']),7),2);?><span class="currency currency-nio">USD</span></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="nk-block">
                                <div class="row g-gs">
                                    <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                                        <div class="card card-bordered is-dark">
                                            <div class="nk-wgw">
                                                <div class="nk-wgw-inner">
                                                    <a class="nk-wgw-name" href="./dashboard/wallets">
                                                        <div class="nk-wgw-icon is-default">
                                                            <em class="icon ni ni-sign-dollar"></em>
                                                        </div>
                                                        <h5 class="nk-wgw-title title">All Time Earnings</h5>
                                                    </a>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount"><?php print number_format(@$sqli->countAllBonusRef($sqli->getEmail($_SESSION['user_code'])));?><span class="currency currency-nio">USD</span></div>
                                                    </div>
                                                </div>
                                                <div class="nk-wgw-actions">
                                                    <ul>
                                                        <li><a href="./dashboard/deposit"><em class="icon ni ni-arrow-up-right"></em> <span>Deposit</span></a></li>
                                                        <li><a href="./dashboard/withdraw"><em class="icon ni ni-arrow-to-right"></em><span>Withdraw</span></a></li>
                                                        <li><a href="<?php print $siteLink;?>?ref=<?php print $sqli->getRow($sqli->getEmail($_SESSION['user_code']),'client_username');?>"><em class="icon ni ni-arrow-down-left"></em><span>Invite</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                                        <div class="card card-bordered">
                                            <div class="nk-wgw">
                                                <div class="nk-wgw-inner">
                                                    <a class="nk-wgw-name" href="./dashboard/withdraw">
                                                        <div class="nk-wgw-icon">
                                                            <em class="icon ni ni-sign-dollar"></em>
                                                        </div>
                                                        <h5 class="nk-wgw-title title">Total Withdrawal</h5>
                                                    </a>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount"><?php print number_format(@$sqli->countTotalwithdrawal($sqli->getEmail($_SESSION['user_code'])));?><span class="currency currency-eth">USD</span></div>
                                                    </div>
                                                </div>
                                                <div class="nk-wgw-actions">
                                                    <ul>
                                                        <li><a href="./dashboard/deposit"><em class="icon ni ni-arrow-up-right"></em> <span>Deposit</span></a></li>
                                                        <li><a href="./dashboard/withdraw"><em class="icon ni ni-arrow-to-right"></em><span>Withdraw</span></a></li>
                                                        <li><a href="<?php print $siteLink;?>?ref=<?php print $sqli->getRow($sqli->getEmail($_SESSION['user_code']),'client_username');?>"><em class="icon ni ni-arrow-down-left"></em><span>Invite</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="nk-block">
                                <div class="card card-bordered">
                                    <div class="nk-refwg">
                                        <div class="nk-refwg-invite card-inner">
                                            <div class="nk-refwg-head g-3">
                                                <div class="nk-refwg-title">
                                                    <h5 class="title">Refer Us & Earn</h5>
                                                    <div class="title-sub">Use the bellow link to invite your friends.</div>
                                                </div>
                                                <div class="nk-refwg-action">
                                                    <a target="_blank" href="<?php print $siteLink;?>?ref=<?php print $sqli->getRow($sqli->getEmail($_SESSION['user_code']),'client_username');?>" class="btn btn-primary">Invite</a>
                                                </div>
                                            </div>
                                            <div class="nk-refwg-url">
                                                <div class="form-control-wrap">
                                                    <div class="form-clip clipboard-init" data-clipboard-target="#refUrl" data-success="Copied" data-text="Copy Link"><em class="clipboard-icon icon ni ni-copy"></em> <span class="clipboard-text">Copy Link</span></div>
                                                    <div class="form-icon">
                                                        <em class="icon ni ni-link-alt"></em>
                                                    </div>
                                                    <input style="font-size: 12px;" type="text" class="form-control copy-text" id="refUrl" value="<?php print $siteLink;?>?ref=<?php print $sqli->getRow($sqli->getEmail($_SESSION['user_code']),'client_username');?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-refwg-stats card-inner bg-lighter">
                                            <div class="nk-refwg-group g-3">
                                                <div class="nk-refwg-name">
                                                    <h6 class="title">My Referral <em class="icon ni ni-info" data-toggle="tooltip" data-placement="right" title="Referral Informations"></em></h6>
                                                </div>
                                                <div class="nk-refwg-info g-3">
                                                    <div class="nk-refwg-sub">
                                                        <div class="title"><?php print @$sqli->countReferals($cal->selectFrmDB($user_tb,'client_username','email',$sqli->getEmail($_SESSION['user_code'])));?></div>
                                                        <div class="sub-text">Total Referred</div>
                                                    </div>
                                                    <div class="nk-refwg-sub">
                                                        <div class="title"><?php print number_format($sqli->getallRefcom($sqli->getEmail($_SESSION['user_code'])),2);?></div>
                                                        <div class="sub-text">Total Referral Earn</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-refwg-ck">
                                                <canvas class="chart-refer-stats" id="refBarChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="nk-block nk-block-lg">
                                <div class="row gy-gs">
                                    <div class="col-md-12">
                                        <div class="card-head">
                                            <div class="card-title  mb-0">
                                                <h5 class="title">Recent Earning Activities</h5>
                                            </div>
                                            <div class="card-tools">
                                                <ul class="card-tools-nav">
                                                    <li class="active"><a href="./dashboard/activities">All</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tranx-list card card-bordered">
                                        <?php $sql = query_sql("SELECT * FROM $referral_tb WHERE `referral_email` = '".$sqli->getEmail($_SESSION['user_code'])."'  ORDER BY id DESC LIMIT 5");
                                        if(mysqli_num_rows($sql)>0){ $c=0;
                                            while($row = mysqli_fetch_assoc($sql)){?>
                                            <div class="tranx-item">
                                                <div class="tranx-col">
                                                    <div class="tranx-info">
                                                        <div class="tranx-data">
                                                            <div class="tranx-label"><?php print $sqli->getRow($row['referred_email'],'first_name');?> <?php print $sqli->getRow($row['referred_email'],'last_name');?> <em class="tranx-icon sm icon ni ni-users"></em></div>
                                                            <div class="tranx-date"><?php print $row['date_created'];?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tranx-col">
                                                    <div class="tranx-amount">
                                                        <div class="number"><?php print $row['amount'];?> <span class="currency currency-btc">USD (<em class="text-warning" style="font-size: 12px;"><?php print $row['status'];?></em>)</span></div>
                                                        <div class="number-sm">Level <?php print $row['referral_level'];?> <span class="currency currency-usd">Commission</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                      <?php }}?>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <?php require_once('info.php');?>

                        </div>
                    </div>
                </div>


<?php require_once('footer.php');?>