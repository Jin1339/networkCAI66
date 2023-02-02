<?php
    session_start();
    include('connect.php');
    $email = $_POST['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
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
    <br>
    <center>
        <div class="shadow-lg p-3 mb-5 bg-light rounded" role="alert" style="width: 50%;">
            <strong>
            <br>
            <center><h4><b>Forget password</b></h4></center>
            <br>
            <form action="action_forgetpwd.php" method="post">
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $email; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="Password" name="forget_pwd" class="form-control" placeholder="Your password must be 6-8 characters long." minlength="6" maxlength="8"  required> 
                    </div>
                </div>
                <div>
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                    <button type="submit" class="btn btn-outline-primary">รีเซ็ตรหัสผ่าน</button>
                </div>
                <br>
            </form>
        </strong>
    </div>
    <h5><div id="emailHelp" class="form-text" style="text-align: center;">มีบัญชีผู้ใช้งานแล้ว ? 
        <a href="login.php">ล็อกอินเข้าใช้งาน</a>
    </div></h5>
    </center>
    <br>
</body>
<?php include('nav_footter.php'); ?>

</html>