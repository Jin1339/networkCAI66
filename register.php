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
        <center>
            <div class="shadow-lg p-3 mb-5 bg-light rounded" role="alert" style="width: 50%;">
            <br>
                    <B><h1>REGISTER</h1></B>
                    <br>
                    <form action="action_register.php" method="post" class="row g-3" enctype="multipart/form-data" name="form1" id="form1">
                        <div class="col-md-6" style="text-align:left;">
                            <label for="inputEmail4" class="form-label">Name :</label>
                            <input type="text" class="form-control" name="fName" id="inputEmail4" placeholder="Name">
                        </div>
                        <div class="col-md-6" style="text-align:left;">
                            <label for="inputPassword4" class="form-label">Surname :</label>
                            <input type="text" class="form-control" name="lName" id="inputPassword4" placeholder="Surname">
                        </div>
                        <div class="col-md-6" style="text-align:left;">
                            <label for="inputEmail4" class="form-label">Email :</label>
                            <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="name@example.com">
                        </div>
                        <div class="col-6" style="text-align:left;">
                            <label for="inputAddress" class="form-label">Tel :</label>
                            <input type="text"  name="tel" class="form-control" placeholder="เบอร์โทรศัพท์ 10 หลัก" minlength="10" maxlength="10"  required> 
                        </div>
                        <div class="form-check" style="text-align:left;"> เพศ :
                            <input type="radio" name="sex" value="m"> ชาย
                            <input type="radio" name="sex" value="f"> หญิง
                        </div>
                        <div class="col-12" style="text-align:left;">
                            <label for="" class="form-label">ระดับการศึกษา</label>
                            <select class="form-select" name="edu" id="">
                              <option selected>--Select--</option>
                              <option value="1">ประถมศึกษา</option>
                              <option value="2">มัธยมศึกษา</option>
                              <option value="3">ประกาศนียบัตรวิชาชีพ</option>
                              <option value="4">ประกาศนียบัตรวิชาชีพชั้นสูง</option>
                              <option value="5">ปริญญาตรี</option>
                            </select>
                        </div>
                        <div class="col-12" style="text-align:left;">
                            <label for="inputAddress2" class="form-label">Password :</label>
                            <input type="Password"  name="password" class="form-control" placeholder="Your password must be 6-8 characters long." minlength="6" maxlength="8"  required> 
                            <br>
                        </div>
                        <div>
                            <label for="fileField">อัพโหลดรูปภาพของคุณ :</label>
                            <input type="file" name="userPic" id="fileToUpload">
                        </div>
                        <div class="col-12">
                            <input type="submit" name="btn_adduser" id="button" value="Sign in" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <h5><div id="emailHelp" class="form-text" style="text-align: center;">มีบัญชีผู้ใช้งานแล้ว ? 
                    <a href="login.php">ล็อกอินเข้าใช้งาน</a>
                </div></h5>
        </center>
    </center>
</body>
<?php include('nav_footter.php'); ?>
</html>