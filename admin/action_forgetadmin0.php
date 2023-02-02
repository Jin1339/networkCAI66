<?php
    session_start();
    include('../connect.php');
    $cemail = $_POST['email'];
    $forget_pwd = md5($_POST['forget_pwd']);

    $sql = "SELECT * FROM tbl_user WHERE email='$cemail'";
    $q = mysqli_query($con, $sql);

    if(mysqli_num_rows($q)==0){
        echo "<script>window.alert('แก้ไขรหัสผ่านใหม่ ไม่สำเร็จ!'); window.location='user_admin.php';</script>";
    }else{
        $row=mysqli_fetch_array($q);
        $_SESSION['id']=$row['userId'];
        $_SESSION['email'] = $row['email'];
        $cid = $_SESSION['id'];

        $sql_forget = "UPDATE `tbl_user` SET `pwd`='$forget_pwd' WHERE `userId`=$cid";
        $q_forget = mysqli_query($con, $sql_forget);
        echo"<script> window.alert('แก้ไขรหัสผ่านใหม่ สำเร็จ!'); window.location='user_admin.php' </script>";
    }

?>