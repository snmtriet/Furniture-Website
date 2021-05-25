<?php 
session_start();
require_once "../Database/db.php";

if($_GET["admin_action"]){
switch ($_GET['admin_action']) {
  case "deleteProduct":
    $id = $_POST['id'];
    $sql = "DELETE FROM noi_that WHERE ma_noi_that = $id";
    $result = mysqli_query($conn,$sql);
    if($result) {
      echo json_encode(array(
        'status' => 1,
        'message' =>'xóa thành công'
      ));
    }
    break;
  case "deletelibImg":
    $id = $_POST['idlibimg'];
    $sql = "DELETE FROM hinh_noithat WHERE ma_hinh = $id";
    $result = mysqli_query($conn,$sql);
    if($result) {
      echo json_encode(array(
        'status' => 1,
        'message' =>'xóa thành công'
      ));
    }
    break;
  case "addProduct":
  $product_name = $_POST["product_name"];
  $product_price = $_POST["product_price"];
  $product_desc = $_POST["product_desc"];
  $product_quantity = $_POST["product_quantity"];
  $product_cate = $_POST["product_cate"]; 
    $sql = "INSERT INTO `noi_that`(`ma_loai`, `ten_noi_that`, `gia_noi_that`, `quantity`, `mo_ta`) VALUES ('$product_cate','$product_name','$product_price','$product_quantity','$product_desc')";
    $result = mysqli_query($conn,$sql);
    
    if($result) {
      echo json_encode(array(
        'status' => 1,
        'message' => "Thêm thành công"
      ));
    }else{
      echo json_encode(array(
        'status' => 0,
        'message' => "Thêm thất bại"
      ));
    }
    break;
  case "checkProductname":
    $checkProductname = $_GET["product_name"];
    $result =  mysqli_query($conn, "SELECT * FROM `noi_that` WHERE `ten_noi_that` LIKE '$checkProductname'");
    if($result !== false && $result->num_rows > 0) {
      echo json_encode(false);
    }else {
      echo json_encode(true);
    }
    break;
  case "updateProduct":
  $id = $_POST["product_id"];
  $product_name = $_POST["product_names"];
  $product_price = $_POST["product_prices"];
  $product_desc = $_POST["product_descs"];
  $product_quantity = $_POST["product_quantitys"];
  $product_cate = $_POST["product_cates"];
  $sql = "UPDATE `noi_that` SET `ma_loai`='$product_cate',`ten_noi_that`='$product_name',`gia_noi_that`='$product_price',`quantity`='$product_quantity',`mo_ta`='$product_desc' WHERE `ma_noi_that` = $id";
  $result  = mysqli_query($conn,$sql);
  if($result) {
    echo json_encode(array(
      'status' => 1,
      'message' => "Sửa thành công"
    ));
  }else{
    echo json_encode(array(
      'status' => 0,
      'message' => "Sửa thất bại"
    ));
  }
    break;
  case "checkCategory":
    $checkCategoryname = $_GET["category_name"];
    $result =  mysqli_query($conn, "SELECT * FROM `loai_noi_that` WHERE `ten_loai` LIKE '$checkCategoryname'");
    if($result !== false && $result->num_rows > 0) {
      echo json_encode(false);
    }else {
      echo json_encode(true);
    }
    break;
  case "addCategory":
    $category_name = $_POST['category_name'];
    $category_desc = $_POST['category_desc'];
    $sql = "INSERT INTO `loai_noi_that`(`ten_loai`, `mo_ta`) VALUES ('$category_name','$category_desc')";
    $result = mysqli_query($conn,$sql);
    if($result) {
      echo json_encode(array(
        'status' => 1,
        'message' => 'Thêm thành công'
      ));
    }else {
      echo json_encode(array(
        'status' => 0,
        'message' => 'Thêm thất bại'
      ));
    }
    break;
  case "deleteCategory":
    $id = $_POST['id'];
    $sql = "DELETE FROM `loai_noi_that` WHERE ma_loai = $id";
    $result = mysqli_query($conn,$sql);
    if($result) {
      echo json_encode(array(
        'status' => 1,
        'message' => 'Xóa thành công'
      ));
    }else {
      echo json_encode(array(
        'status' => 0,
        'message' => 'Xóa thất bại'
      ));
    }
    break;
  case "updateCategory":
    $id = $_POST['category_id'];
    $category_name = $_POST['category_name'];
    $category_desc = $_POST['category_desc'];
    $sql = "UPDATE `loai_noi_that` SET `ten_loai`='$category_name',`mo_ta`='$category_desc' WHERE ma_loai = $id";
    $result = mysqli_query($conn,$sql);
    if($result) {
      echo json_encode(array(
        'status' => 1,
        'message' => 'Sửa thành công'
      ));
    }else {
      echo json_encode(array(
        'status' => 0,
        'message' => 'Sửa thất bại'
      ));
    }
    break;
  case "confirmPurchase":
    $id = $_POST['id'];
    $sql = "UPDATE `orders` SET `ma_status`='1' WHERE id = $id";
    $result = mysqli_query($conn,$sql);
    if($result){
      echo json_encode(array(
        'status' => 1,
        'message' => 'Xác nhận thanh toán thành công'
      ));
    }else {
      echo json_encode(array(
        'status' => 0,
        'message' => 'Lỗi'
      ));
    }
    break;
  case "adminSearchProduct":
    $nameProduct = $_POST["nameProduct"];
    $sql = "SELECT * FROM `noi_that` WHERE `ten_noi_that` LIKE '%".$nameProduct."%'
    or `gia_noi_that` LIKE '%".$nameProduct."%'
    or `quantity` LIKE '%".$nameProduct."%'
    or `ma_loai` LIKE '%".$nameProduct."%'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    $stt = 0;
    if($num > 0){ ?>
        <tr>
          <th width="50">STT</th>
          <th width="350">Tên</th>
          <th width="100">Giá</th>
          <th width="50">Kho</th>
          <th width="50">Loại</th>
          <th>Ảnh</th>
          <th width="50">Action</th>
        </tr>
        <?php while($row = mysqli_fetch_array($result)) {$stt++; ?>
          <tr>
          <td><?=$stt?></td>
          <td><?=$row['ten_noi_that']?></td>
          <td><?=number_format($row['gia_noi_that'])?>đ</td>
          <td><?=$row['quantity']?></td>
          <td><?=$row['ma_loai']?></td>
          <td class="td-img">
            <div class="products-img">
            <?php
                $id_hinh =  $row['ma_noi_that'];
                $hinh = "select * from hinh_noithat where ma_noi_that = $id_hinh";
                $result2 = mysqli_query($conn,$hinh);
                foreach($result2 as $row_h) { ?>
                  <img src="../<?=$row_h['hinh']?>" alt="">
            <?php } ?>
            </div>
          </td>
          <td class="action_admin">
            <button class="action_update">
              <a href="admin_update.php?id=<?=$row['ma_noi_that']?>">Sửa</a>
            </button><br>
            <form class="delete_product_form" method="post" >
            <button class="delete">
              <a href="javascript:deleteProduct(<?php echo $row["ma_noi_that"];?>)">Xóa</a>
            </button>
            </form>
          </td>
        </tr>
<?php 
      }
    }else{
      echo "Không tìm thấy";
    }
    break;
  case "adminSearchOrder":
    $nameOrder = $_POST["nameOrder"];
    $sql = "SELECT * FROM `orders` WHERE `name` LIKE '%".$nameOrder."%'
    or `phone` LIKE '%".$nameOrder."%'
    or `address` LIKE '%".$nameOrder."%'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    $count = 0;
    if($num > 0){ ?>
     <tr>
          <th width="20">STT</th>
          <th width="250">Tên</th>
          <th width="150">Số điện thoại</th>  
          <th width="400">Địa chỉ</th>
          <th width="100">Tổng tiền</th>
          <th width="250">Trạng thái</th>
          <th width="150">Action</th>
      </tr>
    <?php while($rows = mysqli_fetch_array($result)) {$count++ ?>
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
<?php 
      }
    }else {
      echo "Không tìm thấy";
    }
    break;
}
}
?>