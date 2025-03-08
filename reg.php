<?php
include 'conn.php';

if(isset($_POST['submit'])) {
    $name = $_POST['uname'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Insert the data into the database
    $sql = "INSERT INTO stardust_crusaders (name, password, email) VALUES ('$name', '$password', '$email')";

    if(mysqli_query($con, $sql)) {
        echo "<script> alert('New record inserted into database') </script>";
        echo "<script> window.open('logi.html', '_self') </script>";
    } else {
        echo "Error detected: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
