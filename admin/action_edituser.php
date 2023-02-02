<?php
    include('../connect.php');
    session_start();
    $subid = $_POST['subidd'];
    $namelesson = $_POST['namelesson'];
    $doment1 = $_POST['doment1'];
    $doment2 = $_POST['doment2'];
    $numexam = $_POST['numexam'];
    $srcoe = $_POST['sroce'];
    $passcriteria = $_POST['passcriteria'];
    $vedio = $_POST['vedio'];

    $cpic = $_FILES['subPic']; //รับค่ารูปภาพ
    $tmp = $cpic['tmp_name']; //tmp ของรูปภาพ
    $img_name = $cpic['name']; //ชื่อไฟล์รูปภาพ
    $folder = "images/"; //ที่อยู่ไฟล์รูปภาพ



    if($img_name!=""){
        echo $sqlup = "UPDATE `tbl_subject` SET `pic_subject` = '$img_name', `subject` = '$namelesson', `documents1` = '$doment1 ', `documents2` = '$doment2', `video` = 'NULL', `num_exam` = '$numexam', `full_score` = '$srcoe', `pass_criteria` = '$passcriteria' WHERE `tbl_subject`.`subjectId` = $subid";
        
        move_uploaded_file($tmp, $folder.$img_name);
        
    }else{
        $sqlup = "UPDATE `tbl_subject` SET `subject` = '$namelesson', `documents1` = '$doment1 ', `documents2` = '$doment2', `num_exam` = '$numexam', `full_score` = '$srcoe', `pass_criteria` = '$passcriteria' WHERE `tbl_subject`.`subjectId` = $subid";
    }
    $q=mysqli_query($con , $sqlup);
    if(!$q){
        echo"<script>window.alert('UPDATE ไม่ข้อมูลสำเร็จ!'); window.location='lesson_admin.php'</script>";
    }
        echo"<script>window.alert('UPDATE ข้อมูลสำเร็จ!'); window.location='lesson_admin.php'</script>";
?>