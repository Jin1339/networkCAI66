<?php
    session_start();
    include('connect.php');
    $userId = $_SESSION['id']; //แก้ไขเลข subjectId
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
    <?php error_reporting(E_ERROR | E_PARSE); ?>
    <?php include('navuser_ontop.php'); ?>
    <br>
    <br>
    <br>
    <br>
    <center>
        <table style="width: 80%;">
            <tr>
                <td>
                    <a href="detail_user.php" class="btn btn-outline-dark"><i class="bi bi-chevron-double-left"></i>BACK</a>
                </td>
                <td style="text-align: right;">
                    <a href="profile_report.php" class="btn btn-outline-dark">NEXT <i class="bi bi-chevron-double-right"></i></a>
                </td>
            </tr>
        </table>
        <br>
        <div class="card text-center" style="width: 70%;">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="profile.php">ประวัติบทเรียนที่ศึกษา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile_report.php">
                            <font color="#000000">ผลการประเมินการเรียน</font>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- ดึงตารางรายวิชา โชว์ข้อมูลทั้งหมด -->
            <?php 
                $sqlall = "SELECT * FROM tbl_subject,tbl_rptsubject WHERE tbl_subject.subjectId = tbl_rptsubject.subjectId AND tbl_rptsubject.userId = $userId";
                $q_all = mysqli_query($con, $sqlall);
            ?>
            <center>
                <!-- ถ้าไม่มีข้อมูลตารางรายวิชา ไม่พบข้อมูล -->
                <!-- ถ้ามีข้อมูลตารางรายวิชา โชว์ข้อมูลทั้งหมด -->
                <?php
                    if(mysqli_num_rows($q_all)==0){ ?>
                <div class="col-sm-6">
                    <div class="card bg-light mb-3" style="max-width: 25rem; text-align: right;">
                        <div class="card-header" style="text-align: left;">ไม่พบข้อมูล</div>
                        <div class="card-body" style="text-align: left;">
                            <h3 style="text-align: center;"><i class="bi bi-chat-right-dots"></i></h3>
                        </div>
                    </div>
                </div>
                <?php
                    }else{
                    while ($row = mysqli_fetch_array($q_all)) { ?>
                <table style="width: 90%;">
                    <tr>
                        <td style="width: 20%; text-align: left;" valign="top">
                            <img src="images/<?php echo $row['pic_subject']; ?>" width="150px">
                        </td>
                        <br>
                        <td style="width: 50%; text-align: left;" valign="middle"><?php echo $row['subject']; ?></td>
                        <td style="width: 10%; text-align: center;" valign="middle">
                            <?php if ($row['subjectId'] != "") { ?>
                                <h1><i class="bi bi-toggle-on"></i></h1>
                            <?php } else { ?>
                                <i class="bi bi-toggle-off"></i>
                            <?php
                                }
                            ?>
                        </td>
                        <td style="width: 10%; text-align: center;" valign="middle">
                            <?php if ($row['subjectId'] == 1) { ?>
                                <a href="pretest.php" role="button">
                                    <font color="#000000">
                                        <h1><i class="bi bi-box-arrow-in-right"></i></h1>
                                    </font>
                                </a>
                            <?php } else if ($row['subjectId'] == 2) { ?>
                                <a href="final_test.php" role="button">
                                    <font color="#000000">
                                        <h1><i class="bi bi-box-arrow-in-right"></i></h1>
                                    </font>
                                </a>
                            <?php } else if ($row['subjectId'] == 3) { ?>
                                <a href="content.php" role="button">
                                    <font color="#000000">
                                        <h1><i class="bi bi-box-arrow-in-right"></i></h1>
                                    </font>
                                </a>
                            <?php } else if ($row['subjectId'] == 4) { ?>
                                <a href="content.php" role="button">
                                    <font color="#000000">
                                        <h1><i class="bi bi-box-arrow-in-right"></i></h1>
                                    </font>
                                </a>
                            <?php } else if ($row['subjectId'] == 5) { ?>
                                <a href="content.php" role="button">
                                    <font color="#000000">
                                        <h1><i class="bi bi-box-arrow-in-right"></i></h1>
                                    </font>
                                </a>
                            <?php } else { ?>
                                <a role="button">
                                    <font color="#000000">
                                        <h1><i class="bi bi-box-arrow-in-right"></i></h1>
                                    </font>
                                </a>
                            <?php
                                }
                            ?>
                        </td>
                    </tr>
                </table>
                <br>
                <?php
                    }
                ?>
                <?php
                    }
                ?>
            </center>
        </div>
    </center>
    <br>
</body>
<?php include('nav_footter.php'); ?>

</html>