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
    <?php
        if($subid==1){
    ?>
    <h3> &nbsp; &nbsp; &nbsp; <b><i class="bi bi-ui-radios"></i> รายการคำถาม/ตัวเลือก</b></h3> <br>
    <h5> &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; <b> เพิ่มรายการคำถาม/ตัวเลือก</b>
    <a href="add_exam.php?subid=<?php echo $dataname['subjectId']; ?>" class="btn btn-primary"><i class="bi bi-plus-lg"></i>เพิ่มข้อสอบ</a>
    </h5>
    <center>
    <?php
        if(mysqli_num_rows($q)==0){
            echo"No Data";
        } else { ?>
            <table class="table table-warning table-striped-columns" style="width: 80%;">
                <thead>
                    <th style="width: 5%; text-align: center;" colspan="5"><h4><b><?php echo $dataname['subject']; ?></b></h4></th>
                </thead>
                <thead>
                    <th style="width: 5%; text-align: center;">No.</th>
                    <th style="width: 50%; text-align: center;">คำถาม/ตัวเลือก</th>
                    <th style="width: 15%; text-align: center;">เฉลย</th>
                    <th style="width: 10%; text-align: center;">แก้ไข</th>
                    <th style="width: 10%; text-align: center;">ลบ</th>
                </thead>
                <tbody>
                    <?php
                        while ($data = mysqli_fetch_array($q)) {
                    ?>
                            <tr>
                                <td style="width: 5%; text-align: center;"><?php echo $data['Id']; ?></td>
                                <td style="width: 50%; text-align: left;">
                                    <label for="exampleInputEmail1" class="form-label"><b>คำถาม : <?php echo $data['question']; ?></b></label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo 'A.  '. $data['choice_A']; ?>" disabled> <br>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo 'B.  '. $data['choice_B']; ?>" disabled> <br>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo 'C.  '. $data['choice_C']; ?>" disabled> <br>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo 'D.  '. $data['choice_D']; ?>" disabled> <br>
                                </td>
                                <td style="width: 15%; text-align: left;"><font color="#33CC00"><?php echo $data['answer']; ?></font></td>
                                <td style="width: 10%; text-align: center;"><a href="edit_exam1.php?subid=<?php echo $data['Id']; ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a></td>
                                <td style="width: 10%; text-align: center;"><a href="action_deletexam1.php?subid=<?php echo $data['Id']; ?>" class="btn btn-danger"><i class="bi bi-dash-lg"></i></a></td>
                            </tr>
                    <?php
                        }

                    ?>
                </tbody>
            </table>
    <?php
        }  
    ?>
    </center>   
    <?php
        }
    
    ?>
</body>
<?php include('../nav_footter.php'); ?>
</html>