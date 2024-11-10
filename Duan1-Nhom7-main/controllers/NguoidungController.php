<?php

function nguoidung()
{
    $sql="SELECT tb_nguoi_dung.*,tb_chuc_vu.ten_chuc_vu FROM `tb_chuc_vu` INNER JOIN tb_nguoi_dung ON tb_chuc_vu.id_chuc_vu = tb_nguoi_dung.id_nguoi_dung;";
    $nguoidung = getAll($sql);
    // var_dump($danhgia);
    require_once 'views/nguoidung/nguoidung.php';
}
function themnguoidung(){
    $sql="INSERT INTO `tb_nguoi_dung`(`ten_nguoi_dung`, `dia_chi`, `email`, `gioi_tinh`, `ngay_sinh`, `mat_khau`, `sdt`, `id_chuc_vu`) VALUES 
                                    ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]');";
    
    require_once 'views/nguoidung/themnguoidung.php';
}