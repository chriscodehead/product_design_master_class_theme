<?php
require_once('include.php');
$title = 'Free Course Materials | '.$siteName;
$desc = '';
require_once('check-verification.php');
require_once('head.php');


if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$no_of_records_per_page = 8;
$offset = ($page-1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM $cat_tb";
$result = query_sql($total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);


?>

<body class="nk-body bg-white has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <?php require_once('side-bar.php');?>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <?php require_once('header.php');?>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block-head">

                             
    <div class="nk-block-body">
        
        <div class="nk-fmg-body-content">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between position-relative">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Files</h3>
                    </div>
                    <div class="nk-block-head-content">
                        <ul class="nk-block-tools g-1">
                            <li class="d-lg-none">
                                <a href="#" class="btn btn-trigger btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                            </li>
                            <li class="d-lg-none">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#file-upload" data-toggle="modal"><em class="icon ni ni-upload-cloud"></em><span>Upload File</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-file-plus"></em><span>Create File</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-folder-plus"></em><span>Create Folder</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="d-lg-none mr-n1"><a href="#" class="btn btn-trigger btn-icon toggle" data-target="files-aside"><em class="icon ni ni-menu-alt-r"></em></a></li>
                        </ul>
                    </div>
                    <div class="search-wrap px-2 d-lg-none" data-search="search">
                        <div class="search-content">
                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or message">
                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                        </div>
                    </div><!-- .search-wrap -->
                </div>
            </div>

            <div class="nk-fmg-quick-list nk-block">
                <div class="nk-block-head-xs">
                    <div class="nk-block-between g-2">
                        <div class="nk-block-head-content">
                            <h6 class="nk-block-title title">Quick Access</h6>
                        </div>
                        <!-- <div class="nk-block-head-content">
                            <a href="#" class="link link-primary toggle-opt active" data-target="quick-access">
                                <div class="inactive-text">Show</div>
                                <div class="active-text">Hide</div>
                            </a>
                        </div> -->
                    </div>
                </div><!-- .nk-block-head -->

                <div class="toggle-expand-content expanded" data-content="quick-access">
                    <div class="nk-files nk-files-view-grid">
                        <div class="nk-files-list">


                            <?php $sql = query_sql("SELECT * FROM $cat_tb ORDER BY id ASC LIMIT $offset, $no_of_records_per_page");
                            if(mysqli_num_rows($sql)>0){ $c=0;
                                while($row = mysqli_fetch_assoc($sql)){?> 

                            <div class="nk-file-item nk-file">
                                <div class="nk-file-info">
                                    <a href="./dashboard/free-materials-cat?id=<?php print $row['id'];?>" class="nk-file-link">
                                        <div class="nk-file-title">
                                            <div class="nk-file-icon">
                                                <span class="nk-file-icon-type">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                        <g>
                                                            <rect x="32" y="16" width="28" height="15" rx="2.5" ry="2.5" style="fill:#f29611" />
                                                            <path d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z" style="fill:#ffb32c" />
                                                            <path d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z" style="fill:#f2a222" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="nk-file-name">
                                                <div class="nk-file-name-text">
                                                    <span href="./dashboard/free-materials-cat?id=<?php print $row['id'];?>" class="title"><?php print $row['title'];?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    (<?php print $sqli->countCourse($row['title']);?>)
                                </div>
                                <div class="nk-file-actions hideable">
                                    <a href="./dashboard/free-materials-cat?id=<?php print $row['id'];?>" class="btn btn-sm btn-icon btn-trigger"><em class="icon ni ni-link"></em></a>
                                </div>
                            </div>

                            <?php $c++;}}else{?>
                            <h4 style="padding: 20px;">No data found!</h4>
                            <?php }?>    
                            

                        </div>
                    </div><!-- .nk-files -->

                </div>
            </div>

          
        </div><!-- .nk-fmg-body-content -->
    </div><!-- .nk-fmg-body -->

    <div class="card-inner">
        <ul class="pagination justify-content-center justify-content-md-start">
            <li class="page-item <?php if($page <= 1){ echo 'disabled'; } ?>"><a class="page-link" href="<?php if($page <= 1){ echo '#'; } else { echo "./dashboard/free-materials?page=".($page - 1); } ?>">Prev</a></li>
            <li class="page-item"><a class="page-link" href="./dashboard/free-materials?page=1">1</a></li>
            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
            <li class="page-item"><a class="page-link" href="./dashboard/free-materials?page=<?php echo $total_pages; ?>">Last</a></li>
            <li class="page-item <?php if($page >= $total_pages){ echo 'disabled'; } ?>"><a class="page-link" href="<?php if($page >= $total_pages){ echo '#'; } else { echo "./dashboard/free-materials?page=".($page + 1); } ?>">Next</a></li>
        </ul>
    </div>
                                
                            </div><!-- .nk-fmg -->
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <?php require_once('footer.php');?>