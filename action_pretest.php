<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        include('connect.php');
        session_start();
        date_default_timezone_set('Asia/Bangkok');
        //ส่งค่าจากหน้า pretest.php มาสร้างตัวเเปร
        $id_user = $_SESSION['id'];
        $exam_1 = $_POST['1'];
        $exam_2 = $_POST['2'];
        $exam_3 = $_POST['3'];
        $exam_4 = $_POST['4'];
        $exam_5 = $_POST['5'];
        $exam_6 = $_POST['6'];
        $exam_7 = $_POST['7'];
        $exam_8 = $_POST['8'];
        $exam_9 = $_POST['9'];
        $exam_10 = $_POST['10'];
        $exam_11 = $_POST['11'];
        $exam_12 = $_POST['12'];
        $exam_13 = $_POST['13'];
        $exam_14 = $_POST['14'];
        $exam_15 = $_POST['15'];

        $dateTime = date('Y-m-d h:i:s');

        // ถ้าไม่มี รหัสผู้ใช้งาน ให้เพิ่มข้อมูลลงไป ถ้ามีให้แก้ไขข้อมูล ใน ตารางคำตอบของผู้ใช้งาน
        $sql = "SELECT * FROM tbl_answermyuser WHERE tbl_answermyuser.id_user = $id_user AND subjectId = 1";
        $q = mysqli_query($con, $sql);
        $data = mysqli_num_rows($q);
        if($data != 0){
            $sqlexam_up = "UPDATE `tbl_answermyuser` SET `Article1`= '$exam_1' ,`Article2`='$exam_2',`Article3`= '$exam_3', `Article4`='$exam_4',`Article5`='$exam_5',`Article6`='$exam_6',`Article7`='$exam_7',`Article8`='$exam_8',`Article9`='$exam_9',`Article10`='$exam_10',`Article11`='$exam_11',`Article12`='$exam_12',`Article13`='$exam_13',`Article14`='$exam_14',`Article15`='$exam_15',`datetime`= '$dateTime' WHERE `tbl_answermyuser`.`id_user` = $id_user AND `subjectId`=1";
            $qexam_up = mysqli_query($con , $sqlexam_up);
        }else{
            $sqlexamm = "INSERT INTO `tbl_answermyuser`(`id_user`, `subjectId` , `Article1`, `Article2`, `Article3`, `Article4`, `Article5`, `Article6`, `Article7`, `Article8`, `Article9`, `Article10`, `Article11`, `Article12`, `Article13`, `Article14`, `Article15`, `datetime`) VALUE($id_user, '1' , $exam_1, $exam_2, $exam_3, $exam_4, $exam_5, $exam_6, $exam_7, $exam_8, $exam_9, $exam_10, $exam_11, $exam_12, $exam_13, $exam_14, $exam_15, '$dateTime')";
            $qexam = mysqli_query($con, $sqlexamm);
        }

        // ถ้าตัวเเปรที่รับมา ถ้าไม่มีตัวเเปรที่รับให้ใส่ 0 ถ้าตัวเเปรที่รับมาไม่เท่ากับ ข้อถูกให้ใส่ 0 นอกจากนั้นตัวเเปรที่รับ 1
        // ข้อ 1 
        if(!$exam_1){
            $score1 = 0;
        }elseif($exam_1!=4){
            $score1 = 0;
        }else{
            $score1 = 1;
        }

        //ข้อ 2
        if(!$exam_2){
            $score2 = 0;
        }elseif($exam_2!=4){
            $score2 = 0;
        }else{
            $score2 = 1;
        }

        //ข้อ 3
        if(!$exam_3){
            $score3 = 0;
        }elseif($exam_3!=3){
            $score3 = 0;
        }else{
            $score3 = 1;
        }

        //ข้อ 4
        if(!$exam_4){
            $score4 = 0;
        }elseif($exam_4!=1){
            $score4 = 0;
        }else{
            $score4 = 1;
        }

        //ข้อ 5
        if(!$exam_5){
            $score5 = 0;
        }elseif($exam_5!=4){
            $score5 = 0;
        }else{
            $score5 = 1;
        }

        //ข้อ 6
        if(!$exam_6){
            $score6 = 0;
        }elseif($exam_6!=2){
            $score6 = 0;
        }else{
            $score6 = 1;
        }

        //ข้อ 7
        if(!$exam_7){
            $score7 = 0;
        }elseif($exam_7!=3){
            $score7 = 0;
        }else{
            $score7 = 1;
        }

        //ข้อ 8
        if(!$exam_8){
            $score8 = 0;
        }elseif($exam_8!=4){
            $score8 = 0;
        }else{
            $score8 = 1;
        }

        //ข้อ 9
        if(!$exam_9){
            $score9 = 0;
        }elseif($exam_9!=4){
            $score9 = 0;
        }else{
            $score9 = 1;
        }

        //ข้อ 10
        if(!$exam_10){
            $score10 = 0;
        }elseif($exam_10!=2){
            $score10 = 0;
        }else{
            $score10 = 1;
        }

        // ข้อ 11 
        if(!$exam_11){
            $score11 = 0;
        }elseif($exam_11!=4){
            $score11 = 0;
        }else{
            $score11 = 1;
        }

        //ข้อ 12
        if(!$exam_12){
            $score12 = 0;
        }elseif($exam_12!=2){
            $score12 = 0;
        }else{
            $score12 = 1;
        }

        //ข้อ 13
        if(!$exam_13){
            $score13 = 0;
        }elseif($exam_13!=4){
            $score13 = 0;
        }else{
            $score13 = 1;
        }

        //ข้อ 14
        if(!$exam_14){
            $score14 = 0;
        }elseif($exam_14!=3){
            $score14 = 0;
        }else{
            $score14 = 1;
        }

        //ข้อ 15
        if(!$exam_15){
            $score15 = 0;
        }elseif($exam_15!=1){
            $score15 = 0;
        }else{
            $score15 = 1;
        }


        // นำคะแนนที่ได้มาทั้ง 15 ข้อมารวมกัน 
        // 1. รวมข้อที่ได้ 1 ทั้งหมด  
        // 2. รวมข้อที่ได้ 0 ทั้งหมด 
        // 3. รวมคะแนนได้ทั้งหมดเท่าไร
        $scoreall_1 = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10 + $score11 + $score12 + $score13 + $score14 + $score15;
        $scoreall_0 = 15 - $scoreall_1;
        $scoresum = $scoreall_1;

        if($scoreall_1>=9){
            $adm_results = "Pass";
        }else{
            $adm_results = "Fail";
        }

        // ถ้าไม่มี รหัสผู้ใช้งาน ให้เพิ่มข้อมูลลงไป ถ้ามีให้แก้ไขข้อมูล ใน ตารางรายงานผลการสอบรายวิชา
        $sql2 = "SELECT * FROM tbl_rptsubject WHERE tbl_rptsubject.userId = $id_user AND subjectId = 1";
        $q2 = mysqli_query($con, $sql2);
        $data2 = mysqli_num_rows($q2);
        if($data2 != 0){
            $sqlsroce_up = "UPDATE `tbl_rptsubject` SET `number_correct`='$scoreall_1' ,`number_wrong`='$scoreall_0',`pass_criteria`='9' ,`score`='$scoresum' ,`adm_results`='$adm_results' WHERE `userId`='$id_user' AND subjectId = 1";
            $qsroce_up = mysqli_query($con , $sqlsroce_up);
        }else{
            $sqlsroce = "INSERT INTO tbl_rptsubject(userId, subjectId, number, number_correct, number_wrong, pass_criteria, score, adm_results) VALUES ('$id_user' , '1' , '15' , '$scoreall_1' , '$scoreall_0' , '9' , '$scoresum' , '$adm_results')";
            $qsroce = mysqli_query($con , $sqlsroce);
        }

        // ถ้าไม่มี รหัสผู้ใช้งาน ให้เพิ่มข้อมูลลงไป ถ้ามีให้แก้ไขข้อมูล ใน ตารางรายงานเปอร์เซ็นต์ผลการสอบรายวิชา
        $sqlpercent = "SELECT * FROM tbl_rptpercent WHERE tbl_rptpercent.userId = $id_user AND subjectId = 1";
        $qpercent = mysqli_query($con, $sqlpercent);
        $datapercent = mysqli_num_rows($q2);
        $percent_criteria = 100/15*9;
        $percent_score = 100/15*$scoresum;

        if($datapercent != 0){
            $sqlpercent_up = "UPDATE `tbl_rptpercent` SET `score`='$scoresum',`percent_score`='$percent_score',`adm_results`='$adm_results' WHERE `userId`='$id_user' AND subjectId = 1";
            $qpercent_up = mysqli_query($con , $sqlpercent_up);
        }else{
            $sqlpercent = "INSERT INTO `tbl_rptpercent`(`userId`, `subjectId`, `all_exams`, `percent_allexams`, `pass_criteria`, `percent_criteria`, `score`, `percent_score`, `adm_results`) VALUES ('$id_user','1','15','100','9','60','$scoresum','$percent_score','$adm_results')";
            $qpercent = mysqli_query($con , $sqlpercent);
        }
        // ถ้าไม่มี รหัสผู้ใช้งาน ให้เพิ่มข้อมูลลงไป ถ้ามีให้แก้ไขข้อมูล ใน ตารางผลการเรียน

        $sql3 = "SELECT * FROM tbl_academicresults WHERE tbl_academicresults.userId = $id_user";
        $q3 = mysqli_query($con, $sql3);
        $data3 = mysqli_num_rows($q3);
        $percent_standardscore = 100/40*32;
        if($data3 != 0){
            $sqlacademic_up = "UPDATE `tbl_academicresults` SET `score_subject1`='$scoresum',`percent_subject1`='$percent_score' WHERE `userId`='$id_user'";
            $qacademic_up = mysqli_query($con , $sqlacademic_up);
        }else{
            $sqlacademic = "INSERT INTO `tbl_academicresults`(`userId`, `score_subject1`, `percent_subject1`, `score_subject3`, `percent_subject3`, `score_subject4`, `percent_subject4`, `score_subject5`, `percent_subject5`, `score_subject2`, `percent_subject2`, `total_score`, `percent_totalscore`, `standard_score`, `percent_standardscore`, `standard`) VALUES ('$id_user','$scoresum','$percent_score',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,32,'$percent_standardscore',NULL)";
            $qacademic = mysqli_query($con , $sqlacademic);
        }
        echo "<script>window.location='academic.php';</script>";
    ?>

</body>

</html>
            <!-- $sqldo = "SELECT `userId`, `score_subject1`, `score_subject2`, `score_subject3`, `score_subject4`, `score_subject5`, `total_score`, `standard_score`, `standard` FROM `tbl_academicresults` WHERE `userId`=$id_user";
            $qdo = mysqli_query($con , $sqldo);
            $datada = mysqli_fetch_array($qdo);
            $subject1 = $datada['score_subject1'];
            $subject2 = $datada['score_subject2'];
            $subject3 = $datada['score_subject3'];
            $sum_sub = $subject1 + $subject2 + $subject3;

            if($sum_sub>=28){
                $adm_resultssub = "Pass";
            }else{
                $adm_resultssub = "Fail";
            } -->