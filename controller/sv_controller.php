<?php

switch ($action) {
    case '':
        require_once "model/sv.php";
        $result = sv_index();
        require_once "view/sv/index.php";
        break;
    case 'create':

        require_once "model/lop.php";
        $lops = lop_index();
        require_once  "view/sv/create.php";
        break;
    case 'edit':
        $ma = $_GET['ma'];
        require_once "model/sv.php";
        $each = sv_edit($ma);
        require_once "model/lop.php";
        $lops = lop_index();
        require_once "view/sv/edit.php";
        break;
    case 'store':
        $ten = $_POST['ten'];
        $ma_lop = $_POST['ma_lop'];
        require_once "model/sv.php";
         sv_store($ten,$ma_lop);

        break;
    case 'update':
        $ma = $_POST['ma'];
        $ten = $_POST['ten'];
        $ma_lop = $_POST['ma_lop'];
        require_once "model/sv.php";
        sv_update($ma,$ten,$ma_lop);
        break;
    case 'delete':
        $ma = $_GET['ma'];
        require_once "model/sv.php";
        sv_delete($ma);
        break;
    default:
        echo 'NHập action của lớp sai rồi';
        break;

}
