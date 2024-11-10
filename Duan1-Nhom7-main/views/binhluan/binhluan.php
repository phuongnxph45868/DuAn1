<?php
include "./views/layout/header.php";
include "./views/layout/menu.php";
?>




<!-- MAIN CHÍNH (CẦN SỬA) -->
<div class="container-fluid">
    <h1>Danh sách bình luận</h1>
    <style>
        table {
            text-align: center;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            width: 250px;
        }

        table {
            border-collapse: collapse;
        }
    </style>
    <table align="center">
        <tr>
            <th>ID bình luận</th>
            <th>Ngày đăng</th>
            <th>Người bình luận</th>
            <th>Sản phẩm bình luận</th>
            <th>Tên sản phẩm</th>
            <th>Nội dung bình luận</th>
        </tr>
        <?php
        // var_dump($danhgia);
        foreach ($binhluan as $item) : ?>
            <tr>
                <td><?php echo $item['id_binh_luan']; ?></td>
                <td><?php echo $item['ngay_dang']; ?></td>
                <td><?= $item['ten_nguoi_dung']  ?></td>
                <td><img src="assets/admin/img/<?php echo $item['anh'] ?>" alt="" width="200px" height="200px"></td>
                <td><?= $item['ten_san_pham'] ?></td>
                <td><?php echo $item['noidung_binhluan']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</div>
<?php
include "./views/layout/footer.php";
?>