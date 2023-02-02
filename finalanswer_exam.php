<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>เฉลยข้อสอบแบบทดสอบหลังเรียน</title>
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

        <br>
        <table style="width: 80%;">
            <tr>
                 <td> <!-- แก้ไขไปหน้า หน้าแสดงคะแนน -->
                    <a href="final_academic.php" class="btn btn-outline-dark"><i class="bi bi-chevron-double-left"></i>
                        BACK</a>
                </td>
                <td style="text-align: center;">
                    <h4>
                        <i class="bi bi-megaphone-fill"></i>
                        เฉลยข้อสอบแบบทดสอบหลังเรียน <!-- เฉลยข้อสอบแบบทดสอบก่อนเรียน บทเรียนที่ 1 เรื่อง .... -->
                    </h4>
                </td>
                <td style="text-align: right;"> <!-- ไปหน้า content.php -->
                    <a href="index.php" class="btn btn-outline-dark">NEXT <i
                            class="bi bi-chevron-double-right"></i></a>
                </td>
            </tr>
        </table>
    </center>
    <div style="width: 100%;">
        <br>
        <center>
            <?php
                session_start();
                include('connect.php');
                $userId = $_SESSION['id']; //แก้ไขเลข subjectId
                $sql = "SELECT * FROM tbl_subject,tbl_answermyuser,tbl_user WHERE tbl_subject.subjectId = tbl_answermyuser.subjectId AND tbl_answermyuser.id_user = tbl_user.userId AND tbl_user.userId='$userId' AND tbl_answermyuser.subjectId = 2"; 
                $q = mysqli_query($con, $sql);
                $data = mysqli_fetch_array($q);
            ?>
            <div class="card text-bg-light" style="width: 80%; text-align: left;">
                <div class="card-header"><i class="bi bi-person-circle"></i> &nbsp; &nbsp;ผู้ใช้งาน</div>
                <div class="card-body">
                    <table style="width: 100%;">
                        <tr>
                            <td>
                                <h5 class="card-title"><?php echo $data['name'];?> <?php echo $data['lastname'];?></h5>
                                Email : <?php echo $data['email'];?>
                                <br>
                                วันที่ - เวลาที่เข้าสอบ : <?php echo $data['datetime'];?>
                            </td>
                            <td style="text-align: right;">
                                <img src="images\<?php echo $data['userpic']; ?>" width="150px">
                            </td>
                        </tr>
                    </table>
                    <h4 class="alert-heading">รายงานผลการสอบ!</h4>
                    <table class="table table-striped table-hover">
                        <?php
                            $sqll = "SELECT * FROM tbl_rptsubject WHERE tbl_rptsubject.userId ='$userId' AND tbl_rptsubject.subjectId = 2";
                            $qq = mysqli_query($con, $sqll);
                            $dataa = mysqli_fetch_array($qq);
                        ?>
                        <tr>
                            <td>ข้อสอบทั้งหมด</td>
                            <td><?php echo $dataa['number'];?> ข้อ</td>
                        </tr>
                        <tr>
                            <td>ตอบถูก</td>
                            <td><?php echo $dataa['number_correct'];?> ข้อ</td>
                        </tr>
                        <tr>
                            <td>ตอบไม่ถูก</td>
                            <td><?php echo $dataa['number_wrong'];?> ข้อ</td>
                        </tr>
                        <tr>
                            <td>คะแนนที่ได้</td>
                            <td><?php echo $dataa['score'];?> คะแนน</td>
                        </tr>
                        <tr>
                            <?php
                                $sql_percent="SELECT * FROM tbl_rptpercent WHERE tbl_rptpercent.userId = '$userId' AND tbl_rptpercent.subjectId = 2";
                                $q_percent = mysqli_query($con, $sql_percent);
                                $data_percent = mysqli_fetch_array($q_percent);
                            ?>
                            <td>คิดเป็นร้อยละ (%)</td>
                            <td><?php echo $data_percent['percent_score'];?> %</td>
                        </tr>
                        <?php
                        $score = $dataa['score'];
                        if($score>=12){ //เปลี่ยน 9 เกณฑ์ผ่าน
                        ?>
                        <tr bgcolor="#228B22">
                            <td style="text-align: center;">
                                <font color="#ffffff"><b>สรุป</b></font>
                            </td>
                            <td>
                                <b>
                                    <font color="#ffffff"><?php echo $dataa['adm_results']; ?></font>
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
                                    <font color="#ffffff"><?php echo $dataa['adm_results']; ?></font>
                                </b>
                            </td>
                        </tr>
                        <?php                       
                        }
                    ?>
                    </table>

                </div>
            </div>

        </center>
        <center>
            <?php
            $sqlviewall = "SELECT * FROM tbl_afterstudytest ORDER BY Id"; //เปลี่ยนตารางข้อมูล
            $qviewall = mysqli_query($con , $sqlviewall);
        ?>
            <div class="" style="width: 80%; text-align: left;">
                <div class="alert alert-light" role="alert">
                    <?php
                if(mysqli_num_rows($qviewall)==0){
                    echo"No Data";
                }else{
                    ?>
                    <hr>
                    <table class="table table-light table-striped" style="width: 100%;">
                        <tr style="width: 100%;">
                            <td style="text-align: center; width: 5%;"><b>#</b></td>
                            <td style="text-align: left; width: 40%;"><b>คำถาม</b></td>
                            <td style="text-align: left; width: 40%;"><b>คำตอบ</b></td>
                            <td style="text-align: center; width: 15%;"><b>คะแนนที่ได้</b></td>
                        </tr>
                        <tr style="width: 100%;">
                            <?php
                                // show ตาราง tbl_prestudytest,tbl_answermyuser         //แก้ไขเลข subjectId
                                $sql_showq = "SELECT * FROM tbl_afterstudytest,tbl_answermyuser WHERE tbl_afterstudytest.subjectId = tbl_answermyuser.subjectId AND tbl_answermyuser.id_user = $userId AND tbl_afterstudytest.subjectId=2";
                                $q_showq = mysqli_query($con, $sql_showq);
                                while($data_showq = mysqli_fetch_array($q_showq)){?>
                            <td style="text-align: center; width: 5%;">
                                <?php echo $data_showq['Id']; ?>
                            </td>
                            <td style="text-align: left; width: 45%;" colspan="3">
                                <?php echo $data_showq['question']; ?>
                            </td>
                            <?php
                                            if($data_showq['Id'] != ""){
                                                $answer1 = $data_showq['Article1'];
                                                $answer2 = $data_showq['Article2'];
                                                $answer3 = $data_showq['Article3'];
                                                $answer4 = $data_showq['Article4'];
                                                $answer5 = $data_showq['Article5'];
                                                $answer6 = $data_showq['Article6'];
                                                $answer7 = $data_showq['Article7'];
                                                $answer8 = $data_showq['Article8'];
                                                $answer9 = $data_showq['Article9'];
                                                $answer10 = $data_showq['Article10'];
                                                $answer11 = $data_showq['Article11'];
                                                $answer12 = $data_showq['Article12'];
                                                $answer13 = $data_showq['Article13'];
                                                $answer14 = $data_showq['Article14'];
                                                $answer15 = $data_showq['Article15'];

                                                //ข้อ 1  ///เปลี่ยนคำตอบที่ถูกต้อง
                                                if($answer1 == 1){ //ถูก
                                                    $answer1_show = "A. " . $data_showq['choice_A'];
                                                    $score1 = 1;
                                                }else if($answer1 == 2){
                                                    $answer1_show = "B. " . $data_showq['choice_B'];
                                                    $score1 = 0;
                                                }else if($answer1 == 3){
                                                    $answer1_show = "C. " . $data_showq['choice_C'];
                                                    $score1 = 0;
                                                }else if($answer1 == 4){ 
                                                    $answer1_show = "D. " . $data_showq['choice_D'];
                                                    $score1 = 0;
                                                }else{
                                                    $answer1_show = "ไม่มีคำตอบ";
                                                    $score1 = 0;
                                                }

                                                //ข้อ 2 ///เปลี่ยนคำตอบที่ถูกต้อง
                                                if($answer2 == 1){
                                                    $answer2_show = "A. " . $data_showq['choice_A'];
                                                    $score2 = 0;
                                                }else if($answer2 == 2){
                                                    $answer2_show = "B. " . $data_showq['choice_B'];
                                                    $score2 = 0;
                                                }else if($answer2 == 3){ //ถูก
                                                    $answer2_show = "C. " . $data_showq['choice_C'];
                                                    $score2 = 1;
                                                }else if($answer2 == 4){ 
                                                    $answer2_show = "D. " . $data_showq['choice_D'];
                                                    $score2 = 0;
                                                }else{
                                                    $answer2_show = "ไม่มีคำตอบ";
                                                    $score2 = 0;
                                                }

                                                //ข้อ 3 ///เปลี่ยนคำตอบที่ถูกต้อง
                                                if($answer3 == 1){
                                                    $answer3_show = "A. " . $data_showq['choice_A'];
                                                    $score3 = 0;
                                                }else if($answer3 == 2){
                                                    $answer3_show = "B. " . $data_showq['choice_B'];
                                                    $score3 = 0;
                                                }else if($answer3 == 3){ 
                                                    $answer3_show = "C. " . $data_showq['choice_C'];
                                                    $score3 = 0;
                                                }else if($answer3 == 4){ //ถูก
                                                    $answer3_show = "D. " . $data_showq['choice_D'];
                                                    $score3 = 1;
                                                }else{
                                                    $answer3_show = "ไม่มีคำตอบ";
                                                    $score3 = 0;
                                                }   

                                                //ข้อ 4 ///เปลี่ยนคำตอบที่ถูกต้อง
                                                if($answer4 == 1){ 
                                                    $answer4_show = "A. " . $data_showq['choice_A'];
                                                    $score4 = 0;
                                                }else if($answer4 == 2){ //ถูก
                                                    $answer4_show = "B. " . $data_showq['choice_B'];
                                                    $score4 = 1;
                                                }else if($answer4 == 3){
                                                    $answer4_show = "C. " . $data_showq['choice_C'];
                                                    $score4 = 0;
                                                }else if($answer4 == 4){
                                                    $answer4_show = "D. " . $data_showq['choice_D'];
                                                    $score4 = 0;
                                                }else{
                                                    $answer4_show = "ไม่มีคำตอบ";
                                                    $score4 = 0;
                                                }  

                                                //ข้อ 5 ///เปลี่ยนคำตอบที่ถูกต้อง
                                                if($answer5 == 1){
                                                    $answer5_show = "A. " . $data_showq['choice_A'];
                                                    $score5 = 0;
                                                }else if($answer5 == 2){
                                                    $answer5_show = "B. " . $data_showq['choice_B'];
                                                    $score5 = 0;
                                                }else if($answer5 == 3){
                                                    $answer5_show = "C. " . $data_showq['choice_C'];
                                                    $score5 = 0;
                                                }else if($answer5 == 4){ //ถูก
                                                    $answer5_show = "D. " . $data_showq['choice_D'];
                                                    $score5 = 1;
                                                }else{
                                                    $answer5_show = "ไม่มีคำตอบ";
                                                    $score5 = 0;
                                                }                                                  

                                                //ข้อ 6 ///เปลี่ยนคำตอบที่ถูกต้อง
                                                if($answer6 == 1){
                                                    $answer6_show = "A. " . $data_showq['choice_A'];
                                                    $score6 = 0;
                                                }else if($answer6 == 2){ //ถูก
                                                    $answer6_show = "B. " . $data_showq['choice_B'];
                                                    $score6 = 1;
                                                }else if($answer6 == 3){
                                                    $answer6_show = "C. " . $data_showq['choice_C'];
                                                    $score6 = 0;
                                                }else if($answer6 == 4){ 
                                                    $answer6_show = "D. " . $data_showq['choice_D'];
                                                    $score6 = 0;
                                                }else{
                                                    $answer6_show = "ไม่มีคำตอบ";
                                                    $score6 = 0;
                                                }
                                                
                                                //ข้อ 7 ///เปลี่ยนคำตอบที่ถูกต้อง
                                                if($answer7 == 1){
                                                    $answer7_show = "A. " . $data_showq['choice_A'];
                                                    $score7 = 0;
                                                }else if($answer7 == 2){
                                                    $answer7_show = "B. " . $data_showq['choice_B'];
                                                    $score7 = 0;
                                                }else if($answer7 == 3){ 
                                                    $answer7_show = "C. " . $data_showq['choice_C'];
                                                    $score7 = 0;
                                                }else if($answer7 == 4){ //ถูก
                                                    $answer7_show = "D. " . $data_showq['choice_D'];
                                                    $score7 = 1;
                                                }else{
                                                    $answer7_show = "ไม่มีคำตอบ";
                                                    $score7 = 0;
                                                }

                                                //ข้อ 8 ///เปลี่ยนคำตอบที่ถูกต้อง
                                                if($answer8 == 1){
                                                    $answer8_show = "A. " . $data_showq['choice_A'];
                                                    $score8 = 0;
                                                }else if($answer8 == 2){
                                                    $answer8_show = "B. " . $data_showq['choice_B'];
                                                    $score8 = 0;
                                                }else if($answer8 == 3){
                                                    $answer8_show = "C. " . $data_showq['choice_C'];
                                                    $score8 = 0;
                                                }else if($answer8 == 4){ //ถูก
                                                    $answer8_show = "D. " . $data_showq['choice_D'];
                                                    $score8 = 1;
                                                }else{
                                                    $answer8_show = "ไม่มีคำตอบ";
                                                    $score8 = 0;
                                                }   
                                                
                                                //ข้อ 9 ///เปลี่ยนคำตอบที่ถูกต้อง
                                                if($answer9 == 1){
                                                    $answer9_show = "A. " . $data_showq['choice_A'];
                                                    $score9 = 0;
                                                }else if($answer9 == 2){
                                                    $answer9_show = "B. " . $data_showq['choice_B'];
                                                    $score9 = 0;
                                                }else if($answer9 == 3){ //ถูก
                                                    $answer9_show = "C. " . $data_showq['choice_C'];
                                                    $score9 = 1;
                                                }else if($answer9 == 4){
                                                    $answer9_show = "D. " . $data_showq['choice_D'];
                                                    $score9 = 0;
                                                }else{
                                                    $answer9_show = "ไม่มีคำตอบ";
                                                    $score9 = 0;
                                                }
                                                
                                                //ข้อ 10 ///เปลี่ยนคำตอบที่ถูกต้อง
                                                if($answer10 == 1){
                                                    $answer10_show = "A. " . $data_showq['choice_A'];
                                                    $score10 = 0;
                                                }else if($answer10 == 2){ //ถูก
                                                    $answer10_show = "B. " . $data_showq['choice_B'];
                                                    $score10 = 1;
                                                }else if($answer10 == 3){
                                                    $answer10_show = "C. " . $data_showq['choice_C'];
                                                    $score10 = 0;
                                                }else if($answer10 == 4){ 
                                                    $answer10_show = "D. " . $data_showq['choice_D'];
                                                    $score10 = 0;
                                                }else{
                                                    $answer10_show = "ไม่มีคำตอบ";
                                                    $score10 = 0;
                                                }    
                                                
                                                //ข้อ 11 ///เปลี่ยนคำตอบที่ถูกต้อง
                                                if($answer11 == 1){
                                                    $answer11_show = "A. " . $data_showq['choice_A'];
                                                    $score11 = 0;
                                                }else if($answer11 == 2){
                                                    $answer11_show = "B. " . $data_showq['choice_B'];
                                                    $score11 = 0;
                                                }else if($answer11 == 3){
                                                    $answer11_show = "C. " . $data_showq['choice_C'];
                                                    $score11 = 0;
                                                }else if($answer11 == 4){ //ถูก
                                                    $answer11_show = "D. " . $data_showq['choice_D'];
                                                    $score11 = 1;
                                                }else{
                                                    $answer11_show = "ไม่มีคำตอบ";
                                                    $score11 = 0;
                                                }

                                                //ข้อ 12 ///เปลี่ยนคำตอบที่ถูกต้อง
                                                if($answer12 == 1){ //ถูก
                                                    $answer12_show = "A. " . $data_showq['choice_A'];
                                                    $score12 = 1;
                                                }else if($answer12 == 2){
                                                    $answer12_show = "B. " . $data_showq['choice_B'];
                                                    $score12 = 0;
                                                }else if($answer12 == 3){
                                                    $answer12_show = "C. " . $data_showq['choice_C'];
                                                    $score12 = 0;
                                                }else if($answer12 == 4){ 
                                                    $answer12_show = "D. " . $data_showq['choice_D'];
                                                    $score12 = 0;
                                                }else{
                                                    $answer12_show = "ไม่มีคำตอบ";
                                                    $score12 = 0;
                                                }

                                                //ข้อ 13 ///เปลี่ยนคำตอบที่ถูกต้อง
                                                if($answer13 == 1){
                                                    $answer13_show = "A. " . $data_showq['choice_A'];
                                                    $score13 = 0;
                                                }else if($answer13 == 2){
                                                    $answer13_show = "B. " . $data_showq['choice_B'];
                                                    $score13 = 0;
                                                }else if($answer13 == 3){  //ถูก
                                                    $answer13_show = "C. " . $data_showq['choice_C'];
                                                    $score13 = 1;
                                                }else if($answer13 == 4){
                                                    $answer13_show = "D. " . $data_showq['choice_D'];
                                                    $score13 = 0;
                                                }else{
                                                    $answer13_show = "ไม่มีคำตอบ";
                                                    $score13 = 0;
                                                }   

                                                //ข้อ 14 ///เปลี่ยนคำตอบที่ถูกต้อง
                                                if($answer14 == 1){ 
                                                    $answer14_show = "A. " . $data_showq['choice_A'];
                                                    $score14 = 0;
                                                }else if($answer14 == 2){
                                                    $answer14_show = "B. " . $data_showq['choice_B'];
                                                    $score14 = 0;
                                                }else if($answer14 == 3){
                                                    $answer14_show = "C. " . $data_showq['choice_C'];
                                                    $score14 = 0;
                                                }else if($answer14 == 4){ //ถูก
                                                    $answer14_show = "D. " . $data_showq['choice_D'];
                                                    $score14 = 1;
                                                }else{
                                                    $answer14_show = "ไม่มีคำตอบ";
                                                    $score14 = 0;
                                                }  

                                                //ข้อ 15 ///เปลี่ยนคำตอบที่ถูกต้อง
                                                if($answer15 == 1){
                                                    $answer15_show = "A. " . $data_showq['choice_A'];
                                                    $score15 = 0;
                                                }else if($answer15 == 2){
                                                    $answer15_show = "B. " . $data_showq['choice_B'];
                                                    $score15 = 0;
                                                }else if($answer15 == 3){
                                                    $answer15_show = "C. " . $data_showq['choice_C'];
                                                    $score15 = 0;
                                                }else if($answer15 == 4){ //ถูก
                                                    $answer15_show = "D. " . $data_showq['choice_D'];
                                                    $score15 = 1;
                                                }else{
                                                    $answer15_show = "ไม่มีคำตอบ";
                                                    $score15 = 0;
                                                }                                                  
                                            }else{

                                            }
                                        ?>
                        </tr>
                        <tr>
                            <td style="text-align: center; width: 5%;">
                                <b>เฉลย</b>
                            </td>
                            <td style="text-align: left;">
                                <b><?php echo $data_showq['answer']; ?></b>
                            </td>
                            <td style="text-align: left;">
                                <font color="Red" style="text-decoration: underline;"><b>ตอบ</b></font> &nbsp; &nbsp; &nbsp; &nbsp;
                                <font color="Red">
                                <b>
                                <?php
                                        if($data_showq['Id']==1){ /// ข้อ 1
                                            if($score1 == 1){ ?>
                                                <font color="#009900">
                                                    <?php echo $answer1_show; ?>
                                                </font>
                                            <?php
                                            }else{ ?>
                                                <font color="Red">
                                                    <?php echo $answer1_show; ?>
                                                </font>
                                            <?php
                                            }
                                        }else if($data_showq['Id']==2){ /// ข้อ 2
                                            if($score2 == 1){ ?>
                                                <font color="#009900">
                                                    <?php echo $answer2_show; ?>
                                                </font>
                                            <?php
                                            }else{ ?>
                                                <font color="Red">
                                                    <?php echo $answer2_show; ?>
                                                </font>
                                            <?php
                                            }
                                        }else if($data_showq['Id']==3){ /// ข้อ 3
                                            if($score3 == 1){ ?>
                                                <font color="#009900">
                                                    <?php echo $answer3_show; ?>
                                                </font>
                                            <?php
                                            }else{ ?>
                                                <font color="Red">
                                                    <?php echo $answer3_show; ?>
                                                </font>
                                            <?php
                                            }
                                        }else if($data_showq['Id']==4){ /// ข้อ 4
                                            if($score4 == 1){ ?>
                                                <font color="#009900">
                                                    <?php echo $answer4_show; ?>
                                                </font>
                                            <?php
                                            }else{ ?>
                                                <font color="Red">
                                                    <?php echo $answer4_show; ?>
                                                </font>
                                            <?php
                                            }
                                        }else if($data_showq['Id']==5){ /// ข้อ 5
                                            if($score5 == 1){ ?>
                                                <font color="#009900">
                                                    <?php echo $answer5_show; ?>
                                                </font>
                                            <?php
                                            }else{ ?>
                                                <font color="Red">
                                                    <?php echo $answer5_show; ?>
                                                </font>
                                            <?php
                                            }
                                        }else if($data_showq['Id']==6){ /// ข้อ 6
                                            if($score6 == 1){ ?>
                                                <font color="#009900">
                                                    <?php echo $answer6_show; ?>
                                                </font>
                                            <?php
                                            }else{ ?>
                                                <font color="Red">
                                                    <?php echo $answer6_show; ?>
                                                </font>
                                            <?php
                                            }
                                        }else if($data_showq['Id']==7){ /// ข้อ 7
                                            if($score7 == 1){ ?>
                                                <font color="#009900">
                                                    <?php echo $answer7_show; ?>
                                                </font>
                                            <?php
                                            }else{ ?>
                                                <font color="Red">
                                                    <?php echo $answer7_show; ?>
                                                </font>
                                            <?php
                                            }
                                        }else if($data_showq['Id']==8){ /// ข้อ 8
                                            if($score8 == 1){ ?>
                                                <font color="#009900">
                                                    <?php echo $answer8_show; ?>
                                                </font>
                                            <?php
                                            }else{ ?>
                                                <font color="Red">
                                                    <?php echo $answer8_show; ?>
                                                </font>
                                            <?php
                                            }
                                        }else if($data_showq['Id']==9){ /// ข้อ 9
                                            if($score9 == 1){ ?>
                                                <font color="#009900">
                                                    <?php echo $answer9_show; ?>
                                                </font>
                                            <?php
                                            }else{ ?>
                                                <font color="Red">
                                                    <?php echo $answer9_show; ?>
                                                </font>
                                            <?php
                                            }
                                        }else if($data_showq['Id']==10){ /// ข้อ 10
                                            if($score10 == 1){ ?>
                                                <font color="#009900">
                                                    <?php echo $answer10_show; ?>
                                                </font>
                                            <?php
                                            }else{ ?>
                                                <font color="Red">
                                                    <?php echo $answer10_show; ?>
                                                </font>
                                            <?php
                                            }
                                        }else if ($data_showq['Id'] == 11) { /// ข้อ 11
                                            if ($score11 == 1) { ?>
                                                <font color="#009900">
                                                    <?php echo $answer11_show; ?>
                                                </font>
                                            <?php
                                            } else { ?>
                                                <font color="Red">
                                                    <?php echo $answer11_show; ?>
                                                </font>
                                            <?php
                                            }
                                        }else if($data_showq['Id']==12){ /// ข้อ 12
                                            if($score12 == 1){ ?>
                                                <font color="#009900">
                                                    <?php echo $answer12_show; ?>
                                                </font>
                                            <?php
                                            }else{ ?>
                                                <font color="Red">
                                                    <?php echo $answer12_show; ?>
                                                </font>
                                            <?php
                                            }
                                        }else if($data_showq['Id']==13){ /// ข้อ 13
                                            if($score13 == 1){ ?>
                                                <font color="#009900">
                                                    <?php echo $answer13_show; ?>
                                                </font>
                                            <?php
                                            }else{ ?>
                                                <font color="Red">
                                                    <?php echo $answer13_show; ?>
                                                </font>
                                            <?php
                                            }
                                        }else if($data_showq['Id']==14){ /// ข้อ 14
                                            if($score14 == 1){ ?>
                                                <font color="#009900">
                                                    <?php echo $answer14_show; ?>
                                                </font>
                                            <?php
                                            }else{ ?>
                                                <font color="Red">
                                                    <?php echo $answer14_show; ?>
                                                </font>
                                            <?php
                                            }
                                        }else if ($data_showq['Id'] == 15) { /// ข้อ 15
                                            if ($score15 == 1) { ?>
                                                <font color="#009900">
                                                    <?php echo $answer15_show; ?>
                                                </font>
                                            <?php
                                            } else { ?>
                                                <font color="Red">
                                                    <?php echo $answer15_show; ?>
                                                </font>
                                            <?php
                                            }
                                        }
                                ?>
                                </b></font>
                            </td>
                            <td style="text-align: center; width: 20%;">
                                <?php
                                    if($data_showq['Id']==1){ /// ข้อ 1 
                                        if($score1 == 1){ ?>
                                            <font color="#009900">
                                                <h3><b><i class="bi bi-check-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }else{ ?>
                                            <font color="Red">
                                                <h3><b><i class="bi bi-x-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }
                                    }else if($data_showq['Id']==2){ /// ข้อ 2
                                        if($score2 == 1){ ?>
                                            <font color="#009900">
                                                <h3><b><i class="bi bi-check-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }else{ ?>
                                            <font color="Red">
                                                <h3><b><i class="bi bi-x-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }
                                    }else if($data_showq['Id']==3){ /// ข้อ 3
                                        if($score3 == 1){ ?>
                                            <font color="#009900">
                                                <h3><b><i class="bi bi-check-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }else{ ?>
                                            <font color="Red">
                                                <h3><b><i class="bi bi-x-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }
                                    }else if($data_showq['Id']==4){ /// ข้อ 4
                                        if($score4 == 1){ ?>
                                            <font color="#009900">
                                                <h3><b><i class="bi bi-check-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }else{ ?>
                                            <font color="Red">
                                                <h3><b><i class="bi bi-x-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }
                                    }else if($data_showq['Id']==5){ /// ข้อ 5
                                        if($score5 == 1){ ?>
                                            <font color="#009900">
                                                <h3><b><i class="bi bi-check-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }else{ ?>
                                            <font color="Red">
                                                <h3><b><i class="bi bi-x-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }
                                    }else if($data_showq['Id']==6){ /// ข้อ 6
                                        if($score6 == 1){ ?>
                                            <font color="#009900">
                                                <h3><b><i class="bi bi-check-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }else{ ?>
                                            <font color="Red">
                                                <h3><b><i class="bi bi-x-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }
                                    }else if($data_showq['Id']==7){ /// ข้อ 7
                                        if($score7 == 1){ ?>
                                            <font color="#009900">
                                                <h3><b><i class="bi bi-check-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }else{ ?>
                                            <font color="Red">
                                                <h3><b><i class="bi bi-x-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }
                                    }else if($data_showq['Id']==8){ /// ข้อ 8
                                        if($score8 == 1){ ?>
                                            <font color="#009900">
                                                <h3><b><i class="bi bi-check-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }else{ ?>
                                            <font color="Red">
                                                <h3><b><i class="bi bi-x-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }
                                    }else if($data_showq['Id']==9){ /// ข้อ 9
                                        if($score9 == 1){ ?>
                                            <font color="#009900">
                                                <h3><b><i class="bi bi-check-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }else{ ?>
                                            <font color="Red">
                                                <h3><b><i class="bi bi-x-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }
                                    }else if($data_showq['Id']==10){ /// ข้อ 10
                                        if($score10 == 1){ ?>
                                            <font color="#009900">
                                                <h3><b><i class="bi bi-check-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }else{ ?>
                                            <font color="Red">
                                                <h3><b><i class="bi bi-x-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }
                                    }else if($data_showq['Id']==11){ /// ข้อ 11
                                        if($score11 == 1){ ?>
                                            <font color="#009900">
                                                <h3><b><i class="bi bi-check-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }else{ ?>
                                            <font color="Red">
                                                <h3><b><i class="bi bi-x-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }
                                    }else if($data_showq['Id']==12){ /// ข้อ 12
                                        if($score12 == 1){ ?>
                                            <font color="#009900">
                                                <h3><b><i class="bi bi-check-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }else{ ?>
                                            <font color="Red">
                                                <h3><b><i class="bi bi-x-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }
                                    }else if($data_showq['Id']==13){ /// ข้อ 13
                                        if($score13 == 1){ ?>
                                            <font color="#009900">
                                                <h3><b><i class="bi bi-check-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }else{ ?>
                                            <font color="Red">
                                                <h3><b><i class="bi bi-x-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }
                                    }else if($data_showq['Id']==14){ /// ข้อ 14
                                        if($score14 == 1){ ?>
                                            <font color="#009900">
                                                <h3><b><i class="bi bi-check-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }else{ ?>
                                            <font color="Red">
                                                <h3><b><i class="bi bi-x-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }
                                    }else if($data_showq['Id']==15){ /// ข้อ 15
                                        if($score15 == 1){ ?>
                                            <font color="#009900">
                                                <h3><b><i class="bi bi-check-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }else{ ?>
                                            <font color="Red">
                                                <h3><b><i class="bi bi-x-square-fill"></i></b></h3>
                                            </font>
                                        <?php
                                        }
                                    }
                                    ?>
                            </td>
                        </tr>
                        <?php
                                    }
                                ?>
                        <tr>
                            <?php
                                ///เปลี่ยนการบวกตามข้อที่ได้รับ
                                $score = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10 + $score11 + $score12 + $score13 + $score14 + $score15;
                                $percent = 100 / 15 * $score;  ///เปลี่ยนตัว หาร / 

                            ?>
                            <td colspan="2" style="text-align: center;"><h5><b>รวมคะแนน</b></h5></td>
                            <td style="text-align: left;">
                                <h5>
                                <b>
                                    <?php echo $score; ?> &nbsp; &nbsp; &nbsp; &nbsp; คะแนน  &nbsp; &nbsp; &nbsp; &nbsp; 
                                    คิดเป็นร้อยละ  &nbsp; &nbsp; <?php echo $data_percent['percent_score'];?>  &nbsp; &nbsp; (%)
                                </b>
                                </h5>
                            </td>
                            <td style="text-align: center;">
                                <?php
                                    if($score >= 12){ ?>   <!-- เปลี่ยนเกณฑ์ผ่าน 9 -->
                                    <font color="#009900">
                                        <h5><b><i class="bi bi-emoji-smile"></i>  &nbsp; PASS </b></h5>
                                    </font>
                                    <?php
                                    }else{ ?>
                                        <font color="Red">
                                            <h5><b><i class="bi bi-emoji-frown"></i>  &nbsp; FAIL </i></b></h5>
                                        </font>
                                    <?php
                                    }
                                ?>
                            </td>
                            
                        </tr>
                    </table>
                    <?php
                }
                ?>
                <center> <!-- เปลี่ยนปุ่มเป็นถัดไป -->
                <a href="content.php" class="btn btn-primary" role="button" style="text-align: center;">เข้าสู่บทเรียน</a> 
                </center>
                </div>
            </div>
    </div>
    </center>
</body>
<?php include('nav_footter.php'); ?>

</html>