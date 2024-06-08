<?php
include('database_connection.php');
session_start();



$user =  $_SESSION["username"];
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
$products = [];
while ($row = $result->fetch_assoc()) {
 $products[$row['product_id']] = $row['product_name'];
}

// Assuming $products is correctly populated with product IDs and names

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form_type = $_POST['form_type'];
    $product_id = $_POST['product_id'];
    $tester_name = $_POST['tester-name'];
    $testing_date = $_POST['testing-date'];
    $testing_revise = $_POST['test-revise'];

    switch ($form_type) {
        case 'electrical':
            $insulation_resistance_status = $_POST['insulationResistanceStatus'];
            $contact_resistance_status = $_POST['contactResistanceStatus'];
            $circuit_breaker_timing_status = $_POST['circuitBreakerTimingStatus'];
            $remarks1 = $_POST['remarks'];

            $sql_test_details = "INSERT INTO `tests` (`product_id`, `test_date`, `tester_name`, `test_revise`, `detailed_remarks`, `test_type`, `test_subtype`, `test_results`) VALUES 
                                ('$product_id','$testing_date','$tester_name','$testing_revise','$remarks1','Electrical Testing','Insulation Resistance Test','$insulation_resistance_status'),
                                ('$product_id','$testing_date','$tester_name','$testing_revise','$remarks1','Electrical Testing','Contact Resistance Test','$contact_resistance_status'),
                                ('$product_id','$testing_date','$tester_name','$testing_revise','$remarks1','Electrical Testing','Circuit Breaker Timing Test','$circuit_breaker_timing_status')";
            
            break;

        case 'mechanical':
            $visual_inspection_status = $_POST['visualInspectionStatus'];
            $mechanical_operation_status = $_POST['mechanicalOperationStatus'];
            $operating_force_test = $_POST['operatingForceTest'];
            $remarks2 = $_POST['remarks2'];

            $sql_test_details = "INSERT INTO `tests` (`product_id`, `test_date`, `tester_name`, `test_revise`, `detailed_remarks`, `test_type`, `test_subtype`, `test_results`) VALUES 
                                ('$product_id','$testing_date','$tester_name','$testing_revise','$remarks2','Mechanical Testing','Visual Inspection','$visual_inspection_status'),
                                ('$product_id','$testing_date','$tester_name','$testing_revise','$remarks2','Mechanical Testing','Mechanical Operation','$mechanical_operation_status'),
                                ('$product_id','$testing_date','$tester_name','$testing_revise','$remarks2','Mechanical Testing','Operating Force Test','$operating_force_test')";
            break;

        case 'functional':
            $protection_relay_status = $_POST['protectionRelayStatus'];
            $control_circuit_status = $_POST['controlCircuitStatus'];
            $overcurrent_protection_test = $_POST['overcurrentProtectionTest'];
            $remarks3 = $_POST['remarks3'];

            $sql_test_details = "INSERT INTO `tests` (`product_id`, `test_date`, `tester_name`, `test_revise`, `detailed_remarks`, `test_type`, `test_subtype`, `test_results`) VALUES 
                                ('$product_id','$testing_date','$tester_name','$testing_revise','$remarks3','Functional Testing','Protection Relay Test','$protection_relay_status'),
                                ('$product_id','$testing_date','$tester_name','$testing_revise','$remarks3','Functional Testing','Control Circuit Test','$control_circuit_status'),
                                ('$product_id','$testing_date','$tester_name','$testing_revise','$remarks3','Functional Testing','Over Current Protection Test','$overcurrent_protection_test')";
            break;

        default:
            echo "Invalid form type";
            exit;
    }

    // Execute the SQL query
    if ($conn->query($sql_test_details) === TRUE) {
        echo '<script>alert("Data inserted successfully")</script>';
    } else {
        echo '<script>alert("Error: " . $sql_test_details . "<br>" . $conn->error)</script>';
    }
}
?>



<!doctype html>
<html class="no-js" lang="en">

