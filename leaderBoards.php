<?php
    session_start();
    include("data.php");
    include ('db.php');
    echo lbStats($dbCon);
?>
  