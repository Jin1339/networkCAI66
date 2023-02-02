<?php
    include('connect.php');
    session_start();
    $cid = $_GET['id'];
    $sql = "SELECT * FROM tbl_user WHERE tbl_user.userId ='$cid'";
    $q = mysqli_query($con , $sql);
    $data = mysqli_fetch_array($q);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
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
    <center>
        <br>
        <br>
        <br>
        <br>
        <center>
            <div class="alert alert-dark" role="alert" style="width: 50%;">
                    <B><h1>แก้ไขข้อมูลส่วนตัว</h1></B>
                    <br>
                    <form action="action_edituser.php" method="post" class="row g-3" enctype="multipart/form-data" name="upfile" id="upfile">
                        <div class="col-md-6" style="text-align:left;">
                            <label for="inputEmail4" class="form-label">Name :</label>
                            <input type="text" class="form-control" name="fName" id="inputEmail4" value="<?php echo $data['name']; ?>">
                        </div>
                        <div class="col-md-6" style="text-align:left;">
                            <label for="inputPassword4" class="form-label">Surname :</label>
                            <input type="text" class="form-control" name="lName" id="inputPassword4" value="<?php echo $data['lastname']; ?>">
                        </div>
                        <div class="col-md-6" style="text-align:left;">
                            <label for="inputEmail4" class="form-label">Email :</label>
                            <input type="email" class="form-control" name="email" id="inputEmail4" value="<?php echo $data['email']; ?>">
                        </div>
                        <div class="col-6" style="text-align:left;">
                            <label for="inputAddress" class="form-label">Tel :</label>
                            <input type="text" class="form-control" name="tel" id="inputAddress" value="<?php echo $data['tel']; ?>">
                        </div>
                        <div class="col-12" style="text-align:left;">
                            <label for="" class="form-label">ระดับการศึกษา</label>
                            <select class="form-select" name="edu" id="">
                              <option selected><?php echo $data['educate']; ?></option>
                              <option value="1">ประถมศึกษา</option>
                              <option value="2">มัธยมศึกษา</option>
                              <option value="3">ประกาศนียบัตรวิชาชีพ</option>
                              <option value="4">ประกาศนียบัตรวิชาชีพชั้นสูง</option>
                              <option value="5">ปริญญาตรี</option>
                            </select>
                        </div>
                        <div class="col-12" style="text-align:left;">
                            <img src="images/<?php echo $data['userpic']; ?>" width="150" height="150">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for=""></label>
                            <small id="fileHelpId" class="form-text text-muted">อัพโหลดรูปภาพของคุณ :</small>
                            <input type="file" name="userPic" id="fileToUpload" value="<?php echo $data['userpic'];?>">
                        </div>
                        <div class="col-12">
                            <input type="hidden" name="id" value="<?php echo $data['userId']; ?>">
                            <input type="submit" name="btn_edit" id="button" value="แก้ไขข้อมูล" class="btn btn-warning">
                        </div>                     
                    </form>
                </div>
        </center>
    </center>
</body>
<?php include('nav_footter.php'); ?>

</html>
