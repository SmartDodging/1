<?php
include ('data.php');
include ('connect_dp.php');
$connect = dblogin();
    function clean($text)
    {
        $text = trim($text);
        $text = strip_tags($text);
        $text = addslashes($text);
        return $text;
    }
    $subject = "activate your account!";
    $message = "Click the link to activate your account. http://smartdodging.com/activation.php&email=$email";
    if ( isset($_POST["submit"])) {
        $email = clean($_POST["form-el-email"]);
        $username = clean($_POST["form-el-username"]);
        $password = clean($_POST["form-el-password"]);
        $password2 = clean($_POST["form-el-password2"]);
        if ($password == $password2 && !empty($_POST)){
            $sqlselect = "SELECT `Email`, `Username` FROM `users` WHERE Email='$email' OR Username='$username'";
            $resultselect = mysqli_query($connect, $sqlselect);
            $rowselect = mysqli_fetch_assoc($resultselect);
            if($email != $rowselect['Email'] && $username != $rowselect['Username']){
                $sql = "INSERT INTO `users` (`Username`,
                                           `Email`,
                                           `Password`)
                              VALUES      ('" . $username . "',
                                           '" . $email . "', 
                                           '" . password_hash($password ,PASSWORD_DEFAULT) . "')";
                mysqli_query($connect, $sql);
                echo "<script>alert('You have successfully registered!')</script>";
                $sqlfk = "INSERT INTO `userDetails` (`Username`)
                          VALUE     ('".$username."')";
                mysqli_query($connect, $sqlfk);
                mail($email,$subject,$message);
                header("location: home.php");
            }
            elseif($email == $rowselect['Email']){
                echo "<script>alert('Email already in use!')</script>";
            }
            else{
                echo "<script>alert('Username already in use!')</script>";
            }
            }elseif( empty($_POST)){
            echo "<script>alert('Only use numbers and letters!')</script>";
        }
            else{
            echo "<script>alert('Passwords do not match!')</script>";
        }
    }


echo "
   <center>
    <h1>Sign Up!</h1>
        <div class='demo'>
            <div class='container'>
                <form action='' method='POST' role='form' class='form-inline'>
                    <label for='form-el-email'>E-mail*</label><br>
                    <input type='email' id='form-el-email' name='form-el-email' class='form-control' placeholder='E-mail' required><br>
                    <label for='form-el-username'>Username*</label><br>
                    <input type='text' id='form-el-username' name='form-el-username' class='form-control' placeholder='Username' required><br>
                    <label for='form-el-password'>Password*</label><br>
                    <input type='password' id='form-el-password' name='form-el-password' class='form-control' placeholder='Password' required><br>
                    <label for='form-el-password'>Repeat password*</label><br>
                    <input type='password' id='form-el-password2' name='form-el-password2' class='form-control' placeholder='Password' required><br>
                    <p class='help-block' style='color:red;'>Fields with a * are required</p>
                    <br>
                <button class='btn btn-success' type='submit' name='submit' style='color:red;'><span class='glyphicon glyphicon-heart'>
                SignUp!</span></button>
                </form>
            </div>
        </div>
        </center>
                    <!--<p class='help-block' style='color:red;'>Een acternaam is genoeg</p>-->
";
?>