<?php
    include('../connect.php');
    $subid = $_GET['subid'];
        if($subid == 1){
            include('exam_admin1.php');
        }else if($subid == 2){
            include('exam_admin2.php');
        }else if($subid == 3){
            include('exam_admin3.php');
        }else if($subid == 4){
            include('exam_admin4.php');
        }else if($subid == 5){
            include('exam_admin5.php');
        }else{
            include('lesson_admin.php');
        }
?>