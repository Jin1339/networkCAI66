<?php
    include('../connect.php');
    error_reporting(E_ERROR | E_PARSE);
    $cfname = $_POST['fName'];
    $clname = $_POST['lName'];
    $ctel = $_POST['tel'];
    $cemail = $_POST['email'];
    $cpassword = md5($_POST['password']);
    $csex = $_POST['sex'];
    $educate = $_POST['edu'];
    $idstatus = 2;

    $cpic = $_FILES['userPic']; //รับค่ารูปภาพ
    $tmp = $cpic['tmp_name']; //tmp ของรูปภาพ
    $img_name = $cpic['name']; //ชื่อไฟล์รูปภาพ
    $folder = "../images/"; //ที่อยู่ไฟล์รูปภาพ

    ##เพศ
    if($csex=="m"){
        $sexgen = "ชาย";
    }
    else{$sexgen = "หญิง";}

    ##ระดับการศึกษา
    if($educate=="1"){
        $edugen="ประถมศึกษา";
    }
    else if($educate=="2"){
        $edugen="มัธยมศึกษา";
    }
    else if($educate=="3"){
        $edugen="ประกาศนียบัตรวิชาชีพ";
    }
    else if($educate=="4"){
        $edugen="ประกาศนียบัตรวิชาชีพชั้นสูง";
    }
    else{$edugen="ปริญญาตรี";}


    $sql = "INSERT INTO tbl_user(userId , name, lastname, sex, educate, email, tel, pwd, userpic, id_statususer) VALUES ('', '$cfname', '$clname', '$sexgen', '$edugen', '$cemail', '$ctel', '$cpassword', '$img_name', '$idstatus')";
    $q = mysqli_query($con , $sql);

    move_uploaded_file($tmp, $folder.$img_name);
    
    
    if($q){
        echo "<script type='text/javascript'>";
        echo "alert('เพิ่มข้อมูลสมาชิก สำเร็จ!');";
        echo "window.location = 'user_admin.php'; ";
        echo "</script>";
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('เพิ่มข้อมูลสมาชิก ไม่ข้อมูลสำเร็จ!');";
        echo "window.location = 'user_admin.php'; ";
        echo "</script>";
    }
            
?>