<?php
    include('../connect.php');
    $subid = $_GET['subid'];
    $sql = "SELECT * FROM tbl_subject WHERE subjectId = $subid";
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
    <title>จัดการบทเรียน / ข้อสอบ</title>
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
    <br>
    <br>
    <?php include('navbar_admin.php'); ?>
    <h3> &nbsp; &nbsp; &nbsp; <b><i class="bi bi-folder2"></i> รายละเอียดข้อมูลบทเรียน</b></h3>
    <center>
        <div class="shadow-lg p-3 mb-5 bg-light rounded" style="width: 90%;">
            <br>
                <div class="card" style="width: 50rem;">
                <br>
                <center>
                    <img src="..\images\<?php echo $data['pic_subject']; ?>" width="300px">
                </center>
                    <div class="card-body" style="text-align: left;">
                        <h5 class="card-title"><?php echo $data['subject'] ?></h5>
                    </div>
                    <ul class="list-group list-group-flush" style="text-align: left;">
                        <li class="list-group-item">เอกสารประกอบการเรียน 1 : <?php echo $data['documents1'] ?></li>
                        <li class="list-group-item">เอกสารประกอบการเรียน 2 : <?php echo $data['documents2'] ?></li>
                        <li class="list-group-item">วิดีโอสอน : <?php echo $data['video'] ?></li>
                        <li class="list-group-item">จำนวนข้อสอบ : <?php echo $data['num_exam'] ?></li>
                        <li class="list-group-item">คะแนนเต็ม : <?php echo $data['full_score'] ?></li>
                        <li class="list-group-item">เกณฑ์ผ่าน : <?php echo $data['pass_criteria'] ?></li>
                    </ul>
                    <a href="exam_admin.php?subid=<?php echo $data['subjectId']; ?>" class="btn btn-primary">ข้อสอบ / ตัวเลือก</a>
                </div>
            <br>
        </div>

    </center>

</body>
<?php include('../nav_footter.php'); ?>

</html>