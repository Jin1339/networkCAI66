<?php
    include('connect.php');
    $subid = 1;
    if($subid==1){
        $sql = "SELECT * FROM tbl_prestudytest ORDER BY Id";
        echo $q = mysqli_query($con , $sql);
    }else if($subid==2){
        $sql = "SELECT * FROM tbl_afterstudytest ORDER BY Id";
        echo $q = mysqli_query($con , $sql);
    }else if($subid==3){
        $sql = "SELECT * FROM tbl_lesson1 ORDER BY Id";
        echo $q = mysqli_query($con , $sql);
    }else if($subid==4){
        $sql = "SELECT * FROM tbl_lesson2 ORDER BY Id";
        echo $q = mysqli_query($con , $sql);
    }else if($subid==5){
        echo $sql = "SELECT * FROM tbl_lesson3 ORDER BY Id";
        $q = mysqli_query($con , $sql);
    }else{
        echo "Data not show";
    }
    while ($row = $result->fetch_assoc()) {
    echo $row['classtype']."<br>";
}
?>