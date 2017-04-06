<?php
session_start();
include 'data.php';
include 'connect_dp.php';
$conn = dblogin();
function clean($text)
{
    $text = trim($text);
    $text = strip_tags($text);
    $text = addslashes($text);
    return $text;
}
if(!empty($_POST) && isset($_POST["submit"])) {
    $userlogin= clean($_POST["form-el-username"]);
    $pass = clean($_POST['form-el-password']);
    $password = md5(md5($pass));

        if ($rowselect['Username'] == $userlogin && $rowselect['Password'] == $passlogin && $rowselect['Active'] == 1){
            $_SESSION['username'] = $userlogin;
            if ($rowselect['Role'] == 'user') {
                echo "<script>window.location = 'http://smartdodging.com/home.php';</script>";
                $_SESSION['Role'] = "user";
                header("location: smartdodging.com/index.html");
            } else if ($rowselect['Role'] == 'admin') {
                $_SESSION['role'] = "admin";
                header("location: smartdodging.com/index.html");
            } else {
                echo "<script>alert('Username already in use!')</script>";
            }
        }
}
?>
<center>
    <h1>Log In!</h1>
    <div class="container">
        <form action="" method ="POST" role="form" class="form-inline">
            <label for="form-el-username">Username</label><br>
            <input type="text" name="form-el-username" id="form-el-username" class="form-control" placeholder="Username"><br>
            <label for="form-el-password">Password</label><br>
            <input type="password" name="form-el-password" id="form-el-password" class="form-control" placeholder="Password"><br>
            <button class="btn btn-danger" type="submit" name="submit"><span class="glyphicon glyphicon-ok"></span>login</button>
        </form>
    </div>
</center>