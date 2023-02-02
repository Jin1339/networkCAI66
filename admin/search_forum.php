<?php
    include('../connect.php');
    $q = (isset($_GET['q']) ? $_GET['q'] : '');
    if($q!=''){
        include('show_forum.php');
    }else{
        include ('forum_admin.php');

    }
?>