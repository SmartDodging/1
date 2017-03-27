<?php
include("connect_dp.php");
include("data.php");
$conn = dblogin();
$email = $_GET['email'];
$sqlselect = "SELECT `Active`, `Username` FROM `users` WHERE Email='$email'";
$resultselect = mysqli_query($conn, $sqlselect);
$rowselect = mysqli_fetch_assoc($resultselect);
$username = $rowselect['Username'];
if ($rowselect['active'] == 0)
{
    $sql = "UPDATE `users`
                SET `Active` = '1'
                WHERE `Email`='$email'";
    mysqli_query($conn, $sql);
    $sqlfk = "INSERT INTO `userDetails` (`Username`)
                          VALUES ('" . $username . "')";
    mysqli_query($conn, $sqlfk);
    header("location: http://smartdodging.com/index.html");
    echo "<script>alert('Your account has succesfully been activated!');</script>";
}
else
{
    echo 'This account has already been activated!!';
}
?>