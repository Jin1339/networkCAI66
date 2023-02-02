<?php
session_start();
include('connect.php');
    $UserID = $_SESSION['id'];
    $sql_academicresults = "SELECT * FROM tbl_academicresults WHERE userId = $UserID";
    $q_academicresults = mysqli_query($con , $sql_academicresults);
    $data_academicresults = mysqli_fetch_array($q_academicresults);

    $score_subject3 = $data_academicresults['score_subject3'];
    $score_subject4 = $data_academicresults['score_subject4'];
    $score_subject5 = $data_academicresults['score_subject5'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>บทเรียนคอมพิวเตอร์ช่วยสอน</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
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
    <?php include('navuser_ontop.php'); ?>
    <br>
    <br>
    <br>
    <br>
    <center>
        <h3>"บทเรียนคอมพิวเตอร์ช่วยสอน เรื่อง อุปกรณ์ระบบเครือข่าย"</h3>
        <br>
        <!-- เรื่อง อุปกรณ์เชื่อมต่อเครือข่ายคอมพิวเตอร์ (Computer network interface device) -->
        <div class="card text-center" style="width: 90%;">
            <div class="card-header bg-dark">
                <ul class="nav nav-pills card-header-pills">
                    <font color="#ffffff"><b>เรื่อง อุปกรณ์เชื่อมต่อเครือข่ายคอมพิวเตอร์ (Computer network interface
                            device) </b></font>
                </ul>
            </div>
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="btn btn-outline-dark" href="content.php">content</a>
                    </li>
                    &nbsp;
                    &nbsp;
                    <li class="nav-item">
                        <a class="btn btn-outline-dark" href="quiz_content.php?quizId=1">Quiz</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/cover_page1.gif" class="card-img-top" alt="..." style="width: 80%;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="text-align: left;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h5 class="card-title">เอกสารประกอบการศึกษา</h5>
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-file-earmark-pdf"></i>
                                    <a target="popup"
                                        onclick="window.open('document/lesson1.pdf','lesson1.pdf','width=800,height=600')">
                                        <font color="#000000">Open File PDF Computer network interface device</font>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-file-earmark-slides"></i>
                                    <a target="popup"
                                        onclick="window.open('https://www.canva.com/design/DAFTnuINF-g/6u_K_Ko4XszUHm76P4ev8w/view?utm_content=DAFTnuINF-g&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink','popup','width=600,height=500');">
                                        <font color="#000000">Open Canva Design Computer network interface device</font>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-file-earmark-play"></i>
                                    <a target="popup"
                                        onclick="window.open('images/vedio/vedio_2.mp4','vedio_2.mp4','width=800,height=600')">
                                        <font color="#000000">Open video Computer network interface device</font>
                                    </a>
                                </li>
                                <li class="list-group-item"> </li>
                            </ul>
                            <p class="card-text"><small class="text-muted">กรุณาทำแบบทดสอบที่เมนู Quiz
                                ก่อนเข้าสู่บทเรียนถัดไป</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <?php
        if($score_subject3!=""){ ?>
        <!-- เรื่อง อุปกรณ์รักษาความปลอดภัย	(Security device) -->
        <div class="card text-center" style="width: 90%;">
            <div class="card-header bg-danger">
                <ul class="nav nav-pills card-header-pills">
                    <font color="#ffffff"><b>เรื่อง อุปกรณ์รักษาความปลอดภัย (Security device)</b></font>
                </ul>
            </div>
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="btn btn-outline-danger" href="content.php">content</a>
                    </li>
                    &nbsp;
                    &nbsp;
                    <li class="nav-item">
                        <a class="btn btn-outline-danger" href="quiz_content.php?quizId=2">Quiz</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/cover_page3.gif" class="card-img-top" alt="..." style="width: 80%;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="text-align: left;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h5 class="card-title">เอกสารประกอบการศึกษา</h5>
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-file-earmark-pdf"></i>
                                    <a target="popup"
                                        onclick="window.open('document/lesson2.pdf','lesson2.pdf','width=800,height=600')">
                                        <font color="#000000">Open File PDF Security device</font>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-file-earmark-slides"></i>
                                    <a target="popup"
                                        onclick="window.open('https://www.canva.com/design/DAFTIsGV0qo/i1Hr6Yf4bsQ-o0nrPNn40w/view?utm_content=DAFTIsGV0qo&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink','popup','width=600,height=500');">
                                        <font color="#000000">Open Canva Design Security device</font>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-file-earmark-play"></i>
                                    <a target="popup"
                                        onclick="window.open('images/vedio/vedio_3.mp4','vedio_3.mp4','width=800,height=600')">
                                        <font color="#000000">Open video Security device</font>
                                    </a>
                                </li>
                            </ul>
                            <p class="card-text"><small class="text-muted">กรุณาทำแบบทดสอบที่เมนู Quiz
                                    ก่อนเข้าสู่บทเรียนถัดไป</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <?php
            }else{ ?>
        <!-- เรื่อง อุปกรณ์ไร้สาย  (Wireless device) -->
        <div class="card text-center" style="width: 90%;">
            <div class="card-header bg-danger">
                <ul class="nav nav-pills card-header-pills">
                    <font color="#ffffff"><b>เรื่อง อุปกรณ์ไร้สาย (Wireless device)</b></font>
                </ul>
            </div>
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="btn btn-outline-danger">content</a>
                    </li>
                    &nbsp;
                    &nbsp;
                    <li class="nav-item">
                        <a class="btn btn-outline-danger">Quiz</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/cover_page3.gif" class="card-img-top" alt="..." style="width: 80%;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="text-align: left;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h5 class="card-title">เอกสารประกอบการศึกษา</h5>
                                    <a>
                                        <font color="red"><i class="bi bi-exclamation-triangle-fill"></i>
                                            กรุณาทำแบบทดสอบของบทเรียนก่อนหน้า <i
                                                class="bi bi-exclamation-triangle-fill"></i></font>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-file-earmark-pdf"></i>
                                    <a>
                                        <font color="#000000">Open File PDF Security device</font>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-file-earmark-slides"></i>
                                    <a>
                                        <font color="#000000">Open Canva Design Security device</font>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-file-earmark-play"></i>
                                    <a>
                                        <font color="#000000">Open video Security device</font>
                                    </a>
                                </li>
                            </ul>
                            <p class="card-text"><small class="text-muted">กรุณาทำแบบทดสอบที่เมนู Quiz
                                    ก่อนเข้าสู่บทเรียนถัดไป</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <?php            
            }
        ?>
        <?php
            if($score_subject4!=""){ ?>
        <!-- เรื่อง อุปกรณ์ไร้สาย  (Wireless device) -->
        <div class="card text-center" style="width: 90%;">
            <div class="card-header bg-info">
                <ul class="nav nav-pills card-header-pills">
                    <font color="#ffffff"><b>เรื่อง อุปกรณ์ไร้สาย (Wireless device)</b></font>
                </ul>
            </div>
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="btn btn-outline-info" href="content.php">content</a>
                    </li>
                    &nbsp;
                    &nbsp;
                    <li class="nav-item">
                        <a class="btn btn-outline-info" href="quiz_content.php?quizId=3">Quiz</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/cover_page5.gif" class="card-img-top" alt="..." style="width: 80%;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="text-align: left;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h5 class="card-title">เอกสารประกอบการศึกษา</h5>
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-file-earmark-pdf"></i>
                                    <a target="popup"
                                        onclick="window.open('document/lesson3.pdf','lesson3.pdf','width=800,height=600')">
                                        <font color="#000000">Open File PDF Wireless device</font>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-file-earmark-slides"></i>
                                    <a target="popup"
                                        onclick="window.open('https://www.canva.com/design/DAFTIg9vgx0/mExh7BycYq75Hvd0Idybpw/view?utm_content=DAFTIg9vgx0&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink','popup','width=600,height=500');">
                                        <font color="#000000">Open Canva Design Wireless device</font>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-file-earmark-play"></i>
                                    <a target="popup"
                                        onclick="window.open('images/vedio/vedio_4.mp4','vedio_4.mp4','width=800,height=600')">
                                        <font color="#000000">Open video Wireless device</font>
                                    </a>
                                </li>
                                <li class="list-group-item"> </li>
                            </ul>
                            <p class="card-text"><small class="text-muted">กรุณาทำแบบทดสอบที่เมนู Quiz
                                    ก่อนเข้าสู่บทเรียนถัดไป</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }else{ ?>
            <!-- เรื่อง อุปกรณ์ไร้สาย  (Wireless device) -->
            <div class="card text-center" style="width: 90%;">
                <div class="card-header bg-info">
                    <ul class="nav nav-pills card-header-pills">
                        <font color="#ffffff"><b>เรื่อง อุปกรณ์ไร้สาย (Wireless device)</b></font>
                    </ul>
                </div>
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                        <li class="nav-item">
                            <a class="btn btn-outline-info">content</a>
                        </li>
                        &nbsp;
                        &nbsp;
                        <li class="nav-item">
                            <a class="btn btn-outline-info">Quiz</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/cover_page5.gif" class="card-img-top" alt="..." style="width: 80%;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body" style="text-align: left;">
                                <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h5 class="card-title">เอกสารประกอบการศึกษา</h5>
                                    <a>
                                        <font color="red"><i class="bi bi-exclamation-triangle-fill"></i>
                                            กรุณาทำแบบทดสอบของบทเรียนก่อนหน้า <i
                                                class="bi bi-exclamation-triangle-fill"></i></font>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-file-earmark-pdf"></i>
                                    <a>
                                        <font color="#000000">Open File PDF Wireless device</font>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-file-earmark-slides"></i>
                                    <a>
                                        <font color="#000000">Open Canva Design Wireless device</font>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-file-earmark-play"></i>
                                    <a>
                                        <font color="#000000">Open video Wireless device</font>
                                    </a>
                                </li>
                                </ul>
                                <p class="card-text"><small class="text-muted">กรุณาทำแบบทดสอบที่เมนู Quiz
                                        ก่อนเข้าสู่บทเรียนถัดไป</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
    <br>
    <?php
        if($score_subject5 != ""){ ?>
        <a href="final_test.php" class="btn btn-success btn-lg" role="button">แบบทดสอบหลังเรียน</a>
    <?php
        }else{ ?>
        <button type="button" class="btn btn-success btn-lg" disabled>แบบทดสอบหลังเรียน</button>
    <?php
        }
    ?> 
    <br>
    </center>
</body>
<?php include('nav_footter.php'); ?>

</html>