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
            <div class="phone"><i class="fa fa-phone"></i> 1234567890 </div>
            <div class="mobile-menu-btn"><i class="fa fa-bars"></i></div>
            <nav class="main-menu top-menu">
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="contact.php">Contact Us</a></li>
                </ul>
            </nav>
        </header>
        <!-- Header Section End -->
        
        <!-- Contact Section Start -->
        <div id="contact">
            <div class="container">
                <div class="section-header">
                    <h2>Contact</h2>
                    <p>
                        "Your feedback matters. Contact us to share your thoughts, concerns, or ideas. We're here to listen."
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row contact-info">
                            <div class="col-md-4">
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <h3>Address</h3>
                                    <p>Your Location, City, Country</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-item">
                                    <i class="fa fa-envelope"></i>
                                    <h3>E-mail</h3>
                                    <p><a href="mailto:babuguru2530@gmail.com"> email@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-item">
                                    <i class="fa fa-phone"></i>
                                    <h3>Mobile</h3>
                                    <p><a href="tel:+1 234 567 8900"> 1234567890 </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="form-row">
                                    <div class="control-group col-sm-6">
                                        <label>Your Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="E.g. Babu Prasanth " required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group col-sm-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="E.g. email@gmail.com" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label>Subject</label>
                                    <input type="text" class="form-control" id="subject" placeholder="E.g. Room Booking" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <label>Message</label> 
                                    <textarea class="form-control" id="message" rows="5" placeholder="E.g. I need a premium room" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="button"><button type="submit" id="sendMessageButton">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->
        
        <!-- Footer Section Start -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    </div>
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
        
        <!-- Contact Javascript File -->
        <script src="js/jqBootstrapValidation.min.js"></script>
        <script src="js/contact.js"></script>
        
        <!-- Main Javascript File -->
        <script src="js/main.js"></script>
    </body>
</html>
