<?php
    include('../connect.php');
    $q = (isset($_GET['q']) ? $_GET['q'] : '');
    if($q!=''){
        include('show_user.php');
    }else{
        include ('user_admin.php');

    }
?>