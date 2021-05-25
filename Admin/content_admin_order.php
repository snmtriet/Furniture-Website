<?php
require_once '../Database/db.php';
$sql = "SELECT * FROM `orders`";
$rs = mysqli_query($conn,$sql);
$count=0;
?>
<div class="content_libImg">
<table width="100%">
        <tr>
            <th width="20">STT</th>
            <th width="250">Tên</th>
            <th width="150">Số điện thoại</th>  
            <th width="400">Địa chỉ</th>
            <th width="100">Tổng tiền</th>
            <th width="250">Trạng thái</th>
            <th width="150">Action</th>
        </tr>
        <?php foreach($rs as $rows) {$count++?>
        <tr>
            <td style="text-align:start;"><?=$count?></td>
            <td style="text-align:start;"><?=$rows['name']?></td>
            <td style="text-align:start;"><?=$rows['phone']?></td>            
            <td style="text-align:start; line-height: 3rem;"><?=$rows['address']?></td>            
            <td style="text-align:start;"><?=number_format($rows['total'])?>đ</td>            
            <td>
            <?php 
            $id = $rows['ma_status'];
            $sql2 = "SELECT * FROM `status_orders` WHERE ma_status = $id";
            $result = mysqli_query($conn,$sql2); 
            foreach($result as $row) { ?>
                <?=$row['name_status']?>
            <?php } ?>
            </td>
            <td>
                <a style="text-decoration:none; color: var(--white-color); font-weight:bold; background-color: var(--main-color); padding: 1rem;font-size:1.8rem; display:block;border-radius: 5px; text-align:center; margin-bottom: 2rem;" href="admin_order_detail.php?id=<?=$rows['id']?>">
                Xem chi tiết
                </a>
                <?php if($row['ma_status'] == 0) {?>
                <a style="text-decoration:none; color: var(--white-color); font-weight:bold; background-color: var(--main-color); padding: 1rem;font-size:1.8rem; display:block;border-radius: 5px; text-align:center; margin-bottom: 2rem;" href="javascript:confirmPurchase(<?=$rows["id"];?>)">
                Xác nhận
                </a>
                <?php }else {?>
                <a style="text-decoration:none; color: #666666; font-weight:bold; background-color:#cccccc; padding: 1rem;font-size:1.8rem; display:block;border-radius: 5px; text-align:center; margin-bottom: 2rem;">
                Xác nhận
                </a>
                <?php }?>
            </td>            
        </tr>
        <?php } ?>
    </table>
</div>