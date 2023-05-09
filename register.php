<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<?php
include "connect.php"; // call connection code to db server
// receive user details form the form
 $fullnames=$_POST['fullnames'];
 $username = $_POST['username'];
 $password = md5($_POST['password']);
 $email = $_POST['email'];
 
 
// Check if username already exists
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Username already exists. Please choose a different username. <a href='reg.html'>Register</a> to continue.";
} else {
    // Insert new user into database
    $sql = "INSERT INTO users (Username, Password) VALUES ('$username', '$password')";

    if (mysqli_query($con, $sql)) {
        echo "Registration successful. <a href='login.html'>Login</a> to continue.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}

mysqli_close($con);
?>
 