<?php
    include('../connect.php');
    $q = (isset($_GET['q']) ? $_GET['q'] : '');
    if($q!=''){
        include('show_lesson.php');
    }else{
        include ('lesson_admin.php');
        
    }
?>