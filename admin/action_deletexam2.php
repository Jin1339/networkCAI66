<?php
    include('../connect.php');
    $id = $_GET['subid'];
    $sql = "DELETE FROM `tbl_afterstudytest` WHERE `tbl_afterstudytest`.`Id` = $id";
    $q = mysqli_query($con, $sql);
    if($q){
        echo"<script>window.alert('ลบข้อมูล สำเร็จ'); window.location='lesson_admin.php'</script>";
    }else{
        echo"<script>window.alert('ลบข้อมูล ไม่สำเร็จ'); window.location='lesson_admin.php'</script>";
    }
?>