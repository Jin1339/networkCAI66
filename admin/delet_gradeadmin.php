<?php
    session_start();
    $subid = $_GET['subjectid'];
    echo $_SESSION['id'];
    // if($subid==1){
    //     $sqlup = "UPDATE `tbl_academicresults` SET `score_subject1` = NULL, `percent_subject1` = NULL WHERE `tbl_academicresults`.`Id` = $id";
    //     $qup = mysqli_query($con, $sql);
        
    //     $sql = "DELETE FROM `tbl_answermyuser` WHERE `tbl_answermyuser`.`id_user` = 1 AND `tbl_answermyuser`.`subjectId` = $id";
    //     $q = mysqli_query($con, $sql);

    // }else if($subid==2){

    // }else if($subid==3){

    // }else if($subid==4){

    // }else if($subid==5){

    // }
    // $sql = "DELETE FROM `tbl_lesson3` WHERE `tbl_lesson3`.`Id` = $id";
    // $q = mysqli_query($con, $sql);

?>