<?php include("nav.php");?>
<center>
    <div class="container">
            <form action="" role="form">
                  <div class="form-group">
                      <label for="form-el-achternaam">Achternaam</label>
                      <input type="text" id="form-el-achternaam" class="form-control">
                </div>   
            </form>
            <form action="" role="form">
                  <div class="form-group">
                      <label for="form-el-voornaam">Voornaam</label>
                      <input type="text" id="form-el-voornaam" class="form-control">
                      <p class="help-block" style="color:red;">Een voornaam is genoeg</p>
                </div>   
            </form>
            <hr><hr>
            <form action="" role="form" class="form-inline">
            <label for="form-el-email" class="sr-only">E-mail</label>
            <input type="email" id="form-el-email" class="form-control" placeholder="Uw email">
            </form>
            <form action="" role="form" class="form-inline">
            <label for="form-el-password" class="sr-only">Wachtwoord</label>
            <input type="password" id="form-el-password" class="form-control" placeholder="Uw wachtwoord">
            </form>
            <button class="btn btn-danger" type="button"><span class="glyphicon glyphicon-ok"></span></button>
        </div>
</center>