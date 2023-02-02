<?php
  include('../connect.php');
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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Chakra+Petch">
    <style>
    body {
        font-family: Chakra Petch;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        &nbsp; &nbsp; &nbsp; &nbsp;
        <a class="navbar-brand" href="index_admin.php"><h3><i class="bi bi-house-door-fill"></i> HOME</h3></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header bg-dark">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><font color="#ffffff">CAI</font></h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body bg-dark">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" href="../index.php"><i class="bi bi-ui-radios"></i> จัดการระบบหน้าบ้าน</a>
                </li>
              <li class="nav-item">
                <a class="nav-link active" href="lesson_admin.php"><i class="bi bi-folder2"></i> จัดการบทเรียน/ข้อสอบ</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link active" href="user_admin.php"><i class="bi bi-person-bounding-box"></i> จัดการผู้ใช้งาน</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link active" href="forum_admin.php"><i class="bi bi-easel2"></i> จัดการกระดานสนทนา</a>
              </li>
                              <li class="nav-item">
                    <a class="nav-link active" href="../logout.php"><i class="bi bi-box-arrow-right"></i> ออกจากระบบ</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <br>
    <br>
    <br>
</body>

</html>