<?php
session_start();
include('nav.php');
include_once('db.php');
$connect = $dbCon;
function clean($text)
{
    $text = trim($text);
    $text = strip_tags($text);
    $text = addslashes($text);
    return $text;
}
if(!empty($_POST) && isset($_POST["submit"])) {
    $username = clean($_POST["form-el-username"]);
    $pass = clean($_POST['form-el-password']);
    $password = md5(md5($pass));
    loginUser($connect, $username, $password);
    if(loginUser($connect, $username, $password)){
        $_SESSION['Username'] = $username;
        if($_SESSION['Username'] = $username) {
            header("location: http://smartdodging.com/home.html");
        }
    }
}
echo '<center>
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
</center>';
?>
