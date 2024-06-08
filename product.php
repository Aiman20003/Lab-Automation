<?php
include('database-connection.php');

// Query to get the count of each test status for each product
$query = "SELECT product_img, product_name, product_code FROM products WHERE product_type = 'cpri_product'";

$result = mysqli_query($conn, $query);

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $row['product_name'] = strtoupper($row['product_name']);
    $data[] = $row;
}
// Close the database connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
		.services {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
		}
		
		.service {
			width: 28%;
			margin: 20px;
			background-color:white;;
			padding: 20px;
			border: 1px solid #ddd;
			border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
		}
		.service img {
			width: 100%;
			height: 150px;
			object-fit: cover;
			border-radius: 10px 10px 0 0;
		}
		
		.service h2 {
			margin-top: 0;
			color: purple;
		}
		
		.service p {
			margin-bottom: 20px;
		}
        h4{
            color:black;
            font-size:20px;
        }
	</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="irstheme">

    <title>LAB AUTOMATION</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="gear two">
                    <svg viewbox="0 0 100 100" fill="#853e92">
                        <path d="M97.6,55.7V44.3l-13.6-2.9c-0.8-3.3-2.1-6.4-3.9-9.3l7.6-11.7l-8-8L67.9,20c-2.9-1.7-6-3.1-9.3-3.9L55.7,2.4H44.3l-2.9,13.6      c-3.3,0.8-6.4,2.1-9.3,3.9l-11.7-7.6l-8,8L20,32.1c-1.7,2.9-3.1,6-3.9,9.3L2.4,44.3v11.4l13.6,2.9c0.8,3.3,2.1,6.4,3.9,9.3      l-7.6,11.7l8,8L32.1,80c2.9,1.7,6,3.1,9.3,3.9l2.9,13.6h11.4l2.9-13.6c3.3-0.8,6.4-2.1,9.3-3.9l11.7,7.6l8-8L80,67.9      c1.7-2.9,3.1-6,3.9-9.3L97.6,55.7z M50,65.6c-8.7,0-15.6-7-15.6-15.6s7-15.6,15.6-15.6s15.6,7,15.6,15.6S58.7,65.6,50,65.6z"></path>
                    </svg>
                </div>
                <div class="gear three">
                    <svg viewbox="0 0 100 100" fill="#d760ec">
                        <path d="M97.6,55.7V44.3l-13.6-2.9c-0.8-3.3-2.1-6.4-3.9-9.3l7.6-11.7l-8-8L67.9,20c-2.9-1.7-6-3.1-9.3-3.9L55.7,2.4H44.3l-2.9,13.6      c-3.3,0.8-6.4,2.1-9.3,3.9l-11.7-7.6l-8,8L20,32.1c-1.7,2.9-3.1,6-3.9,9.3L2.4,44.3v11.4l13.6,2.9c0.8,3.3,2.1,6.4,3.9,9.3      l-7.6,11.7l8,8L32.1,80c2.9,1.7,6,3.1,9.3,3.9l2.9,13.6h11.4l2.9-13.6c3.3-0.8,6.4-2.1,9.3-3.9l11.7,7.6l8-8L80,67.9      c1.7-2.9,3.1-6,3.9-9.3L97.6,55.7z M50,65.6c-8.7,0-15.6-7-15.6-15.6s7-15.6,15.6-15.6s15.6,7,15.6,15.6S58.7,65.6,50,65.6z"></path>
                    </svg>
                </div>
            </div>
        </div>
        <!-- end preloader -->
 


        <!-- Start header -->
        <header id="header" class="site-header header-style-1">
    <nav class="navigation navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="open-btn">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" ><img src="assets/images/logo.png" alt></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse navigation-holder">
                <button class="close-navbar"><i class="ti-close"></i></button>
                <ul class="nav navbar-nav">
                    <li class="menu-item-has-children">
                        <a href="index.html">Home</a>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li class="menu-item-has-children">
                        <a href="product.php">Products</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="testes.php">TEST</a>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="search-bar">
                        <form class="navbar-form" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default"><i class="ti-search"></i></button>
                        </form>
                    </li>
                    <li class="dropdown">
                        <a href="admin\login.php">
                            <span class="profile-emoji"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </a>
                    </li>
                </ul><!-- end of nav-collapse -->

                <!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->


        <!-- start page-title -->
        <section class="page-title" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(assets/images/page-tittle.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>PRODUCT</h2>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->
        <!-- end of header -->
        <br><br><br>
      <center><h1>The products which are CPRI APPROVED</h1></center>
        <div class="services">
        <?php foreach ($data as $product): ?>
            <div class="service">
        <img src="<?php echo $product['product_img']; ?>" alt="" style="height:300px;width:500px;" />
        <br><br>
       <center> <h2 style="font-size:20px;"><?php echo $product['product_name']; ?></h2>
      <center>  <button class="theme-btn">
            <a href="product-details.php?product_name=<?php echo urlencode($product['product_name']); ?>" style="color:white">Details</a>
        </button><center>
    </div>
<?php endforeach; ?>
        </div>
          <!-- start site-footer -->
          <footer class="site-footer">
            <div class="upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-md-3 col-sm-6">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <img src="assets/images/logo-footer.png" alt>
                                </div>
                                <p>Mikago arm towards the viewer gregor then turned to look out the window at the dull weather</p>
                                <div class="social-icons">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-6">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Usefull Links</h3>
                                </div>
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Our services</a></li>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Meet team</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-6">
                            <div class="widget contact-widget service-link-widget">
                                <div class="widget-title">
                                    <h3>Our Address</h3>
                                </div>
                                <ul>
                                    <li>25/19 Duel aveniew, new Booston town, Ghana</li>
                                    <li><span>Phone:</span> 84667441</li>
                                    <li><span>Email:</span> demo@example.com</li>
                                    <li><span>Office Time:</span> 10AM- 5PM</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-6">
                            <div class="widget newsletter-widget">
                                <div class="widget-title">
                                    <h3>Newsletter</h3>
                                </div>
                                <p>You will be notified when somthing new will be appear.</p>
                                <form>
                                    <div class="input-1">
                                        <input type="email" class="form-control" placeholder="Email Address *" required>
                                    </div>
                                    <div class="submit clearfix">
                                        <button type="submit"><i class="ti-email"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>


    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>

<!-- dustech/  13 Nov 2019 12:54:40 GMT -->
</html>
