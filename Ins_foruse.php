<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำแนะนำการใช้งาน</title>
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
    <?php include('navuser_ontop.php'); ?>
    <br>
    <br>
    <br>
    <br>
    <center>
        <div class="shadow-lg p-3 mb-5 bg-body rounded bg-danger" role="alert" style="width: 59%;">
            <h2><strong><font color="#B22222">คำแนะนำการใช้งาน</font></strong></h2>
            <br>
            <div align="left">
                <p> &nbsp; &nbsp; &nbsp; &nbsp; 1. สมัครสมาชิกก่อนเพื่อสร้างบัญชีในการเข้าสู่ระบบ &nbsp; &nbsp; <a href="login.php" class="btn btn-outline-danger" role="button">LOGIN</a></p> 
                <p> &nbsp; &nbsp; &nbsp; &nbsp; 2. กรณีที่เคยสมัครสมาชิกแล้วสมาชิก Login เข้าสูระบบได้เลยค่ะ &nbsp; &nbsp; <a href="register.php" class="btn btn-warning" role="button">Sign-UP</a></p> 
                <p> &nbsp; &nbsp; &nbsp; &nbsp; 3. เริ่มการเข้าสู่บทเรียนได้เลยค่ะ &nbsp; &nbsp; <a class="btn btn-danger" role="button"><i class="bi bi-clipboard2-pulse-fill"></i> บทเรียน</a></p> 
                <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 3.1 เมื่อเข้าสู่บทเรียนแล้ว ให้ทำแบบทดสอบก่อนเรีอน ก่อนเข้าสู่บทเรียนเนื้อหา</p> 
                <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 3.2 ศึกษาเนื้อหาบทเรียนเเต่ละหัวข้อ มีทั้งหมด 3 หัวข้อ ต้องทำแบบทดสอบท้ายก่อน ถึงจะสามารถไปสู่หัวข้อถัดไปได้ค่ะ</p>
                <p> &nbsp; &nbsp; &nbsp; &nbsp; 4. เมื่อศึกษาเนื้อหาทุกหัวข้อและทำแบบทดสอบท้ายหัวข้อแล้ว ให้ทำแบบทดสอบหลังเรียน เพื่อประเมินผลการเรียนของตนเอง</p>
                <p> &nbsp; &nbsp; &nbsp; &nbsp; 5. หลังทำแบบทดสอบหลังเรีอน แล้วสามารถดูผลการประเมินการศึกษาของตนเองได้ที่ &nbsp; &nbsp; <a class="btn btn-outline-danger" role="button">รายงานผลการเรียน</a>  </p>
                <p> &nbsp; &nbsp; &nbsp; &nbsp; 6. กรณีต้องการดูเฉลยข้อสอบในเเต่ละหัวข้อสามารถดูได้ที่ปุ่มนี้ค่ะ &nbsp; &nbsp; <a class="btn btn-dark" role="button">เฉลยข้อสอบ</a> </p>
                <p> &nbsp; &nbsp; &nbsp; &nbsp; 7. กรณีต้องการแก้ไขประวัติส่วนตัวของผู้ใช้งาน หรือ ตรวจสอบประวัติการศึกษาบทเรียนสามารถคลิกที่ชื่อของผู้เรียนได้เลยค่ะ</p>

            </div>
            <div align="right">
                <img src="images/cartoon1.gif" width="18%">
            </div>
            <table style="width: 100%;">
                <tr>
                    <td>
                        <a href="index.php" class="btn btn-outline-dark"><i class="bi bi-chevron-double-left"></i> BACK</a>
                    </td>
                    <td style="text-align: right;">
                        <a href="learning_objectives.php" class="btn btn-outline-dark">NEXT <i class="bi bi-chevron-double-right"></i></a>
                    </td>
                </tr>
            </table>

        </div>
    </center>
</body>
<?php include('nav_footter.php'); ?>
</html>