<?php
include("connect_dp.php");
include("data.php");
$email = $_GET['email'];
$sqlselect = "SELECT active FROM users WHERE Email='$email'";
$resultselect = mysqli_query($conn, $sqlselect);
$rowselect = mysqli_fetch_assoc($resultselect);
if ($rowselect['active'] == 0)
{
    $sql = "UPDATE users
                SET active = '1'
                WHERE Email='$email'";
    mysqli_query($conn, $sql);
    echo "<script>alert('Your account has succesfully been activated!');</script>";
    header("Location: http://smartdodging.com/home");
}
else
{
    echo 'This account has already been activated!!';
}
?>