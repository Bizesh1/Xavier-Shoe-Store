<?php
include 'conn.php';

if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $password = $_POST['password'];

    // Validate the user credentials
    $sql = "SELECT * FROM stardust_crusaders WHERE name='$uname' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        // User found, login successful
        echo "<script> alert('Login successful!') </script>";
        echo "<script> window.open('homepage.html', '_self') </script>"; // Redirect to dashboard or another page
    } else {
        // Invalid credentials
        echo "<script> alert('Invalid username or password!') </script>";
        echo "<script> window.open('signin.html', '_self') </script>";
    }

    mysqli_close($con);
}
?>
