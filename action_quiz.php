<?php
    session_start();
    include('connect.php');

    $id_user = $_SESSION['id'];
    date_default_timezone_set('Asia/Bangkok');
    ///เเยกหัวข้อเเต่ละบท
    $quiz = $_POST['quiz'];
    $dateTime = date('Y-m-d h:i:s');

    ///บทเรียนที่ 1
    if($quiz == 1){
        ///แยก ตัวแปร ข้อสอบที่รับมา
        $exam_1 = $_POST['1'];
        $exam_2 = $_POST['2'];
        $exam_3 = $_POST['3'];
        $exam_4 = $_POST['4'];
        $exam_5 = $_POST['5'];
        ///เพิ่มคำตอบลงในตารางคำตอบ ใน tbl_answermyuser
        $sql = "SELECT * FROM tbl_answermyuser WHERE tbl_answermyuser.subjectId  = 3 AND tbl_answermyuser.id_user = $id_user";
        $q = mysqli_query($con , $sql);
        $data = mysqli_num_rows($q);
        if($data['id_user ']==$id_user){
            echo "data YES";
        }else{
            echo "No";
        }
        if($data != 0){
            $sqlexam_up = "UPDATE `tbl_answermyuser` SET `Article1`= '$exam_1' ,`Article2`='$exam_2',`Article3`= '$exam_3', `Article4`='$exam_4',`Article5`='$exam_5',`datetime`= '$dateTime' WHERE `tbl_answermyuser`.`id_user` = $id_user AND `subjectId`=3";
            $qexam_up = mysqli_query($con , $sqlexam_up);
        }else{
            $sqladd = "INSERT INTO `tbl_answermyuser`(`id_user`, `subjectId` , `Article1`, `Article2`, `Article3`, `Article4`, `Article5`, `Article6`, `Article7`, `Article8`, `Article9`, `Article10`, `Article11`, `Article12`, `Article13`, `Article14`, `Article15`, `datetime`) VALUE($id_user, '3' , $exam_1, $exam_2, $exam_3, $exam_4, $exam_5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$dateTime')";
            $qadd = mysqli_query($con,$sqladd);
        }

        // ถ้าตัวเเปรที่รับมา ถ้าไม่มีตัวเเปรที่รับให้ใส่ 0 ถ้าตัวเเปรที่รับมาไม่เท่ากับ ข้อถูกให้ใส่ 0 นอกจากนั้นตัวเเปรที่รับ 1
        // ข้อ 1 
        if(!$exam_1){
            $score1 = 0;
        }elseif($exam_1!=1){
            $score1 = 0;
        }else{
            $score1 = 1;
        }

        //ข้อ 2
        if(!$exam_2){
            $score2 = 0;
        }elseif($exam_2!=3){
            $score2 = 0;
        }else{
            $score2 = 1;
        }

        //ข้อ 3
        if(!$exam_3){
            $score3 = 0;
        }elseif($exam_3!=2){
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

        $scoreall_1 = $score1 + $score2 + $score3 + $score4 + $score5;
        $scoreall_0 = 5 - $scoreall_1;
        $scoresum = $scoreall_1;

        if($scoreall_1>=3){
            $adm_results = "Pass";
        }else{
            $adm_results = "Fail";
        }

        // ถ้าไม่มี รหัสผู้ใช้งาน ให้เพิ่มข้อมูลลงไป ถ้ามีให้แก้ไขข้อมูล ใน ตารางรายงานผลการสอบรายวิชา
        $sql2 = "SELECT * FROM tbl_rptsubject WHERE tbl_rptsubject.subjectId = 3 AND tbl_rptsubject.userId = $id_user";
        $q2 = mysqli_query($con, $sql2);
        $data2 = mysqli_num_rows($q2);
        if($data2 != 0){
            $sqlsroce_up = "UPDATE `tbl_rptsubject` SET `number_correct`='$scoreall_1' ,`number_wrong`='$scoreall_0' ,`score`='$scoresum' ,`adm_results`='$adm_results' WHERE `userId`='$id_user' AND subjectId = 3";
            $qsroce_up = mysqli_query($con , $sqlsroce_up);
        }else{
            $sqlsroce = "INSERT INTO tbl_rptsubject(userId, subjectId, number, number_correct, number_wrong, pass_criteria, score, adm_results) VALUES ('$id_user' , '3' , '5' , '$scoreall_1' , '$scoreall_0' , '3' , '$scoresum' , '$adm_results')";
            $qsroce = mysqli_query($con , $sqlsroce);
        }

        // ถ้าไม่มี รหัสผู้ใช้งาน ให้เพิ่มข้อมูลลงไป ถ้ามีให้แก้ไขข้อมูล ใน ตารางรายงานเปอร์เซ็นต์ผลการสอบรายวิชา
        $sqlpercent = "SELECT * FROM tbl_rptpercent WHERE tbl_rptpercent.subjectId = 3 AND tbl_rptpercent.userId = $id_user";
        $qpercent = mysqli_query($con, $sqlpercent);
        $datapercent = mysqli_num_rows($qpercent);
        $percent_criteria = 100/5*3;
        $percent_score = 100/5*$scoresum;

        if($datapercent != 0){
            $sqlpercent_up = "UPDATE `tbl_rptpercent` SET `score`='$scoresum',`percent_score`='$percent_score',`adm_results`='$adm_results' WHERE `userId`='$id_user' AND subjectId = 3";
            $qpercent_up = mysqli_query($con , $sqlpercent_up);
        }else{
            echo $sqlpercent = "INSERT INTO `tbl_rptpercent`(`userId`, `subjectId`, `all_exams`, `percent_allexams`, `pass_criteria`, `percent_criteria`, `score`, `percent_score`, `adm_results`) VALUES ('$id_user','3','5','100','3','60','$scoresum','$percent_score','$adm_results')";
            $qpercent = mysqli_query($con , $sqlpercent);
        }
        //ถ้าไม่มี รหัสผู้ใช้งาน ให้เพิ่มข้อมูลลงไป ถ้ามีให้แก้ไขข้อมูล ใน ตารางผลการเรียน

        $sql3 = "SELECT * FROM tbl_academicresults WHERE tbl_academicresults.userId = $id_user";
        $q3 = mysqli_query($con, $sql3);
        $data3 = mysqli_num_rows($q3);
        $percent_standardscore = 100/40*32;
        
        $sqlacademic_up = "UPDATE `tbl_academicresults` SET `score_subject3`=$scoreall_1,`percent_subject3`=$percent_score WHERE `userId`=$id_user";
        $qacademic_up = mysqli_query($con , $sqlacademic_up);
        echo "<script>window.location='content.php';</script>";






    ///บทเรียนที่ 2
    }else if($quiz == 2){
        ///แยก ตัวแปร ข้อสอบที่รับมา
        $exam_1 = $_POST['1'];
        $exam_2 = $_POST['2'];
        $exam_3 = $_POST['3'];
        ///เพิ่มคำตอบลงในตารางคำตอบ ใน tbl_answermyuser
        $sql = "SELECT * FROM tbl_answermyuser WHERE tbl_answermyuser.subjectId  = 4 AND tbl_answermyuser.id_user = $id_user";
        $q = mysqli_query($con, $sql);
        $data = mysqli_num_rows($q);
        if($data != 0){
            $sqlexam_up = "UPDATE `tbl_answermyuser` SET `Article1`= '$exam_1' ,`Article2`='$exam_2',`Article3`= '$exam_3', `datetime`= '$dateTime' WHERE `tbl_answermyuser`.`id_user` = $id_user AND `subjectId`= 4 ";
            $qexam_up = mysqli_query($con , $sqlexam_up);
        }else{
            $sqlexamm = "INSERT INTO `tbl_answermyuser`(`id_user`, `subjectId` , `Article1`, `Article2`, `Article3`,`Article4`, `Article5`, `Article6`, `Article7`, `Article8`, `Article9`, `Article10`, `Article11`, `Article12`, `Article13`, `Article14`, `Article15`, `datetime`) VALUE($id_user, '4' , $exam_1, $exam_2, $exam_3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$dateTime')";
            $qexam = mysqli_query($con, $sqlexamm);
        }

        // ถ้าตัวเเปรที่รับมา ถ้าไม่มีตัวเเปรที่รับให้ใส่ 0 ถ้าตัวเเปรที่รับมาไม่เท่ากับ ข้อถูกให้ใส่ 0 นอกจากนั้นตัวเเปรที่รับ 1
        // ข้อ 1 
        if(!$exam_1){
            $score1 = 0;
        }elseif($exam_1!=1){
            $score1 = 0;
        }else{
            $score1 = 1;
        }

        //ข้อ 2
        if(!$exam_2){
            $score2 = 0;
        }elseif($exam_2!=2){
            $score2 = 0;
        }else{
            $score2 = 1;
        }

        //ข้อ 3
        if(!$exam_3){
            $score3 = 0;
        }elseif($exam_3!=4){
            $score3 = 0;
        }else{
            $score3 = 1;
        }

        $scoreall_1 = $score1 + $score2 + $score3 ;
        $scoreall_0 = 3 - $scoreall_1;
        $scoresum = $scoreall_1;

        if($scoreall_1>=2){
            $adm_results = "Pass";
        }else{
            $adm_results = "Fail";
        }

        // ถ้าไม่มี รหัสผู้ใช้งาน ให้เพิ่มข้อมูลลงไป ถ้ามีให้แก้ไขข้อมูล ใน ตารางรายงานผลการสอบรายวิชา
        $sql2 = "SELECT * FROM tbl_rptsubject WHERE tbl_rptsubject.subjectId = 4 AND tbl_rptsubject.userId = $id_user";
        $q2 = mysqli_query($con, $sql2);
        $data2 = mysqli_num_rows($q2);
        if($data2 != 0){
            $sqlsroce_up = "UPDATE `tbl_rptsubject` SET `number_correct`='$scoreall_1' ,`number_wrong`='$scoreall_0' ,`score`='$scoresum' ,`adm_results`='$adm_results' WHERE `userId`='$id_user' AND `subjectId`= 4 ";
            $qsroce_up = mysqli_query($con , $sqlsroce_up);
        }else{
            $sqlsroce = "INSERT INTO tbl_rptsubject(userId, subjectId, number, number_correct, number_wrong, pass_criteria, score, adm_results) VALUES ('$id_user', '4' , '3' , '$scoreall_1' , '$scoreall_0' , '2' , '$scoresum' , '$adm_results')";
            $qsroce = mysqli_query($con , $sqlsroce);
        }

        // ถ้าไม่มี รหัสผู้ใช้งาน ให้เพิ่มข้อมูลลงไป ถ้ามีให้แก้ไขข้อมูล ใน ตารางรายงานเปอร์เซ็นต์ผลการสอบรายวิชา
        ECHO $sqlpercent = "SELECT * FROM tbl_rptpercent WHERE tbl_rptpercent.subjectId = 4 AND tbl_rptpercent.userId = $id_user";
        $qpercent = mysqli_query($con, $sqlpercent);
        $datapercent = mysqli_num_rows($qpercent);
        $percent_criteria = 100/3*2;
        $percent_score = 100/3*$scoresum;

        if($datapercent != 0){
            $sqlpercent_up = "UPDATE `tbl_rptpercent` SET `score`='$scoresum',`percent_score`='$percent_score',`adm_results`='$adm_results' WHERE `userId`='$id_user' AND `subjectId`= 4";
            $qpercent_up = mysqli_query($con , $sqlpercent_up);
        }else{
            $sqlpercent = "INSERT INTO `tbl_rptpercent`(`userId`, `subjectId`, `all_exams`, `percent_allexams`, `pass_criteria`, `percent_criteria`, `score`, `percent_score`, `adm_results`) VALUES ('$id_user','4','3','100','2','66.67','$scoresum','$percent_score','$adm_results')";
            $qpercent = mysqli_query($con , $sqlpercent);
        }
        // ถ้าไม่มี รหัสผู้ใช้งาน ให้เพิ่มข้อมูลลงไป ถ้ามีให้แก้ไขข้อมูล ใน ตารางผลการเรียน

        $sql3 = "SELECT * FROM tbl_academicresults WHERE tbl_academicresults.userId = $id_user";
        $q3 = mysqli_query($con, $sql3);
        $data3 = mysqli_num_rows($q3);
        $percent_standardscore = 100/40*32;
        
        $sqlacademic_up = "UPDATE `tbl_academicresults` SET `score_subject4`='$scoreall_1',`percent_subject4`='$percent_score' WHERE `userId`='$id_user'";
        $qacademic_up = mysqli_query($con , $sqlacademic_up);
        echo "<script>window.location='content.php';</script>";




    ///บทเรียนที่ 3
    }else if($quiz == 3){
        ///แยก ตัวแปร ข้อสอบที่รับมา
        echo $exam_1 = $_POST['1'];
        echo $exam_2 = $_POST['2'];
        ///เพิ่มคำตอบลงในตารางคำตอบ ใน tbl_answermyuser
        $sql = "SELECT * FROM tbl_answermyuser WHERE subjectId = 5 AND tbl_answermyuser.id_user = $id_user";
        $q = mysqli_query($con, $sql);
        $data = mysqli_num_rows($q);
        if($data != 0){
            $sqlexam_up = "UPDATE `tbl_answermyuser` SET `Article1`= '$exam_1' ,`Article2`='$exam_2' , `datetime`= '$dateTime' WHERE `tbl_answermyuser`.`id_user` = $id_user AND `subjectId`= 5 ";
            $qexam_up = mysqli_query($con , $sqlexam_up);
        }else{
            $sqlexamm = "INSERT INTO `tbl_answermyuser`(`id_user`, `subjectId` , `Article1`, `Article2`, `Article3`, `Article4`, `Article5`, `Article6`, `Article7`, `Article8`, `Article9`, `Article10`, `Article11`, `Article12`, `Article13`, `Article14`, `Article15`, `datetime`) VALUE($id_user, '5' , $exam_1, $exam_2,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$dateTime')";
            $qexam = mysqli_query($con, $sqlexamm);
        }

        // ถ้าตัวเเปรที่รับมา ถ้าไม่มีตัวเเปรที่รับให้ใส่ 0 ถ้าตัวเเปรที่รับมาไม่เท่ากับ ข้อถูกให้ใส่ 0 นอกจากนั้นตัวเเปรที่รับ 1
        // ข้อ 1 
        if(!$exam_1){
            $score1 = 0;
        }elseif($exam_1!=2){
            $score1 = 0;
        }else{
            $score1 = 1;
        }

        //ข้อ 2
        if(!$exam_2){
            $score2 = 0;
        }elseif($exam_2!=3){
            $score2 = 0;
        }else{
            $score2 = 1;
        }

        $scoreall_1 = $score1 + $score2 ;
        $scoreall_0 = 2 - $scoreall_1;
        $scoresum = $scoreall_1;

        if($scoreall_1>=1){
            $adm_results = "Pass";
        }else{
            $adm_results = "Fail";
        }

        // ถ้าไม่มี รหัสผู้ใช้งาน ให้เพิ่มข้อมูลลงไป ถ้ามีให้แก้ไขข้อมูล ใน ตารางรายงานผลการสอบรายวิชา
        $sql2 = "SELECT * FROM tbl_rptsubject WHERE tbl_rptsubject.subjectId = 5 AND tbl_rptsubject.userId = $id_user";
        $q2 = mysqli_query($con, $sql2);
        $data2 = mysqli_num_rows($q2);
        if($data2 != 0){
            $sqlsroce_up = "UPDATE `tbl_rptsubject` SET `number_correct`='$scoreall_1' ,`number_wrong`='$scoreall_0' ,`score`='$scoresum' ,`adm_results`='$adm_results' WHERE `userId`='$id_user' AND `subjectId`= 5 ";
            $qsroce_up = mysqli_query($con , $sqlsroce_up);
        }else{
            echo $sqlsroce = "INSERT INTO tbl_rptsubject(userId, subjectId, number, number_correct, number_wrong, pass_criteria, score, adm_results) VALUES ('$id_user' , '5' , '2' , '$scoreall_1' , '$scoreall_0' , '1' , '$scoresum' , '$adm_results')";
            $qsroce = mysqli_query($con , $sqlsroce);
        }

        // // ถ้าไม่มี รหัสผู้ใช้งาน ให้เพิ่มข้อมูลลงไป ถ้ามีให้แก้ไขข้อมูล ใน ตารางรายงานเปอร์เซ็นต์ผลการสอบรายวิชา
        $sqlpercent = "SELECT * FROM tbl_rptpercent WHERE tbl_rptpercent.subjectId = 5 AND tbl_rptpercent.userId = $id_user";
        $qpercent = mysqli_query($con, $sqlpercent);
        $datapercent = mysqli_num_rows($qpercent);
        $percent_criteria = 100/2*1;
        $percent_score = 100/2*$scoresum;

        if($datapercent != 0){
            $sqlpercent_up = "UPDATE `tbl_rptpercent` SET `score`='$scoresum',`percent_score`='$percent_score',`adm_results`='$adm_results' WHERE `userId`='$id_user' AND `subjectId`= 5";
            $qpercent_up = mysqli_query($con , $sqlpercent_up);
        }else{
            echo $sqlpercent = "INSERT INTO `tbl_rptpercent`(`userId`, `subjectId`, `all_exams`, `percent_allexams`, `pass_criteria`, `percent_criteria`, `score`, `percent_score`, `adm_results`) VALUES ('$id_user','5','2','100','1','50','$scoresum','$percent_score','$adm_results')";
            $qpercent = mysqli_query($con , $sqlpercent);
        }
        // ถ้าไม่มี รหัสผู้ใช้งาน ให้เพิ่มข้อมูลลงไป ถ้ามีให้แก้ไขข้อมูล ใน ตารางผลการเรียน

        $sql3 = "SELECT * FROM tbl_academicresults WHERE tbl_academicresults.userId = $id_user";
        $q3 = mysqli_query($con, $sql3);
        $data3 = mysqli_num_rows($q3);
        $percent_standardscore = 100/40*32;

        $sqlacademic_up = "UPDATE `tbl_academicresults` SET `score_subject5`='$scoreall_1',`percent_subject5`='$percent_score' WHERE `userId`='$id_user'";
        $qacademic_up = mysqli_query($con , $sqlacademic_up);
        echo "<script>window.location='content.php';</script>";


    ///ไม่สามารถดำเนินการได้
    }else{
        echo "ไม่สามารถดำเนินการได้";
    }
?>