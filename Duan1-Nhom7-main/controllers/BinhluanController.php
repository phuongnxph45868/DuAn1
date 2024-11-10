<?php

function binhluan()
{
    $sql="SELECT tb_binh_luan.*,tb_nguoi_dung.ten_nguoi_dung,tb_san_pham.ten_san_pham,tb_anh.anh FROM `tb_nguoi_dung` INNER JOIN tb_binh_luan ON tb_nguoi_dung.id_nguoi_dung=tb_binh_luan.id_nguoi_dung INNER JOIN tb_san_pham ON tb_binh_luan.id_san_pham=tb_san_pham.id_san_pham INNER JOIN tb_anh ON tb_san_pham.id_san_pham=tb_anh.id_san_pham";
    $binhluan = getAll($sql);
    // var_dump($danhgia);
    require_once 'views/binhluan/binhluan.php';
}