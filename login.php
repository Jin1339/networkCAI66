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
        <div class="shadow-lg p-3 mb-5 bg-light rounded" style="width: 45%;">
            <strong>
                <br>
                <center>
                    <font color="#000000">
                        <h4><b>LOGIN</b></h4>
                    </font>
                </center>
                <br>
                <form action="action_login.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                            name="email">
                        <label for="floatingInput">Email address</label>
                        <div id="emailHelp" class="form-text" style="text-align: left;">
                            <font color="#000000">We'll never share your email with anyone else.</font>
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="Password" class="form-control" id="floatingPassword" placeholder="Password"
                            name="pwd" minlength="6" maxlength="8" required>
                        <label for="floatingPassword">Password</label>
                        <div class="form-text" style="text-align: left;"><a href="forget_password.php">
                                <font color="#000000"><i class="bi bi-pencil-square"></i> Forget password ?</font>
                            </a></div>
                    </div>
                    <br>
                    <div>
                        <button type="submit" class="btn btn-success"> LOGIN </button>
                        <br>
                        <br>
                    </div>
                </form>
            </strong>
        </div>
        <h5>หากท่านไม่มีบัญชีผู้ใช้งานหรือไม่ ? <a href="register.php">สร้างบัญชีผู้ใช้งานใหม่</a></h5>
    </center>
</body>
<?php include('nav_footter.php'); ?>

</html>