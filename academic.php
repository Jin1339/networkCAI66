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
    <title>Pre Test Results</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
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
    <center>
        <?php include('navuser_ontop.php'); ?>
        <br>
        <br>
        <br>
        <br>
        <?php
        $UserId = $_SESSION['id'];
        $Sql="SELECT * FROM `tbl_rptsubject` WHERE `userId` = $UserId";
        $q = mysqli_query($con , $Sql);
        $data = mysqli_fetch_array($q);
        if(!empty($q)){ 
        $score = $data['score'];
        if($score>=9){
            $alert = 1;
        }else{
            $alert = 0;
        }
        
        if($alert != 0){ ?>
        <center>
            <table style="width: 90%;">
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <center>
                            <div class="alert alert-success" role="alert" style="width: 60%;">
                                <div>
                                    <h1><i class="bi bi-check-circle-fill item-success"></i></h1>
                                    <h3>Well Done, You <b> Pass </b> the exam before class.</h3>
                                </div>
                                <h4>
                                    <a href="content.php" class="btn btn-outline-success"
                                        role="button">เข้าสู่บทเรียน</a>
                                </h4>
                            </div>
                        </center>
                        <?php
                        } else {
                        ?>
                        <center>
                            <div class="alert alert-danger" role="alert" style="width: 60%;">
                                <div>
                                    <h1><i class="bi bi-exclamation-triangle-fill"></i></h1>
                                    <h3>I'm sorry, You <b> Failed </b> the exam before class.</h3>
                                </div>
                                <h4>
                                    <a href="content.php" class="btn btn-outline-danger"
                                        role="button">เข้าสู่บทเรียน</a>
                                </h4>
                            </div>
                        </center>
                        <?php
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php include('conclusion.php'); ?>
                    </td>
                </tr>
            </table>

            </div>
            <?php
        }else{ ?>
            <center>
                <div class="alert alert-danger" role="alert" style="width: 60%;">
                    กรุณาเข้าทำเเบทดสอบก่อนเรียนก่อนถึงจะสามารถตรวจสอบคะแนนได้ค่ะ <a href="pretest.php"
                        class="alert-link">คลิก</a>
                </div>
            </center>
            <?php
        }
        ?>
        </center>
</body>
<?php include('nav_footter.php'); ?>

</html>