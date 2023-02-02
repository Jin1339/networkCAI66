<?php
    include('../connect.php');
    $id = $_GET['userid'];
    $sql = "DELETE FROM `tbl_user` WHERE `tbl_user`.`userId` = $id";
    $q = mysqli_query($con, $sql);
    if($q){
        echo"<script>window.alert('ลบข้อมูล สำเร็จ'); window.location='user_admin.php'</script>";
    }else{
        echo"<script>window.alert('ลบข้อมูล ไม่สำเร็จ'); window.location='user_admin.php'</script>";
    }
?>