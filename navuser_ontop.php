<?php
    include('connect.php');
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
        <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top">
            <div class="container">
                <button class="navbar-toggler hidden-lg-up" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <a class="navbar-brand"><font color="#ffffff"><b>CAI</b></font></a>
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <font color="#ffffff">
                                    <i class="bi bi-house-door"></i> หน้าหลัก
                                </font>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Ins_foruse.php">
                                <font color="#ffffff">
                                    <i class="bi bi-gear-fill"></i> คำแนะนำการใช้งาน
                                </font>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="learning_objectives.php">
                                <font color="#ffffff">
                                    <i class="bi bi-card-list"></i> จุดประสงค์การเรียนรู้
                                </font>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pretest.php">
                            <font color="#ffffff">
                                    <i class="bi bi-clipboard2-pulse-fill"></i> บทเรียน
                                </font>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="forum.php">
                                <font color="#ffffff">
                                    <i class="bi bi-easel2-fill"></i> กระดานสนทนา
                                </font>
                            </a>
                        </li>
                    </ul>
                    <?php
                        session_start();
                        if($_SESSION['email']){
                            $id = $_SESSION['id'];
                        ?>
                            <a href="detail_user.php?id=<?php echo $id; ?>" class="btn btn-danger" role="button">
                                <i class="bi bi-person-circle"></i> &nbsp;
                                <?php echo $_SESSION['fName']; ?>
                                <?php echo $_SESSION['lName']; ?> 
                            </a>
                        &nbsp;
                        &nbsp;
                        <br>
                        <br>
                        <?php
                        $statusid = $_SESSION['id_statususer'];
                            if($statusid!=2){
                                echo"";
                            }else{ ?>
                                <div class="vr"></div>
                                &nbsp;
                                &nbsp;
                                <a href="admin\index_admin.php" class="btn btn-danger" role="button"><i class="bi bi-bank2"></i></a> &nbsp;&nbsp;
                        <?php
                            }                      
                        ?>
                        <div class="vr"></div>
                        &nbsp;
                        &nbsp;
                        <a href="logout.php" class="btn btn-dark" role="button">LOGOUT</a> &nbsp;&nbsp;
                        <br>
                        <?php
                        }else{?>
                            <a href="login.php" class="btn btn-outline-light" role="button">LOGIN</a> &nbsp;&nbsp;
                            <a href="register.php" class="btn btn-warning" role="button">Sign-UP</a>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </nav>

    </body>

    </html>