<?php

require_once "model/connect.php";

    function lop_index()
    {
        $connect = connect();
        $sql = "SELECT * FROM lop";
        $result = mysqli_query($connect, $sql);
        mysqli_close($connect);
        return $result;
    }
    function lop_store($ten) {
        $connect = connect();
        $sql = "INSERT INTO lop(ten) values('$ten')";
        mysqli_query($connect, $sql);
    }
    function lop_edit($ma) {
        $connect = connect();
        $sql = "SELECT * FROM lop where ma='$ma'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        return $each;
    }
    function lop_update($ma,$ten) {
        $connect = connect();
        $sql = "UPDATE lop
            SET ten ='$ten'
             where ma='$ma'";
        mysqli_query($connect, $sql);
    }
    function lop_delete($ma) {
        $connect = connect();
        $sql = "DELETE  FROM lop where ma='$ma'";
        mysqli_query($connect, $sql);
    }






