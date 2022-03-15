<h1>DS lớp</h1>
<table border="1" width="100%">
    <a href="?action=create&&controller=lop">Thêm</a>
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>

        <?php foreach ($result as $each) { ?>
    <tr>
            <th><?php echo $each['ma']?></th>
            <th><?php echo $each['ten']?></th>
            <th><a href="?action=edit&&controller=lop&&ma=<?php echo $each['ma']?>">Sửa</a></th>
        <th><a href="?action=delete&&controller=lop&&ma=<?php echo $each['ma']?>">Xóa</a></th>
    </tr>
        <?php } ?>

</table>
