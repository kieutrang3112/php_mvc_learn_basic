<h1>DS lớp</h1>
<table>
    <a href="?action=create&&controller=lop">Thêm</a>
    <tr>
        <th>Mã</th>
        <th>Tên</th>
    </tr>

        <?php foreach ($result as $each) { ?>
    <tr>
            <th><?php echo $each['ma']?></th>
            <th><?php echo $each['ten']?></th>
    </tr>
        <?php } ?>

</table>
