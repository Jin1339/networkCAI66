<?php
    session_start();
    include('../connect.php');
    date_default_timezone_set('Asia/Bangkok');
    $userId = $_SESSION['id'];
    $sqlshow = "SELECT * FROM tbl_user WHERE tbl_user.userId = $userId";
    $qshow = mysqli_query($con, $sqlshow);
    $data = mysqli_fetch_array($qshow);
    $nameuser = $data['name'] . " ". $data['lastname'];

    $detail = $_POST['detail'];
    $QID = $_POST['Q_id'];
    $dateTime = date('Y-m-d h:i:s');

    $sql_addcom = "INSERT INTO `tbl_comment`(`comment_Id`, `question_Id`, `username_comment`, `detail_comment`, `time_comment`) VALUES ('','$QID','$nameuser','$detail','$dateTime')";
    $q_addcom = mysqli_query($con, $sql_addcom);

    if($q_addcom){
        echo "<script type='text/javascript'>";
        echo "alert('ตอบกลับความคิดเห็น สำเร็จ!');";
        echo "window.location = 'forum_admin.php'; ";
        echo "</script>";
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('ตอบกลับความคิดเห็น ไม่ข้อมูลสำเร็จ! รบกวนตรวจสอบข้อมูลค่ะ');";
        echo "window.location = 'forum_admin.php'; ";
        echo "</script>";
    }
    mysqli_close($con);
?>