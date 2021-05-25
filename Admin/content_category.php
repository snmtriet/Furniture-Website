<?php
require_once '../Database/db.php';
$sql = "SELECT * FROM `loai_noi_that`";
$rs = mysqli_query($conn,$sql);
$countCate = 0;
?>
<div class="content_libImg">
<table width="70%">
        <tr>
            <th width="100">Mã loại</th>
            <th width="120">Tên loại</th>
            <th width="200">Mô tả</th>  
            <th width="10">Action</th>
        </tr>
        <?php foreach($rs as $rows) {$countCate++?>
        <tr>
            <td><?=$countCate?></td>
            <td><?=$rows['ten_loai']?></td>
            <td><?=$rows['mo_ta']?></td>            
            <td>
                <button class="btn_action delete_lib">
                    <a href="javascript:deleteCategory(<?php echo $rows["ma_loai"];?>)">Xóa</a>
                </button>
                <button class="btn_action update_cate">
                    <a class="updatecate_btn" href="admin_update_category.php?id=<?=$rows['ma_loai']?>">Sửa</a>
                </button>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>