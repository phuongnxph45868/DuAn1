<?php

function baiviet()
{
    $sql="SELECT * FROM `tb_bai_viet` ";
    $baiviet = getAll($sql);
    // var_dump($danhgia);
    require_once 'views/baiviet/baiviet.php';
}