<head>
<style>
     .table-mailbox th {
            height: 40px;  /* Adjust height as needed */
        }
        .table-mailbox tr {
            height: 30px;  /* Adjust height as needed */
        }
        a:hover{
            color:pink;
        }
        </style>
    <!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
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
            <br>
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
                                            <li><span class="bread-blod">Add TEST</span>
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

        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
    
                                <li class="active" ><a href="#electrical">Electrical-Testing</a></li>
                                <li><a href="#mechanical">Mechanical-Testing</a></li>
                                <li><a href="#functional">Functional-Testing</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="electrical">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <form id="add-department" action="#" class="add-department" method="POST">
                                                <input type="hidden" name="form_type" value="electrical">
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                            <select class="form-control status-select" name="product_id">
                                                            <option value="" disabled selected>Product_id</option>
                                                            <?php foreach ($products as $product_id => $product_name): ?>
 <option value="<?php echo $product_id; ?>"><?php echo $product_name; ?></option>
                                                           
 <?php endforeach; ?>
 </select>
 
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="tester-name" type="text" class="form-control" placeholder="Tester-name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="testing-date" type="datetime" class="form-control" placeholder="Testing-Date">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="test-revise" type="number" class="form-control" placeholder="No.of.Revision">
                                                            </div>
                                                        </div>
                                                    </div>
                                                   <center> <h1>TEST DETAILS</h1></center>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <select class="form-control status-select" name="insulationResistanceStatus">
                                                                    <option value="" disabled selected>Insulation Resistance Test</option>
                                                                    <option value="pending">Pending</option>
                                                                    <option value="pass">Pass</option>
                                                                    <option value="fail">Fail</option>
                                                                    <option value="in_progress">In Progress</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <select class="form-control status-select" name="contactResistanceStatus">
                                                                    <option value="" disabled selected>Contact Resistance Testt</option>  
                                                                    <option value="pending">Pending</option>
                                                                    <option value="pass">Pass</option>
                                                                    <option value="fail">Fail</option>
                                                                    <option value="in_progress">In Progress</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <select class="form-control status-select" name="circuitBreakerTimingStatus">
                                                                    <option value="" disabled selectedCircuit>Breaker Timing Test</option>
                                                                    <option value="pending">Pending</option>
                                                                    <option value="pass">Pass</option>
                                                                    <option value="fail">Fail</option>
                                                                    <option value="in_progress">In Progress</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-section">
                                                    
                                                                <div class="form-group">
                                                                    <select class="form-control" id="testStatus" name="testStatus" required>
                                                                        <option value="" disabled selected>Overall Test Status</option>

                                                                        <option value="pending">Pending</option>
                                                                        <option value="pass">Pass</option>
                                                                        <option value="fail">Fail</option>
                                                                        <option value="in_progress">In Progress</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                
                                                                    <textarea class="form-control" id="remarks1" name="remarks" placeholder="Enter detailed remarks, criteria, and results" rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">SUBMIT</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="product-tab-list tab-pane" id="mechanical">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <form id="add-department" action="#" class="add-department" method="POST">
                                                <input type="hidden" name="form_type" value="mechanical">
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                            <select class="form-control status-select" name="product_id">
                                                            <option value="" disabled selected>Product_id</option>
                                                            <?php foreach ($products as $product_id => $product_name): ?>
 <option value="<?php echo $product_id; ?>"><?php echo $product_name; ?></option>
                                                           
 <?php endforeach; ?>
 </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="tester-name" type="text" class="form-control" placeholder="Tester-name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="testing-date" type="datet" class="form-control" placeholder="Testing-Date">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="test-revise" type="number" class="form-control" placeholder="No.of.Revision">
                                                            </div>
                                                        </div>
                                                    </div>
                                                 <center>   <h1>TEST DETAILS</h1></center>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <select class="form-control status-select" name="visualInspectionStatus">
                                                                    <option value="" disabled selected>Visual Inspection</option>
                                                                    <option value="pending">Pending</option>
                                                                    <option value="pass">Pass</option>
                                                                    <option value="fail">Fail</option>
                                                                    <option value="in_progress">In Progress</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <select class="form-control status-select" name="mechanicalOperationStatus">
                                                                    <option value="" disabled selected>Mechanical Operation</option>
                                                                    <option value="pending">Pending</option>
                                                                    <option value="pass">Pass</option>
                                                                    <option value="fail">Fail</option>
                                                                    <option value="in_progress">In Progress</option>
                                                                </select>
                                                            </div>
                                                    
                                                        <div class="form-group">
                                                            <select class="form-control" id="testStatus" name="operatingForceTest" required>
                                                                <option value="" disabled selected>Operating Force Test</option>
                                                                <option value="pending">Pending</option>
                                                                <option value="pass">Pass</option>
                                                                <option value="fail">Fail</option>
                                                                <option value="in_progress">In Progress</option>
                                                            </select>
                                                        </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-section">
                                                    
                                                                <div class="form-group">
                                                                    <select class="form-control" id="testStatus" name="testStatus" required>
                                                                        <option value="" disabled selected>Overall Test Status</option>
                                                                        <option value="pending">Pending</option>
                                                                        <option value="pass">Pass</option>
                                                                        <option value="fail">Fail</option>
                                                                        <option value="in_progress">In Progress</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                
                                                                    <textarea class="form-control" id="remarks" name="remarks2" placeholder="Enter detailed remarks, criteria, and results" rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">SUBMIT</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="product-tab-list tab-pane" id="functional">
                                     <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <form id="add-department" action="#" class="add-department" method="POST">
                                                <input type="hidden" name="form_type" value="functional">
                                <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                            <select class="form-control status-select" name="product_id">
                                                            <option value="" disabled selected>Product_id</option>
                                                            <?php foreach ($products as $product_id => $product_name): ?>
 <option value="<?php echo $product_id; ?>"><?php echo $product_name; ?></option>
                                                           
 <?php endforeach; ?>
 </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="tester-name" type="text" class="form-control" placeholder="Tester-name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="testing-date" type="date" class="form-control" placeholder="Testing-Date">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="test-revise" type="number" class="form-control" placeholder="No.of.Revision">
                                                            </div>
                                                        </div>
                                                    </div>
                                                 <center>   <h1>TEST DETAILS</h1></center>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <form id="add-department" action="#" class="add-department">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <select class="form-control status-select" name="protectionRelayStatus">
                                                                    <option value="" disabled selected>Protection Relay Testing</option>
                                                                    <option value="pending">Pending</option>
                                                                    <option value="pass">Pass</option>
                                                                    <option value="fail">Fail</option>
                                                                    <option value="in_progress">In Progress</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <select class="form-control status-select" name="controlCircuitStatus">
                                                                    <option value="" disabled selected>Control Circuit Testing</option>
                                                                    <option value="pending">Pending</option>
                                                                    <option value="pass">Pass</option>
                                                                    <option value="fail">Fail</option>
                                                                    <option value="in_progress">In Progress</option>
                                                                </select>
                                                            </div>
                                                             <div class="form-group">
                                                                <select class="form-control status-select" name="overcurrentProtectionTest">
                                                                    <option value="" disabled selected>Overcurrent Protection Test</option>
                                                                    <option value="pending">Pending</option>
                                                                    <option value="pass">Pass</option>
                                                                    <option value="fail">Fail</option>
                                                                    <option value="in_progress">In Progress</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-section">
                                                    
                                                                <div class="form-group">
                                                                    <select class="form-control" id="testStatus" name="testStatus" required>
                                                                        <option value="" disabled selected>Overall Test Status</option>
                                                                        <option value="pending">Pending</option>
                                                                        <option value="pass">Pass</option>
                                                                        <option value="fail">Fail</option>
                                                                        <option value="in_progress">In Progress</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                
                                                                    <textarea class="form-control" id="remarks" name="remarks3" placeholder="Enter detailed remarks, criteria, and results" rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">SUBMIT</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
</form>

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
    <!-- form validate JS
		============================================ -->
    <script src="js/form-validation/jquery.form.min.js"></script>
    <script src="js/form-validation/jquery.validate.min.js"></script>
    <script src="js/form-validation/form-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
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

</html>