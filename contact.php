<?php


include('database-connection.php');

if(isset($_POST['updatbtn'])) {
   // Get form data
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $contactsubject = $_POST['contactsubject'];
    $casedescription= $_POST['casedescription'];

    // Prepare an SQL statement
    $sql="INSERT INTO `contact_tb` (`name`, `phone`, `email`, `contactsubject`, `casedescription`) VALUES ('$name', '$phone','$email','$contactsubject','$casedescription');";
    $row =  mysqli_query($conn,$sql);

    if($row>0) {
        echo '<script>alert("Our Team will contact you")</script>';
    } else {
        echo '<script>alert("Your message is not sent. Error: ' . $stmt->error . '")</script>';
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
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
                        <h2>Contact</h2>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start contact-pg-section -->
        <section class="contact-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-5 col-md-6 col-sm-8">
                        <div class="section-title">
                            <span>Contact With Us</span>
                            <h2>Call Us Or Fill The Form</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-7">
                        <form method="post"  action="">
                            <div>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name*">
                            </div>
                            <div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                            </div>
                            <div>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*">
                            </div>
                            <div>
                                <select name="contactsubject" class="form-control">
                                    <option disabled="disabled" selected>Contact subject</option>
                                    <option value="subject1">Subject 1</option>
                                    <option  value="subject2">Subject 2</option>
                                    <option  value="subject3">Subject 3</option>
                                </select>
                            </div>
                            <div class="fullwidth">
                                <textarea class="form-control" name="casedescription"  id="note" placeholder="Case Description..."></textarea>
                            </div>
                            <div class="submit-area">
                                <button type="submit" class="theme-btn" name="updatbtn">Submit Now</button>

                            </div>
                        </form>
                    </div>  

                    <div class="col col-md-5">
                        <div class="office-info">
                            <div>
                                <h3>Karachi Office</h3>
                                <ul>
                                    <li><i class="ti-location-pin"></i> c-10 block 18 F B Area karachi</li>
                                    <li><i class="ti-mobile"></i> 546418563, 3245647</li>
                                    <li><i class="ti-email"></i> example@demo.com</li>
                                </ul>
                            </div>
                            <div>
                                <h3>Lahore Office</h3>
                                <ul>
                                    <li><i class="ti-location-pin"></i>  c-10 block 18 F B Area karachi</li>
                                    <li><i class="ti-mobile"></i> 546418563, 3245647</li>
                                    <li><i class="ti-email"></i> example@demo.com</li>
                                </ul>
                            </div>
                            <div>
                                <h3>Islamabad Office</h3>
                                <ul>
                                    <li><i class="ti-location-pin"></i>  c-10 block 18 F B Area karachi</li>
                                    <li><i class="ti-mobile"></i> 546418563, 3245647</li>
                                    <li><i class="ti-email"></i> example@demo.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-pg-section -->


        <!--  start contact-map -->
        <section class="contact-map-section">
            <h2 class="hidden">Contact map</h2>
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671" allowfullscreen></iframe>
            </div>
        </section>
        <!-- end contact-map -->
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
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="product.php">Products</a></li>
                                    <li><a href="Test.php">Test</a></li>
                                    <li><a href="contact.php">Contact us</a></li>
                                   
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
