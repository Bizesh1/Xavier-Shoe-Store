<?php
$servername="localhost";
$username="root";
$password="";
$database="library";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
    die("Error detected".mysqli_error($con));
}else{
    echo"Successfully Connected";
}
?>