<?php include("../assets/body__admin/header_admin.php"); ?>
<div class="content">
<?php
    require_once '../Database/db.php';
    $id = $_GET["id"];
    $sqll = "SELECT * FROM noi_that WHERE ma_noi_that = $id";
    $result2 = mysqli_query($conn,$sqll);
?>
<div class="title-form">
    <h1>SỬA SẢN PHẨM</h1>
</div>
<?php
    if (is_array($result2) || is_object($result2)) {
    foreach($result2 as $rows) {?>
<form id="updateProductForms"  method="post" enctype="multipart/form-data">
    <div class="form__input-update">
        <label id="labelfullName" class="form__floating-label" for="product_names">Tên sản phẩm</label><br>
        <input type="text" id="product_name" name="product_names" class="form__field" value="<?=$rows['ten_noi_that']?>">
        <input type="hidden" name="product_id" value="<?=$rows['ma_noi_that']?>">
    </div>
    <div class="form__input-update">
        <label id="labelfullName" class="form__floating-label" for="product_prices">Giá sản phẩm</label><br>
        <input type="text" id="product_prices" name="product_prices" class="form__field" value="<?=$rows['gia_noi_that']?>">
    </div>
    <div class="form__input-update">
        <label id="labelfullName" class="form__floating-label" for="product_quantitys">Tồn kho</label><br>
        <input type="text" id="product_quantitys" name="product_quantitys" class="form__field" value="<?=$rows['quantity']?>">
    </div>
    <div class="form__input-update">
        <label id="labelfullName" class="form__floating-label" for="login-customer[username]">Loại danh mục</label><br>
        <select id="select_category" name="product_cates">
            <?php
            $idx = $rows['ma_noi_that'];
            $sql = "SELECT * FROM `loai_noi_that`";
            $rs = mysqli_query($conn,$sql);
            $countcate = 0;
            foreach($rs as $row) { $countcate++?>
            <option value="<?=$row['ma_loai']?>"><p><?=$countcate?> - <?=$row['ten_loai']?></p></option>
            <?php } ?>
        </select>
    </div>
    <div class="form__input-update">
        <label id="labelfullName" class="form__floating-label" for="product_descs">Mô tả</label><br>
        <textarea name="product_descs" id="" cols="268" rows="10"><?=$rows['mo_ta']?></textarea>
    </div>
    <div class="form__input-update file">
    <input class="btn_action update" type="submit" value="Cập nhật" name="update" id="update">
    <h1 class="message_actionx"></h1>
    </div>
    <?php } }?>
</form>
</div>
  </body>
  <script src="../assets/js/admin.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../assets/lib/jquery.validate.min.js"></script>
  <script>
  $("#updateProductForms").validate({
    rules: {
        product_names: {
            required: true,
            minlength: 5,
        },
        product_prices: {
            required: true,
            number: true
        },
        product_quantitys: {
            required: true,
            number: true
        }
    },
    messages: {
        product_names: {
            required: "Bạn chưa nhập tên sản phẩm",
            minlength: "Tên sản phẩm phải có ít nhất 5 ký tự",
        },
        product_prices: {
            required: "Bạn chưa nhập giá sản phẩm",
            number: "Vui lòng nhập số từ 0-9"
        },
        product_quantitys: {
            required: "Bạn chưa nhập tồn kho",
            number: "Vui lòng nhập số từ 0-9"
        },
       
    },
    submitHandler: function(form) {
        $.ajax({
            type: "POST",
            url: "admin_action.php?admin_action=updateProduct",
            data: $(form).serializeArray(),
            success: function(response) {
                response = JSON.parse(response);
                if (response.status == 0) {
                    $('.message_actionx').html(response.message);
                }else {
                    // $('#updateProductForms').trigger("reset");
                    $('.message_actionx').html(response.message);
                    $('.message_actionx').addClass('show');
                    setTimeout(function(){
                    $('.message_actionx').removeClass('show');
                    }, 1000);
                }
            }
        });
    }
});
  </script>
</html>
<?php 
    // if (isset($_POST["update"])) {
    //     $ten_sp = $_POST["ten_sp"];
    //     $gia_sp = $_POST["gia_sp"];
    //     $quantity = $_POST["ton_kho"];
    //     $mota = $_POST["mota"];
    //     $id_loai = $_POST["id_loai"];
    //     $img_up_temp = $_FILES["fileToUpload"]["tmp_name"];
    //     $img_up = $_FILES["fileToUpload"]["name"];   
    //     if($img_up_temp != ""){
    //         move_uploaded_file($img_up_temp , "Img/$img_up");
    //         $img_up ="assets/img/".$img_up;
    //             $img_update="UPDATE `noi_that` SET `ma_loai`='$id_loai',`ten_noi_that`='$ten_sp',`gia_noi_that`='$gia_sp',`quantity`='$quantity',`hinh_noi_that`='$img_up',`mo_ta`='$mota' WHERE ma_noi_that = $id";
    //     }else{
    //         $img_update="UPDATE `noi_that` SET `ma_loai`='$id_loai',`ten_noi_that`='$ten_sp',`gia_noi_that`='$gia_sp',`quantity`='$quantity',`hinh_noi_that`='$img_up',`mo_ta`='$mota' WHERE ma_noi_that = $id";
    //     }
    //     if(mysqli_query($conn,$img_update))
    //         {
    //             echo "<script type='text/javascript'>alert('UPDATE THÀNH CÔNG!');document.location='admin_product.php'</script>";
    //         }
    //         else{
    //             echo "<script type='text/javascript'>alert('UPDATE KHÔNG THÀNH CÔNG!');document.location='admin_product.php'</script>";
    //         }
    //   }
?>
