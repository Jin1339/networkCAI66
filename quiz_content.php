<?php
    include('connect.php');
    $quizId = $_GET['quizId'];
    $sqlsubject = "SELECT * FROM tbl_subject WHERE subjectId ='$quizId'";
    $qsubject = mysqli_query($con , $sqlsubject);
    $datasubject = mysqli_fetch_array($qsubject);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบทดสอบท้ายบท</title>
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
        <?php
            if($quizId==1){ ?>
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
            <div>
                <?php
                    include('quiz1.php');
                ?>
            </div>
        </div>
        <?php
            }else if($quizId==2){ ?>
        <!-- เรื่อง อุปกรณ์เชื่อมต่อเครือข่ายคอมพิวเตอร์ (Computer network interface device) -->
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
            <div>
                <?php
                    include('quiz2.php');
                ?>
            </div>
        </div>
        <?php
            }else if($quizId==3){ ?>
        <!-- เรื่อง อุปกรณ์เชื่อมต่อเครือข่ายคอมพิวเตอร์ (Computer network interface device) -->
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
            <div>
                <?php
                    include('quiz3.php');
                ?>
            </div>
        </div>

        <?php
            }else{?>
        <div class="alert alert-warning" role="alert">
            <strong><i class="bi bi-exclamation-diamond-fill"></i> Warning</strong>
            กรุณาเลือกบทเรียนที่ต้องการศึกษา
            <a href="content.php">Click</a>
        </div>
        <?php    
            }
            ?>
        </div>
</body>


</html>