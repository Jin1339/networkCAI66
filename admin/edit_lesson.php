<?php
    include('../connect.php');
    session_start();
    $cid = $_GET['subid'];
    $sql = "SELECT * FROM tbl_subject WHERE tbl_subject.subjectId ='$cid'";
    $q = mysqli_query($con , $sql);
    $data = mysqli_fetch_array($q);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>แก้ไขการบทเรียน / ข้อสอบ</title>
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
    <?php include('navbar_admin.php'); ?>
    <br>
    <br>
    <h3> &nbsp; &nbsp; &nbsp; <b><i class="bi bi-folder2"></i> เพิ่มข้อมูลบทเรียน</b></h3>
    <center>
        <div class="shadow-lg p-3 mb-5 bg-light rounded" style="width: 90%;">
            <br>
                <h4><b>บทเรียนคอมพิวเตอร์ช่วยสอน (CAI) เรื่อง อุปกรณ์ระบบเครือข่าย</b></h4>
                <form action="action_edituser.php" method="post">
                <div style="width: 80%; text-align: left; ">
                    <br>
                    <div class="mb-3 row">
                        <label for="input">ชื่อวิชา / ข้อสอบ : </label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="" name="namelesson" value="<?php echo $data['subject']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="input">เอกสารประกอบการสอน 1 : </label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="" name="doment1" value="<?php echo $data['documents1']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="input">เอกสารประกอบการสอน 2 : </label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="" name="doment2" value="<?php echo $data['documents2']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="input">จำนวนข้อสอบ : </label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="" name="numexam" value="<?php echo $data['num_exam']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="input">คะแนนเต็ม : </label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="" name="sroce" value="<?php echo $data['full_score']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="input">เกณฑ์ผ่าน : </label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="" name="passcriteria" value="<?php echo $data['pass_criteria']; ?>">
                        </div>
                    </div>
                    <div class="mb-3">
                        <small id="fileHelpId" class="form-text text-muted">อัพโหลดรูปภาพของบทเรียน :</small>
                        <input type="file" name="subPic" id="fileToUpload" value="<?php echo $data['pic_subject'];?>">
                    </div>
                    <div class="mb-3">
                        <small id="fileHelpId" class="form-text text-muted">อัพโหลดวิดีโอของบทเรียน :</small>
                        <input type="file" name="vedio" id="fileToUpload" value="<?php echo $data['video'];?>">
                        <input type="hidden" name="subidd" value="<?php echo $data['subjectId']; ?>">
                    </div>
                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-success"><i class="bi bi-download"></i> &nbsp; SAVE</button>
                    </div>
                </div>
                </form>
            <br>
        </div>
    </center>

</body>
<?php include('../nav_footter.php'); ?>
</html>