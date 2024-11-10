<?php
include "./views/layout/header.php";
include "./views/layout/menu.php";
?>





<!-- MAIN CHÍNH (CẦN SỬA) -->
<div class="container-fluid">
    <h1>Danh sách người dùng</h1>
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
            margin-bottom: 50px;
        }

        td input {
            background-color: red;
            border: none;
            color: white;
            border-radius: 3px;
        }

        .button input {
            background-color: #4066D4;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 3px;
        }
    </style>
    <table align="center">
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Type</th>
        <th>Action</th>
        </tr>
        <?php
        // var_dump($danhgia);
        foreach ($nguoidung as $item) : ?>
            <tr>
                <td><?php echo $item['id_nguoi_dung']; ?></td>
                <td><?php echo $item['ten_nguoi_dung']; ?></td>
                <td><?php echo $item['email']; ?></td>
                <td><?php echo $item['ten_chuc_vu']; ?></td>
                <td>
                    <a href="?act=suanguoidung&id="><input type="submit" value="Sửa"></a>
                    <a href="?act=xoanguoidung&id=" onclick="return confirm('Bạn có chắc chăn muốn xoá nội dung này không?')"><input type="submit" value="Xoá"></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="button">
        <a href="?act=themnguoidung"><input type="submit" value="Thêm người dùng" name="them"></a>
    </div>
</div>
</div>


<?php
include "./views/layout/footer.php";
?>