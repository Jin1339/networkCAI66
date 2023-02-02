<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>หน้าหลัก</title>
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
    <div class="d-flex">
        <div class="flex-grow-1 ms-3">
            <h3 class="mt-0">บทเรียนคอมพิวเตอร์ช่วยสอน เรื่อง อุปกรณ์ระบบเครือข่าย</h3>
            <h5>" The Developed of Computer Assisted Instruction (CAI) lesson on Networking Device "</h5>
        </div>
    </div>
        <br>
    <video width="60%" height="60%" controls="controls" poster="images/vedio1.jpg">
            <source src="images/vedio/vedio_1.mp4">
        </video>

    <br>
    <br>
    <table class="table table-striped table-inverse table-responsive" style="width: 70%;">
        <thead class="thead-inverse">
            <tr>
                <th scope="row">
                    <h2>
                        <font color='#000000'><b>Topics</b></font>
                    </h2>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <center>
                        <div class="card" style="width: 18rem; text-align: left;">
                            <img src="images/button1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">คำแนะนำการใช้งาน</h5>
                                <p class="card-text">
                                    คำแนะนำการใช้งาน ในการใช้งานบทเรียนคอมพิวเตอร์ช่วยสอน เรื่อง อุปกรณ์ระบบเครือข่าย
                                    <br>
                                    <br>
                                    <br>
                                </p>
                                <a href="Ins_foruse.php" class="btn btn-outline-warning">
                                start
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                                </a>
                            </div>
                        </div>
                    </center>
                </td>
                <td>
                    <center>
                        <div class="card" style="width: 18rem; text-align: left;">
                            <img src="images/button2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">จุดประสงค์การเรียนรู้</h5>
                                <p class="card-text">
                                    จุดประสงค์การเรียนรู้ ของรายวิชาบทเรียนคอมพิวเตอร์ช่วยสอน เรื่อง อุปกรณ์ระบบเครือข่าย
                                    <br>
                                    <br>
                                    <br>
                                </p>
                                <a href="learning_objectives.php" class="btn btn-outline-success">
                                start
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                                </a>
                            </div>
                        </div>
                    </center>
                </td>
                <td>
                    <center>
                        <div class="card" style="width: 18rem; text-align: left;">
                            <img src="images/button3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">บทเรียน</h5>
                                <p class="card-text">
                                    บทเรียนคอมพิวเตอร์ช่วยสอน เรื่อง อุปกรณ์ระบบเครือข่าย มีโครงสร้างบทเรียนโดยมี เเบบทดสอบก่อนเรียน บทเรียน แบบฝึกหัดเเต่ละรายวิชา เเบบทดสอบหลังเรียน
                                </p>
                                <a href="pretest.php" class="btn btn-outline-primary">
                                start
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                                </a>
                            </div>
                        </div>
                        <center>
                </td>
            </tr>
        </tbody>
    </table>
    </center>
    <br>

</body>
<?php include('nav_footter.php'); ?>

</html>