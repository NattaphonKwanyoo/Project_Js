<?php
        $server=$_SERVER['HTTP_HOST'];
        $user="root";
        $pass="";
        $database="test";
        $conn=mysqli_connect($server,$user,$pass,$database);
    if(!$conn){
        die("เกิดข้อผิดพลาดในการเชื่อมต่อกัยเครื่องให้บริการฐานข้อมูล!!".mysqli_connect_error());
    }
    mysqli_set_charset($conn,"utf8");
?>