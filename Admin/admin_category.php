<?php include("../assets/body__admin/header_admin.php"); ?>
<div class="header_form-update" id="title_top">
    <div class="title-form">
        <h1>Danh mục</h1>
    </div>
    <form id="Addcategoryform" method="post">
        <div class="form__input-update">
            <label id="labelfullName" class="form__floating-label" for="login-customer[username]">Tên danh mục</label><br>
            <input type="text" name="category_name">
        </div>
        <div class="form__input-update">
            <label id="labelfullName" class="form__floating-label" for="login-customer[username]">Mô tả</label><br>
            <input type="text" name="category_desc">
        </div>
        <input id="addlibimg" class="btn_action" type="submit" value="Thêm" name="submit-upl">
        <h1 class="message_action"></h1>
    </form>
</div>
<div class="content">
<?php include("../Admin/content_category.php"); ?>  
</div>
  </body>
  <script src="../assets/js/admin.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../assets/lib/jquery.validate.min.js"></script>
  <script>
    //   xóa danh mục
   function deleteCategory(productID) {
        $.ajax({
        type: "POST",
        url: "admin_action.php?admin_action=deleteCategory",
        data: {"id": productID},
        success: function(response) {
        response = JSON.parse(response);
        if(response.status == 1) {
          $.get('content_category.php',function(proContentHTML){
                $('.content').html(proContentHTML);
            });
        }
        }
    });
}

// validate form thêm danh mục
  $("#Addcategoryform").validate({
    rules: {
        category_name: {
            required: true,
            minlength: 2,
            remote: "admin_action.php?admin_action=checkCategory"
        }
    },
    messages: {
        category_name: {
            required: "Bạn chưa nhập tên danh mục",
            minlength: "Tên danh mục phải có ít nhất 2 ký tự",
            remote: "Tên danh mục đã tồn tại"
        }
    },
    submitHandler: function(form) {
        // console.log($(form).serializeArray());
        $.ajax({
            type: "POST",
            url: "admin_action.php?admin_action=addCategory",
            data: $(form).serializeArray(),
            success: function(response) {
                response = JSON.parse(response); 
                if (response.status == 1) {
                    $('#Addcategoryform').trigger("reset");
                    $('.message_action').html(response.message);
                    $('.message_action').addClass('show');
                    setTimeout(function(){
                    $('.message_action').removeClass('show');
                    }, 1000);
                    $.get('content_category.php',function(categoryContentHTML){
                        $('.content').html(categoryContentHTML);
                    });
                }
            }
        });
    }
});
  </script>
</html>
