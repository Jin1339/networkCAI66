<?php
    session_start();
    include('../connect.php');
    date_default_timezone_set('Asia/Bangkok');
    $userId = $_SESSION['id'];
    $sqlshow = "SELECT * FROM tbl_user WHERE tbl_user.userId = $userId";
    $qshow = mysqli_query($con, $sqlshow);
    $data = mysqli_fetch_array($qshow);
    $nameuser = $data['name'] . " ". $data['lastname'];

    $name = $_POST['name'];
    $detail = $_POST['detail'];
    $dateTime = date('Y-m-d h:i:s');

    $sql = "INSERT INTO `tbl_question`(`question_Id`, `topic_title`, `user_name`, `detail_question`, `time_question`) VALUES ('00','$name','$nameuser','$detail','$dateTime')";
    $q = mysqli_query($con, $sql);

    if($q){
        echo "<script type='text/javascript'>";
        echo "alert('สร้างคำถาม สำเร็จ!');";
        echo "window.location = 'forum_admin.php'; ";
        echo "</script>";
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('สร้างคำถาม ไม่ข้อมูลสำเร็จ! รบกวนตรวจสอบข้อมูลค่ะ');";
        echo "window.location = 'forum_admin.php'; ";
        echo "</script>";
    }
    mysqli_close($con);
?>