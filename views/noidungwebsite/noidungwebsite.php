<?php
include "./views/layout/header.php";
include "./views/layout/menu.php";
?>





<!-- MAIN CHÍNH (CẦN SỬA) -->
<div class="container-fluid">
    <h1>Nội dung website</h1>
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
            <th>ID nội dung</th>
            <th>Tên trang web</th>
            <th>Ảnh (Logo,...)</th>
            <th>Nội dung </th>
            <th>Link liên kết </th>
            <th>Hành động </th>
        </tr>
        <?php
        // var_dump($danhgia);
        foreach ($noidung as $item) : ?>
            <tr>
                <td><?php echo $item['id_noi_dung']; ?></td>
                <td><?php echo $item['ten_trang_web']; ?></td>
                <td>
                    <img src="assets/admin/img/<?= $item['anh'] ?>" width="200" height="200" alt="">
                </td>
                <td><?php echo $item['noi_dung']; ?></td>
                <td><?php echo $item['link_lien_ket']; ?></td>
                <td>
                    <a href="?act=suanoidung&id="><input type="submit" value="Sửa"></a>
                    <a href="?act=suanoidung&id=" onclick="return confirm('Bạn có chắc chăn muốn xoá nội dung này không?')"><input type="submit" value="Xoá"></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="button">
        <a href="?act=themnoidung"><input type="submit" value="Thêm nội dung" name="them"></a>
    </div>
</div>
</div>


<?php
include "./views/layout/footer.php";
?>