<?php
    include('../connect.php');
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
    <?php include('navbar_admin.php'); ?>
    <br>
    <br>
    <h3> &nbsp; &nbsp; &nbsp; <b><i class="bi bi-folder2"></i> จัดการข้อมูลบทเรียน/ข้อสอบ/ตัวเลือก</b></h3>
    <center>

        <div class="shadow-lg p-3 mb-5 bg-light rounded" style="width: 90%;">
            <br>
            <table style="width: 100%; ">
                <tr>
                    <td style="width: 75%; text-align: right;">

                    </td>
                    <td style="width: 25%; text-align: right;">
                        <form method="get" action="search_lesson.php" class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                name="q">
                            <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </td>
                </tr>
            </table>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th style="width: 5%; text-align: center;">#</th>
                        <th style="width: 15%; text-align: center;">ภาพปก</th>
                        <th style="width: 40%; text-align: left;">ชื่อวิชา</th>
                        <th style="width: 10%; text-align: center;">เกณฑ์ผ่าน</th>
                        <th style="width: 10%; text-align: center;">ข้อสอบ</th>
                        <th style="width: 10%; text-align: center;">แก้ไข</th>
                        <th style="width: 10%; text-align: center;">ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            $q = $_GET['q'];
                            $sql = "SELECT * FROM `tbl_subject` WHERE `subject` LIKE '%$q%' ORDER BY `subjectId` DESC";
                            $result = mysqli_query($con, $sql);
                            while($data = mysqli_fetch_array($result)){ ?>
                    <tr>
                        <td style="width: 5%; text-align: center;"><?php echo $data['subjectId']; ?></td>
                        <td style="width: 15%; text-align: center;">
                            <img src="..\images\<?php echo $data['pic_subject']; ?>" width="150px">
                        </td>
                        <td style="width: 40%; text-align: left;"><?php echo $data['subject']; ?></td>
                        <td style="width: 10%; text-align: center;"><?php echo $data['pass_criteria']; ?> ข้อ</td>
                        <td style="width: 10%; text-align: center;"><a href="exam_admin.php" class="btn btn-primary"><i
                                    class="bi bi-plus-lg"></i></a></td>
                        <td style="width: 10%; text-align: center;"><a href="edit_lesson.php" class="btn btn-warning"><i
                                    class="bi bi-pencil-square"></i></a></td>
                        <td style="width: 10%; text-align: center;"><a href="" class="btn btn-danger"><i
                                    class="bi bi-dash-lg"></i></a></td>
                    </tr>
                    <?php
                            }
                            ?>
                </tbody>
            </table>
            <br>
        </div>

    </center>

</body>
<?php include('../nav_footter.php'); ?>

</html>