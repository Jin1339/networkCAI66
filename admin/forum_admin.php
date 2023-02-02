<?php
    include('../connect.php');
    $sql = "SELECT * FROM tbl_question ORDER BY question_Id";
    $q = mysqli_query($con, $sql);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>จัดการกระดานสนทนา</title>
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
    <h3> &nbsp; &nbsp; &nbsp; <b><i class="bi bi-easel2"></i> จัดการข้อมูลกระดานสนทนา/ตอบกลับการสนทนา</b></h3>
    <center>
        <div class="shadow-lg p-3 mb-5 bg-light rounded" style="width: 90%;">
            <br>
            <table style="width: 100%; ">
                <tr>
                    <td style="width: 50%; text-align: left;">
                        ตั้งหัวข้อกระดานสนทนา &nbsp; <a name="" id="" class="btn btn-primary" href="forum_addQadmin.php" role="button">
                            <i class="bi bi-plus-lg"></i> เพิ่มข้อมูล</a>
                    </td>
                    <td style="width: 50%; text-align: right;">
                        <form class="d-flex" role="search" action="search_forum.php">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="q">
                            <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </td>
                </tr>
            </table>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th style="width: 5%; text-align: center;" valign="top">#</th>
                        <th style="width: 15%; text-align: left;" valign="top">ชื่อผู้ตอบ</th>
                        <th style="width: 20%; text-align: left;" valign="top">ชื่อกระทู้</th>
                        <th style="width: 25%; text-align: left;" valign="top">รายละเอียด</th>
                        <th style="width: 15%; text-align: left;" valign="top">วัน-เวลาการตั้งกระทู้</th>
                        <th style="width: 15%; text-align: center;" valign="top">ตอบกลับความคิดเห็น</th>
                        <th style="width: 5%; text-align: center;" valign="top">แก้ไข</th>
                        <th style="width: 5%; text-align: center;" valign="top">ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($data = mysqli_fetch_array($q)){ ?>
                            <tr>
                                <td style="width: 5%; text-align: center;" valign="top"><?php echo $data['question_Id']; ?></td>
                                <td style="width: 15%; text-align: left;" valign="top"><?php echo $data['user_name']; ?></td>
                                <td style="width: 20%; text-align: left;" valign="top">
                                    <?php echo $data['topic_title']; ?>
                                </td>
                                <td style="width: 25%; text-align: left;" valign="top"> 
                                    <?php echo $data['detail_question']; ?>
                                </td>
                                <td style="width: 15%; text-align: left;" valign="top"><?php echo $data['time_question']; ?></td>
                                <td style="width: 15%; text-align: center;" valign="top">
                                    <a href="forum_addcadmin.php?Q_Id=<?php echo $data['question_Id']; ?>" class="btn btn-success"><i class="bi bi-envelope-paper"></i></i></a>
                                </td>
                                <td style="width: 5%; text-align: center;" valign="top">
                                    <a href="forum_editQadmin.php?Q_Id=<?php echo $data['question_Id']; ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                </td>
                                <td style="width: 5%; text-align: center;" valign="top">
                                    <a href="forum_deletQadmin.php?Q_Id=<?php echo $data['question_Id']; ?>" class="btn btn-danger"><i class="bi bi-dash-lg"></i></a>
                                </td>
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