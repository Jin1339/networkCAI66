<?php
    include('../connect.php');
    session_start();
    $id = $_POST['Id'];
    $namelesson = $_POST['namelesson'];
    $choice1 = $_POST['choice1'];
    $choice2 = $_POST['choice2'];
    $choice3 = $_POST['choice3'];
    $choice4 = $_POST['choice4'];
    $answer = $_POST['answer'];

    $sql = "UPDATE `tbl_lesson1` SET `question` = '$namelesson', `choice_A` = '$choice1', `choice_B` = '$choice2', `choice_C` = '$choice3', `choice_D` = '$choice4', `answer` = '$answer'  WHERE `tbl_lesson1` .`Id` = $id;";
    $q = mysqli_query($con, $sql);
    if($q){
        echo"<script>window.alert('แก้ไขข้อมูล สำเร็จ'); window.location='lesson_admin.php'</script>";  
    }else{
        echo"<script>window.alert('แก้ไขข้อมูล ไม่สำเร็จ'); window.location='lesson_admin.php'</script>";
    }
?>