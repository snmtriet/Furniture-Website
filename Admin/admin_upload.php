<?php include("../assets/body__admin/header_admin.php"); ?>
<div class="content">
<div class="title-form">
    <h1>THÊM SẢN PHẨM</h1>
</div>
<form action="../Admin/upload.php" id="uploadProductForm"  method="post" enctype="multipart/form-data">
    <div class="form__input-update">
        <label>Tên sản phẩm</label><br>
        <input type="text" name="product_name" class="form__field" >
    </div>
    <div class="form__input-update">
        <label>Giá sản phẩm</label><br>
        <input type="text" name="product_price" class="form__field" >
    </div>
    <div class="form__input-update">
        <label>Tồn kho</label><br>
        <input type="text" name="product_quantity" class="form__field" >
    </div>
    <div class="form__input-update">
        <label>Loại danh mục</label><br>
        <select id="select_category" name="product_cate">
            <?php
            require_once '../Database/db.php';
            $sql = "SELECT * FROM `loai_noi_that`";
            $rs = mysqli_query($conn,$sql);
            $countcate = 0;
            foreach($rs as $row) { $countcate++?>
            <option value="<?=$row['ma_loai']?>"><p><?=$countcate?> - <?=$row['ten_loai']?></p></option>
            <?php } ?>
        </select>
    </div>
    <div class="form__input-update rel">
        <label>Mô tả</label><br>
        <textarea name="product_desc" id="" cols="268" rows="10"></textarea>
    </div>
    <input class="btn_action" type="submit" value="Thêm" name="submit-up">
    <h1 class="message_actions"></h1>
</form>
</div>
  </body>
  <script src="../assets/js/admin.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../assets/lib/jquery.validate.min.js"></script>
  <script>
  $("#uploadProductForm").validate({
    rules: {
        product_name: {
            required: true,
            minlength: 5,
            remote: "admin_action.php?admin_action=checkProductname"
        },
        product_price: {
            required: true,
            number: true
        },
        product_quantity: {
            required: true,
            number: true
        }
    },
    messages: {
        product_name: {
            required: "Bạn chưa nhập tên sản phẩm",
            minlength: "Tên sản phẩm phải có ít nhất 5 ký tự",
            remote: "Tên sản phẩm đã tồn tại"
        },
        product_price: {
            required: "Bạn chưa nhập giá sản phẩm",
            number: "Vui lòng nhập số từ 0-9"
        },
        product_quantity: {
            required: "Bạn chưa nhập tồn kho",
            number: "Vui lòng nhập số từ 0-9"
        },
       
    },
    submitHandler: function(form) {
        // console.log($(form).serializeArray());
        $.ajax({
            type: "POST",
            url: "admin_action.php?admin_action=addProduct",
            data: $(form).serializeArray(),
            success: function(response) {
                response = JSON.parse(response);
                if (response.status == 0) {
                    $('.message_actions').html(response.message);
                }else {
                    $('#uploadProductForm').trigger("reset");
                    $('.message_actions').html(response.message);
                    $('.message_actions').addClass('show');
                    setTimeout(function(){
                    $('.message_actions').removeClass('show');
                    }, 1000);
                }
            }
        });
    }
});
  </script>
</html>
