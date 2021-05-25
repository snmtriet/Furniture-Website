<?php include("../assets/body__admin/header_admin.php"); ?>
<body>
<div class="content">
<div class="admin__search-poduct">
    <input class="adminSearch-product" type="text" placeholder="Tìm kiếm sản phẩm...">
    <i class="fas fa-search"></i>
</div>
<?php include("../Admin/content_product.php"); ?>
</div>
</body>
  <script src="../assets/js/admin.js"></script>
  <script>
   function deleteProduct(productID) {
        $.ajax({
        type: "POST",
        url: "admin_action.php?admin_action=deleteProduct",
        data: {"id": productID},
        success: function(response) {
        response = JSON.parse(response);
        if(response.status == 1) {
          // alert(response.message);
          $.get('content_product.php',function(proContentHTML){
                $('.content').html(proContentHTML);
            });
        }
        }
    });
}
$('.adminSearch-product').keyup(function() {
    var txt = $(this).val();
    $.ajax({
        type: "POST",
        url: "admin_action.php?admin_action=adminSearchProduct",
        data: { nameProduct: txt },
        success: function(response) {
            $('table').html(response);
        }
    });
});
  </script>
</html>



