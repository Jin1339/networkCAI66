<?php
session_start();
include('connect.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title></title>
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
    <?php
        $sql = "SELECT * FROM tbl_question ORDER BY question_Id";
        $q = mysqli_query($con, $sql);
    ?>

    
    <center>
    <?php

        if(mysqli_num_rows($q)==0){ ?>
        <div class="alert alert-danger" role="alert" style="width: 80%; text-align: center;">
            <strong>ไม่มีการเเสดงความคิดเห็น</strong> <i class="bi bi-megaphone"></i>
        </div>
        <?php
        }else{ ?>
            <div class="alert alert-light" role="alert" style="width: 80%; text-align: left;">
                <h3><i class="bi bi-easel2-fill"></i>  ตั้งกระทู้ความคิดเห็น บทเรียนคอมพิวเตอร์ช่วยสอน เรื่อง อุปกรณ์ระบบเครือข่าย</h3>
                <br>
    
                <table style="width: 30%; text-align: left;">
                    <tr>
                        <td style="width: 10%;" valign="top"></td>
                        <td style="width: 10%;" valign="top">
                            <h3>
                                <a href="forum_addQ.php" class="btn btn-primary" role="button"><i class="bi bi-cloud-plus"></i> COMMENT</a>
                            </h3>
                        </td>
                    </tr>
                </table>
                <!-- ข้อมูลหัวเรื่อง -->
                <?php 
                while ($row = mysqli_fetch_array($q)){
                ?>
                    <center>
                        <div class="shadow-lg p-3 mb-5 bg-body rounded" role="alert" style="width: 70%; text-align: left;">
                            <h4 class="alert-heading"><?php echo $row['topic_title']; ?> &nbsp; <i class="bi bi-chat-quote"></i></h4>
                            <p>
                                <?php echo $row['detail_question']; ?>
                                <br>
                                USER : <?php echo $row['user_name']; ?> &nbsp; &nbsp; TIME : <?php echo $row['time_question']; ?> 
                            </p>
                            <hr>
                            <p class="mb-0" style="text-align: right;">
                                <a name="" id="" class="btn btn-outline-primary" href="forum_addC.php?Q_Id=<?php echo $row['question_Id']; ?>" role="button"><i
                                class="bi bi-plus-circle"></i> Reply to Comments</a>
                            </p>
                        </div>
                    </center>
                <?php
                }
                ?>
            </div>
        </center>
        <br>
        <?php
        }
        ?>
</body>
<?php include('nav_footter.php'); ?>

</html>