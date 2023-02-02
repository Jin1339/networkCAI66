<?php
    include('../connect.php');
    session_start();
    $subid = $_GET['subidd'];
    $namelesson = $_POST['namelesson'];
    $choice1 = $_POST['choice1'];
    $choice2 = $_POST['choice2'];
    $choice3 = $_POST['choice3'];
    $choice4 = $_POST['choice4'];
    $answer = $_POST['answer'];
    $sql = "INSERT INTO `tbl_lesson1`(`question`, `choice_A`, `choice_B`, `choice_C`, `choice_D`, `answer`, `subjectId`) VALUES ('$namelesson','$choice1','$choice2','$choice3','$choice4','$answer','3')";
    $q = mysqli_query($con, $sql);
    if($q){
        echo"<script>window.alert('เพิ่มข้อมูล สำเร็จ'); window.location='lesson_admin.php'</script>";
    }else{
        echo"<script>window.alert('เพิ่มข้อมูล ไม่สำเร็จ'); window.location='lesson_admin.php'</script>";
    }
?>