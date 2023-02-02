<?php
include('../connect.php');
$QID = $_GET['Q_Id'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>จัดการตอบกลับกระทู้ความคิดเห็น</title>
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
    <center>
        <h4><b>ตอบกลับกระทู้ความคิดเห็น <i class="bi bi-chat-dots"></i></b></h4>
        <br>
        <?php
            $sqltoo = "SELECT * FROM tbl_question WHERE tbl_question.question_Id = $QID";
            $qtoo = mysqli_query($con, $sqltoo);
        ?>
        <!-- หัวข้อความคิดเห็น -->

        <div class="card bg-dark" style="width: 70%;">
            <br>
            <div class="row">
                <?php
            while ($rowtoo = mysqli_fetch_array($qtoo)) {
            ?>
                <div class="col-sm-6">
                    <div class="card bg-danger mb-3" style="max-width: 25rem; text-align: left;">
                        <div class="card-header">
                            <font color="#ffffff">USER : <?php echo $rowtoo['user_name']; ?></font>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <font color="#ffffff"><?php echo $rowtoo['topic_title']; ?> <i
                                        class="bi bi-question-circle"></i></font>
                            </h5>
                            <p class="card-text">
                                <font color="#ffffff"><?php echo $rowtoo['detail_question']; ?>
                                </font>
                            </p>
                        </div>
                        <div class="card-header" style="text-align: right;">
                            <font color="#ffffff">Time : <?php echo $rowtoo['time_question']; ?></font>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- คำตอบ -->
                </div>
                <?php
                    $sql_com = "SELECT * FROM tbl_comment WHERE question_Id = $QID";
                    $q_com = mysqli_query($con, $sql_com);
                    if(mysqli_num_rows($q_com)==0){ ?>
                        <div class="col-sm-6">
                            <!-- คำถาม -->
                        </div>
                        <div class="col-sm-6">
                            <div class="card bg-light mb-3" style="max-width: 25rem; text-align: right;">
                                <div class="card-header" style="text-align: left;">ไม่พบผู้ตอบกลับความคิดเห็น</div>
                                <div class="card-body" style="text-align: left;">
                                    <h3 style="text-align: center;"><i class="bi bi-chat-right-dots"></i></h3>
                                </div>
                            </div>
                        </div>
                    <?php
                    }else{
                    ?>
                        <?php 
                        while ($row_com = mysqli_fetch_array($q_com)) {
                        ?>
                            <div class="col-sm-6">
                                <!-- คำถาม -->
                            </div>
                            <div class="col-sm-6">
                                <div class="card bg-light mb-3" style="max-width: 25rem; text-align: right;">
                                    <div class="card-header" style="text-align: left;">USER : <?php echo $row_com['username_comment']; ?></div>
                                    <div class="card-body" style="text-align: left;">
                                        <p class="card-text"><i class="bi bi-chat-right-dots"></i> <?php echo $row_com['detail_comment']; ?>
                                        </p>
                                    </div>
                                    <div class="card-header" style="text-align: right;">
                                        Time : <?php echo $row_com['time_comment']; ?> &nbsp; &nbsp; &nbsp; &nbsp;
                                        <a href="forum_editC.php?CId=<?php echo $row_com['comment_Id']; ?>" id="" class="btn btn-warning"  role="button">แก้ไข</a>
                                        <a href="forum_deletCadmin.php?CId=<?php echo $row_com['comment_Id']; ?>" id="" class="btn btn-danger"  role="button">ลบ</a>
                                    </div>

                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    <?php
                    }
                    ?>
            </div>

            <!-- ฟอร์มการตอบกับความคิดเห็น -->
            <center>
                <br>
                <div class="card" style="width: 80%;">
                    <form action="action_forumAddCadmin.php" method="post">
                        <div class="card-body" style="text-align: left;">
                            <blockquote class="blockquote mb-0">
                                <table style="width: 95%; text-align: center;">
                                    <tr>
                                        <td style="text-align: right; width: 15%;" valign="top">
                                            <label for="" class="form-label">รายละเอียด &nbsp; &nbsp; &nbsp;</label>
                                        </td>
                                        <td valign="top">
                                            <textarea class="form-control" name="detail" id="" rows="3"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <br>
                                            <input type="hidden" name="Q_id"
                                                value="<?php echo $rowtoo['question_Id']; ?>">
                                        </td>
                                    </tr>
                                </table>
                            </blockquote>
                        </div>
                        <div class="card-footer text-muted">
                            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                            <button type="reset" class="btn btn-warning">ล้างข้อมูล</button>
                        </div>
                    </form>
                </div>
                <?php
            }
            ?>

            </center>
            <br>
        </div>
    </center>
    <br>
</body>
<?php include('../nav_footter.php'); ?>

</html>