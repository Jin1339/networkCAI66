<?php
session_start();
?> 
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>ระบบ Admin หลังบ้าน</title>
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
    <h3> &nbsp; &nbsp; &nbsp; <b><i class="bi bi-card-list"></i> Dashboard</b></h3>
    <center>
        <div class="shadow-lg p-3 mb-5 bg-light rounded" style="width: 90%;">
            <br>
            <table style="width: 100%;">
                <tr>
                    <td style="width: 25%; text-align: center;">
                        <div class="col-sm-11" >
                            <div class="card" style="background-color: darkcyan;">
                                <div class="card-body">
                                    <table style="width: 100%; text-align: left;">
                                        <tr>
                                            <td style="width: 100%; text-align: center;"><font color="#ffffff"><h1><i class="bi bi-people-fill"></i></h1></font></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100%; text-align: center;"><p class="card-text"><font color="#ffffff">ผู้ใช้งาน</font> </p></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="card-footer bg-transparent"><a href="user_admin.php" class="btn btn-outline"><font color="#ffffff">More Info  <i class="bi bi-arrow-right-circle"></i></font></a></div>
                            </div>
                        </div>
                    </td>
                    <td style="width: 25%; text-align: center;">
                        <div class="col-sm-11" >
                            <div class="card" style="background-color: indianred;">
                                <div class="card-body">
                                    <table style="width: 100%; text-align: left;">
                                        <tr>
                                            <td style="width: 100%; text-align: center;"><font color="#ffffff"><h1><i class="bi bi-journals"></i></h1></font></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100%; text-align: center;"><p class="card-text"><font color="#ffffff">บทเรียน</font> </p></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="card-footer bg-transparent"><a href="lesson_admin.php" class="btn btn-outline"><font color="#ffffff">More Info  <i class="bi bi-arrow-right-circle"></i></font></a></div>
                            </div>
                        </div>
                    </td>
                    <td style="width: 25%; text-align: center;">
                        <div class="col-sm-11" >
                            <div class="card" style="background-color: steelblue;">
                                <div class="card-body">
                                    <table style="width: 100%; text-align: left;">
                                        <tr>
                                            <td style="width: 100%; text-align: center;"><font color="#ffffff"><h1><i class="bi bi-journal-text"></i></h1></font></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100%; text-align: center;"><p class="card-text"><font color="#ffffff">คำถาม</font> </p></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="card-footer bg-transparent"><a href="lesson_admin.php" class="btn btn-outline"><font color="#ffffff">More Info  <i class="bi bi-arrow-right-circle"></i></font></a></div>
                            </div>
                        </div>
                    <td style="width: 25%; text-align: center;">
                        <div class="col-sm-11" >
                            <div class="card" style="background-color: darksalmon;">
                                <div class="card-body">
                                    <table style="width: 100%; text-align: left;">
                                        <tr>
                                            <td style="width: 100%; text-align: center;"><font color="#ffffff"><h1><i class="bi bi-easel2"></i></h1></font></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100%; text-align: center;"><p class="card-text"><font color="#ffffff">กระดานสนทนา</font> </p></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="card-footer bg-transparent"><a href="forum_admin.php" class="btn btn-outline"><font color="#ffffff">More Info  <i class="bi bi-arrow-right-circle"></i></font></a></div>
                            </div>
                        </div>
                    </td>                    
                </tr>
            </table>
            <br>
        </div>

    </center>
</body>
<?php include('../nav_footter.php'); ?>
</html>