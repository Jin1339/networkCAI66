<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บทเรียนคอมพิวเตอร์ช่วยสอน</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Chakra+Petch">
    <style>
        body {
            font-family: Chakra Petch;
        }
    </style>
</head>

<body>
<?php error_reporting(E_ERROR | E_PARSE); ?>
    <?php
            session_start();
            include('connect.php');
            $id_user = $_SESSION['id'];
            if(!$_SESSION['email']){ ?>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <center>
                <div class="lert alert-danger" style="width: 50%;">
                    <h5 class="card-header"><i class="bi bi-exclamation-triangle-fill"></i> Found an error!! <i class="bi bi-exclamation-triangle-fill"></i></h5>
                    <div class="card-body">
                        <h5 class="card-title">Please LOGIN to access</h5>
                        <p class="card-text">
                            <p>The computer-assisted teaching system about networking equipment.</p>Do you want to continue or not?</p>
                        <a href="index.php" class="btn btn-danger">Close</a>
                        <a href="login.php" class="btn btn-light">Go LogIn</a>
                    </div>
                </div>
            </center>
            <?php
            }else{
                $sql = "SELECT * FROM tbl_answermyuser WHERE tbl_answermyuser.id_user = $id_user AND subjectId = 2";
                $q = mysqli_query($con, $sql);
                if(mysqli_num_rows($q)){?>
                

                <?php
                echo "<script>window.location='final_academic.php';</script>";
                ?>
                
                
                <?php
                }else{ ?>
                    <?php include('navuser_ontop.php'); ?>
                <br>
                <br>
                <br>
                <br>                
                <center>
                    <h4>แบบทดสอบหลังเรียน เรื่อง อุปกรณ์ระบบเครือข่าย</h4>
                </center>
                <center>
                    <div class="alert alert-danger" role="alert" style="width: 70%;">
                            คุณมีเวลา 30 นาที
                            <br> วิธีการดำเนินการ : จงเลือกข้อที่ถูกต้องที่สุด 
                            <br> จำนวนข้อสอบ : 15 ข้อ
                            <br> คะแนน : 15 คะแนน
                            <br>
                            <br>
                            <img src="images/lesson1.jpg" width="50%" alt="" srcset="">
                            <br>
                            <br>
                            <a href="final_pretestdetail.php" class="btn btn-danger" role="button">
                                เริ่มทำแบบทดสอบ
                            </a>
                    </div>
                </center>
                <?php include('nav_footter.php'); ?>
                <?php
                }
                ?>
            <?php
            }
            ?>

</body>
</html>