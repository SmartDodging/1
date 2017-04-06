<?php
session_start();
include("data.php");
include('db.php');
$connect = $dbCon;
$email = $_GET['email'];
activateAcc($connect, $email);