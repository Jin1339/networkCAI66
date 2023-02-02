<?php
    include('../connect.php');
    session_start();
    $userid = $_GET['userid'];
    $sql = "SELECT * FROM tbl_user WHERE tbl_user.userId ='$userid'";
    $q = mysqli_query($con , $sql);
    $data = mysqli_fetch_array($q);
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
    <center>
        <table style="width: 90%;">
            <tr style="width: 100%;">
                <td style="width: 40%;">
                    <div class="alert alert-success" style="text-align: center;">
                        <div class="card-body">
                            <h4>
                                <b>ประวัติของ คุณ <?php echo $data['name']; ?> &nbsp; <?php echo $data['lastname']; ?></b>
                                <br> <br>
                                <img src="..\images\<?php echo $data['userpic']; ?>" width="200px">
                                <br>  <br>
                            </h4>
                        </div>
                        <div style="text-align: right;">
                            <a href="grade_admin.php?userid=<?php echo $data['userId']; ?>" class="btn btn-primary">
                                ผลการเรียน
                            </a>
                            <a href="edit_useradmin.php?userid=<?php echo $data['userId']; ?>" class="btn btn-warning">
                                แก้ไขข้อมูล
                            </a>
                            <a href="upforget_admin.php?userid=<?php echo $data['userId']; ?>" class="btn btn-danger">
                                แก้ไขรหัสผ่าน
                            </a>
                            &nbsp; &nbsp;
                        </div>
                        <br>
                    </div>
                </td>
                <td style="width: 10%;"></td>
                <td style="width: 40%;">
                    <div class="alert alert-success" style="text-align: center;">
                        <div class="card-body">
                            <h4>
                                <b>ประวัติของ คุณ <?php echo $data['name']; ?> &nbsp; <?php echo $data['lastname']; ?></b>
                                <br> <br>
                            </h4>
                            <br>
                            <b>ชื่อ - นามสกุล : </b>
                            <?php echo $data['name']; ?> &nbsp; <?php echo $data['lastname']; ?> <br>
                            <b>การศึกษา : </b>
                            <?php echo $data['educate']; ?><br>
                            <b>Email : </b>
                            <?php echo $data['email']; ?><br>
                            <b>เบอร์โทรศัพท์ : </b>
                            <?php echo $data['tel']; ?><br>
                            <b>สถานะผู้ใช้งาน : </b>
                            <?php 
                                if($data['id_statususer'] == 1){
                                    echo "ผู้เรียน";
                                }else{
                                    echo "Admin";
                                }
                            ?><br>
                            <b>เพศ: </b>
                            <?php echo $data['sex']; ?><br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                        <br>
                    </div>                    
                </td>
            </tr>
        </table>
    </center>

</body>
<?php include('../nav_footter.php'); ?>

</html>