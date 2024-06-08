<?php
include('database_connection.php');
session_start();



$user =  $_SESSION["username"];


// Query to get the count of each test status
$query = "SELECT 
            SUM(CASE WHEN test_results = 'Pass' THEN 1 ELSE 0 END) AS Pass,
            SUM(CASE WHEN test_results = 'Fail' THEN 1 ELSE 0 END) AS Fail,
            SUM(CASE WHEN test_results = 'Pending' THEN 1 ELSE 0 END) AS Pending,
            SUM(CASE WHEN test_results = 'In_Progress' THEN 1 ELSE 0 END) AS InProgress
          FROM tests";

$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);

    // Calculate total tests
    $totalTests = $row['Pass'] + $row['Fail'] + $row['Pending'] + $row['InProgress'];

    // Calculate percentages
    $passPercentage = $totalTests > 0 ? ($row['Pass'] / $totalTests) * 100 : 0;
    $failPercentage = $totalTests > 0 ? ($row['Fail'] / $totalTests) * 100 : 0;
    $pendingPercentage = $totalTests > 0 ? ($row['Pending'] / $totalTests) * 100 : 0;
    $inProgressPercentage = $totalTests > 0 ? ($row['InProgress'] / $totalTests) * 100 : 0;
}
$query = "SELECT 
            product_id, 
            SUM(CASE WHEN test_results = 'Pass' THEN 1 ELSE 0 END) AS Pass,
            SUM(CASE WHEN test_results = 'Fail' THEN 1 ELSE 0 END) AS Fail,
            SUM(CASE WHEN test_results = 'Pending' THEN 1 ELSE 0 END) AS Pending
          FROM tests
          GROUP BY product_id";

$result1 = mysqli_query($conn, $query);

$data = [];

while ($row = mysqli_fetch_assoc($result1)) {
    $data[] = [
        'product_id' => $row['product_id'],
        'pass' => $row['Pass'],
        'fail' => $row['Fail'],
        'pending' => $row['Pending']
    ];
}
$query_total_rows = "SELECT COUNT(*) AS total_count FROM products";
$result_total_rows = mysqli_query($conn, $query_total_rows);
$row_total_rows = mysqli_fetch_assoc($result_total_rows);
$total_count = $row_total_rows['total_count'];


$query_testing = "SELECT COUNT(*) AS testing_count FROM products WHERE product_type = 'test_product'";
$result_testing = mysqli_query($conn, $query_testing);
$row_testing = mysqli_fetch_assoc($result_testing);
$testing_count = $row_testing['testing_count'];

$query_cpri_approved = "SELECT COUNT(*) AS cpri_approved_count FROM products WHERE product_type = 'cpri_product'";
$result_cpri_approved = mysqli_query($conn, $query_cpri_approved);
$row_cpri_approved = mysqli_fetch_assoc($result_cpri_approved);
$cpri_approved_count = $row_cpri_approved['cpri_approved_count'];

// Query to count rows with electrical testing
$query_electrical = "SELECT COUNT(*) AS electrical_testing FROM tests WHERE test_type = 'electrical testing'";
$result_electrical = mysqli_query($conn, $query_electrical);
$row_electrical = mysqli_fetch_assoc($result_electrical);
$electrical_count = $row_electrical['electrical_testing'];

// Query to count rows with mechanical testing
$query_mechanical = "SELECT COUNT(*) AS mechanical_testing FROM tests WHERE test_type = 'mechanical testing'";
$result_mechanical = mysqli_query($conn, $query_mechanical);
$row_mechanical = mysqli_fetch_assoc($result_mechanical);
$mechanical_count = $row_mechanical['mechanical_testing'];

