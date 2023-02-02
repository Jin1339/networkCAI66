<?php
include('connect.php');
?>
<style type="text/css">
	@media print{
		#hid{
		   display: none; /* ซ่อน  */
		}
	}
    @media print{
		#headder{
		   display: none; /* ซ่อน  */
		}
	}
    @media print{
		#footter{
		   display: none; /* ซ่อน  */
		}
	}
</style>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>รายงานผลการศึกษา</title>
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
    <div id="headder">
        <?php include('navuser_ontop.php'); ?>
    </div>
    <br>
    <br>
    <br>
    <br>
    <center>
        <?php
            $userId = $_SESSION['id']; //แก้ไขเลข subjectId
            $sql = "SELECT * FROM tbl_subject,tbl_user,tbl_rptsubject,tbl_rptpercent WHERE tbl_rptsubject.subjectId = tbl_subject.subjectId AND tbl_rptsubject.subjectId = tbl_rptpercent.subjectId AND tbl_user.userId = tbl_rptsubject.userId  AND tbl_rptsubject.userId ='$userId'"; 
            $q = mysqli_query($con, $sql);
            $data = mysqli_fetch_array($q);

            // $sqlsubject = "SELECT * FROM tbl_subject ORDER BY id";
            // $q_subject = mysqli_query($con, $sqlsubject);
        ?>
        <h4><B>รายงานผลการศึกษา</B></h4>
        <br>
        <table style="width: 80%;">
            <tr>
                <td style="width: 20%; text-align: right;">
                    รหัสผู้ใช้งาน
                </td>
                <td style="width: 5%; text-align: center;">
                    :
                </td>
                <td style="width: 25%;">
                    <?php echo $data['userId'];?>
                </td>
                <td style="width: 20%; text-align: right;">
                    ชื่อ - สกุล
                </td>
                <td style="width: 5%; text-align: center;">
                    :
                </td>
                <td style="width: 25%; text-align: left;">
                    <?php echo $data['name'];?> <?php echo $data['lastname'];?>
                </td>
            </tr>
            <tr>
                <td style="width: 20%; text-align: right;">
                    ระดับการศึกษา
                </td>
                <td style="width: 5%; text-align: center;">
                    :
                </td>
                <td style="width: 25%;">
                    <?php echo $data['educate'];?> 
                </td>
                <td style="width: 20%; text-align: right;">
                    ติดต่อ

                </td>
                <td style="width: 5%; text-align: center;">
                    :
                </td>
                <td style="width: 25%;">
                    <?php echo $data['tel'];?>
                </td>
            </tr>
        </table>
        <?php
        if(mysqli_num_rows($q)==0){
                    echo"No Data";
        } else {
        ?>
            <table class="table" style="width: 70%;">
                <thead>
                </thead>
                <thead>
                    <tr>
                        <th style="width: 10%; text-align: center;">#</th>
                        <th style="width: 60%; text-align: center;">เนื้อหาบทเรียน</th>
                        <th style="width: 10%; text-align: center;">เกณฑ์การผ่าน</th>
                        <th style="width: 10%; text-align: center;">คะแนนที่ได้</th>
                        <th style="width: 10%; text-align: center;">ผลการสอบ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql_showq = "SELECT * FROM tbl_subject ORDER BY subjectId";
                        $q_showq = mysqli_query($con, $sql_showq);
                        $data_showq = mysqli_num_rows($q_showq);
                        $sqlsubject = "SELECT * FROM tbl_user , tbl_rptsubject , tbl_subject WHERE tbl_user.userId = tbl_rptsubject.userId AND tbl_subject.subjectId = tbl_rptsubject.subjectId AND tbl_user.userId = $userId";
                        $qsubject = mysqli_query($con, $sqlsubject);
                        $dataqsubject = mysqli_num_rows($qsubject);
                    ?>
                        <?php while ($dataqsubject = mysqli_fetch_array($qsubject)) {
                        ?>
                    <tr>
                        <th style="width: 10%; text-align: center;"><?php echo $dataqsubject['subjectId'];?></th>
                        <td style="width: 60%; text-align: left;"><?php echo $dataqsubject['subject'];?></td>
                        <td style="width: 10%; text-align: center;"><?php echo $dataqsubject['pass_criteria']; ?></td>
                        <td style="width: 10%; text-align: center;"><?php echo $dataqsubject['score']; ?></td>
                        <td style="width: 10%; text-align: center;"><?php echo $dataqsubject['adm_results']; ?></td>
                    </tr>
                        <?php
                        }
                        ?>
                    <tr>
                        <?php
                            $sql_pass = "SELECT * FROM tbl_academicresults WHERE userId = '$userId'";
                            $q_pass = mysqli_query($con, $sql_pass);
                            $data_pass = mysqli_fetch_array($q_pass);
                        ?>
                        <td colspan="2" style="text-align: right;"><h5><B>รวมคะแนน</B></h5></td>
                        <td style="text-align: center;"><h5><B>27</B></h5></td>
                        <td style="text-align: center;"><h5><B><?php echo $data_pass['total_score'];?></B></h5></td>
                        <td style="text-align: center;"><h5><B><?php echo $data_pass['standard'];?></B></h5></td>
                    </tr>
                </tbody>
            </table>
        <?php
        }
        ?>
        <div style="text-align: right; width: 80%;" id="hid">
            <a href="final_academic.php" class="btn btn-outline-primary"><i class="bi bi-chevron-double-left"></i> BACK</a>
            <button onclick="window.print();" class="btn btn-primary"> <i class="bi bi-printer"></i> print </button>
            <a href="index.php" class="btn btn-outline-primary">NEXT <i class="bi bi-chevron-double-right"></i></a>
        </div>
    </center>
    <br>
</body>
<div id="footter">
    <?php include('nav_footter.php'); ?>
</div>

</html>