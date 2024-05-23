<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> House Rental Management </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="img/favicon.ico" rel="icon">
        <link href="img/apple-favicon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 

        <!-- Vendor CSS File -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="vendor/slick/slick.css" rel="stylesheet">
        <link href="vendor/slick/slick-theme.css" rel="stylesheet">
        <link href="vendor/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Main Stylesheet File -->
        <link href="hover-style.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Header Section Start -->
        <header id="header">
            <a href="index.html" class="logo"><img src="img/logo.png" alt="logo"></a>
            <div class="phone"><i class="fa fa-phone"></i> 1234567890 </div>
            <div class="mobile-menu-btn"><i class="fa fa-bars"></i></div>
            <nav class="main-menu top-menu">
                <ul>
                    <li class="active"><a href="login.php">Login</a></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </nav>
        </header>
        <!-- Header Section End -->
        
        <!-- Header Bottom Start -->
        <div id="header-bottom">
            <!-- Search Section Start -->
            <div id="search" class="search-slider">
                <div class="container">
                    <h1>Feel at Home When You're Away</h1>
                    <div class="form-row">
                        <div class="control-group col-md-3">
                            <label>Check-In</label>
                            <div class="form-group">
                                <div class="input-group date" id="date-3" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#date-3"/>
                                    <div class="input-group-append" data-target="#date-3" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group col-md-3">
                            <label>Check-Out</label>
                            <div class="form-group">
                                <div class="input-group date" id="date-4" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#date-4"/>
                                    <div class="input-group-append" data-target="#date-4" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group col-md-3">
                            <div class="form-row">
                                <div class="control-group col-md-6">
                                    <label>Adult</label>
                                    <select class="custom-select">
                                        <option selected>0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="control-group col-md-6 control-group-kid">
                                    <label>Kid</label>
                                    <select class="custom-select">
                                        <option selected>0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="control-group col-md-3">
                            <button class="btn btn-block">Search</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search Section End -->
            
            <!-- Slider Section Start -->
            <div id="headerSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#headerSlider" data-slide-to="1"></li>
                    <li data-target="#headerSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/slider/header-slider-1.jpg" alt="Royal Hotel">
                    </div>

                    <div class="carousel-item">
                        <img src="img/slider/header-slider-2.jpg" alt="Royal Hotel">
                    </div>

                    <div class="carousel-item">
                        <img src="img/slider/header-slider-3.jpg" alt="Royal Hotel">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Slider Section End -->
        </div>
        <!-- Header Bottom End -->
        
        <!-- Search Section Start -->
        <div id="search" class="search-home">
            <div class="container">
                <div class="form-row">
                    <div class="control-group col-md-3">
                        <label>Check-In</label>
                        <div class="form-group">
                            <div class="input-group date" id="date-5" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#date-5"/>
                                <div class="input-group-append" data-target="#date-5" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="control-group col-md-3">
                        <label>Check-Out</label>
                        <div class="form-group">
                            <div class="input-group date" id="date-6" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#date-6"/>
                                <div class="input-group-append" data-target="#date-6" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="control-group col-md-3">
                        <div class="form-row">
                            <div class="control-group col-md-6">
                                <label>Adult</label>
                                <select class="custom-select">
                                    <option selected>0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="control-group col-md-6 control-group-kid">
                                <label>Kid</label>
                                <select class="custom-select">
                                    <option selected>0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="control-group col-md-3">
                        <button class="btn btn-block">Book</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Section End -->
        
        <!-- Welcome Section Start -->
        <div id="welcome">
            <div class="container">
                <h3>Welcome to Loft City</h3>
                <h4>Urban Holiday Apartments in Tokoyo</h4>
            </div>
        </div>
        <!-- Welcome Section End -->
        
        <!-- Amenities Section Start -->
        <div id="amenities">
            <div class="container">
                <div class="section-header">
                    <h2> Loft City & Services</h2>
                    <p>
                        "Life is better when every detail is taken care of. Trust our apartment services to exceed your expectations."
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <i class="icon icon-2"></i>
                            <h3>Air Conditioner</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <i class="icon icon-3"></i>
                            <h3>Bathtub</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <i class="icon icon-4"></i>
                            <h3>Shower</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <i class="icon icon-6"></i>
                            <h3>Television</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <i class="icon icon-7"></i>
                            <h3>WiFi</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <i class="icon icon-8"></i>
                            <h3>Telephone</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <i class="icon icon-9"></i>
                            <h3>Mini Bar</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <i class="icon icon-10"></i>
                            <h3>Kitchen</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Amenities Section Start -->
        
        <!-- Room Section Start -->
        <div id="rooms">
            <div class="container">
                <div class="section-header">
                    <h2>Apartments & Suites</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 room">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="room-img">
                                    <img src="img/room/room-1.jpg">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="room-des">
                                    <h3>Standard Single</h3>
                                    <h1>1500<span>/ Night</span></h1>
                                    <ul class="room-size">
                                        <li><i class="fa fa-arrow-right"></i>Size: 260 sq ft </li>
                                        <li><i class="fa fa-arrow-right"></i>Beds: 2 Single(s) </li>
                                    </ul>
                                    <ul class="room-icon">
                                        <li class="icon-1"></li>
                                        <li class="icon-2"></li>
                                        <li class="icon-3"></li>
                                        <li class="icon-4"></li>
                                        <li class="icon-5"></li>
                                        <li class="icon-6"></li>
                                        <li class="icon-7"></li>
                                        <li class="icon-8"></li>
                                        <li class="icon-9"></li>
                                        <li class="icon-10"></li>
                                    </ul>
                                    <div class="room-link">
                                        <a href="#" data-toggle="modal" data-target="#modal-id">Read More</a>
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 room">
                        <div class="row">
                            <div class="col-md-6 d-block d-md-none">
                                <div class="room-img">
                                    <img src="img/room/room-2.jpg">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="room-des">
                                    <h3>Standard Double</h3>
                                    <h1>2200<span>/ Night</span></h1>
                                    <ul class="room-size">
                                        <li><i class="fa fa-arrow-right"></i>Size: 260 sq ft </li>
                                        <li><i class="fa fa-arrow-right"></i>Beds: 2 Single(s) </li>
                                    </ul>
                                    <ul class="room-icon">
                                        <li class="icon-1"></li>
                                        <li class="icon-2"></li>
                                        <li class="icon-3"></li>
                                        <li class="icon-4"></li>
                                        <li class="icon-5"></li>
                                        <li class="icon-6"></li>
                                        <li class="icon-7"></li>
                                        <li class="icon-8"></li>
                                        <li class="icon-9"></li>
                                        <li class="icon-10"></li>
                                    </ul>
                                    <div class="room-link">
                                        <a href="#" data-toggle="modal" data-target="#modal-id">Read More</a>
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-none d-md-block">
                                <div class="room-img">
                                    <img src="img/room/room-2.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 room">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="room-img">
                                    <img src="img/room/room-3.jpg">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="room-des">
                                    <h3>Premium Single</h3>
                                    <h1>1800<span>/ Night</span></h1>
                                    <ul class="room-size">
                                        <li><i class="fa fa-arrow-right"></i>Size: 260 sq ft </li>
                                        <li><i class="fa fa-arrow-right"></i>Beds: 2 Single(s) </li>
                                    </ul>
                                    <ul class="room-icon">
                                        <li class="icon-1"></li>
                                        <li class="icon-2"></li>
                                        <li class="icon-3"></li>
                                        <li class="icon-4"></li>
                                        <li class="icon-5"></li>
                                        <li class="icon-6"></li>
                                        <li class="icon-7"></li>
                                        <li class="icon-8"></li>
                                        <li class="icon-9"></li>
                                        <li class="icon-10"></li>
                                    </ul>
                                    <div class="room-link">
                                        <a href="#" data-toggle="modal" data-target="#modal-id">Read More</a>
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 room">
                        <div class="row">
                            <div class="col-md-6 d-block d-md-none">
                                <div class="room-img">
                                    <img src="img/room/room-4.jpg">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="room-des">
                                    <h3>Premium Double</h3>
                                    <h1>3000<span>/ Night</span></h1>
                                    <ul class="room-size">
                                        <li><i class="fa fa-arrow-right"></i>Size: 260 sq ft </li>
                                        <li><i class="fa fa-arrow-right"></i>Beds: 2 Single(s) </li>
                                    </ul>
                                    <ul class="room-icon">
                                        <li class="icon-1"></li>
                                        <li class="icon-2"></li>
                                        <li class="icon-3"></li>
                                        <li class="icon-4"></li>
                                        <li class="icon-5"></li>
                                        <li class="icon-6"></li>
                                        <li class="icon-7"></li>
                                        <li class="icon-8"></li>
                                        <li class="icon-9"></li>
                                        <li class="icon-10"></li>
                                    </ul>
                                    <div class="room-link">
                                        <a href="#" data-toggle="modal" data-target="#modal-id">Read More</a>
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-none d-md-block">
                                <div class="room-img">
                                    <img src="img/room/room-4.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 room">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="room-img">
                                    <img src="img/room/room-5.jpg">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="room-des">
                                    <h3>Economy Single</h3>
                                    <h1>1200<span>/ Night</span></h1>
                                    <ul class="room-size">
                                        <li><i class="fa fa-arrow-right"></i>Size: 260 sq ft </li>
                                        <li><i class="fa fa-arrow-right"></i>Beds: 2 Single(s) </li>
                                    </ul>
                                    <ul class="room-icon">
                                        <li class="icon-1"></li>
                                        <li class="icon-2"></li>
                                        <li class="icon-3"></li>
                                        <li class="icon-4"></li>
                                        <li class="icon-5"></li>
                                        <li class="icon-6"></li>
                                        <li class="icon-7"></li>
                                        <li class="icon-8"></li>
                                        <li class="icon-9"></li>
                                        <li class="icon-10"></li>
                                    </ul>
                                    <div class="room-link">
                                        <a href="#" data-toggle="modal" data-target="#modal-id">Read More</a>
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Room Section End -->
        
        <!-- Modal for Room Section Start -->
        <div id="modal-id" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="port-slider">
                                    <div><img src="img/room-slider/room-1.jpg"></div>
                                    <div><img src="img/room-slider/room-2.jpg"></div>
                                    <div><img src="img/room-slider/room-3.jpg"></div>
                                    <div><img src="img/room-slider/room-4.jpg"></div>
                                    <div><img src="img/room-slider/room-5.jpg"></div>
                                    <div><img src="img/room-slider/room-6.jpg"></div>
                                </div>
                                <div class="port-slider-nav">
                                    <div><img src="img/room-slider/room-1.jpg"></div>
                                    <div><img src="img/room-slider/room-2.jpg"></div>
                                    <div><img src="img/room-slider/room-3.jpg"></div>
                                    <div><img src="img/room-slider/room-4.jpg"></div>
                                    <div><img src="img/room-slider/room-5.jpg"></div>
                                    <div><img src="img/room-slider/room-6.jpg"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="modal-link">
                                    <a href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Room Section End -->
        
        <!-- Subscribe Section Start -->
        <div id="subscribe">
            <div class="container">
                <div class="section-header">
                    <h2>Subscribe for Special Offer</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="subscribe-form">
                            <form>
                                <input type="email" required="required" placeholder="Enter your email here" />
                                <button>submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe Section End -->
        
        <!-- Booking Section Start -->
        <div id="booking">
            <div class="container">
                <div class="section-header">
                    <h2>Room Booking</h2>
                    <p>
                        Book your rooms by filling all details given below
                    </p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="booking-form">
                            <div id="success"></div>
                            <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mobile_number = $_POST['mobile_number'];
    $email = $_POST['email'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $adults = $_POST['adults'];
    $kids = $_POST['kids'];
    $room = $_POST['room'];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "booking";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO bookings (first_name, last_name, mobile_number, email, check_in, check_out, adults, kids, room) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssiis", $first_name, $last_name, $mobile_number, $email, $check_in, $check_out, $adults, $kids, $room);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="sentMessage" id="bookingForm" novalidate="novalidate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <div class="form-row">
                                    <div class="control-group col-sm-6">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" class="form-control" id="fname" placeholder="E.g. Babu" required="required" data-validation-required-message="Please enter first name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group col-sm-6">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="last_name" id="lname" placeholder="E.g. Prasanth" required="required" data-validation-required-message="Please enter last name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="control-group col-sm-6">
                                        <label>Mobile</label>
                                        <input type="text" class="form-control" name="mobile_number" id="mobile" placeholder="E.g. 1234567890" required="required" data-validation-required-message="Please enter your mobile number" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group col-sm-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="E.g. email@gmail.com" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="control-group col-sm-6">
                                        <label>Check-In</label>
                                        <input type="date" class="form-control datetimepicker-input" name="check_in" id="date-1"  placeholder="E.g. MM/DD/YYYY" required="required" data-validation-required-message="Please enter date"/>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group col-sm-6">
                                        <label>Check-Out</label>
                                        <input type="date" class="form-control datetimepicker-input"name="check_out" id="date-2"   placeholder="E.g. MM/DD/YYYY" required="required" data-validation-required-message="Please enter date"/>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="control-group col-sm-6">
                                        <label>Adult</label>
                                        <select class="custom-select" id="adult" name="adults" required="required" data-validation-required-message="Please select one"/>
                                            <option value="0" name="adults">0</option>
                                            <option value="1" name="adults">1</option>
                                            <option value="2" name="adults">2</option>
                                            <option value="3" name="adults">3</option>
                                            <option value="4" name="adults">4</option>
                                            <option value="5" name="adults">5</option>
                                            <option value="6" name="adults">6</option>
                                            <option value="7" name="adults">7</option>
                                            <option value="8" name="adults">8</option>
                                            <option value="9" name="adults">9</option>
                                            <option value="10" name="adults">10</option>
                                        </select>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group col-sm-6">
                                        <label>KId</label>
                                        <select class="custom-select" id="kid" required="required" name="kids" data-validation-required-message="Please select one"/>
                                            <option value="0" name="kids">0</option>
                                            <option value="1" name="kids">1</option>
                                            <option value="2" name="kids">2</option>
                                            <option value="3" name="kids">3</option>
                                            <option value="4" name="kids">4</option>
                                            <option value="5" name="kids">5</option>
                                            <option value="6" name="kids">6</option>
                                            <option value="7"  name="kids">7</option>
                                            <option value="8" name="kids">8</option>
                                            <option value="9" name="kids">9</option>
                                            <option value="10" name="kids">10</option>
                                        </select>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label>Room Request</label>
                                    <input type="text" class="form-control" id="request" name="room" placeholder="E.g. Special Request" required="required" data-validation-required-message="Please enter your Room request" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="button"><button type="submit" id="bookingButton" >Book Now</button></div>
                            </form>
</body>
</html>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking Section End -->
        
        <!-- Call Section Start -->
        <div id="call-us">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>
        <!-- Call Section End -->
        
        <!-- Footer Section Start -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section End -->
        
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Vendor JavaScript File -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/jquery/jquery-migrate.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/easing/easing.min.js"></script>
        <script src="vendor/stickyjs/sticky.js"></script>
        <script src="vendor/superfish/hoverIntent.js"></script>
        <script src="vendor/superfish/superfish.min.js"></script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/slick/slick.min.js"></script>
        <script src="vendor/tempusdominus/js/moment.min.js"></script>
        <script src="vendor/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="vendor/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <!-- Booking Javascript File -->
        <script src="js/booking.js"></script>
        <script src="js/jqBootstrapValidation.min.js"></script>
  
        <!-- Main Javascript File -->
        <script src="js/main.js"></script>
    </body>
</html>