<?php
    include('../connect.php');
    $sql = "SELECT * FROM tbl_user ORDER BY userId";
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
        if(mysqli_num_rows($q)==0){
            echo"No Data";
        }else{

        }
    ?>
    <h3> &nbsp; &nbsp; &nbsp; <b><i class="bi bi-person-bounding-box"></i> รายชื่อผู้ใช้งาน/ดูผลสอบ</b></h3>
    <center>
        <div class="shadow-lg p-3 mb-5 bg-light rounded" style="width: 90%;">
            <br>
            <table style="width: 100%; ">
                <tr>
                    <td style="width: 50%; text-align: left;">
                        รายชื่อผู้ใช้งาน &nbsp; <a name="" id="" class="btn btn-primary" href="add_useradmin.php" role="button">
                            <i class="bi bi-plus-lg"></i> เพิ่มข้อมูล</a>
                    </td>
                    <td style="width: 50%; text-align: right;">
                        <form class="d-flex" role="search" action="search_user.php">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="q">
                            <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </td>
                </tr>
            </table>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th style="width: 5%; text-align: center;">#</th>
                        <th style="width: 25%; text-align: left;">ชื่อ - นามสกุล</th>
                        <th style="width: 20%; text-align: left;">Email</th>
                        <th style="width: 20%; text-align: left;">เบอร์โทรศัพท์</th>
                        <th style="width: 10%; text-align: center;">สถานะผู้ใช้งาน</th>
                        <th style="width: 10%; text-align: center;">ผลการเรียน</th>
                        <th style="width: 5%; text-align: center;">แก้ไข</th>
                        <th style="width: 5%; text-align: center;">ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($data = mysqli_fetch_array($q)) {
                    ?>
                        <tr>
                            <td style="width: 5%; text-align: center;"><?php echo $data['userId']; ?></td>
                            <td style="width: 25%; text-align: left;">
                                <a href="profile_admin.php?userid=<?php echo $data['userId']; ?>">
                                    <font color="#000000"><?php echo $data['name']; ?> <?php echo $data['lastname']; ?> </font>
                                </a>
                            </td>
                            <td style="width: 20%; text-align: left;"><?php echo $data['email']; ?></td>
                            <td style="width: 20%; text-align: left;"><?php echo $data['tel']; ?></td>
                            <td style="width: 10%; text-align: center;">
                                <?php 
                                if($data['id_statususer'] == 1){
                                    echo "ผู้เรียน";
                                }else{
                                    echo "Admin";
                                }
                                ?>
                            </td>
                            <td style="width: 10%; text-align: center;">
                                <a href="grade_admin.php?userid=<?php echo $data['userId']; ?>" class="btn btn-success">
                                    <i class="bi bi-card-checklist"></i></i>
                                </a>
                            </td>
                            <td style="width: 5%; text-align: center;">
                                <a href="edit_useradmin.php?userid=<?php echo $data['userId']; ?>" class="btn btn-warning">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                            <td style="width: 5%; text-align: center;">
                                <a href="delet_useradmin.php?userid=<?php echo $data['userId']; ?>" class="btn btn-danger">
                                    <i class="bi bi-dash-lg"></i>
                                </a>
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
</body>
<?php include('../nav_footter.php'); ?>

</html>