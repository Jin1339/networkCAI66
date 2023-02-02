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
    <center>
        <div class="card" style="width: 60%;">
            <div class="card-header" style="text-align: left;">
                <h4><b>ตั้งกระทู้ความคิดเห็น <i class="bi bi-chat-dots"></i></b></h4>
            </div>
            <form action="action_forumAddQ.php" method="post">
            <div class="card-body" style="text-align: left;">
                <blockquote class="blockquote mb-0">
                    <table style="width: 95%; text-align: center;">
                        <tr>
                            <td style="text-align: right; width: 20%;" valign="top">
                                <label for="" class="form-label">ชื่อกระทู้ &nbsp; &nbsp;</label>
                            </td>
                            <td valign="top">
                                <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">    
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right; width: 20%;" valign="top">
                                <label for="" class="form-label">รายละเอียด &nbsp; &nbsp;</label>
                            </td>
                            <td valign="top">
                                <textarea class="form-control" name="detail" id="" rows="3"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right; width: 20%;" valign="top">
                            <br>
                                <label for="" class="form-label">ชื่อผู้ตั้งกระทู้ &nbsp; &nbsp;</label>
                            </td>
                            <td valign="top" >
                                <br>
                                <input type="text" class="form-control" name="nameuser" id="" aria-describedby="helpId" placeholder="">
                                <div id="emailHelp" class="form-text" style="text-align: left; color: red;">***สามารถใช้เป็นนามเเฝงได้ค่ะ...</div>
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

    </center>
    <br>
</body>
<?php include('nav_footter.php'); ?>

</html>