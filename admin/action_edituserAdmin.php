<?php
    include('../connect.php');
    $cid = $_POST['id'];
    $cfname = $_POST['fName'];
    $clname = $_POST['lName'];
    $ctel = $_POST['tel'];
    $cemail = $_POST['email'];
    $educate = $_POST['edu'];

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

    $cpic = $_FILES['userPic']; //รับค่ารูปภาพ
    $tmp = $cpic['tmp_name']; //tmp ของรูปภาพ
    $img_name = $cpic['name']; //ชื่อไฟล์รูปภาพ
    $folder = "images/"; //ที่อยู่ไฟล์รูปภาพ



    if($img_name!=""){
        $sql = "UPDATE tbl_user SET name='$cfname', lastname='$clname', educate='$edugen', email='$cemail', tel='$ctel', userpic='$img_name' WHERE userId='$cid'";
        
        move_uploaded_file($tmp, $folder.$img_name);
        
    }else{
        $sql = "UPDATE tbl_user SET name='$cfname', lastname='$clname', educate='$edugen', email='$cemail', tel='$ctel' WHERE userId='$cid'";
    }
    $q=mysqli_query($con , $sql);
    if(!$q){
        echo"<script>window.alert('UPDATE ไม่ข้อมูลสำเร็จ!'); window.location='user_admin.php'</script>";
    }
        echo"<script>window.alert('UPDATE ข้อมูลสำเร็จ!'); window.location='user_admin.php'</script>";
?>