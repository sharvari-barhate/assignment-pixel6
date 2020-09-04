<?php
$firstname= $_POST['firstname'];
$lasttname= $_POST['lasttname'];
$email= $_POST['email'];
$state= $_POST['state'];
$Phoneno= $_POST['phoneno'];
$gender= $_POST['gender'];
$city= $_POST['city'];
$photo= $_POST['photo'];
$graduation= $_POST['graduation'];
$graduationgrade= $_POST['graduationgrade'];
$graduationyear= $_POST['graduationyear'];
$specialization= $_POST['specialization'];
$college= $_POST['college'];
$primary= $_POST['primary'];
$secondary= $_POST['secondary'];
$certification= $_POST[certification'];
$pitch= $_POST['pitch'];

if (!empty($firstname) || !empty($lastname) || !empty($email) || !empty($State) || !empty($phoneno) || !empty($gender) || !empty($city) || !empty($photo) || !empty($graduation) || !empty($graduationgrade) || !empty($graduationyear) || !empty($specialization) || !empty($college)
|| !empty($primary) || !empty($secondary) || !empty($certification) || !empty($pitch)) {
    $host = "localhost";
    $dbfirstname ="";
    $dblastname = "";
    $dbname = "register";
$conn = new mysqli($host, $dbfirstname, $dblastname, $dbname);

if (mysqli_connect_error()) {
    die('connect Error('.mysqli_connect_error().')'.mysqli_connect_error());

}else {
    $SELECT = "SELECT email from register where email =? Limit 1";
    $INSERT = "INSERT Into register (firstname, lastname, email, state, phoneno, gender, city, photo, graduation, graduationgrade, graduationyear, specialization, 
    college, primary, secondary, certification, pitch) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, )";

    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum= $stmt->num_rows;
     if ($rnum==0) {
         $stmt->close();
         $stmt = $conn->prepare($INSERT);
         $stmt->bind_param("sharvari", $firstname, $lastname, $email, $state, $phoneno, $gender, $city, $photo, $graduation, $graduatingrade, $graduationyear, $sepcilization, $college, $primary, $secondary, $certification, $pitch);
         $stmt->execute();
         echo "new record inserted sucessfully";
     }
     echo "some already register using this email";
    }
    $stmt->close();
    $conn->close();
}
}
} else {
    echo "All field are required";
    die();




?>