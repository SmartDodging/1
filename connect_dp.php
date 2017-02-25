<?php
    function dblogin()
    {
        $servername = "smartdodging.com.mysql";
        $username = "smartdodging_com";
        $password = "BGUfPBSW";
        $dbname = "smartdodging_com";
        $login = mysqli_connect($servername, $username, $password, $dbname);
        if ($login->connect_errno) {
            echo "Failed to connect to MySQL: (" . $login->connect_errno . ") " . $login->connect_error;
        }
        return $login;
    }
?>