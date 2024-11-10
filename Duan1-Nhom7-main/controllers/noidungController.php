<?php

function noidung()
{
    $sql="SELECT * FROM `tb_noi_dung` ";
    $noidung = getAll($sql);
    // var_dump($danhgia);
    require_once 'views/noidungwebsite/noidungwebsite.php';
}
// function themnoidung()
// {
//     $sql=""
// }