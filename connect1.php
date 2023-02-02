<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "database_cai";

    $con = mysqli_connect($host , $user , $password , $dbname);
    if(!$con){
        echo"cannot connect DB";
    }
?>