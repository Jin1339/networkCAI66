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
                    <a href="profile.php" class="btn btn-outline-dark"><i class="bi bi-chevron-double-left"></i> BACK</a>
                </td>
                <td style="text-align: right;">
                    <a href="index.php" class="btn btn-outline-dark">NEXT <i
                            class="bi bi-chevron-double-right"></i></a>
                </td>
            </tr>
        </table>
        <br>
        <?php
            $userId = $_SESSION['id']; //แก้ไขเลข subjectId
            $sql = "SELECT * FROM tbl_subject, tbl_rptpercent WHERE tbl_subject.subjectId =  tbl_rptpercent.subjectId AND tbl_rptpercent.userId ='$userId'"; 
            $q = mysqli_query($con, $sql);
        ?>
        <div class="card text-center" style="width: 70%;">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="true" href="profile.php"><font color="#000000">ประวัติบทเรียนที่ศึกษา</font></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="profile_report.php"><font color="#000000">ผลการประเมินการเรียน</font></a>
                    </li>
                </ul>
            </div>
            <div class="card-body" style="text-align: left;">
                <h4 class="card-title"><b><i class="bi bi-window-stack"></i> <font color="#000000">ผลการประเมินการเรียน</font></a></b></h4>
                <?php
                if(mysqli_num_rows($q)==0){
                ?>
                    
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
                    while ($row = mysqli_fetch_array($q)) {
                ?>
                    <center>
                        <table style="width: 95%;">
                            <tr>
                                <td style="width: 40%; text-align: left;" valign="middle">
                                    <b><?php echo $row['subject']; ?></b>
                                </td>
                                <br>
                                <td style="width: 52%; text-align: left;" valign="middle" >
                                    <?php
                                        $subjectId = $row['subjectId'];
                                    ?>
                                        <table style="width: 100%;">
                                            <tr>
                                                <td style="width: 50%; text-align: left;">คิดเป็นร้อยละ <?php echo $row['percent_score']; ?></td>
                                                <td style="width: 50%; text-align: right;">เกณฑ์ผ่านร้อยละ <?php echo $row['percent_criteria']; ?></td>
                                            </tr>
                                        </table>
                                        <?php
                                        if($userId != ''){
                                            if($row['subjectId']==1){ ?>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-label="Default striped example" style="width: <?php echo $row['percent_score']; ?>%" aria-valuenow="<?php echo $row['percent_score']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            <?php
                                            }else if($row['subjectId']==2){
                                                ?>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-label="Default striped example" style="width: <?php echo $row['percent_score']; ?>%" aria-valuenow="<?php echo $row['percent_score']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            <?php
                                                }else if($row['subjectId']==3){
                                            ?>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" aria-label="Default striped example" style="width: <?php echo $row['percent_score']; ?>%" aria-valuenow="<?php echo $row['percent_score']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            <?php
                                                }else if($row['subjectId']==4){
                                            ?>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" aria-label="Default striped example" style="width: <?php echo $row['percent_score']; ?>%" aria-valuenow="<?php echo $row['percent_score']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            <?php
                                                }else if($row['subjectId']==5){
                                            ?>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-label="Default striped example" style="width: <?php echo $row['percent_score']; ?>%" aria-valuenow="<?php echo $row['percent_score']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            <?php
                                                }else{?>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>                                            
                                            <?php
                                                }
                                            ?>
                                        <?php    
                                        }
                                        ?>
                                </td>
                                <td style="width: 8%; text-align: right;" valign="middle">
                                    <?php
                                        $adm_results = $row['adm_results'];
                                        if($adm_results=='Pass'){ ?>
                                        <h1><font color="#006600"><i class="bi bi-check-circle-fill"></i></font></h1>
                                    <?php
                                        }else{?>
                                        <h1><font color="RED"><i class="bi bi-x-circle-fill"></i></font></h1>
                                    <?php
                                        }
                                    ?>
                                </td>
                            </tr>
                        </table>
                    </center>
            <?php
                    }
                }
            ?>

            </div>
        </div>
    </center>
    <br>
</body>
<?php include('nav_footter.php'); ?>

</html>
    <!-- <h4 class="card-title"><b><i class="bi bi-window-stack"></i> ผลการการประเมินการเรียน</b></h4>
    
