<table>
        <tr>
          <th width="50">STT</th>
          <th width="350">Tên</th>
          <th width="100">Giá</th>
          <th width="50">Kho</th>
          <th width="50">Loại</th>
          <th>Ảnh</th>
          <th width="50">Action</th>
        </tr>
      <?php
      require_once '../Database/db.php';
      $sql = "SELECT * FROM noi_that";
      $result = mysqli_query($conn,$sql);
      $stt = 0;
      while($rows = mysqli_fetch_array($result)) { $stt++ ?>
       <tr>
          <td><?=$stt?></td>
          <td><?=$rows['ten_noi_that']?></td>
          <td><?=number_format($rows['gia_noi_that'])?>đ</td>
          <td><?=$rows['quantity']?></td>
          <td><?=$rows['ma_loai']?></td>
          <td class="td-img">
              <div class="products-img">
              <?php
                  $id_hinh =  $rows['ma_noi_that'];
                  $hinh = "select * from hinh_noithat where ma_noi_that = $id_hinh";
                  $result2 = mysqli_query($conn,$hinh);
                  foreach($result2 as $row_h) { ?>
                    <img src="../<?=$row_h['hinh']?>" alt="">
              <?php } ?>
              </div>
          </td>
          <td class="action_admin">
            <button class="action_update">
              <a href="admin_update.php?id=<?=$rows['ma_noi_that']?>">Sửa</a>
            </button><br>
            <form class="delete_product_form" method="post" >
            <button class="delete">
              <a href="javascript:deleteProduct(<?php echo $rows["ma_noi_that"];?>)">Xóa</a>
            </button>
            </form>
          </td>
        </tr>
      <?php } ?>
      </table>