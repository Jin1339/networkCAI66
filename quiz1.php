<?php
    session_start();
    include('connect.php');
    $quiz = $_GET['quizId'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบทดสอบบทเรียนที่ 1</title>
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

    <?php
        $UserID = $_SESSION['id'];
        $sql_academicresults = "SELECT * FROM tbl_academicresults WHERE userId = $UserID";
        $q_academicresults = mysqli_query($con , $sql_academicresults);
        $data_academicresults = mysqli_fetch_array($q_academicresults);

        $score_subject3 = $data_academicresults['score_subject3'];
        $score_subject4 = $data_academicresults['score_subject4'];
        $score_subject5 = $data_academicresults['score_subject5'];

        ///เปลี่ยน
        $sql = "SELECT * FROM tbl_rptsubject WHERE tbl_rptsubject.userId ='$UserID' AND tbl_rptsubject.subjectId = 3";
        $q = mysqli_query($con, $sql);
        $data = mysqli_fetch_array($q);
    ?>
    <?php
        $sql_user = "SELECT * FROM tbl_user WHERE userId = $UserID";
        $q_user = mysqli_query($con, $sql_user);
        $data_user = mysqli_fetch_array($q_user);
    ?>
    <div class="card-body">
        <div style="text-align: left;">
            <i class="bi bi-person-square"></i> ผู้ใช้งาน : <?php echo $data_user['name'] ?> <?php echo $data_user['lastname'] ?>
            <br>
            <i class="bi bi-envelope"></i> Email : <?php echo $data_user['email'] ?>
            <br>
            <i class="bi bi-card-checklist"></i> เนื้อหา : อุปกรณ์เชื่อมต่อเครือข่ายคอมพิวเตอร์ (Computer network interface device)
            <!--เปลี่ยน-->
        </div>
        <div class="row g-0" style="text-align: center;">
            <div class="col-md-4" >
                <br>
                <img src="images/cover_page2.gif" class="card-img-top" alt="..." style="width: 100%;">
                <!--เปลี่ยน-->
            </div>
            <div class="col-md-8">
                <div class="card-body" style="text-align: left;">
                    <ul class="list-group list-group-flush">
                        <?php
                        if($score_subject3 != ""){ ?>
                        <!--เปลี่ยน-->
                        <center>
                            <?php
                            if($score_subject3 >= 3){ ///เปลี่ยน ?>
                            <div class="alert alert-success" role="alert" style="width: 100%;">
                                <div>
                                    <h1><i class="bi bi-check-circle-fill"></i></h1>
                                    <h3>Well Done, You <b> Pass </b> Computer networkinterface device.</h3>
                                </div>
                                <div class="alert alert-light" role="alert" style="width: 100%;">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td>
                                                <h4 class="alert-heading" style="text-align: left;">รายงานผลการสอบ!</h4>
                                            </td>
                                            <td style="text-align: right;">
                                                <a href="action_quizedit.php?editquiz=1" class="btn btn-dark"
                                                    role="button">ทำแบบทดสอบใหม่</a> <!-- เปลี่ยน -->
                                                <a href="content.php" class="btn btn-outline-dark"
                                                    role="button">กลับสู่บทเรียน</a>
                                            </td>
                                        </tr>
                                    </table>
                                    <table class="table table-striped table-hover">
                                        <tr>
                                            <td>ข้อสอบทั้งหมด</td>
                                            <td><?php echo $data['number'];?> ข้อ</td> <!-- เปลี่ยน -->
                                        </tr>
                                        <tr>
                                            <td>ตอบถูก</td>
                                            <td><?php echo $data['number_correct'];?> ข้อ</td>
                                        </tr>
                                        <tr>
                                            <td>ตอบไม่ถูก</td>
                                            <td><?php echo $data['number_wrong'];?> ข้อ</td>
                                        </tr>
                                        <tr>
                                            <td>คะแนนที่ได้</td>
                                            <td><?php echo $data['score'];?> คะแนน</td>
                                        </tr>
                                        <tr>
                                        <?php
                                            $sql_percent="SELECT * FROM tbl_rptpercent WHERE tbl_rptpercent.userId = $UserID AND tbl_rptpercent.subjectId = 3";
                                            $q_percent = mysqli_query($con, $sql_percent);
                                            $data_percent = mysqli_fetch_array($q_percent);
                                        ?>
                                            <td>คิดเป็นร้อยละ (%)</td>
                                            <td><?php echo $data_percent['percent_score'];?> %</td>
                                        </tr>
                                        <?php
                                            $score = $data['score'];
                                            if($score>=3){  ///เปลี่ยน
                                        ?>
                                        <tr bgcolor="#228B22">
                                            <td style="text-align: center;">
                                                <font color="#ffffff"><b>สรุป</b></font>
                                            </td>
                                            <td>
                                                <b>
                                                    <font color="#ffffff"><?php echo $data['adm_results']; ?></font>
                                                </b>
                                            </td>
                                        </tr>
                                        <?php
                                            }else{
                                        ?>
                                        <tr bgcolor="#FF0000">
                                            <td style="text-align: center;">
                                                <font color="#ffffff"><b>สรุป</b></font>
                                            </td>
                                            <td>
                                                <b>
                                                    <font color="#ffffff"><?php echo $data['adm_results']; ?></font>
                                                </b>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <?php                       
                                    }
                                    ?>
                            </div>                            
                            <?php
                                }else{ ?>
                            <div class="alert alert-danger" role="alert" style="width: 100%;">
                                <div>
                                    <h1><i class="bi bi-exclamation-triangle-fill"></i></h1>
                                    <h3>I'm sorry, You <b> Failed </b> Computer networkinterface device.</h3>
                                </div>
                                <div class="alert alert-light" role="alert" style="width: 100%;">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td>
                                                <h4 class="alert-heading" style="text-align: left;">รายงานผลการสอบ!</h4>
                                            </td>
                                            <td style="text-align: right;">
                                                <a href="action_quizedit.php?editquiz=1" class="btn btn-dark"
                                                    role="button">ทำแบบทดสอบใหม่</a> <!-- เปลี่ยน -->
                                                <a href="content.php" class="btn btn-outline-dark"
                                                    role="button">กลับสู่บทเรียน</a>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <table class="table table-striped table-hover">
                                        <tr>
                                            <td>ข้อสอบทั้งหมด</td>
                                            <td><?php echo $data['number'];?> ข้อ</td> <!-- เปลี่ยน -->
                                        </tr>
                                        <tr>
                                            <td>ตอบถูก</td>
                                            <td><?php echo $data['number_correct'];?> ข้อ</td>
                                        </tr>
                                        <tr>
                                            <td>ตอบไม่ถูก</td>
                                            <td><?php echo $data['number_wrong'];?> ข้อ</td>
                                        </tr>
                                        <tr>
                                            <td>คะแนนที่ได้</td>
                                            <td><?php echo $data['score'];?> คะแนน</td>
                                        </tr>
                                        <tr>
                                        <?php
                                            $sql_percent="SELECT * FROM tbl_rptpercent WHERE tbl_rptpercent.userId = $UserID AND tbl_rptpercent.subjectId = 3";
                                            $q_percent = mysqli_query($con, $sql_percent);
                                            $data_percent = mysqli_fetch_array($q_percent);
                                        ?>
                                            <td>คิดเป็นร้อยละ (%)</td>
                                            <td><?php echo $data_percent['percent_score'];?> %</td>
                                        </tr>
                                        <?php
                                            $score = $data['score'];
                                            if($score>=3){  ///เปลี่ยน
                                        ?>
                                        <tr bgcolor="#228B22">
                                            <td style="text-align: center;">
                                                <font color="#ffffff"><b>สรุป</b></font>
                                            </td>
                                            <td>
                                                <b>
                                                    <font color="#ffffff"><?php echo $data['adm_results']; ?></font>
                                                </b>
                                            </td>
                                        </tr>
                                        <?php
                                            }else{
                                        ?>
                                        <tr bgcolor="#FF0000">
                                            <td style="text-align: center;">
                                                <font color="#ffffff"><b>สรุป</b></font>
                                            </td>
                                            <td>
                                                <b>
                                                    <font color="#ffffff"><?php echo $data['adm_results']; ?></font>
                                                </b>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <?php                       
                                    }
                                ?>
                            </div>
                            <?php
                                }
                            ?>
                        </center>


                        <?php
                            }else{ ?>
                        <li class="list-group-item">
                            <h3 class="card-title" style="text-align: center;"><b>แบบทดสอบท้ายบท</b></h3>
                        </li>
                        <?php
                                    $sql_quiz1 = "SELECT * FROM tbl_lesson1 WHERE subjectId = 3";   ///เปลี่ยน
                                    $q_quiz1 = mysqli_query($con, $sql_quiz1);
                                    if(mysqli_num_rows($q_quiz1)>0){
                                        while($row_quiz1=mysqli_fetch_array($q_quiz1)){?>
                        <li class="list-group-item">
                            <a>
                                <?php echo $row_quiz1['Id']; ?>. <?php echo $row_quiz1['question']; ?>
                            </a>
                            <br>
                            <table style="width: 100%;">
                                <form action="action_quiz.php" method="post">
                                    <tr style="width: 50%; text-align: left;">
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="<?php echo $row_quiz1['Id']; ?>" id="flexRadioDefault1"
                                                    value="1" required> 
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    A. <img src="images/<?php echo $row_quiz1['choice_A']; ?>" alt=""
                                                        width="120px">
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="<?php echo $row_quiz1['Id']; ?>" id="flexRadioDefault2"
                                                    value="2" required>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    B. <img src="images/<?php echo $row_quiz1['choice_B']; ?>" alt=""
                                                        width="120px">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <br>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="<?php echo $row_quiz1['Id']; ?>" id="flexRadioDefault1"
                                                    value="3" required>
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    C. <img src="images/<?php echo $row_quiz1['choice_C']; ?>" alt=""
                                                        width="120px">
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="<?php echo $row_quiz1['Id']; ?>" id="flexRadioDefault2"
                                                    value="4" required>
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    D. <img src="images/<?php echo $row_quiz1['choice_D']; ?>" alt=""
                                                        width="120px">
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                            </table>
                            <?php
                                        } ?>
                            <br>
                            <div style="text-align: right;">
                                <input type="hidden" name="quiz" value="1"> <!-- เปลี่ยน -->
                                <button type="submit" class="btn btn-success gap-2 col-3 mx-auto">บันทึกคำตอบ</button>
                            </div>
                            </form>
                        </li>
                        <?php
                            }else{
                                echo"No Data";
    
                            }
                        ?>
                    </ul>
                    <?php     
                        }
                            
                    ?>
                </div>
            </div>
        </div>
    </div>


</body>

</html>