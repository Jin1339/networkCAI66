<?php
    include('../connect.php');
    $subid = $_GET['subid'];
    $sqlname = "SELECT * FROM tbl_subject WHERE	subjectId = 2";
    $qname = mysqli_query($con, $sqlname);
    $dataname = mysqli_fetch_array($qname);

    $sql = "SELECT * FROM tbl_afterstudytest WHERE Id = $subid";
    $q = mysqli_query($con, $sql);
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
    <title>จัดการการแก้ไขบทเรียน / ข้อสอบ</title>
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
    <h3> &nbsp; &nbsp; &nbsp; <b><i class="bi bi-folder2"></i> จัดการแก้ไขข้อมูลข้อสอบ/ตัวเลือก</b></h3>
    <center>
        <div class="card border-success mb-3" style="max-width: 50rem;">
        <div class="card-header" style="text-align: left;"><h5><b><?php echo $dataname['subject']; ?></b></h5></div>
        <div class="card-body text-success">
            <form action="action_editexam2.php" method="POST">
                <table class="table table-hover" style="width: 100%;">
                    <tr>
                        <td colspan="2">
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">คำถาม : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="namelesson" value="<?php echo $data['question']; ?>">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">ตัวเลือก A : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="choice1" value="<?php echo $data['choice_A']; ?>">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">ตัวเลือก B : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="choice2" value="<?php echo $data['choice_B']; ?>">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">ตัวเลือก C : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="choice3" value="<?php echo $data['choice_C']; ?>">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">ตัวเลือก D : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="choice4" value="<?php echo $data['choice_D']; ?>">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">เฉลยคำตอบ : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="answer" value="<?php echo $data['answer']; ?>">
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
                <div style="text-align: center;">
                    <input type="hidden" name="Id" value="<?php echo $data['Id']; ?>">
                    <button type="submit" class="btn btn-success"><i class="bi bi-download"></i> &nbsp; SAVE</button>
                </div>
            </form>
        </div>
        </div>      
    </center>
</body>
<?php include('../nav_footter.php'); ?>
</html>