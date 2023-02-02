<?php
    include('../connect.php');
    $id = $_GET['CId'];
    $sql = "DELETE FROM `tbl_comment` WHERE `tbl_comment`.`comment_Id` = $id";
    $q = mysqli_query($con, $sql); 
    if($q){
        echo"<script>window.alert('ลบข้อมูล สำเร็จ'); window.location='forum_admin.php'</script>";
    }else{
        echo"<script>window.alert('ลบข้อมูล สำเร็จ'); window.location='forum_admin.php'</script>";
    }
?>