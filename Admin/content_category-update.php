<div class="title-form">
    <h1>Sửa danh mục</h1>
</div>
<?php
require_once '../Database/db.php';
$id = $_GET['id'];
$sql = "SELECT * FROM `loai_noi_that` WHERE ma_loai = $id";
$rs = mysqli_query($conn,$sql);
?>
<form id="Updatecategoryform" method="post">
    <?php foreach($rs as $rows) {?>
    <div class="form__input-update">
        <label id="labelfullName" class="form__floating-label" for="login-customer[username]">Tên danh mục</label><br>
        <input type="text" name="category_name" value="<?=$rows['ten_loai']?>">
        <input type="hidden" name="category_id" value="<?=$rows['ma_loai']?>">
    </div>
    <div class="form__input-update">
        <label id="labelfullName" class="form__floating-label" for="login-customer[username]">Mô tả</label><br>
        <input type="text" name="category_desc" value="<?=$rows['mo_ta']?>">
    </div>
    <input id="addlibimg" class="btn_action" type="submit" value="Sửa" name="submit-upl">
    <h1 class="message_action"></h1>
    <?php } ?>
</form>

