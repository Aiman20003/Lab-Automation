<?php
session_start();



$user =  $_SESSION["username"];
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
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
                        <a href="index.html"><img class="main-logo" src="imagesg/logosn.png" alt="" style="height:60px;width:100px;" /></a>
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
                                        <form id="search-form" action="edit-products1.php" method="GET">
                                            <div class="form-group" style="display: flex;">
                                                <input type="text" id="product-id" name="product-name" class="form-control" placeholder="Enter Product name">&nbsp;
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                                        </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Add Prouduct</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                       <center>    <h1>ADD PRODUCT INFORAMTION</h1></center>
            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                <form action="" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <input name="product_code" type="text" class="form-control" placeholder="product_code">
            </div>
            <div class="form-group">
                <input name="product_name" id="finish" type="text" class="form-control" placeholder="product_name">
            </div>
            <div class="form-group">
                <input name="manufacturing_number" type="number" class="form-control" placeholder="manufacturing_number">
            </div>
            <div class="form-group">
                <input name="manufacturing_date" type="date" class="form-control" placeholder="manufacturing_date">
            </div>
            <div class="form-group">
                <input name="revise" type="number" class="form-control" placeholder="revise">
            </div>
            <div class="form-group">
                <input type="file" name="image_upload" required placeholder="upload your image">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <textarea name="remarks" placeholder="remarks"></textarea>
            </div>
            <div class="form-group">
                <input name="product_type" type="text" class="form-control" placeholder="product_type">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="payment-adress">
                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
            </div>
        </div>
    </div>
</form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
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
</body>
    
</body>
</html>