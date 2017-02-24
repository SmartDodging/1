<?php
include ('data.php');

function clean($tekst){
                        $tekst = trim($tekst);
                        $tekst = strip_tags($tekst);

                        //escaped dingen als  '' en ""
                        $tekst = addslashes($tekst);

                        //alleen voor mysql en doet t zelfde als addslashes
                        //$tekst = mysql_real_escape_string($conn, $tekst);
                        return $tekst;
}

if(!empty($_POST))
        {
                $email = clean($_POST["form-el-email"]);
                $username = clean($_POST["form-el-username"]);
                $password = clean($_POST["form-el-password"]);
                $password2 = clean($_POST["form-el-password2"]);
            if($password == $password2){
              $sql = "INSERT INTO `users` (`UserID`,
                                                   `Username`,
                                                   `Email`,
                                                   `Password`)
                              VALUES              (NULL,
                                                   '".$username."',
                                                   '".$email."', 
                                                   '".$password."')";

                
       // echo $sql;
       mysqli_query($conn, $sql);
            }else{
                echo "<script>alert('Passwords no woekrie')</script>";
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