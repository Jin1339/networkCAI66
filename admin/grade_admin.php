<?php
    include('../connect.php');
    $userid = $_GET['userid'];
    $sql = "SELECT * FROM tbl_user,tbl_answermyuser WHERE tbl_user.userId = tbl_answermyuser.id_user AND tbl_user.userId = $userid";
    $q = mysqli_query($con , $sql);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>จัดการผู้ใช้งาน</title>
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
    <?php
        if(mysqli_num_rows($q)==0){ ?>
            <h3> &nbsp; &nbsp; &nbsp; <b><i class="bi bi-person-bounding-box"></i> ผลสอบของผู้เรียน</b></h3>
            <center>
                <div class="shadow-lg p-3 mb-5 bg-light rounded" style="width: 90%;">
                    <br>
                        <table style="width: 70%; text-align: left;">
                            <thead>
                                <tr>
                                    <th style="width: 75%; text-align: center;"><h3>รายการผลการสอบ</h3></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="width: 75%; text-align: center;">
                                    <td><h4><font color="Red">***ไม่มีคะแนนการทำแบบทดสอบ</font></h4></td>
                                </tr>
                            </tbody>
                        </table>
                    <br>
                </div>
            </center>

    <?php
        }else{  ?>
            <h3> &nbsp; &nbsp; &nbsp; <b><i class="bi bi-person-bounding-box"></i> ผลสอบของผู้เรียน</b></h3>
            <center>
                <div class="shadow-lg p-3 mb-5 bg-light rounded" style="width: 90%;">
                    <br>
                        <table style="width: 70%; text-align: left;">
                            <thead>
                                <tr>
                                    <th style="width: 75%; text-align: center;"><h3>รายการผลการสอบ</h3></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($data = mysqli_fetch_array($q)) 
                                { 
                                    $subid = $data['subjectId'];
                                    $userid = $data['userId'];
                                    if($data['subjectId']==1){
                                        $subname = "แบบทดสอบก่อนเรียน";
                                    }else if($data['subjectId']==2){
                                        $subname = "แบบทดสอบหลังเรียน";
                                    }else if($data['subjectId']==3){
                                        $subname = "บทเรียนที่ 1 เรื่อง อุปกรณ์เชื่อมต่อเครือข่ายคอมพิวเตอร์ (Computer network interface device)";
                                    }else if($data['subjectId']==4){
                                        $subname = "บทเรียนที่ 2 เรื่อง อุปกรณ์รักษาความปลอดภัย (Security device)";
                                    }else if($data['subjectId']==5){
                                        $subname = "บทเรียนที่ 3 เรื่อง อุปกรณ์ไร้สาย (Wireless device)";
                                    }else{
                                        echo "Not Database";
                                    }

                                    $sqlshow = "SELECT * FROM tbl_rptsubject,tbl_subject WHERE tbl_rptsubject.subjectId = tbl_subject.subjectId AND tbl_rptsubject.userId = $userid AND tbl_rptsubject.subjectId=$subid";
                                    $qshow = mysqli_query($con, $sqlshow);
                                    $datashow = mysqli_fetch_array($qshow);
                                ?>
                                    <tr>
                                        <td style="width: 80%; text-align: left;">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4>
                                                    <b>หัวข้อ : </b>
                                                    <?php echo $subname; ?>
                                                    </h4>
                                                    <b>ชื่อ - นามสกุล : </b>
                                                    <?php echo $data['name']; ?> &nbsp; <?php echo $data['lastname']; ?>  <br>
                                                    <b>วันที่สอบ : </b>
                                                    <?php echo $data['datetime']; ?><br>
                                                    <b>คะแนน : </b>
                                                    <?php echo $datashow['number']; ?><br>
                                                    <b>เกณฑ์ผ่าน : </b>
                                                    <?php echo $datashow['pass_criteria']; ?><br>
                                                    <b>คะแนนที่ได้ : </b>
                                                    <?php echo $datashow['score']; ?><br>
                                                    <b>เกณฑ์การสอบ : </b>
                                                    <?php echo $datashow['adm_results']; ?><br>
                                                </div>
                                            </div>
                                            <br>
                                        </td>
                                        <td style="width: 20%; text-align: center;">
                                            <?php if($datashow['adm_results']=='Fail'){ ?>
                                                <h1><font color="#FF0000"><b><i class="bi bi-x-circle"></i></b></font></h1>
                                            <?php
                                            }else{ ?>
                                                <h1><font color="#66CC00"><b><i class="bi bi-check2-circle"></i></b></font></h1>
                                            <?php } ?>
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
        <?php
        }?>

</body>
<?php include('../nav_footter.php'); ?>

</html>