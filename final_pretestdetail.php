<?php
    include('connect.php');
    $sql = "SELECT * FROM tbl_afterstudytest ORDER BY Id";
    $q = mysqli_query($con , $sql);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>บทเรียนคอมพิวเตอร์ช่วยสอน</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.js"></script>
    </head>

    <body>

        <?php include('navuser_ontop.php'); ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <center>
            <h3>
                <B>แบบทดสอบหลังเรียน (Final Test)</B>
            </h3>
            <br>
            <table style="width: 100%;">
            <form action="action_finaltest.php" method="post">
                    <?php
                if(mysqli_num_rows($q)==0){
                    echo"No Data";
                }else{ ?>
                        <tr align="center">
                            <td style="width: 30%;" class="align-baseline">
                                <div class="alert alert-light" role="alert" style="width: 80%;">
                                    <strong>
                                    <P ALIGN=LEFT><b>  วิชาที่เข้าสอบ : อุปกรณ์ระบบเครือข่าย</b></P>
                                    </strong>
                                    <P ALIGN=LEFT>คำอธิบาย : ตอบคำถามให้ถูกต้อง</P>
                                    <P ALIGN=LEFT>จำนวนข้อสอบ : 15 ข้อ (15 คะแนน)</P>
                                    <P ALIGN=LEFT>เกณฑ์ผ่าน : 12 ข้อ (12 คะแนน)</P>
                                    <?php include('time.php'); ?>
                                </div>

                            </td>
                            <td style="width: 80%;">
                                <div class="table-responsive">
                                    <table class="table table-" style="width: 80%;">
                                        <thead>
                                            <?php while($data = mysqli_fetch_array($q)){ ?>
                                            <tr>
                                                <th scope="row">
                                                    <?php echo $data['Id']; ?> .
                                                    <?php echo $data['question']; ?>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">
                                                    <div class="form-check"> 
                                                        <h4><input class="form-check-input" type="radio" name="<?php echo $data['Id']; ?>" id="choice_A" value="1" required></h4>
                                                        <div class="alert alert-secondary" role="alert" style="width: 100%;">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                        <?php echo $data['choice_A']; ?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check">
                                                        <h4><input class="form-check-input" type="radio" name="<?php echo $data['Id']; ?>" id="choice_B" value="2" required></h4>
                                                        <div class="alert alert-secondary" role="alert" style="width: 100%;">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                    <?php echo $data['choice_B']; ?>
                                                                </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check">
                                                        <h4><input class="form-check-input" type="radio" name="<?php echo $data['Id']; ?>" id="choice_C" value="3" required></h4>
                                                        <div class="alert alert-secondary" role="alert" style="width: 100%;">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                    <?php echo $data['choice_C']; ?>
                                                                </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check">
                                                        <h4><input class="form-check-input" type="radio" name="<?php echo $data['Id']; ?>" id="choice_D" value="4" required></h4>
                                                        <div class="alert alert-secondary" role="alert" style="width: 100%;">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                        <?php echo $data['choice_D']; ?>
                                                                    </label>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                            } 
                                            ?>
                                        </tbody>
                                        <?php
                                    } 
                                ?>
                                    </table>
                                </div>
                            </td>
                        </tr>
            </table>
            <br>
            <input class="btn btn-success" type="submit" style="width:200px; height:100; font-size:25px;" value="ส่งเเบบทดสอบ">
            </form>
        </center>
        <br>
        <br>

    </body>
    <?php include('nav_footter.php'); ?>

    </html>