<?php

function lienhe()
{
    $sql="SELECT * FROM `tb_lien_he` ";
    $lienhe = getAll($sql);
    // var_dump($danhgia);
    require_once 'views/lienhe/lienhe.php';
}