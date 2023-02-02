<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <table style="width: 90%; ">
        <tr style="width: 50%;">
            <td>
                <?php
                    session_start();
                    include('connect.php');
                    $userId = $_SESSION['id'];
                    $sql="SELECT * FROM `tbl_rptsubject` WHERE userId = $userId AND `subjectId` = 1";
                    $q = mysqli_query($con, $sql);
                    $data = mysqli_fetch_array($q);
                    //สร้างตัวแปรเก็บค่าข้อมูล id คำสั่งซื้อ
                    
                ?>
                <div class="alert alert-light" role="alert" style="width: 100%;">
                <h4 class="alert-heading">แบบทดสอบก่อนเรียน (Pre Test)!</h4>
                    วิธีการดำเนินการ : จงเลือกข้อที่ถูกต้องที่สุด 
                    
                    <table style="width: 100%;">
                        <tr>
                            <th><br>ข้อมสอบทั้งหมด</th>
                            <th><br>เกณฑ์การประเมินผล</th>
                        </tr>
                        <tr>
                            <td>
                                จำนวนข้อสอบ : 15 ข้อ
                                <br> คะแนน : 15 คะแนน
                                <br> คิดเป็นร้อยละ (%) : 100%
                            </td>
                            <td>
                                จำนวนข้อสอบ : 9 ข้อ
                                <br> คะแนน : 9 คะแนน
                                <br> คิดเป็นร้อยละ (%) : 60 %
                            </td>
                        </tr>
                    </table>
                <?php
                    $sql_user ="SELECT * FROM `tbl_user`,tbl_answermyuser WHERE tbl_answermyuser.id_user = tbl_user.userId AND tbl_user.userId = $userId AND tbl_answermyuser.subjectId = 1";
                    $q_user = mysqli_query($con, $sql_user);
                    $data_user = mysqli_fetch_array($q_user);
                ?>
                <hr>
                ผู้สอบ : <?php echo $data_user['name'];?> <?php echo $data_user['lastname'];?>
                    <br> Email : <?php echo $data_user['email'];?>
                    <br> วันที่ - เวลาที่เข้าสอบ : <?php echo $data_user['datetime'];?>
                </div>
            </td>
            <td style="width: 50%;">
                <div class="alert alert-light" role="alert" style="width: 100%;">
                <h4 class="alert-heading">รายงานผลการสอบ!</h4>
                <table class="table table-striped table-hover">
                    <?php
                        $sql_percent="SELECT * FROM `tbl_rptpercent` WHERE userId = $userId AND `subjectId` = 1";
                        $q_percent = mysqli_query($con, $sql_percent);
                        $data_percent = mysqli_fetch_array($q_percent);
                    ?>
                    <tr>
                        <td>ข้อสอบทั้งหมด</td>
                        <td><?php echo $data['number'];?> ข้อ</td>
                    </tr>
                    <tr>
                        <td>ตอบถูก</td>
                        <td><?php echo $data['number_correct'];?> ข้อ</td>
                    </tr>
                    <tr>
                        <td>ตอบไม่ถูก</td>
                        <td><?php echo $data['number_wrong'];?> ข้อ</td>
                    </tr>
                    <tr>
                        <td>คะแนนที่ได้</td>
                        <td><?php echo $data['score'];?> คะแนน</td>
                    </tr>
                    <tr>
                        <td>คิดเป็นร้อยละ (%)</td>
                        <td><?php echo $data_percent['percent_score'];?> %</td>
                    </tr>
                    <?php
                        $score = $data['score'];
                        if($score>=9){
                        ?>
                            <tr bgcolor="#228B22">
                                <td style="text-align: center;"><font color="#ffffff"><b>สรุป</b></font></td>
                                <td>
                                    <b>
                                    <font color="#ffffff"><?php echo $data['adm_results']; ?></font>
                                    </b>
                                </td>
                            </tr>
                        <?php
                        }else{
                        ?>
                            <tr bgcolor="#FF0000">
                                <td style="text-align: center;"><font color="#ffffff"><b>สรุป</b></font></td>
                                <td>
                                    <b>
                                    <font color="#ffffff"><?php echo $data['adm_results']; ?></font>
                                    </b>
                                </td>
                            </tr>     
                    <?php                       
                        }
                    ?>
                </table>    
            </div>
        </td>
    </tr>
    </table>
</center>
</body>
</html>