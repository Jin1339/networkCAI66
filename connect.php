<?php
    $host = "localhost";
    $user = "id20240874_databasecai";
    $password = "Jin_12022546";
    $dbname = "Jin_12022546";

    $con = mysqli_connect($host , $user , $password , $dbname);
    if(!$con){
        echo"cannot connect DB";
    }
?>