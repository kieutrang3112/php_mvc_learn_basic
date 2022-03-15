<?php

    switch ($action) {
        case '':
            require_once "model/lop.php";
            require_once "view/lop/index.php";
            break;
        case 'create':
            require_once  "view/lop/create.php";
            break;
        case 'store':
            $lop = $_POST['lop'];
            require_once "model/lop.php";
            break;
        default:
            echo 'NHập action của lớp sai rồi';
            break;
    }
