<?php
    session_start();
    session_destroy();
    echo"<script> window.alert('LOGOUT สำเร็จ!'); window.location='index.php' </script>";
?>