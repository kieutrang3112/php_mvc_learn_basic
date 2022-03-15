<h1>Thêm sv</h1>
<form action="?action=store&&controller=sv" method="post">

    <input type="hidden" name="ten" >
    Tên
    <input type="text" name="ten" id="">
    Lớp
    <select name="ma_lop" id="">
        <?php foreach ($lops as $lop) { ?>

            <option value="<?php echo $lop['ma']?>">
                <?php echo $lop['ten']?>
            </option>
        <?php } ?>
    </select>
    <button>Thêm</button>
</form>
