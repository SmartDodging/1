<?php
    session_start();
    include_once ('nav.php');
    include 'news.php';
    echo "<script> alert(".$_SESSION['Username'].");";
?>

