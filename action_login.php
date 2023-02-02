<?php
    include('connect.php');
    session_start();

    $cemail = $_POST['email'];
    $cpassword = md5($_POST['pwd']);

    $sql = "SELECT * FROM tbl_user WHERE email='$cemail' AND pwd='$cpassword' ";
    $q = mysqli_query($con, $sql);

    if(mysqli_num_rows($q)==1){
        $row=mysqli_fetch_array($q);
        $_SESSION['id']=$row['userId'];
        $_SESSION['fName'] = $row['name'];
        $_SESSION['lName'] = $row['lastname'];
        $_SESSION['userpic'] = $row['userpic'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['id_statususer'] = $row['id_statususer'];

        if($_SESSION['id_statususer']!=2){
            echo"<script> window.alert('LOGIN สำเร็จ!'); window.location='index.php' </script>";
        }else{
            echo "<script> window.alert('LOGIN สำเร็จ!'); window.location='admin/index_admin.php' </script>";
        }
    }
    else{
        echo "<script>window.alert('ไม่สำเร็จ!'); window.location='index.php';</script>";
    }
?>