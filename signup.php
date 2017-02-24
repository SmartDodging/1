<?php
include ('data.php');
$hash = $_GET['hash'];
if ( !empty($_POST)){
    $username = $_POST['form-el-username'];
    $password = $_POST['form-el-password'];
    $password2 = $_POST['form-el-password2'];
    $message = "Password has been set, you can now log in!";
    $error = "Password does not match";
    $email = $_GET['form-el-email'];

    if($password == $password2){
        echo "<script type='text/javascript'>alert('$message');</script>";
        $sql = "UPDATE users SET password='$password' WHERE hash='$hash'";
        mysqli_query($conn, $sql);
        header("location: ./index.php?content=login_form&email=$email");

    }
    else{
        echo "<script type='text/javascript'>alert('$error');</script>";
    }


}
?>
<center>
    <h1>Sign Up!</h1>
        <div class="demo">
            <div class="container">
                <form action="POST" role="form" class="form-inline">
                    <label for="form-el-email">E-mail*</label><br>
                    <input type="email" id="form-el-email" class="form-control" placeholder="E-mail" required> 
                </form>
                <form action="" role="form" class="form-inline">
                    <label for="form-el-username">Username*</label><br>
                    <input type="text" id="form-el-username" class="form-control" placeholder="Username" required>
                </form>
                <form action="" role="form" class="form-inline">
                    <label for="form-el-password">Password*</label><br>
                    <input type="password" id="form-el-password" class="form-control" placeholder="Password" required> 
                </form>
                <form action="" role="form" class="form-inline">
                    <label for="form-el-password">Repeat password*</label><br>
                    <input type="password" id="form-el-password2" class="form-control" placeholder="Password" required>
                </form>
                <p class="help-block" style="color:red;">Fields with a * are required</p>
                <br>
                <button class="btn btn-success" type="submit" style="color:red;"><span class="glyphicon glyphicon-heart">   
                SignUp!</span></button>
            </div>
        </div>
</center>
                    <!--<p class="help-block" style="color:red;">Een acternaam is genoeg</p>-->