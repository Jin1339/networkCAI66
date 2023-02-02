
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget password</title>
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
    <?php include('navbar_admin.php'); ?>
    <br>
    <br>
    <br>
    <center>
        <div class="shadow-lg p-3 mb-5 bg-light rounded" role="alert" style="width: 50%;">
            <strong>
            <br>
            <center><h4><b>Forget password</b></h4></center>
            <br>
            <form action="action_forgetadmin.php" method="post">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                    <label for="floatingInput">Email address</label>
                    <div id="emailHelp" class="form-text" style="text-align: left;">กรุณากรอกอีเมล์ของคุณที่ลงทะเบียน</div>
                    <br>
                    <button type="submit" class="btn btn-outline-primary">รีเซ็ตรหัสผ่าน</button>
                    <br>
                </div>
            </form>
        </strong>
    </div>
    </center>
    <br>
</body>
<?php include('../nav_footter.php'); ?>
</html>