// Query to count rows with functional testing
$query_functional = "SELECT COUNT(*) AS functional_testing FROM tests WHERE test_type = 'functional testing'";
$result_functional = mysqli_query($conn, $query_functional);
$row_functional = mysqli_fetch_assoc($result_functional);
$functional_count = $row_functional['functional_testing'];
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <style>
        </style>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LAB AUTOMATION</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="images/logosn.png" alt=""  style="height:100px;width:180px;"/></a>
                <strong><a href="index.html"><img src="images/logosn.png" alt=""  style="height:50px;width:70px;"/></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a href="index.php">
								   <span class="educate-icon educate-home icon-wrap"></span>
								   <span class="mini-click-non">Home</span>
								</a>
                                <li>
                            <a class="has-arrow" href="product.php" aria-expanded="false"><i class="fa-brands fa-product-hunt"></i>&nbsp;&nbsp;<span class="mini-click-non">Test Products</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Product" href="product.php"><span class="mini-sub-pro"> Product</span></a></li>
                                <li><a title="Add Product" href="add-product.php"><span class="mini-sub-pro">Add Product</span></a></li>
                                <li><a title="Edit Product" href="edit-product.php"><span class="mini-sub-pro">Edit Product</span></a></li>
                            </ul>
                        </li>
                        <li>
                        <a class="has-arrow" href="product1.php" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span><span class="mini-click-non">CPRI Products</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Product" href="product1.php"><span class="mini-sub-pro"> Product</span></a></li>
                                <li><a title="Add Product" href="add-product1.php"><span class="mini-sub-pro">Add Product</span></a></li>
                                <li><a title="Edit Product" href="edit-product1.php"><span class="mini-sub-pro">Edit Product</span></a></li>
                            </ul>
                        </li>
                        </li>
                        <li class="active">
                            <a class="has-arrow" href="test.php" aria-expanded="false"><i class="fa-solid fa-vials"></i>&nbsp;&nbsp;<span class="mini-click-non">TEST</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="TEST List" href="test.php"><span class="mini-sub-pro">TEST List</span></a></li>
                                <li><a title="Add TEST" href="add-test.php"><span class="mini-sub-pro">Add TEST</span></a></li>
                                <li><a title="Edit TEST" href="edit-test.php"><span class="mini-sub-pro">Edit TEST</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="mailbox.php" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non">Mailbox</span></a>
                        </li>
                
                        <li>
                            <a class="has-arrow" href="mailbox.php" aria-expanded="false"><span class="educate-icon educate-charts icon-wrap"></span> <span class="mini-click-non">Charts</span></a>
                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                <li><a title="Bar Charts" href="bar-charts.php"><span class="mini-sub-pro">Bar Charts</span></a></li>
                                <li><a title="Line Charts" href="line-charts.php"><span class="mini-sub-pro">Line Charts</span></a></li>
                            </ul>
                        </li>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="images/logosn.png" alt="" style="height:60px;width:100px;" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area" >
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu" >
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button">
															<img src="img/product/pro4.jpg" alt="" />
															<?php echo "$user" ?>
														</a>
                                            
                                                </li>
                                                <li class="nav-item nav-setting-open"><a href="logout.php"  role="button"><i class="fa-solid fa-right-from-bracket"></i></i></a>

</li>
</div></div></div>
</div></div></div></div></div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="index.php">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        </li>
                                        <li>
                            <a class="has-arrow" href="product.php" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Test Products</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Product" href="product.php"><span class="mini-sub-pro"> Product</span></a></li>
                                <li><a title="Add Product" href="add-product.php"><span class="mini-sub-pro">Add Product</span></a></li>
                                <li><a title="Edit Product" href="edit-product.php"><span class="mini-sub-pro">Edit Product</span></a></li>
                            </ul>
                        </li>
                        <li>
                        <a class="has-arrow" href="product1.php" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">CPRI Products</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Product" href="product1.php"><span class="mini-sub-pro"> Product</span></a></li>
                                <li><a title="Add Product" href="add-product1.php"><span class="mini-sub-pro">Add Product</span></a></li>
                                <li><a title="Edit Product" href="edit-product1.php"><span class="mini-sub-pro">Edit Product</span></a></li>
                            </ul>
                        </li>
                                     
                                        <li class="active">
                            <a class="has-arrow" href="test.php" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">TEST</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="TEST List" href="test.php"><span class="mini-sub-pro">TEST List</span></a></li>
                                <li><a title="Add TEST" href="add-test.php"><span class="mini-sub-pro">Add TEST</span></a></li>
                                <li><a title="Edit TEST" href="edit-test.php"><span class="mini-sub-pro">Edit TEST</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="mailbox.php" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non">Mailbox</span></a>
                        </li>
                
                        <li>
                            <a class="has-arrow" href="mailbox.php" aria-expanded="false"><span class="educate-icon educate-charts icon-wrap"></span> <span class="mini-click-non">Charts</span></a>
                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                <li><a title="Bar Charts" href="bar-charts.php"><span class="mini-sub-pro">Bar Charts</span></a></li>
                                <li><a title="Line Charts" href="line-charts.php"><span class="mini-sub-pro">Line Charts</span></a></li>
                            </ul>
                        </li>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
