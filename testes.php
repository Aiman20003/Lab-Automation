<!DOCTYPE html>
<html lang="en">

<head>
<style>
    #last-card{
        margin-left:33%;
    }
        /* Custom CSS for thead background color */
        table thead {
            background-color: #853e92;
            color: white;
        }
        .custom-table-container {
            width: 90%;
            margin: 0 auto;
        }
        h1 {
  font-size: 3.5rem;
  margin-bottom: 0.5rem; /* added some margin bottom to separate from the lead text */
}

h2 {
  font-size: 2rem;
}

h3 {
  font-size: 1.5rem;
}

h4 {
  font-size: 1.2rem;
}

h5 {
  font-size: 1rem;
}

.lead {
  font-size: 1.2rem;
  color: #666; /* added a darker gray color to the lead text */
}

.card {
  margin-bottom: 20px; /* added some margin bottom to separate the cards */
  background-color:white;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* added a subtle box shadow to the cards */
}

.card-body {
  padding: 20px;
  height:120px;/* added some padding to the card body */
}

.card-title {
  font-weight: bold;
  margin-bottom: 10px; /* added some margin bottom to separate the title from the text */
}

.card-text {
  font-size: 0.9rem;
  color: #999; /* added a lighter gray color to the card text */
  
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
                    </li><!-- end of nav-collapse -->

                <!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->


        <!-- start page-title -->
        <section class="page-title" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(assets/images/page-tittle.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>TEST</h2>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->
       <br><br>
        <header class="container">
        <h1 class="text-center my-5" style="font-size:50px">Testing Types</h1>
        <p class="lead text-center">
            Testing simulates what the product will experience across its design life cycle. Products are instruments to deliver machines that simulate what our acceptable vibration and shock conditions that are expected in its life cycle.
        </p>
    </header>
    <main class="container">
        <center>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                      <div class="body" style="display:flex;"><img src="assets/images/in1.png" style="heigth:18px;width:40px;">&nbsp;&nbsp;<h5 class="card-title" style="font-size:17px">Insulation Resistance Testing</h5></div>
                        <p class="card-text">Measures the resistance of electrical insulation to ensure there is no leakage current.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                    <div class="body" style="display:flex;"><img src="assets/images/in2.png" style="heigth:18px;width:40px;">&nbsp;&nbsp;  <h5 class="card-title" style="font-size:17px">Contact Resistance Testing</h5></div>
                        <p class="card-text">Measures the resistance at connections,minimal resistance for efficient current flow.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                    <div class="body" style="display:flex;"><img src="assets/images/in7.png" style="heigth:18px;width:40px;">&nbsp;&nbsp;<h5 class="card-title" style="font-size:17px">Circuit Breaker Testing</h5></div>
                        <p class="card-text">Evaluates the performance and reliability of circuit breakers under fault conditions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                    <div class="body" style="display:flex;"><img src="assets/images/in4.png" style="heigth:18px;width:40px;">&nbsp;&nbsp;<h5 class="card-title" style="font-size:17px">Visual Inspection Testing</h5></div>
                        <p class="card-text">This involves the manual examination of components, structures,to detect any visible defects. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                    <div class="body" style="display:flex;"><img src="assets/images/in5.png" style="heigth:18px;width:40px;">&nbsp;&nbsp;<h5 class="card-title" style="font-size:17px">Mechanical Operation Testing</h5></div>
                        <p class="card-text">This involves evaluating thecomponents of a system to ensure they operate as intended.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                    <div class="body" style="display:flex;"><img src="assets/images/in3.png" style="heigth:8px;width:40px;">&nbsp;&nbsp;<h5 class="card-title" style="font-size:17px">Protection Relay Testing </h5></div>
                        <p class="card-text">Protection relays are crucial devices that detect  initiate corrective actions to prevent damage.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" id="last-card">
                <div class="card mb-4">
                    <div class="card-body">
                    <div class="body" style="display:flex;"><img src="assets/images/in6.png" style="heigth:18px;width:40px;">&nbsp;&nbsp;<h5 class="card-title" style="font-size:1Zpx">Control Circuit Testing </h5></div>
                        <p class="card-text">Control circuits are electrical circuits responsible for controlling the operation of machinery or processes.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    


         <!-- Static Table Start -->
    <div class="data-table-area mg-b-15" style="background-color:#f0fbff;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <br><br>

                             <center>   <h1>TEST DATA TABLE </h1></center>
                            </div>
                        </div>
                        <div class="custom-table-container">
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                
                                        <div id="toolbar" style="display:flex;">
                                        <form action="" method="GET" id="search">
                                            <input type="text" name="search" placeholder="Search...">
                                            <button type="submit">Search</button>
                                        </form>
                                    <!-- Search Bar -->
                                    <div class="right" style="margin-left:auto;right:0;display:flex;">
                                    
                                    
                                    <form action="" method="GET" id="filter-form">
                                        <select class="form-control dt-tb" name="test_type" onchange="document.getElementById('filter-form').submit()" style="width:150px;">
                                            <option value="all">ALL</option>
                                            <option value="Electrical-Testing">Electrical Testing</option>
                                            <option value="Mechanical-Testing">Mechanical Testing</option>
                                            <option value="Functional-Testing">Functional Testing</option>
                                        </select>
                                    </form>
                                    </div>
                                </div>
                                <br>
                                <?php
                                    include('database-connection.php');

// Check if a search query is provided
if(isset($_GET['search'])) {
    $search = $_GET['search'];
    // Query to search for records based on various fields
    $query = "SELECT * FROM tests WHERE test_id LIKE '%$search%' OR product_id LIKE '%$search%' OR test_date LIKE '%$search%' OR tester_name LIKE '%$search%' OR test_results LIKE '%$search%' OR test_type LIKE '%$search%' OR test_subtype LIKE '%$search%'";
} elseif (isset($_GET['test_type']) && $_GET['test_type'] != 'all') {
    $test_type = $_GET['test_type'];
    // Query to filter records by test type
    $query = "SELECT * FROM tests WHERE test_type = '$test_type'";
} else {
    // If no search query or test type is provided, fetch all records
    $query = "SELECT * FROM tests";
}

$row = mysqli_query($conn, $query);
$totalrow = mysqli_num_rows($row);

if ($totalrow != 0) {
    ?>
                                  
                                <table id="table" data-toggle="table"  border="1" style="background-color:white;" >
                                    <thead>
                                    <tr>
                                        <th>Test_Id</th>
                                        <th>Product_Id</th>
                                        <th>Testing-Date</th>
                                        <th>Tester_Name</th>
                                        <th>Testing_Type</th>
                                        <th>Testing_SubType</th>
                                        <th>Detail_Reamrks</th>
                                        <th>Test_Results</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while ($data = mysqli_fetch_assoc($row)) {
                                        echo "<tr>
                                        <td>" . $data['test_id'] . "</td>
                                        <td>" . $data['product_id'] . "</td>
                                        <td>" . $data['test_date'] . "</td>
                                        <td>" . $data['tester_name'] . "</td>
                                        <td>" . $data['test_type'] . "</td>
                                        <td>" . $data['test_subtype'] . "</td>
                                        <td>" . $data['detailed_remarks'] . "</td>
                                        <td>" . $data['test_results'] . "</td>
                                
                                        </tr>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                                </div>
                            
    <!-- Static Table End -->
    <!-- jquery ============================================ -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!-- data table JS ============================================ -->
    <script src="assets/js/bootstrap-table.js"></script>
    <?php
} else {
    echo "No Records Found";
}
?>
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
