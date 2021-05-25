<?php include("../assets/body__admin/header_admin.php"); ?>
<div class="header_form-update" id="title_top">
    <div class="title-form">
        <h1>Sản phẩm đã mua</h1>
    </div>
</div>
<div class="content">
<?php
$id = $_GET['id'];
require_once '../Database/db.php';
$sql = "SELECT * FROM `order_detail` WHERE order_id = $id";
$rs = mysqli_query($conn,$sql);
$count=0;
?>
<div class="content_libImg">
<table width="100%">
        <tr>
            <th width="20">STT</th>
            <th width="50">Order ID</th>
            <th width="50">Sản phẩm</th>  
            <th width="100">Số lượng</th>
            <th width="150">Giá</th>
        </tr>
        <?php foreach($rs as $rows) {$count++?>
        <tr>
            <td><?=$count?></td>
            <td><?=$rows['order_id']?></td>
            <td class="order_detail-img">
                <?php
                $ids = $rows['product_id'];
                $sql2 = "SELECT * FROM hinh_noithat WHERE ma_noi_that = $ids";
                $result = mysqli_query($conn,$sql2);
                foreach($result as $row){ ?>
                 <img src="../<?=$row['hinh']?>">
                 <?php }?>
            </td>            
            <td><?=$rows['quantity']?></td>            
            <td><?=number_format($rows['price'])?>đ</td>            
        </tr>
        <?php } ?>
    </table>
</div>
</div>
  </body>
  <script src="../assets/js/admin.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../assets/lib/jquery.validate.min.js"></script>
</html>
