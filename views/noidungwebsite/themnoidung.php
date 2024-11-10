<?php
include "./views/layout/header.php";
include "./views/layout/menu.php";
?>



<!-- MAIN CHÍNH (CẦN SỬA) -->
<div class="container-fluid">
    <h1>Thêm nội dung website</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Tên trang web</label>
        <input type="text" name="ten_trang_web">
        <label for="">Ảnh</label>
        <input type="file" name="anh">
        <label for="">Nội dung</label>
        <input type="text" name="noi_dung">
        <label for="">Link liên kết</label>
        <input type="link" name="link_lien_ket">
        <br>
        <input type="reset">
        <input type="submit" value="Thêm">

    </form>
    <!-- <style>
                        table {
                            text-align: center;
                        }

                        table,
                        th,
                        td {
                            border: 1px solid black;
                        }
                        th,td{
                            width: 250px;
                        }
                        table {
                            border-collapse: collapse;
                        }
                    </style> -->
    <!-- <table align="center">
                        <tr>
                            <th>ID nội dung</th>
                            <th>Tên trang web</th>
                            <th>Ảnh (Logo,...)</th>
                            <th>Nội dung </th>
                            <th>Link liên kết </th>
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
                            </tr>
                        <?php endforeach; ?>
                    </table> -->
</div>
</div>
<?php
include "./views/layout/footer.php";
?>