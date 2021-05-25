<div class="title-form">
    <h1>Thư viện ảnh</h1>
</div>
<?php
require_once '../Database/db.php';
$sql = "SELECT * FROM `hinh_noithat`";
$rs = mysqli_query($conn,$sql);
?>
<form action="../Admin/dump.php"  method="post" enctype="multipart/form-data">
    <div class="form__input-update">
        <label id="labelfullName" class="form__floating-label" for="login-customer[username]">Chọn sản phẩm</label><br>
        <select id="select_categorys" name="list_name">
            <?php
            $mahinh = $row['ma_noi_that'];
            $sql2 = "SELECT * FROM noi_that";
            $rs2 = mysqli_query($conn,$sql2);
            $sql3 = "SELECT * FROM hinh_noithat";
            $rs3 = mysqli_query($conn,$sql3);
            foreach($rs2 as $rowx) { ?>
                <option value="<?=$rowx['ma_noi_that']?>"><p><?=$rowx['ten_noi_that']?></p></option>
            <?php } ?>
        </select>
    </div>
    <div class="form__input-update file">
        <label class="custom-file-upload">
        <input type="file" name="fileToUpload" id="fileToUpload">
            Ảnh
        </label>
    </div>
    <input id="addlibimg" class="btn_action" type="submit" value="Thêm" name="submit-upl">
</form>
<div class="content_libImg" style="margin-top:2rem;">
    <?php
    $sql = "SELECT * FROM `hinh_noithat` ORDER BY `ma_noi_that` ASC";
    $result = mysqli_query($conn,$sql);
    $count = 0;
    ?>
<table width="60%">
        <tr>
            <th>STT</th>
            <th width="80">ID</th>
            <th width="600">Tên</th>
            <th width="150">Ảnh</th>
            <th width="10">Action</th>
        </tr>
        <?php foreach($result as $row) {
        $id_nt = $row['ma_noi_that'];
        $sql2 = "SELECT * FROM `noi_that` WHERE ma_noi_that = $id_nt";
        $result2 = mysqli_query($conn,$sql2); 
        $count++;   
        ?>
        <tr>
            <td><?=$count?></td>
            <td><?=$row['ma_noi_that']?></td>
            <?php foreach($result2 as $rows) {?>
            <td><?=$rows['ten_noi_that']?></td>
            <?php } ?>
            <td class="img_lib">
                <img src="../<?=$row['hinh']?>" >
            </td>
            <td>
                <button class="btn_action delete_lib">
                    <a href="javascript:deletelibImg(<?php echo $row["ma_hinh"];?>)">Xóa</a>
                </button>
            </td>
        </tr>
        <?php }?>
    </table>
</div>