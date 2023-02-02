<?php
    session_start();
    include('../connect.php');
    date_default_timezone_set('Asia/Bangkok');
    $question_Id = $_POST['question_Id'];
    $comment_Id = $_POST['comment_Id'];
    $name = $_POST['name'];
    $detail = $_POST['detail'];
    $nameuser = $_POST['nameuser'];
    $dateTime = date('Y-m-d h:i:s');

    $sql = "UPDATE `tbl_comment` SET `username_comment` = '$nameuser', `detail_comment` = '$detail', `time_comment` = '$dateTime' WHERE comment_Id = $comment_Id AND question_Id =  $question_Id";
    $q = mysqli_query($con, $sql);

    if($q){
        echo "<script type='text/javascript'>";
        echo "alert('แก้ไขคำถาม สำเร็จ!');";
        echo "window.location = 'forum_admin.php'; ";
        echo "</script>";
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('แก้ไขคำถาม ไม่ข้อมูลสำเร็จ! รบกวนตรวจสอบข้อมูลค่ะ');";
        echo "window.location = 'forum_admin.php'; ";
        echo "</script>";
    }
    mysqli_close($con);
?>