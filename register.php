<?php
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
        if ($rnum == 0) 
        {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sss", $uname, $mail, $pass);
            $stmt->execute();
            echo '<script>alert("Welcome to Geeks for Geeks")</script>';
            header('Location: login.php');
            
            
            
        } 
        else 
        {
            header('Location: registration.php');
            echo '<script>alert("ALREAY USERNAME/EMAIL ")</script>';
            
        }
        $stmt->close();
        $conn->close();
    }
} 
else {
    echo "All fields are required";
    die();
}
?>
