<?php
    include('../connect.php');
    $id = $_GET['Q_Id'];
    $sql = "DELETE FROM `tbl_question` WHERE `tbl_question`.`question_Id` = $id";
    $q = mysqli_query($con, $sql); 
    if($q){
        echo"<script>window.alert('ลบข้อมูล สำเร็จ'); window.location='forum_admin.php'</script>";
    }else{
        echo"<script>window.alert('ลบข้อมูล สำเร็จ'); window.location='forum_admin.php'</script>";
    }
?>