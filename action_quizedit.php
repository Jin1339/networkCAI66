<?php
    //up ข้อมูลคะแนนให้เป็น 0 เพื่อกับไปทำการสอบใหม่อีกครั้ง
    include('connect.php');
    session_start();
    $userId = $_SESSION['id'];
    $editquiz= $_GET['editquiz'];
    if($editquiz == 1){
        $sql = "UPDATE `tbl_academicresults` SET `score_subject3` = NULL, `percent_subject3` = NULL WHERE `tbl_academicresults`.`userId` = $userId;";
        $q = mysqli_query($con, $sql);
    }else if($editquiz == 2){
        $sql = "UPDATE `tbl_academicresults` SET `score_subject4` = NULL, `percent_subject4` = NULL WHERE `tbl_academicresults`.`userId` = $userId;";
        $q = mysqli_query($con, $sql);
    }else if($editquiz == 3){
        $sql = "UPDATE `tbl_academicresults` SET `score_subject5` = NULL, `percent_subject5` = NULL WHERE `tbl_academicresults`.`userId` = $userId;";
        $q = mysqli_query($con, $sql);
    }else{
        echo "<script>window.location='content.php'</script>";
    }
    echo "<script>window.location='content.php'</script>";
?>