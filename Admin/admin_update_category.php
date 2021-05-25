<?php include("../assets/body__admin/header_admin.php"); ?>
<div class="content">
<?php include("../Admin/content_category-update.php"); ?>
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

// validate form sửa danh mục
  $("#Updatecategoryform").validate({
    rules: {
        category_name: {
            required: true,
            minlength: 2,
        }
    },
    messages: {
        category_name: {
            required: "Bạn chưa nhập tên danh mục",
            minlength: "Tên danh mục phải có ít nhất 2 ký tự",
        }
    },
    submitHandler: function(form) {
        // console.log($(form).serializeArray());
        $.ajax({
            type: "POST",
            url: "admin_action.php?admin_action=updateCategory",
            data: $(form).serializeArray(),
            success: function(response) {
                response = JSON.parse(response); 
                if (response.status == 0) {
                    $('.message_action').html(response.message);
                }else {
                    $('#uploadProductForm').trigger("reset");
                    $('.message_action').html(response.message);
                    $('.message_action').addClass('show');
                    setTimeout(function(){
                    $('.message_action').removeClass('show');
                    }, 1000);
                }
            }
        });
    }
});
  </script>
</html>
