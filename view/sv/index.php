<h1>DS sv</h1>
<table border="1" width="100%">
    <a href="?action=create&&controller=sv">Thêm</a>
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Lớp</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>

        <?php foreach ($result as $each) { ?>
    <tr>
            <th><?php echo $each['ma']?></th>
            <th><?php echo $each['ten']?></th>
            <th><?php echo $each['ten_lop']?></th>
            <th><a href="?action=edit&&controller=sv&&ma=<?php echo $each['ma']?>">Sửa</a></th>
        <th><a href="?action=delete&&controller=sv&&ma=<?php echo $each['ma']?>">Xóa</a></th>
    </tr>
        <?php } ?>

</table>