</div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                             <form method="GET" action=""  id="search">
        <input type="text" name="search" placeholder="">
        <button type="submit">Search</button>
    </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>PASS TEST</h5>
                                <h2><span class="counter"></span><?php echo $total_count ?> <span class="tuition-fees">TOTAL TEST</span></h2>
                                <span class="text-success"><?= number_format($passPercentage, 2) ?>%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>FAILED TEST</h5>
                                <h2><span class="counter"></span><?php echo $total_count ?> <span class="tuition-fees">TOTAL TEST</span></h2>
                                <span class="text-danger"><?= number_format($failPercentage, 2) ?>%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:30%;"> <span class="sr-only">230% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>PENDING TEST</h5>
                                <h2><span class="counter"></span><?php echo $total_count ?> <span class="tuition-fees">TOTAL TEST</span></h2>
                                <span class="text-info"><?= number_format($pendingPercentage, 2) ?>%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">20% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>INPROGRESS TEST</h5>
                                <h2><span class="counter"></span><?php echo $total_count ?> <span class="tuition-fees">TOTAL TEST</span></h2>
                                <span class="text-inverse"><?= number_format($inProgressPercentage, 2) ?>%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">230% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-sales-chart">
                        <div class="portlet-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="caption pro-sl-hd">
                                        <span class="caption-subject"><b>ALL THE TEST</b></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="actions graph-rp graph-rp-dl">
                                        <p>Progress of the test</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline cus-product-sl-rp">
                            <li>
                                <h5><i class="fa fa-circle" style="color: green;"></i>PASS</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle" style="color: red;"></i>FAIL</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle" style="color: #65b12d;"></i>PENDING</h5>
                            </li>
                        </ul>
                        <div id="morris-bar-chart1" style="height: 339px;"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-5 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Product Status</h3>
                            <ul class="basic-list">
                                <br>
                                <li>All Products<span class="pull-right label-danger label-1 label"><?php echo $total_count ?></span></li>
                                <li>TEST Products<span class="pull-right label-purple label-2 label"><?php echo $testing_count ?></span></li>
                                <li>Electrical Testing<span class="pull-right label-success label-3 label"><?php echo $electrical_count ?></span></li>
                                <li>Mechanical testing<span class="pull-right label-info label-4 label"><?php echo $mechanical_count ?></span></li>
                                <li>Functional Testing<span class="pull-right label-warning label-5 label"><?php echo $functional_count ?></span></li>
                                <li>CPRI Products<span class="pull-right label-info label-5 label"><?php echo $cpri_approved_count  ?></span></li>
                                <br><br>
                            </ul>
                        </div>
                    </div>
</div>
</div>
</div>
        <div class="traffic-analysis-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="social-media-edu">
                            <i class="fa fa-facebook"></i>
                            <div class="social-edu-ctn">
                                <h3>50k Likes</h3>
                                <p>You main list growing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="social-media-edu twitter-cl res-mg-t-30 table-mg-t-pro-n">
                            <i class="fa fa-twitter"></i>
                            <div class="social-edu-ctn">
                                <h3>30k followers</h3>
                                <p>You main list growing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="social-media-edu linkedin-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <i class="fa fa-linkedin"></i>
                            <div class="social-edu-ctn">
                                <h3>7k Connections</h3>
                                <p>You main list growing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="social-media-edu youtube-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <i class="fa fa-youtube"></i>
                            <div class="social-edu-ctn">
                                <h3>50k Subscribers</h3>
                                <p>You main list growing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/morrisjs/raphael-min.js"></script>
    <script src="js/morrisjs/morris.js"></script>
    <script src="js/morrisjs/home3-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
          <script>
        $(document).ready(function() {
            var data = <?php echo json_encode($data); ?>;

            Morris.Bar({
                element: 'morris-bar-chart1',
                data: data,
                xkey: 'product_id',
                ykeys: ['pass', 'fail', 'pending'],
                labels: ['Pass', 'Fail', 'Pending'],
                barColors: ['#65b12d', '#FF0000', '#933EC5'],
                hideHover: 'auto',
                resize: true
            });
        });
    </script>
        </script>
</body>

</html>