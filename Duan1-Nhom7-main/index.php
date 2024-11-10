<?php

// Require file trong commons
// require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect-db.php';
require_once './commons/model.php';

// Require file trong controllers và models
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

// Điều hướng
$act = $_GET['act'] ?? '/';

// Biến này cần khai báo được link cần đăng nhập mới vào được
$arrRouteNeedAuth = [];



// match($act) {
//     '/' => homeIndex(),

//     // Authen
//     'login' => authenShowFormLogin(),
//     'logout' => authenLogout(),
// };
if ($act == 'home') {
    homeIndex();
    // $products = listAll('products');
    // require_once PATH_VIEW . 'home.php';
} else if ($act == 'danhgia') {
    danhgia();
} else if ($act == 'binhluan') {
    binhluan();
}else if ($act == 'lienhe') {
    lienhe();
}else if ($act == 'noidung') {
    noidung();
}else if ($act == 'baiviet') {
    baiviet();
}else if ($act == 'themnoidung') {
    baiviet();
}else if ($act == 'nguoidung'){
    nguoidung();
}else if ($act == 'themnguoidung'){
    themnguoidung();
}
// Kiểm tra xem user đã đăng nhập chưa
middleware_auth_check($act, $arrRouteNeedAuth);
require_once './commons/disconnect-db.php';
