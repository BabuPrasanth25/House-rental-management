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
    $stmt->bind_param("ssssssiii", $first_name, $last_name, $mobile_number, $email, $check_in, $check_out, $adults, $kids, $room);

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
                                        <input type="text" class="form-control datetimepicker-input" name="check_in" id="date-1" data-toggle="datetimepicker" data-target="#date-1" placeholder="E.g. MM/DD/YYYY" required="required" data-validation-required-message="Please enter date"/>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group col-sm-6">
                                        <label>Check-Out</label>
                                        <input type="text" class="form-control datetimepicker-input"name="check_out" id="date-2" data-toggle="datetimepicker" data-target="#date-2" placeholder="E.g. MM/DD/YYYY" required="required" data-validation-required-message="Please enter date"/>
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
