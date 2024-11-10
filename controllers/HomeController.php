<?php 

function homeIndex() {
    $products = listAll('id','products');

    require_once PATH_VIEW . 'home.php';
}