<?php
    session_start();
    include("nav.php");
    include_once('db.php');
    echo lbStats($dbCon);
?>
  