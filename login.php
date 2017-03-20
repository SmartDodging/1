<?php 
include 'data.php'; 
if(!empty($_POST)){
$emaillogin = $_POST["emaillogin"];
$loginpassword = md5(md5($_POST["loginpassword"]));
$email = $_GET['email'];
    $sql = "SELECT email, password, role FROM users WHERE email='$emaillogin' AND password='$loginpassword'";
    $resultselect = mysqli_query($conn,$sql);
    $rowselect = mysqli_fetch_assoc($resultselect);
        if($rowselect['role'] == 'user'){
    if($rowselect['email'] == $emaillogin and $rowselect['password'] == $loginpassword){
        header("location: homepage.php");
    }
}
    else if($rowselect['role'] == 'admin'){
        if($rowselect['email'] == $emaillogin and $rowselect['password'] == $loginpassword){
        header("location: homepage_admin.php");
    }
    
}
    else {
        
        echo ("<style> #incorrect{color:red;}</style> <p id='incorrect'>username or password is incorrect</p>");
        
    }
}

?>
<center>
    <h1>Log In!</h1>
    <div class="container">
        <form action="" role="form" class="form-inline">
            <label for="form-el-email">Username</label>
            <br>
            <input type="email" id="form-el-email" class="form-control" placeholder="Username">
        </form>
        <form action="" role="form" class="form-inline">
            <label for="form-el-password">Password</label>
            <br>
            <input type="password" id="form-el-password" class="form-control" placeholder="Password">
        </form>
        <br>
        <button class="btn btn-danger" type="button"><span class="glyphicon glyphicon-ok"></span>   login</button>
    </div>
</center>