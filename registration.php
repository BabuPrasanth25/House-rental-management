<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$uname = $_POST['uname'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];

if(!empty($uname) || !empty($mail) || !empty($pass))
{
    $host ="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="hr system";


    $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

    if(mysqli_connect_error()){
        die('connect Error('.mysqli_connect_errno().')' . mysqli_connect_errno());
    }
    else{
        $SELECT = "SELECT mail From signup Where mail = ? Limit 1";
        $INSERT = "INSERT INTO signup(uname, mail, pass) VALUES (?,?,?)"; // Added semicolon here

        // Prepare statement
        $stmt = $conn->prepare($SELECT); // Initialize $stmt variable
        $stmt->bind_param("s", $mail);
        $stmt->execute();
        $stmt->bind_result($mail);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        // Checking username
        if($rnum == 0 ){
            echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        }
        if ($rnum == 0) 
        {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sss", $uname, $mail, $pass);
            $stmt->execute();
            header('Location: login.php');   
        } 
        else 
        {
            echo '<script>alert("ALREADY USERNAME/EMAIL")</script>';
            
        }
        $stmt->close();
        $conn->close();
    }
} 
else {
    echo "All fields are required";
    die();
}}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Rental Management System</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>
    <div class="background-image">
        <div class="form-container">
            <h1>Registration Form</h1><br>
            <form name="sentMessage" id="bookingForm"  novalidate="novalidate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="control-group col-sm-6">
                    <label for="email">Full Name:</label>
                    <input type="text" name="uname" required>
                </div>
                <div class="control-group col-sm-6">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="mail" required>
                </div>
                <div class="control-group col-sm-6">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="pass" required>
                </div><br>
                <div class="control-group col-sm-6">
                <button type="submit" class="register-button" >Register</button>
            </div>
            </form >
            <p>Already a member? <a href="login.php">Login now</a></p>
        </div>
    </div>
</body>
</html>
