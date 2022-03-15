<?php

    $connect = mysqli_connect("localhost","root","","j2_mvc");
    mysqli_set_charset($connect,"utf8");

    $sql = "SELECT * FROM lop";
    $result= mysqli_query($connect,$sql);
