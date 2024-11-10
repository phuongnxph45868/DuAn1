<?php
include "./views/layout/header.php";
include "./views/layout/menu.php";
?>



<!-- MAIN CHÍNH (CẦN SỬA) -->
<div class="container-fluid">
    <h1>Thêm người dùng</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">Tên người dùng</label>
                    <input type="text" name="ten_nguoi_dung" class="form-control">        
                </div>
            </div>
        </div>
        
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" name="dia_chi">        
                </div>
            </div>
        
        
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">        
                </div>
            </div>
        
        
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">Giới tính</label>
                    <select name="gioi_tinh" id="gioi_tinh">
                        <option value="0"></option>
                        <option value="1">Nam</option>
                        <option value="2">Nữ</option>
                    </select>        
                </div>
            </div>
        
        
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">Ngày sinh</label>
                    <input type="date" class="form-control" name="ngay_sinh">        
                </div>
            </div>
        
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">Mật khẩu</label>
                    <input type="text" class="form-control" name="mat_khau">        
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" name="sdt">            
                </div>
            </div>
            <button type="reset" class="btn btn-primary">Làm mới</button>
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a href="?act=nguoidung" class="btn btn-danger">Danh sách người dùng</a>
    </form>
</div>
</div>
<?php
include "./views/layout/footer.php";
?>