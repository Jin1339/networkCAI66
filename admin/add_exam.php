<?php
    include('../connect.php');
    $subid = $_GET['subid'];
    $sqlname = "SELECT * FROM tbl_subject WHERE	subjectId = $subid";
    $qname = mysqli_query($con, $sqlname);
    $dataname = mysqli_fetch_array($qname);
    if($subid==1){
        $sql = "SELECT * FROM tbl_prestudytest ORDER BY id";
        $q = mysqli_query($con , $sql);
    }else if($subid==2){
        $sql = "SELECT * FROM tbl_afterstudytest ORDER BY Id";
        $q = mysqli_query($con , $sql);
    }else if($subid==3){
        $sql = "SELECT * FROM tbl_lesson1 ORDER BY Id";
        $q = mysqli_query($con , $sql);
    }else if($subid==4){
        $sql = "SELECT * FROM tbl_lesson2 ORDER BY Id";
        $q = mysqli_query($con , $sql);
    }else if($subid==5){
        $sql = "SELECT * FROM tbl_lesson3 ORDER BY Id";
        $q = mysqli_query($con , $sql);
    }else{
        echo "Data not show";
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>จัดการการเพิ่มบทเรียน / ข้อสอบ</title>
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
    <h3> &nbsp; &nbsp; &nbsp; <b><i class="bi bi-folder2"></i> จัดการเพิ่มข้อมูลข้อสอบ/ตัวเลือก</b></h3>
    <?php
        if($subid==1){

    ?>
    <center>
        <div class="card border-success mb-3" style="max-width: 50rem;">
        <div class="card-header" style="text-align: left;"><h5><b><?php echo $dataname['subject']; ?></b></h5></div>
        <div class="card-body text-success">
            <form action="action_addexam1.php" method="POST">
                <table class="table table-hover" style="width: 100%;">
                    <tr>
                        <td colspan="2">
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">คำถาม : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="namelesson" value="">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">ตัวเลือก A : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="choice1" value="">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">ตัวเลือก B : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="choice2" value="">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">ตัวเลือก C : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="choice3" value="">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">ตัวเลือก D : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="choice4" value="">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">เฉลยคำตอบ : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="answer" value="">
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
                <div style="text-align: center;">
                    <input type="hidden" name="subidd" value="<?php $subid; ?>">
                    <button type="submit" class="btn btn-success"><i class="bi bi-download"></i> &nbsp; SAVE</button>
                </div>
            </form>
        </div>
        </div>      
    </center>

    <?php    }else if($subid==2){ 
    ?>
    <center>
        <div class="card border-success mb-3" style="max-width: 50rem;">
        <div class="card-header" style="text-align: left;"><h5><b><?php echo $dataname['subject']; ?></b></h5></div>
        <div class="card-body text-success">
            <form action="action_addexam2.php" method="post">
                <table class="table table-hover" style="width: 100%;">
                    <tr>
                        <td colspan="2">
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">คำถาม : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="namelesson" value="">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">ตัวเลือก A : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="choice1" value="">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">ตัวเลือก B : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="choice2" value="">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">ตัวเลือก C : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="choice3" value="">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">ตัวเลือก D : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="choice4" value="">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">เฉลยคำตอบ : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="answer" value="">
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
                <div style="text-align: center;">
                    <input type="hidden" name="subidd" value="<?php $subid; ?>">
                    <button type="submit" class="btn btn-success"><i class="bi bi-download"></i> &nbsp; SAVE</button>
                </div>
            </form>
        </div>
        </div>      
    </center>
    <?php
        }else if($subid==3){
    ?>
    <center>
        <div class="card border-success mb-3" style="max-width: 50rem;">
        <div class="card-header" style="text-align: left;"><h5><b><?php echo $dataname['subject']; ?></b></h5></div>
        <div class="card-body text-success">
            <form action="action_addexam3.php" method="post">
                <table class="table table-hover" style="width: 100%;">
                    <tr>
                        <td colspan="2">
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">คำถาม : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="namelesson" value="">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">ตัวเลือก A : </label>
                                <input class="form-control" type="file" id="formFile" name="choice1">
                            </div>
                        </td>
                        <td>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">ตัวเลือก B : </label>
                                <input class="form-control" type="file" id="formFile" name="choice2">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">ตัวเลือก C : </label>
                                <input class="form-control" type="file" id="formFile" name="choice3">
                            </div>
                        </td>
                        <td>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">ตัวเลือก D : </label>
                                <input class="form-control" type="file" id="formFile" name="choice4">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">เฉลยคำตอบ : </label>
                                <input class="form-control" type="file" id="formFile" name="answer">
                            </div>
                        </td>
                    </tr>
                </table>
                <div style="text-align: center;">
                    <input type="hidden" name="subidd" value="<?php $subid ?>">
                    <button type="submit" class="btn btn-success"><i class="bi bi-download"></i> &nbsp; SAVE</button>
                </div>
            </form>
        </div>
        </div>      
    </center>
    <?php
        }else if($subid==4){
    ?>
    <center>
        <div class="card border-success mb-3" style="max-width: 50rem;">
        <div class="card-header" style="text-align: left;"><h5><b><?php echo $dataname['subject']; ?></b></h5></div>
        <div class="card-body text-success">
            <form action="action_addexam4.php" method="post">
                <table class="table table-hover" style="width: 100%;">
                    <tr>
                        <td colspan="2">
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">คำถาม : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="namelesson" value="">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">ตัวเลือก A : </label>
                                <input class="form-control" type="file" id="formFile" name="choice1">
                            </div>
                        </td>
                        <td>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">ตัวเลือก B : </label>
                                <input class="form-control" type="file" id="formFile" name="choice2">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">ตัวเลือก C : </label>
                                <input class="form-control" type="file" id="formFile" name="choice3">
                            </div>
                        </td>
                        <td>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">ตัวเลือก D : </label>
                                <input class="form-control" type="file" id="formFile" name="choice4">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">เฉลยคำตอบ : </label>
                                <input class="form-control" type="file" id="formFile" name="answer">
                            </div>
                        </td>
                    </tr>
                </table>
                <div style="text-align: center;">
                    <input type="hidden" name="subidd" value="<?php $subid ?>">
                    <button type="submit" class="btn btn-success"><i class="bi bi-download"></i> &nbsp; SAVE</button>
                </div>
            </form>
        </div>
        </div>      
    </center>
    <?php
        }else{
    ?>
    <center>
        <div class="card border-success mb-3" style="max-width: 50rem;">
        <div class="card-header" style="text-align: left;"><h5><b><?php echo $dataname['subject']; ?></b></h5></div>
        <div class="card-body text-success">
            <form action="action_addexam5.php" method="post">
                <table class="table table-hover" style="width: 100%;">
                    <tr>
                        <td colspan="2">
                            <div class="mb-3 row" style="text-align: left;">
                                <label for="input">คำถาม : </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="" name="namelesson" value="">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">ตัวเลือก A : </label>
                                <input class="form-control" type="file" id="formFile" name="choice1">
                            </div>
                        </td>
                        <td>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">ตัวเลือก B : </label>
                                <input class="form-control" type="file" id="formFile" name="choice2">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">ตัวเลือก C : </label>
                                <input class="form-control" type="file" id="formFile" name="choice3">
                            </div>
                        </td>
                        <td>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">ตัวเลือก D : </label>
                                <input class="form-control" type="file" id="formFile" name="choice4">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">เฉลยคำตอบ : </label>
                                <input class="form-control" type="file" id="formFile" name="answer">
                            </div>
                        </td>
                    </tr>
                </table>
                <div style="text-align: center;">
                    <input type="hidden" name="subidd" value="<?php $subid ?>">
                    <button type="submit" class="btn btn-success"><i class="bi bi-download"></i> &nbsp; SAVE</button>
                </div>
            </form>
        </div>
        </div>      
    </center>
    <?php
        }
    
    ?>
</body>
<?php include('../nav_footter.php'); ?>
</html>