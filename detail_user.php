<?php
    include('connect.php');
    session_start();
    echo $cid = $_SESSION['id'];
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
    <title>Profile</title>
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
    <div>
        <?php include('navuser_ontop.php'); ?>
    </div>
    <br>
    <br>
    <br>
    <br>
    <center>
        <table class="table table-hover" style="width: 50%;" style="background-color:#000000;">
            <thead>
                <tr>
                    <th>
                        <font face="PK Samut Songkhram">
                            <h3>ข้อมูลส่วนตัวของ
                                <?php echo $_SESSION['fName']; ?>
                                <?php echo $_SESSION['lName']; ?>
                            </h3>
                        </font>
                    </th>
                    <td align="right">
                        <?php
                    if($_SESSION['userpic']){ ?>
                        <img src="images\<?php echo $data['userpic']; ?>" width="150px">
                        <?php
                    }else{ ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                            class="bi bi-person-square" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path
                                d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
                        </svg>
                        <?php
                    }
                    ?>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width: 50%;">Name : </td>
                    <td style="width: 50%;">
                        <?php echo $data['name']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%;">Surname :</td>
                    <td style="width: 50%;">
                        <?php echo $data['lastname']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%;">sex :</td>
                    <td style="width: 50%;">
                        <?php echo $data['sex']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%;">Education : </td>
                    <td style="width: 50%;">
                        <?php echo $data['educate']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%;">Tel : </td>
                    <td style="width: 50%;">
                        <?php echo $data['tel']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%;">Email : </td>
                    <td style="width: 50%;">
                        <?php echo $data['email']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%;">Password :</td>
                    <td style="width: 50%;">******</td>
                </tr>
            </tbody>
        </table>
        <div style="width: 60%; text-align: right;">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Edit Profile
            </button>
    
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Would you like to correct your personal information?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary"
                                onclick="location.href='edituser.php?id=<?php echo $data['userId']; ?>'">OK</button>
                        </div>
                    </div>
                </div>
            </div>
            <a name="" id="" class="btn btn-primary" href="profile.php" role="button">ประวัติการใช้งาน</a>
        </div>
    </center>
    <br>
</body>
<?php include('nav_footter.php'); ?>

</html>