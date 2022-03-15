<?php

require_once "model/connect.php";

function sv_index()
{
    $connect = connect();
    $sql = "SELECT sinh_vien.*,lop.ten as ten_lop FROM sinh_vien LEFT JOIN lop on lop.ma = sinh_vien.ma_lop";
    $result = mysqli_query($connect, $sql);
    mysqli_close($connect);
    return $result;
}
function sv_store($ten,$ma_lop) {
    $connect = connect();
    $sql = "INSERT INTO sinh_vien(ten,ma_lop) values('$ten','$ma_lop')";

    $e=mysqli_query($connect, $sql);

}
function sv_edit($ma) {
    $connect = connect();
    $sql = "SELECT * FROM sinh_vien where ma='$ma'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
    return $each;
}
function sv_update($ma,$ten,$ma_lop) {
    $connect = connect();
    $sql = "UPDATE sinh_vien
            SET ten ='$ten',
                ma_lop = '$ma_lop'
             where ma='$ma'";

    mysqli_query($connect, $sql);
}
function sv_delete($ma) {
    $connect = connect();
    $sql = "DELETE  FROM sinh_vien where ma='$ma'";
    mysqli_query($connect, $sql);
}






