<h1>Sửa sv </h1>
<form action="?action=update&&controller=sv" method="post">
    <input type="hidden" name="ma" id="" value="<?php echo $ma?>">
    Tên
    <input type="text" name="ten" id="" value="<?php echo $each['ten']?>">
    Lớp
    <select name="ma_lop" id="">
        <?php foreach ($lops as $lop) { ?>

            <option value="<?php echo $lop['ma']?>" <?php if ($lop['ma']=== $each['ma_lop']) echo "selected"?>>
                <?php echo $lop['ten']?>
            </option>
        <?php } ?>
    </select>
    <button>Thêm</button>
</form>

