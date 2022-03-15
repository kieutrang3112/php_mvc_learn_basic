<?php

    switch ($action) {
        case '':
            require_once "model/lop.php";
            $result = lop_index();
            require_once "view/lop/index.php";
            break;
        case 'create':
            require_once  "view/lop/create.php";
            break;
        case 'edit':
            $ma = $_GET['ma'];
            require_once "model/lop.php";
            $each = lop_edit($ma);
            require_once "view/lop/edit.php";
            break;
        case 'store':
            $ten = $_POST['ten'];
            require_once "model/lop.php";
            $result = lop_store($ten);

            break;
        case 'update':
            $ma = $_POST['ma'];
            $ten = $_POST['ten'];
            require_once "model/lop.php";
            lop_update($ma,$ten);
            break;
        case 'delete':
            $ma = $_GET['ma'];
            require_once "model/lop.php";
            lop_delete($ma);
            break;
        default:
            echo 'NHập action của lớp sai rồi';
            break;

    }
